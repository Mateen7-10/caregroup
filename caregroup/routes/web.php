<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppointmentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('admin');
});

//index route 
Route::get('/', [AdminController::class, 'index'])->name('index');

//get in touch route
Route::get('/GetInTouch', [AdminController::class, 'GetInTouch'])->name('GetInTouch');

//department route
Route::get('/department', [AdminController::class, 'department'])->name('department');

//doctor dashbord
Route::get('/doctor_dashbord', [DoctorsController::class, 'doctor_dashbord'])->name('doctor_dashbord');

//patient dashbord
Route::get('/patient_dashbord', [AdminController::class, 'patient_dashbord'])->name('patient_dashbord');


Route::prefix('/dashboard')->group(function(){

    //insert_doctor route
Route::get('insert_doctor', [DoctorsController::class, 'insert_doctor'])->name('insert_doctor');

    //doctors_profile route
Route::get('doctors_profile', [DoctorsController::class, 'doctors_profile'])->name('doctors_profile');
    
//insert_patient route
Route::get('insert_patient', [PatientsController::class, 'insert_patient'])->name('insert_patient');
    
//patients_profile route
Route::get('patients_profile', [PatientsController::class, 'patients_profile'])->name('patients_profile');

//patients_appointment route
Route::get('patients_appointment', [PatientsController::class, 'patients_appointment'])->name('patients_appointment');
    
// storedoctors route
Route::post('insert_doctor', [DoctorsController::class, 'storedoctors'])->name('storedoctors');

// storepatients route
Route::post('insert_patient', [PatientsController::class, 'storepatients'])->name('storepatients');

//=================================================================================================================================

// edt_patient route
Route::get('patients_profile/{id}/edit', [PatientsController::class, 'edit_patient'])->name('edit_patient');

// update_patient route
Route::put('patients_profile/{id}/update', [PatientsController::class, 'update_patient'])
->name('update_patient');

// delete_patient route
Route::get('patients_profile/{id}/delete', [PatientsController::class, 'delete_patient'])
->name('delete_patient');

//=================================================================================================================================

// edt_doctor route
Route::get('doctors_profile/{id}/edit', [DoctorsController::class, 'edit_doctor'])->name('edit_doctor');

// update_doctor route
Route::put('doctors_profile/{id}/update', [DoctorsController::class, 'update_doctor'])
->name('update_doctor');

// delete_doctor route
Route::get('doctors_profile/{id}/delete', [DoctorsController::class, 'delete_doctor'])
->name('delete_doctor');

});

//===================================================================================
//appointment route
Route::get('/appointment', [AppointmentsController::class, 'appointments'])->name('appointments');

//storeappointments route
Route::post('/storeappointments', [AppointmentsController::class, 'storeappointments'])->name('storeappointments');



//doctors_info

Route::prefix('/doctors')->group(function(){
    Route::get('dashboard', [PatientsController::class, 'patients_info'])->name('patients_info');
});