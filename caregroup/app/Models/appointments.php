<?php

namespace App\Models;

use App\Models\appointments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = ['name', 'email', 'phone', 'age', 'diseases', 'address', 'date', 'time', 'doctor_name', 'message'];
}
