<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;
    protected $table = 'alert';
    protected $fillable = [
        'patient_id',
        'alert_date',
        'alert_type'
    ];
}
