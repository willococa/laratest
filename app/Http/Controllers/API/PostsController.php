<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{

    public function index(){

         $posts =Post::all();
         return response()->json([
            'success' => true,
            'posts' => $posts,
        ]);
    }

    public function store(){
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'thumbnail' => 'required|file|image',
            'category_id' => 'required'
            ]);
        $attributes['user_id'] = auth()->user()->id;
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $post = Post::create($attributes);
        return response()->json([
            'success' => true,
            'post' => $post,
            'message' => 'Post created successfully'
            ]);
    }
}
