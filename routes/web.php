<?php

use Illuminate\Support\Arr;
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
            'id' => 1,
            'slug' => 'judul-1',
            'title' => 'Judul',
            'author' => 'Mohammad Daffa',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo
                debitis impedit similique
                accusamus dolorem velit ducimus esse, perspiciatis deserunt ab aperiam perferendis? Sit quisquam
                cupiditate exercitationem quasi, nemo vero?',
            'date' => '04 Juni 2025'
        ],
        [
            'id' => 2,
            'slug' => 'judul-2',
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

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-1',
            'title' => 'Judul 1',
            'author' => 'Mohammad Daffa',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo
                debitis impedit similique
                accusamus dolorem velit ducimus esse, perspiciatis deserunt ab aperiam perferendis? Sit quisquam
                cupiditate exercitationem quasi, nemo vero?',
            'date' => '04 Juni 2025'
        ],
        [
            'id' => 2,
            'slug' => 'judul-2',
            'title' => 'Judul 2',
            'author' => 'Mohammad Daffa',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo
                debitis impedit similique
                accusamus dolorem velit ducimus esse, perspiciatis deserunt ab aperiam perferendis? Sit quisquam
                cupiditate exercitationem quasi, nemo vero?',
            'date' => '04 Juni 2025'
        ],
    ];



    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    if (!$post) abort(404);

    return view('blog-detail', ['title' => 'Blog Detail', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
