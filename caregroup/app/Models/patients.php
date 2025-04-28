<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $fillable = [
        'patient_profile',
        'patient_name',
        'patient_email',
        'patient_phone',
        'patient_age',
        'patient_diseases'
    ];
}
