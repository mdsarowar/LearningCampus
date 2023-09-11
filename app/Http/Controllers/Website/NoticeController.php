<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AllNotice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function index()
    {
        return view('admin.website.notice.manage',[
            'notices'=>AllNotice::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.notice.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AllNotice::saveData($request);
        return redirect()->route('manage_notice')->with('success','Notice add successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.notice.view',[
            'notice'=>AllNotice::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.notice.edit',[
            'notice'=>AllNotice::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        AllNotice::updateData($request,$id);
        return redirect()->route('manage_notice')->with('success','Notice Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice=AllNotice::find($id);
        if (file_exists($notice->file)){
            unlink($notice->file);
        }
        $notice->delete();
        return redirect()->route('manage_notice')->with('success','Notice delete successfully');
    }
}
