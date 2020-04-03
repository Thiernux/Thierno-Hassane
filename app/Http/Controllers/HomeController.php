<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()

    {
    	$posts = \App\Post::orderBy('post_date', 'desc')->take(3)->get(); 
    	return view('pages/home', array(
           'posts' => $posts
        ));
    }

}
