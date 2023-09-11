<?php

namespace App\Http\Controllers\PromotionalModule;

use App\Http\Controllers\Controller;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PromotionalSMSController extends Controller
{
    public function getInfo()
    {
        $groupList = DB::select('SELECT * FROM sms_groups');
        $groupArray = json_decode(json_encode($groupList), true);

        return view('admin.PromotionalModule.custom_sms', ['groupList' => $groupArray]);
    }

    /*  ======================================================  */

    public function sendSMS_Student(Request $request)
    {
        $sms_type = $request->sms_type;
        $student_id = $request->student_id;
        $contact_no = $request->contact_no_student;
        $sms_body = $request->sms_body_student;

        $send_sms = $this->sendSms($contact_no, $sms_body);

        if (
            isset($send_sms['Data'][0]['MessageErrorDescription'])
            && $send_sms['Data'][0]['MessageErrorDescription'] === 'Success'
        ) {
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('GMT+6'));
            $time_string = $time->format('d/m/Y, h:i a');

            DB::insert('insert into sms_students_details (student_id, contact_no, sms_body, created_at) values (?,?,?,?)', [
                $student_id, $contact_no, $sms_body, $time_string
            ]);

            DB::insert('insert into sms_details_reports (sms_type, contact_no, sms_body, created_at, status) values (?,?,?,?,?)', [
                $sms_type, $contact_no, $sms_body, $time_string, 'success'
            ]);

            return redirect()->back()->with('success', 'SMS Sent Successfully');
        } else {
            return redirect()->back()->with('error', 'Error: ' . $send_sms['Data'][0]['MessageErrorDescription']);
        }
    }

    public function sendSMS_Employee(Request $request)
    {
        $sms_type = $request->sms_type;
        $employee_id = $request->employee_id;
        $contact_no = $request->contact_no_employee;
        $sms_body = $request->sms_body_employee;

        $send_sms = $this->sendSms($contact_no, $sms_body);

        if (
            isset($send_sms['Data'][0]['MessageErrorDescription'])
            && $send_sms['Data'][0]['MessageErrorDescription'] === 'Success'
        ) {
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('GMT+6'));
            $time_string = $time->format('d/m/Y, h:i a');

            DB::insert('insert into sms_employees_details (employee_id, contact_no, sms_body, created_at) values (?,?,?,?)', [
                $employee_id, $contact_no, $sms_body, $time_string
            ]);

            DB::insert('insert into sms_details_reports (sms_type, contact_no, sms_body, created_at, status) values (?,?,?,?,?)', [
                $sms_type, $contact_no, $sms_body, $time_string, 'success'
            ]);

            return redirect()->back()->with('success', 'SMS Sent Successfully');
        } else {
            return redirect()->back()->with('error', 'Error: ' . $send_sms['Data'][0]['MessageErrorDescription']);
        }
    }

    public function sendSMS_Custom(Request $request)
    {
        $sms_type = $request->sms_type;
        $contact_no = $request->contact_no_custom;
        $sms_body = $request->sms_body_custom;

        $send_sms = $this->sendSms($contact_no, $sms_body);

        if (
            isset($send_sms['Data'][0]['MessageErrorDescription'])
            && $send_sms['Data'][0]['MessageErrorDescription'] === 'Success'
        ) {
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('GMT+6'));
            $time_string = $time->format('d/m/Y, h:i a');

            DB::insert('insert into sms_custom_details (contact_no, sms_body, created_at) values (?,?,?)', [
                $contact_no, $sms_body, $time_string
            ]);

            DB::insert('insert into sms_details_reports (sms_type, contact_no, sms_body, created_at, status) values (?,?,?,?,?)', [
                $sms_type, $contact_no, $sms_body, $time_string, 'success'
            ]);

            return redirect()->back()->with('success', 'SMS Sent Successfully');
        } else {
            return redirect()->back()->with('error', 'Error: ' . $send_sms['Data'][0]['MessageErrorDescription']);
        }
    }

    public function sendSMS_Group(Request $request)
    {
        $groupID = $request->sms_group;
        $sms_type = $request->sms_type;
        $sms_body = $request->sms_body_custom_group;

        $getContacts = DB::select('SELECT contact_no FROM sms_contacts WHERE group_id = ? AND contact_status = ?', [$groupID, 1]);
        $contactsArray = json_decode(json_encode($getContacts), true);

        foreach ($contactsArray as $contact) {
            $contact_no = $contact['contact_no'];

            $send_sms_response = $this->sendSms($contact_no, $sms_body);

            if (
                isset($send_sms_response['Data'][0]['MessageErrorDescription'])
                && $send_sms_response['Data'][0]['MessageErrorDescription'] === 'Success'
            ) {
                $time = new DateTime();
                $time->setTimezone(new DateTimeZone('GMT+6'));
                $time_string = $time->format('d/m/Y, h:i a');

                DB::insert('insert into sms_custom_details (contact_no, sms_body, created_at) values (?,?,?)', [
                    $contact_no, $sms_body, $time_string
                ]);

                DB::insert('insert into sms_details_reports (sms_type, contact_no, sms_body, created_at, status) values (?,?,?,?,?)', [
                    $sms_type, $contact_no, $sms_body, $time_string, 'success'
                ]);
            } else {
                $time = new DateTime();
                $time->setTimezone(new DateTimeZone('GMT+6'));
                $time_string = $time->format('d/m/Y, h:i a');

                DB::insert('insert into sms_custom_details (contact_no, sms_body, created_at) values (?,?,?)', [
                    $contact_no, $sms_body, $time_string
                ]);

                DB::insert('insert into sms_details_reports (sms_type, contact_no, sms_body, created_at, status) values (?,?,?,?,?)', [
                    $sms_type, $contact_no, $sms_body, $time_string, 'error'
                ]);
            }
        }

        return redirect()->back()->with('success', 'SMS Sent to Group Successfully');
    }


    /*  ======================================================  */

    public function sendSms($contact_no, $sms_body)
    {
        $url = 'http://smsp2.durjoysoft.com/api/v2/SendSMS';
        $apiKey = '4AQkrR7nNH3x7OJAVAjp8zRX5mAfKq6/t09cH+zec1E=';
        $clientId = '815b6d25-3139-41fb-a6c3-40075d832056';
        $senderId = '8809617611841';
        $mobileNumbers = "88" . $contact_no;
        $message = $sms_body;

        $queryParams = http_build_query([
            'ApiKey' => $apiKey,
            'ClientId' => $clientId,
            'SenderId' => $senderId,
            'Message' => $message,
            'MobileNumbers' => $mobileNumbers,
            'IsUnicode' => false,
            'IsFlash' => false,
        ]);

        $fullUrl = $url . '?' . $queryParams;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $fullUrl,
            CURLOPT_RETURNTRANSFER => true,
        ));

        $response = curl_exec($curl);

        if (
            $response === false
        ) {
            $error = curl_error($curl);
            Log::error('API request failed: ' . $error);
            return response()->json(['error' => 'API request failed'], 500);
        }

        curl_close($curl);

        return json_decode($response, true);
    }

    /*  ======================================================  */

    public function smsDetails()
    {
        return view('admin.PromotionalModule.sms_details');
    }

    public function getDetailsReport(Request $request)
    {
        $sms_type = $request->sms_type;
        $start_date_input = $request->start_date;
        $end_date_input = $request->end_date;
        $contact_no = $request->phoneNumber;

        /* Building the query */
        $query = "SELECT * FROM sms_details_reports WHERE 1=1";

        if ($sms_type !== 'all') {
            $query .= " AND sms_type = '$sms_type'";
        }
        if (!empty($contact_no)) {
            $query .= " AND contact_no = '$contact_no'";
        }

        if (!empty($start_date_input)) {
            $time = new DateTime($start_date_input);
            $start_date = $time->format('d/m/Y');
            $query .= " AND STR_TO_DATE(created_at, '%d/%m/%Y') >= STR_TO_DATE('$start_date', '%d/%m/%Y')";
            $start_date_formatted = $time->format('j F Y');
        } else {
            $start_date_formatted = "";
        }

        if (!empty($end_date_input)) {
            $time = new DateTime($end_date_input);
            $end_date = $time->format('d/m/Y');
            $query .= " AND STR_TO_DATE(created_at, '%d/%m/%Y') <= STR_TO_DATE('$end_date', '%d/%m/%Y')";
            $end_date_formatted = $time->format('j F Y');
        } else {
            $end_date_formatted  = "";
        }

        $selectedData = DB::select($query);
        $dataCount = count($selectedData);

        return response()->json([
            'data' => $selectedData,
            'count' => $dataCount,
            'sms_type' => ucfirst($sms_type),
            'start_date' => $start_date_formatted,
            'end_date' => $end_date_formatted,
        ]);
    }
}
