<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Category;
use App\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //

    public function index()
    {

        return view('index')
            ->with('title', 'DeNews &mdash; Latest News')
            
    		->with('latest_post', Post::orderBy('id', 'desc')->first())
    		->with('latest_four_posts', Post::orderBy('id', 'desc')->skip(1)->take(4)->get())
    		->with('top_stories_post', Post::orderBy('id', 'desc')->skip(5)->take(1)->first())
    		->with('top_stories_posts', Post::orderBy('id', 'desc')->skip(6)->take(2)->get())
    		->with('trending_posts', Post::orderBy('id', 'desc')->skip(8)->take(6)->get())
            ->with('random_posts', Post::orderBy('id', 'desc')->skip(14)->take(8)->get())
            
            ->with('food', Category::find(9));
    }

    public function singlePost($slug)
    {
    	$post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')
            ->with('title', $post->title . ' &mdash; Denews')
            
            ->with('post', $post)
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($prev_id));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('category')
            ->with('title', $category->name . ' News &mdash; Denews')
            ->with('category', $category);
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();

        return view('tag')
            ->with('title', 'Tags')
            ->with('tags', $tag)
            ;
    }

    public function search(Request $request)
    {
        $search = $request->all();
        $search = $search['s'];
        
        $posts = Post::where('title', 'like', '%' . $search . '%')->paginate(10);
        return view('results')
            ->with('title', 'You searched for ' . $search . ' &mdash; Denews')
            ->with('search', $search)
            ->with('posts', $posts);
    }

    public function user($slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('user')
            ->with('title', $user->name . ' Articles &mdash; Denews')
            ->with('user', $user);
    }

    public function contact()
    {
        return view('contact')
            ->with('title', 'Contact Us &mdash; DeNews');
    }
    
    public function about()
    {
        return view('about')
            ->with('title', 'About Us &mdash; DeNews')
            ->with('users', User::all());
    }
    
    public function team()
    {
        return view('team')
            ->with('title', 'Our Team &mdash; DeNews')
            ->with('users', User::all());;
    }
}