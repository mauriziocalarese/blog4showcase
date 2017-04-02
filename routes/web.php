<?php

Route::get('/', 'PostController@index')->name('home');


Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentController@store');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');


Route::get('/logout', 'SessionsController@destroy');


Route::get('/posts/tags/{tag}', 'TagsController@index'); 


//Route::get('/tasks', 'TasksController@index');

//Route::get('/tasks/{task}', 'TasksController@show');


//Route::get('/', function () {
//
//    $name = 'Kyo';
//    return view('welcome', compact('name'));
//
//});
//
//Route::get('/about', function(){
//
//   return view('about');
//
//});