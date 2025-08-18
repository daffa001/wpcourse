<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    $posts = [
        [
            'title' => 'Judul',
            'author' => 'Mohammad Daffa',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo
                debitis impedit similique
                accusamus dolorem velit ducimus esse, perspiciatis deserunt ab aperiam perferendis? Sit quisquam
                cupiditate exercitationem quasi, nemo vero?',
            'date' => '04 Juni 2025'
        ],
        [
            'title' => 'Judul 2',
            'author' => 'Mohammad Daffa',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo
                debitis impedit similique
                accusamus dolorem velit ducimus esse, perspiciatis deserunt ab aperiam perferendis? Sit quisquam
                cupiditate exercitationem quasi, nemo vero?',
            'date' => '04 Juni 2025'
        ],
    ];
    return view('blog', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
