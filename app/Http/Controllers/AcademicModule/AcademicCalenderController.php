<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class AcademicCalenderController extends Controller
{
    public function academicCalender()
    {
        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking){
            $events[] = [
                'id' => $booking->id,
                'title' => $booking->event_name,
                'start' => $booking->starting_date,
                'end' => $booking->end_date,
            ];
        }  
        return view('admin.AcademicModule.academiccalender', [
            'events' => $events,
            'bookings' => $bookings
        ]);
    }

    function academicCalenderStore(Request $request){
        $id = Event::insertGetId([
            'event_name'=>$request->event_name,
            'starting_date'=>$request->starting_date,
            'end_date'=>$request->end_date,
        ]);
        return back();
    }

    function eventdelete($event_details_id){
        Event::find($event_details_id)->delete();
        return back();
    }

}
