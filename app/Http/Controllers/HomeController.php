<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()

    {	// showing the 3 news articles or posts to the home page
    	$posts = \App\Post::orderBy('post_date', 'desc')->take(3)->get();
    	return view('pages/home', array(
           'posts' => $posts
        ));

    }

}
