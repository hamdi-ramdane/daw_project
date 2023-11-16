<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsageStats extends Model
{
    use HasFactory;
    protected $table = "usage_stats";
    protected $fillable = [
        'user_id',
        'stats_date',
    ];
}
