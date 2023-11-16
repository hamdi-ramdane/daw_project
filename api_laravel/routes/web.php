<?php

use Illuminate\Support\Facades\Route;

$path = 'App\Http\Controllers\\';

Route::get("/",function(){return view('index');});