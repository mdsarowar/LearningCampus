<?php

namespace App\Http\Controllers\PromotionalModule;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionalContactsController extends Controller
{
    public function createGroup(Request $request)
    {
        $group_name = $request->group_name;
        $group_status = $request->group_status;

        #if group name contain space character then replacing it with hyphen
        if (strpos($group_name, ' ') !== false) {
            $group_name_tmp = str_replace(' ', '-', $group_name);
        }

        $time = new DateTime();
        $time_string = $time->format('YmdHis');

        if ($request->hasFile('group_img')) {
            $image_name = $group_name_tmp . '_' . $time_string;
            $request->file('group_img')->move('assets/Uploads/SMS_Groups/', $image_name);
            $image_url = url('assets/Uploads/SMS_Groups/' . $image_name);

            $insertGroupData = DB::insert("INSERT INTO sms_groups (group_name, group_img, group_status) VALUES (?,?,?)", [$group_name, $image_url, $group_status]);

            if ($insertGroupData) {
                return redirect(route('my.groups'))->with('success', 'Group Created Successfully');
            } else {
                return redirect(route('my.groups'))->with('error', 'Failed to create group');
            }
        }
    }

    public function getGroupList()
    {
        $group_list = DB::select('SELECT id, group_name FROM sms_groups');
        $group_list_array = json_decode(json_encode($group_list), true);
        return view('admin.PromotionalModule.my_contact', ['groupList' => $group_list_array]);
    }

    public function importGroups()
    {
        $group_list = DB::select('SELECT id, group_name FROM sms_groups');
        $group_list_array = json_decode(json_encode($group_list), true);
        return view('admin.PromotionalModule.import_contact', ['groupList' => $group_list_array]);
    }

    public function importContacts(Request $request)
    {
        $group_id = $request->sms_group;
        $status = $request->status;
        $importedFile = $request->file('contactsFile');

        if ($importedFile) {
            $fileContent = file_get_contents($importedFile->path());
            $numbers = explode("\n", $fileContent);

            // Remove \r characters from each number
            $numbersArray = array_map(function ($number) {
                return str_replace("\r", "", $number);
            }, $numbers);

            foreach ($numbersArray as $number) {
                // insert each contacts to database
                $insertContactData = DB::insert(
                    'insert into sms_contacts (group_id, contact_no, contact_status) 
                    values (?, ?, ?)',
                    [$group_id, $number, $status]
                );
            }

            if ($insertContactData) {
                return redirect(route('import.contact'))->with('success', 'Contact Imported Successfully');
            } else {
                return redirect(route('import.contact'))->with('error', 'Failed to import contacts');
            }

        } else {
            return redirect(route('import.contact'))->with('error', 'Please Upload .txt File');
        }
    }

    public function createContact(Request $request)
    {
        $group_id = $request->group_id;
        $contact_no = $request->contact_no;
        $contact_status = $request->status;

        $insertContactData = DB::insert(
            'insert into sms_contacts (group_id, contact_no, contact_status) 
            values (?, ?, ?)',
            [$group_id, $contact_no, $contact_status]
        );

        if ($insertContactData) {
            return redirect(route('my.contacts'))->with('success', 'Contact Created Successfully');
        } else {
            return redirect(route('my.contacts'))->with('error', 'Failed to create contact');
        }
    }
}
