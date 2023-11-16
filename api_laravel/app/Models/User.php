<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
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
        'passwd'
    ];
}
