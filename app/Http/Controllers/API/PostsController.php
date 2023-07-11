<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index(){
         return Post::all();
    }

    public function store(){
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'thumbnail' => 'required',
            'category_id' => 'required'
            ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
    }
}
