<?php

use Illuminate\Support\Arr;
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

Route::get('/posts/{slug}', function ($slug){
    // dd($slug);
    
    $post = Arr::first(Post::all(), function($post) use($slug){
        return $post['slug'] == $slug;
    });
    // dd($post);

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
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

