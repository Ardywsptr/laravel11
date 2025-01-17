<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// MENGGUNAKAN STATIC METHOD UNTUK DATA POST 'Post::all()'
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post){
    
    // $post = Post::find($post);

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user){
    
    return view('posts', [
        'title' => 'Article By : ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'John Doe',
        'title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

