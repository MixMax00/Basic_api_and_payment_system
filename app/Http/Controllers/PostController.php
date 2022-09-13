<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

    	$posts = Post::all();
    	return view('Frontend.Posts.post', compact('posts'));
    }

    public function show($id){
    	$single_post = Post::find($id);
    	return view('Frontend.Posts.single', compact('single_post'));
    }
}
