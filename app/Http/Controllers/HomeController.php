<?php
namespace App\Http\Controllers;
use App\Models\Post;
class HomeController extends Controller
{
    public function index(){
        $posts = Post::with('tags')->latest()->get();
        return view('home', compact('posts'));

    }
    public function create(){

        return view('create');
    }


}
