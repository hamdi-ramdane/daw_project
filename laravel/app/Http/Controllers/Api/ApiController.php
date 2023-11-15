<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Admin;
use App\Models\Quiz;
use App\Models\Message;
use App\Models\Alert;
use App\Models\UsageStats;
use App\Http\Resources\UserResource;
use App\Http\Resources\PatientResource;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\AdminResource;
use App\Http\Resources\QuizResource;
use App\Http\Resources\MessageResource;
use App\Http\Resources\AlertResource;
use App\Http\Resources\UsageStatsResource;
class ApiController extends Controller
{
    public function data($table){
        switch($table){
            case 'user':
                $user = User::all();
                return UserResource::collection($user);
            case 'patient':
                $patient = Patient::all();
                return PatientResource::collection($patient);
            case 'doctor':
                $doctor = Doctor::all();
                return DoctorResource::collection($doctor);
            case 'admin':
                $admin = Admin::all();
                return AdminResource::collection($admin);
            case 'quiz':
                $quiz = Quiz::all();
                return QuizResource::collection($quiz);
            case 'message':
                $message = Message::all();
                return MessageResource::collection($message);
            case 'alert':
                $alert = Alert::all();
                return AlertResource::collection($alert);
            case 'usageStats':
                $usageStats = UsageStats::all();
                return UsageStatsResource::collection($usageStats);
            default: 
                return "$table is not a table";
        }

    }
    public function login(){
        return "login";
    }
    public function register(){
        return "login";
    }
}
