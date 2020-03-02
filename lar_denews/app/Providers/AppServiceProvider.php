<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Tag;
use App\Post;
use App\User;
use App\Category;
use App\Setting;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // View::composer('test', function ($view) {
        //     $view->with('title', 'x');
        // });

        // View::composer('errors.404', function($view)
        // {
        //     $view->with('title', 'sdfsd');
        // });

        // Using Closure based composers...
        // View::composer('dashboard', function ($view) {
        //     //
        // });

        View::composer('*', function ($view) {
            $view
            // ->with('title', 'Error')
            ->with('menu_categories', Category::take(8)->get())
            ->with('first_4_cat', Category::take(4)->get())
    		->with('second_4_cat', Category::skip(4)->take(4)->get())

            ->with('recent_posts', Post::orderBy('id', 'desc')->take(4)->get())
            ->with('popular_posts', Post::orderBy('id', 'desc')->skip(4)->take(4)->get())
            ->with('comment_posts', Post::orderBy('id', 'desc')->skip(8)->take(4)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
