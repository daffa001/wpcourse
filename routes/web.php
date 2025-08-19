<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    $posts = Post::all();

    return view('blog', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = Post::all();



    $post = Post::find($slug);


    return view('blog-detail', ['title' => 'Blog Detail', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
