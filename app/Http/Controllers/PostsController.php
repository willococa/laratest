<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        Post::create($this->validate(request(), [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            ]));
        return redirect('/home');
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }
    public function update(Post $post){
        $post->update($this->validateAttributes());
        return redirect('/posts/'.$post->id);
    }

    private function validateAttributes(){
        return request()->validate( [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            ]);
    }

}
