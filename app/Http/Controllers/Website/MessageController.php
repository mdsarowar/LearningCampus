<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        return view('admin.website.message.manage',[
            'messages'=>Message::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.message.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Message::saveData($request);
        return redirect()->route('manage_message')->with('success','Message add successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.message.view',[
            'message'=>Message::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        return $id;
        return view('admin.website.message.edit',[
            'message'=>Message::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Message::updateData($request,$id);
        return redirect()->route('manage_message')->with('success','Message Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message=Message::find($id);
        if (file_exists($message->photo)){
            unlink($message->photo);
        }
        $message->delete();
        return redirect()->route('manage_message')->with('success','Message delete successfully');
    }
}
