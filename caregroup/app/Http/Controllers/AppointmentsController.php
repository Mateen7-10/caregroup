<?php

namespace App\Http\Controllers;

use App\Models\appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function appointments(){
        $appointments = appointments::all();
        return view('pages.appointment', compact('appointments'));
    }
    
    public function storeappointments(Request $req){
        $validated = $req->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:appointments',
        'phone' => 'required|numeric',
        'age' => 'required|integer',
        'diseases' => 'required|string',
        'address' => 'nullable|string',
        'date' => 'required|date',
        'time' => 'required',
        'doctor_name' => 'required|string',
        'message' => 'nullable|string',
        ]);
        // Appointments::create($validated);
        
        $appointments = new appointments();
        $appointments->name = $req->name;
        $appointments->email = $req->email;
        $appointments->phone = $req->phone;
        $appointments->age = $req->age;
        $appointments->diseases = $req->diseases;
        $appointments->adress = $req->adress;
        $appointments->date = $req->date;
        $appointments->time = $req->time;
        $appointments->doctor_name = $req->doctor_name;
        $appointments->message = $req->message;
        $appointments->save();
        // return $appointments;
        return redirect()->route('appointments')->with('success', 'Appointment created successfully!');
    }
}