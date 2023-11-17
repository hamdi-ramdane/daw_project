<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$path = "App\Http\Controllers\\";

// Public Routes
Route::get("/",$path."ApiController@index");
Route::get("/data/{table}",$path."ApiController@data");
Route::post("/login",$path."UserController@login");
Route::post("/register",$path."UserController@register");

// Protected Routes
Route::group(['middleware'=>['auth:sanctum']],function (){
    $path = "App\Http\Controllers\\";
    Route::post("/logout",$path."UserController@logout");
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});