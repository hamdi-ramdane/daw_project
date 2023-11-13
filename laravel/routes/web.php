<?php

use Illuminate\Support\Facades\Route;

$cntls = 'App\Http\Controllers\\';

Route::get('/', $cntls.'HomeController@index');

Route::get('/auth', $cntls.'LoginController@index');
Route::get('/auth/register', $cntls.'RegisterController@index');

Route::get('/quiz', $cntls.'QuizController@index');
Route::get('/quiz/addiction', $cntls.'QuizController@index');
Route::get('/quiz/depression', $cntls.'QuizController@index');
Route::get('/quiz/adhd', $cntls.'QuizController@index');
Route::get('/quiz/insomnia', $cntls.'QuizController@index');

Route::get('/profile', $cntls.'ProfileController@index');

Route::get('/admin', $cntls.'AdminController@index');

// Post Routes ============================================

Route::post('/auth',$cntls.'LoginController@check');
Route::post('/auth/register',$cntls.'RegisterController@store');