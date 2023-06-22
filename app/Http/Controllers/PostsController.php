<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
class PostsController extends Controller
{
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        $tags = Tag::all();
        return view('posts.create', compact('tags'));
    }

    public function store(){

        $post = new Post($this->validateAttributes());
        $post->user_id = 1;
        $post->save();
        $post->tags()->attach(request('tags'));

        return redirect('/home');
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }
    public function update(Post $post){
        $post->update($this->validateAttributes());
        return redirect(redirect(route('posts.show', $post)));
    }
    public function category(Category $category){
        $posts = $category->posts;
        return view('posts.category', compact('posts'));
    }

    private function validateAttributes(){
        return request()->validate( [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
            ]);
    }

}
