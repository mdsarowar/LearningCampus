<?php

namespace App\Http\Controllers\GlobalSettingsModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GlobalSettingsModule\AcademicHoliday;
use Illuminate\Support\Facades\DB;

class AcademicHolidayController extends Controller
{
    public function academicHoliday()
    {
        $holidaysData = DB::select('select * from academic_holidays');
        $holidaysArray = json_decode(json_encode($holidaysData), true);
        return view('admin.GlobalSettingsModule.academic_holiday', ['holidaysData' => $holidaysArray]);
    }
    public function addAcademicHoliday()
    {
        return view('admin.GlobalSettingsModule.add_academic_holiday');
    }

    public function insertAcademicHoliday(Request $request)
    {
        // $validator =   $request->validate([
        //     'type' => 'required',
        //     'title' => 'required',
        //     'status' => 'required'

        // ]);
        $academic_holidays = new AcademicHoliday();
        $academic_holidays->type = $request->type;
        $academic_holidays->title = $request->input('title');
        $academic_holidays->status = $request->input('status');
        $academic_holidays->save();
        return redirect()->route('academic_holiday')->with('success', 'Academic Holiday Insert Successfully');
    }

    
    public function viewAcademicHoliday (Request $request)
    {
        $id = $request->id;

        $academic_holidays = DB::select('SELECT * FROM academic_holidays WHERE id = ?', [$id]);
        $holidayArray = json_decode(json_encode($academic_holidays), true);

        return view('admin.GlobalSettingsModule.view_academic_holiday', ['academic_holidays' => $holidayArray]);
    }

    public function editAcademicHoliday(Request $request)
    {
        $id = $request->id;

        $academic_holidays = DB::select('SELECT * FROM academic_holidays WHERE id = ?', [$id]);
        $holidayArray = json_decode(json_encode($academic_holidays), true);

        return view('admin.GlobalSettingsModule.edit_academic_holiday', ['academic_holidays' => $holidayArray]);
    }

    public function updateAcademicHoliday(Request $request)
    {

        $id = $request->id;
        
        $type = $request->type ?? $request->current_type;
        $title = $request->title ?? $request->current_title;
        $status = $request->status ?? $request->current_status;

        $updateData = [
            'type' => $type,
            'title' => $title,
            'status' => $status,
        ];

        $numUpdated = DB::table('academic_holidays')
        ->where('id', $id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Academic Holiday updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update Academic Holiday');
        }
    }


    public function deleteAcademicHoliday(Request $request)
    {
        $id = $request->label_id;

        $query = DB::table('academic_holidays')->where('id', $id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Academic Holiday deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete Academic Holiday');
        }
    }


    public function academicHolidaySearch(Request $request)
    {
        $title = $request->input('title');
        $type = $request->input('type');
        $status = $request->input('status');

        $query = "SELECT * FROM academic_holidays WHERE 1=1";

        if ($type !== 'all') {
            $query .= " AND type = '$type'";
        }

        if (!empty($title)) {
            $query .= " AND title = '$title'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }
    
    
}
