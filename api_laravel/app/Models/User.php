<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table = "user";
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'gender',
        'date_of_birth',
        'email',
        'password'
    ];
}
