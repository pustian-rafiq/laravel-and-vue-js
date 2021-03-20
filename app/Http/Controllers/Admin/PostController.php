<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function all_post(){
    	$post = Post::with('user','category')->get();
    	return response()->json($post);
    }
      public function all_category(){
    	$post = Category::with('posts')->get();
    	return response()->json($post);
    }
}
