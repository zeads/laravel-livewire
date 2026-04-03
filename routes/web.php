<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::livewire('/post/create', 'pages::post.create');
Route::livewire('/post/create', 'pages::post.create');
Route::livewire('/counter', 'counter');
Route::livewire('/users', 'users');
