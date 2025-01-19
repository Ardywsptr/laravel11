<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// MENGGUNAKAN STATIC METHOD UNTUK DATA POST 'Post::all()'
Route::get('/posts', function () {
    //! lazy loading N+1 problem
    $posts = Post::all();
    //? PARENT MODEL -> Eager Loading manual
    // $posts = Post::with('category', 'author')->get();

    return view('posts', [
        'title' => 'Blog Page',
        'posts' => $posts
    ]);
});

//! Tidak perlu menggunakan eager loading manual karena tidak melakukan looping
Route::get('/posts/{post:slug}', function (Post $post){
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user){
    //! lazy loading N+1 problem
    $posts = $user->posts;
    //? CHILD MODEL -> Lazy Eager Loading manual
    // $posts = $user->posts->load('category', 'author');

    return view('posts', [
        'title' => count($user->posts) . ' Article By : ' . $user->name,
        'posts' => $posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    //! lazy loading N+1 problem
    $posts = $category->posts;
    //? CHILD MODEL -> Lazy Eager Loading manual
    // $posts = $category->posts->load('category', 'author');
    
    return view('posts', [
        'title' => 'Category : ' . $category->name,
        'posts' => $posts
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

