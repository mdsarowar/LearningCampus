<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Menue;
use App\Models\Submenus;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{


    public function index()
    {
        return view('admin.website.sub_menu.manage',[
            'submenus'=>Submenus::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.sub_menu.add',[
            'menus'=>Menue::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Submenus::saveData($request);
        return redirect()->route('manage_submenu')->with('success','Sub menu add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.sub_menu.view',[
            'submenu'=>Submenus::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.sub_menu.edit',[
            'submenu'=>Submenus::find($id),
            'menus'=>Menue::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Submenus::updateData($request,$id);
        return redirect()->route('manage_submenu')->with('success','Sub Menu Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu=Submenus::find($id);
        $menu->delete();
        return redirect()->route('manage_submenu')->with('success','Sub Menu Delete successfully');
    }
}
