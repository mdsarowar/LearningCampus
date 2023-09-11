<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\BoardResult;
use Illuminate\Http\Request;

class BoardResultController extends Controller
{

    public function index()
    {
        return view('admin.website.board_result.manage',[
            'results'=>BoardResult::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.board_result.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BoardResult::saveData($request);
        return redirect()->route('manage_board_result')->with('success','Board Result add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.board_result.view',[
            'result'=>BoardResult::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.board_result.edit',[
            'result'=>BoardResult::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BoardResult::updateData($request,$id);
        return redirect()->route('manage_board_result')->with('success','Board Result Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $result=BoardResult::find($id);
        $result->delete();
        return redirect()->route('manage_board_result')->with('success','Board Result delete successfully');
    }
}
