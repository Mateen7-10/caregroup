<?php

namespace App\Http\Controllers;

use App\Models\doctors;
use App\Models\patients;
use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function index(){
        return view('index');
    }
    public function GetInTouch(){
        return view('pages.get_in_touch');
    }
      
    public function department(){
        return view('pages.department');
    }    
    public function patient_dashbord(){
        if (Auth::check() && Auth::user()->role == 0) {
            return view(' patient.dashbord');
        }
        
        return redirect('login')->with('error', 'Unauthorized access');
    }

    public function admin(){
        if(Auth::user()){
            if(Auth::user()->role == 0){
                return view('admin.dashbord');
            }elseif(Auth::user()->role == 2){
                return view('doctor.dashbord');
            }elseif(Auth::user()->role == 1){
                return view('pages.appointment');
            }
            else{
                return view('index');
            }
        }else{
            return redirect()->route('login');
        }
    }     
}

