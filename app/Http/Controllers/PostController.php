<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Schema\Blueprint;

class PostController extends Controller
{
    public function show($post_name) {
   $posts = \App\Post::findOrFail($post_name); //get first post with post_nam == $post_name
  
   return view('pages/posts', compact('posts'));
}


    public function showList()
    {
    	$posts = \App\Post::all(); //get all posts

    	return view('pages/listPosts',array(
           'posts' => $posts));
    }

    
  
}
