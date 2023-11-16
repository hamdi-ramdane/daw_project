<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        try{
            $validated = $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'username' => 'required|unique:user,username',
                'gender' => 'required',
                'dateOfBirth' => 'required',
                'email' => 'required|unique:user,email',
                'password' => 'required',
            ]);
            $user = User::create([
                'first_name'=>$request->firstName,
                'last_name'=>$request->lastName,
                'username'=>$request->username,
                'gender'=>$request->gender,
                'date_of_birth'=>$request->dateOfBirth,
                'email'=>$request->email,
                'passwd'=>$request->password
            ]);
            
            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
 
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function login(){

    }
}
