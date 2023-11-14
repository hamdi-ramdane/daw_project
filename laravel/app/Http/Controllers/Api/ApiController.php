<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ApiController extends Controller
{
    public function users(){
        $users = User::all();
        return $users;
    }
    public function login(){
        return "login";
    }
    public function register(){
        return "login";
    }
}
