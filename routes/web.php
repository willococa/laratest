<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', function () {
    $posts = App\Models\Post::latest()->get();
    return view('contact', compact('posts'));
 })->name('contact');
 Route::get('/about', function () {
    return view('about');
    })->name('about');
 Route::get('/posts/create', [PostsController::class, 'create']);
 Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
 Route::post('/posts', [PostsController::class, 'store']);
 Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
 Route::put('/posts/{post}', [PostsController::class, 'update']);
 Route::get('category/{category:slug}', [PostsController::class, 'category'])->name('category.posts');

Route::get('/admin/home', function () {
    return view('admin.home');
} )->name('admin.home');