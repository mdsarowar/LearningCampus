<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Menue;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        return view('admin.website.menu.manage',[
            'menus'=>Menue::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.menu.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Menue::saveData($request);
        return redirect()->route('manage_menu')->with('success','Menu add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.menu.view',[
            'menu'=>Menue::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.menu.edit',[
            'menu'=>Menue::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Menue::updateData($request,$id);
        return redirect()->route('manage_menu')->with('success','Menu Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu=Menue::find($id);
        $menu->delete();
        return redirect()->route('manage_menu')->with('success','Menu Delete successfully');
    }
}
