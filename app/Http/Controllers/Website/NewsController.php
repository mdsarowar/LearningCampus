<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('admin.website.news.manage',[
            'newses'=>News::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.news.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        News::saveData($request);
        return redirect()->route('manage_news')->with('success','News add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.news.view',[
            'news'=>News::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.news.edit',[
            'news'=>News::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        News::updateData($request,$id);
        return redirect()->route('manage_news')->with('success','News Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news=News::find($id);
        if (file_exists($news->image)){
            unlink($news->image);
        }
        $news->delete();
        return redirect()->route('manage_news')->with('success','News delete successfully');
    }
}
