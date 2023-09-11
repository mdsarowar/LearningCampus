<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\BreakingNews;
use Illuminate\Http\Request;

class BreakingNewsController extends Controller
{

    public function index()
    {
        return view('admin.website.breaking_news.manage',[
            'newses'=>BreakingNews::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.breaking_news.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BreakingNews::saveData($request);
        return redirect()->route('manage_breaking_news')->with('success','Breaking News add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.breaking_news.view',[
            'news'=>BreakingNews::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.breaking_news.edit',[
            'news'=>BreakingNews::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BreakingNews::updateData($request,$id);
        return redirect()->route('manage_breaking_news')->with('success','Breaking News Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news=BreakingNews::find($id);
        $news->delete();
        return redirect()->route('manage_breaking_news')->with('success','Breaking News delete successfully');
    }
}
