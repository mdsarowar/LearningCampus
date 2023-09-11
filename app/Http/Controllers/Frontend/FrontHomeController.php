<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddContent;
use App\Models\AllNotice;
use App\Models\BreakingNews;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index(){
        return view('frontend.home.home');
    }

    public function front_breaking_news(){
        return view('frontend.breaking_news.breaking_news',[
            'breakings'=>News::take(15)->latest()->get(),
        ]);
    }

    public function front_content(){
        return view('frontend.content.content',[
            'contents'=>AddContent::take(15)->latest()->get(),
        ]);

    }

    public function album_event(string $id){
        return view('frontend.album.event',[
            'events'=>Event::take(6)->latest()->get(),
        ]);
    }

    public function album_photo(string $id){
        return view('frontend.album.photo',[
            'gallerys'=>Gallery::where('type','photo')->take(6)->latest()->get(),
        ]);
    }

    public function album_video(string $id){
        return view('frontend.album.video',[
            'videos'=>Gallery::where('type','video')->take(4)->latest()->get(),
        ]);
    }

    public function notice(){
        return view('frontend.notice.notice',[
            'notices'=>AllNotice::take(10)->latest()->get(),
        ]);
    }

    public function about(){
        return view('frontend.about_us.about');
    }
}
