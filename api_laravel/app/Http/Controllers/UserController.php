<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

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
                'password'=>bcrypt($request->password),
            ]);
            
            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken($user->username)->plainTextToken
            ], 200);
 
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function login(Request $request){
        try {
            $validateUser = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if(!Auth::attempt($request->only('email','password'))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password do not match with our records.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();
            return $user->createToken($user->username)->plainTextToken;
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                // 'token' => $user->createToken($user->username)->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function logout(){
        return "logged out ";
    }
}
