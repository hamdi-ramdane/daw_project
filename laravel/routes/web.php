<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/admin', function () {
    return view('admin');
});