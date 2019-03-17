<?php

// Pages

Route::get('/', 'PagesController@index');

// Auth

Route::get('/register', 'AuthController@create');
Route::post('/register', 'AuthController@store');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@authenticate');
Route::get('/logout', 'AuthController@logout');

// Blogs

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

// Blog comments

Route::post('/posts/{post}/comments', 'CommentsController@store');
