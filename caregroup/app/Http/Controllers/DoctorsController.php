<?php

namespace App\Http\Controllers;
use App\Models\doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DoctorsController extends Controller
{
    
    public function storedoctors(Request $req){
        $doctors = new doctors();
        $doctors->doctor_profile = $req->doctor_profile;
        $doctors->doctor_name = $req->doctor_name;
        $doctors->doctor_email = $req->doctor_email;
        $doctors->doctor_specialist = $req->doctor_specialist;
        $doctors->doctor_description = $req->doctor_description;
        $doctors->doctor_adress = $req->doctor_adress;
        $doctors->save();
        return redirect()->route('insert_doctor')->with('success', "data inserted successfully!");
    }
    public function insert_doctor(){
        if (Auth::check() && Auth::user()->role == 0) {
            $doctors = Doctors::all(); 
            return view('admin.insert_doctor', compact('doctors'));
        }
        
        return redirect('login')->with('error', 'Unauthorized access');
        }
        public function doctors_profile(){
            if (Auth::check() && Auth::user()->role == 0) {
                $doctors = Doctors::all();
                return view('admin.doctors_profile', compact('doctors'));
            }
            
            return redirect('login')->with('error', 'Unauthorized access');
            }
    public function edit_doctor($id) {
        $doctor = doctors::findOrFail($id);
        return view('admin.edit_doctor', compact('doctor'));
    }
    
    public function update_doctor(Request $req, $id) {
        $validated = $req->validate([
            'doctor_name' => 'required|string|max:255',
        'doctor_email' => 'required|email|unique:doctors,doctor_email,'.$id,
        'doctor_specialist' => 'required|string|max:20',
        'doctor_description' => 'required|string',
        'doctor_adress' => 'required|string',
        'doctor_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $doctor = doctors::findOrFail($id);

    if ($req->hasFile('doctor_profile')) {
        // Delete old file if exists
        if ($doctor->doctor_profile) {
            Storage::disk('public')->delete($doctor->doctor_profile);
        }
        
        $path = $req->file('doctor_profile')->store('doctor_profile', 'public');
        $validated['doctor_profile'] = $path;
    }
    
    $doctor->update($validated);
    
    return back()->with('success', "Data updated successfully!");
    }

    public function delete_doctor($id){
        $doctor = doctors::findOrFail($id);
        $doctor->delete();
        return back()->with('success', "Data deleted successfully!");
    }
 
    public function available_doctors(){
        $doctors = doctors::all();
        return view('doctor.dashbord', compact('doctors'));
    }

    public function doctor_dashbord(){
        if (Auth::check() && Auth::user()->role == 0) {
            return view('doctor.dashbord');
        }
        
        return redirect('login')->with('error', 'Unauthorized access');
    }

}
