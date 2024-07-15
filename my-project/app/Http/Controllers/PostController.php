<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all(); // all files from Post
        //dd($posts);// to debug
        return view("posts",compact("posts")); //first posts is view post.blade and second is the varibale
    }
}
