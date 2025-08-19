<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post
{
    public static function all()
    {
        return
            [
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
    }

    public static function find($slug)
    {
        return Arr::first(static::all(),  fn($post) => $post['slug'] == $slug) ?? abort(404);;
    }
}
