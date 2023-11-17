<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$path = "App\Http\Controllers\\";

Route::get("/data/{table}",$path."ApiController@data");

Route::post("/login",$path."UserController@login");
Route::post("/register",$path."UserController@register");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

