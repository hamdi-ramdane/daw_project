<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserResource;
class ApiController extends Controller
{
    public function users(){
        $users = User::all();
        $user = $users[0];
        return new UserResource($user);
    }
    public function login(){
        return "login";
    }
    public function register(){
        return "login";
    }
}
