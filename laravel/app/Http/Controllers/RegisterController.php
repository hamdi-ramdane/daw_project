<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }
    public function store(){
        $first_name = request("first_name");
        $last_name = request("last_name");
        $email = request("email");
        $password = request("password");
        $password_check = request("password_check");
        $gender = request("gender");
        $date_of_birth = request("date_of_birth");

        $user = new User;
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email ;
        $user->passwd = $password;
        $user->gender = $gender;
        $user->date_of_birth = $date_of_birth ;

        $user->save();
        // User::create([
        //     'fist_name' => $first_name,
        //     'last_name' => $last_name,
        //     'email' => $email,
        //     'passwd' => $password,
        //     'gender' => $gender,
        //     'date_of_birth' => $date_of_birth,
        // ]);
        return redirect("/");
    }
}
