<?php

namespace App\Providers;

use App\Models\Album;
use App\Models\SlideShow;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.home.home',function($view){
            $view->with('slide_images',SlideShow::take(5)->get());
        });
        View::composer('frontend.includes.menu',function($view){
            $view->with('albums',Album::take(6)->get());
        });
//        View::composer('frontend.includes.menu',function($view){
//            $view->with('albums',Album::take(8)->get());
//        });
//        View::composer('frontend.includes.menu',function($view){
//            $view->with('albums',Album::take(8)->get());
//        });
    }
}
