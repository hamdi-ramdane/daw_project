<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$path = "App\Http\Controllers\\";

Route::get("/data/{table}",$path."ApiController@data");

Route::get("/user",$path."UserController@login");
Route::post("/user",$path."UserController@register");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

