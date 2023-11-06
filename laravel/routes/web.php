<?php

use Illuminate\Support\Facades\Route;

$cntls = 'App\Http\Controllers\\';

Route::get('/', $cntls.'HomeController@index');

Route::get('/quiz', $cntls.'QuizController@index');

Route::get('/login', $cntls.'LoginController@index');

Route::get('/register', $cntls.'RegisterController@index');

Route::get('/profile', $cntls.'ProfileController@index');

Route::get('/admin', $cntls.'AdminController@index');