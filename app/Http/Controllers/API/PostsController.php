<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index(){
         return response()->json([
            'posts' => [
                [ 'title' => 'Post 1'],
                [ 'title' => 'Post 2'],
                [ 'title' => 'Post 3'] ]], 200);
    } 
}
