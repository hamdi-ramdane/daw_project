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
    public function users(){
        $user = User::all()[0];
        $patient = Patient::all()[0];
        $doctor = Doctor::all()[0];
        $admin = Admin::all()[0];
        $quiz = Quiz::all()[0];
        $message = Message::all()[0];
        $alert = Alert::all()[0];
        $usageStats = UsageStats::all()[0];

        // return new UserResource($user);
        // return new PatientResource($patient);
        // return new DoctorResource($doctor);
        // return new AdminResource($admin);
        // return new QuizResource($quiz);
        // return new MessageResource($message);
        // return new AlertResource($alert);
        return new UsageStatsResource($usageStats);
    }
    public function login(){
        return "login";
    }
    public function register(){
        return "login";
    }
}
