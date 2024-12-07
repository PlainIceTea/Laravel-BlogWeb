<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;





Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'AboutPage']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});


Route::get('/posts', function () {
    return view('posts', [
        'title' => 'blogPage',
        'posts' => Post::all()
    ]);
});



Route::get('posts/{post}', function (Post $post) {

    return view('post', ['title' => 'Article', 'post' => $post]);
});

Route::get('authors/{user}', function (User $user) {

    return view('posts', ['title' => 'Article by' . $user->name, 'posts' => $user->posts]);
});
