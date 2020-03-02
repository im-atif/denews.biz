<?php

namespace App\Http\Controllers;


use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
            ->with('published_posts', Post::all()->count())
            ->with('trashed_posts', Post::onlyTrashed()->get()->count())
            ->with('total_users', User::all()->count())
            ->with('total_categories', Category::all()->count());
    }
}
