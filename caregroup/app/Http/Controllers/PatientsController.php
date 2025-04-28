<?php

namespace App\Http\Controllers;

use App\Models\patients;
use App\Models\appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PatientsController;

class PatientsController extends Controller
{
    public function storepatients(Request $req){
        $patients = new patients();
        $patients->patient_profile = $req->patient_profile;
        $patients->patient_name = $req->patient_name;
        $patients->patient_email = $req->patient_email;
        $patients->patient_phone = $req->patient_phone;
        $patients->patient_age = $req->patient_age;
        $patients->patient_diseases = $req->patient_diseases;
        $patients->save();
        return redirect()->route('insert_patient')->with('success', "data inserted successfully!");
    }

    public function insert_patient(){
        if (Auth::check() && Auth::user()->role == 0) {
            $patients = Patients::all();
            return view('admin.insert_patient', compact('patients'));
        }
        
        return redirect('login')->with('error', 'Unauthorized access');
        }
        
    public function patients_profile(){
        if (Auth::check() && Auth::user()->role == 0) {
            $patients = Patients::all();
            return view('admin.patients_profile', compact('patients'));
        }
        
        return redirect('login')->with('error', 'Unauthorized access');
        }
    public function edit_patient($id) {
        $patient = patients::findOrFail($id); // Using findOrFail for better error handling
        return view('admin.edit_patient', compact('patient'));
    }
    
    public function update_patient(Request $req, $id) {
        $validated = $req->validate([
            'patient_name' => 'required|string|max:255',
            'patient_email' => 'required|email|unique:patients,patient_email,'.$id,
            'patient_phone' => 'required|string|max:20',
            'patient_age' => 'required|integer|min:0',
            'patient_diseases' => 'required|string',
            'patient_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $patient = patients::findOrFail($id);
        
        // for profile image
        if ($req->hasFile('patient_profile')) {
            // Delete old file if exists
            if ($patient->patient_profile) {
                Storage::disk('public')->delete($patient->patient_profile);
            }
            
            $path = $req->file('patient_profile')->store('patient_profiles', 'public');
            $patient->patient_profile = $path;
        }
        
        $patient->update($validated);
        
        // return redirect()->route('patients_profile')->with('success', "Data updated successfully!");
        return back()->with('success', "Data updated successfully!");
    }

    public function delete_patient($id){
        $patient = patients::findOrFail($id);
        $patient->delete();
        return back()->with('success', "Data deleted successfully!");
    }

    public function patients_appointment(){
        if (Auth::check() && Auth::user()->role == 0) {
            $appointments = appointments::all();
            return view('admin.patients_appointment', compact('appointments'));
        }
        
        return redirect('login')->with('error', 'Unauthorized access');
        }

    public function patients_info(){
        if (Auth::check() && Auth::user()->role == 2) {
            $appointments = appointments::all();
            return view('doctor.patient-info', compact('appointments'));
        }
        
        return redirect('login')->with('error', 'Unauthorized access');
    }
}
