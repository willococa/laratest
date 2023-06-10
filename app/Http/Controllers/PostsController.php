<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $this->validate(request(), [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            ]);
        $post = new Post;
        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body = request('body');
        $post->save();
        return redirect('/home');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update($id){
        $this->validate(request(), [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            ]);
        $post = Post::find($id);
        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body = request('body');
        $post->save();
        return redirect('/posts/'.$id);
    }

}
