<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        return view('admin.website.event.manage',[
            'events'=>Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.event.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request;
        Event::saveData($request);
        return redirect()->route('manage_event')->with('success','Event add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.event.view',[
            'event'=>Event::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.event.edit',[
            'event'=>Event::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Event::updateData($request,$id);
        return redirect()->route('manage_event')->with('success','Event Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event=Event::find($id);
        $event->delete();
        return redirect()->route('manage_event')->with('success','Event delete successfully');
    }
}
