<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    protected $fillable = [
        'doctor_name', 
        'doctor_email', 
        'doctor_specialist', 
        'doctor_description', 
        'doctor_adress', 
        'doctor_profile'
    ];
}
