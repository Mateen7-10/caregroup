@extends('layouts.dashbord_layout')
@section('dashbord_section')
<h1 class="text-center mt-3">Update Patient</h1>

   @if (session('success'))
   <div class="alert alert-success alert-block text-center mt-4">
       {{session('success')}}    
  </div>      
@endif
              <h4 class="text-center mt-3" id="exampleModalLabel">Patient Update Form</h4>
            <form action="{{ route('update_patient', $patient->id) }}" method="POST" enctype="multipart/form-data" style="width: 600px; margin-inline: auto;" >
                @csrf
                @method('PUT')
            <div>
                <div>
                    <div class="patient_profile mb-3">
                        <label for="patient_profile">Profile</label>
                        <input type="file" name="patient_profile" placeholder="Enter Patient Profile" class="form-control mt-2" value="{{old('patient_profile',$patient->patient_profile)}}">
                    </div>
                    <div class="patient_name mb-3">
                        <label for="patient_name">Name</label>
                        <input type="text" name="patient_name" placeholder="Enter Patient Name" class="form-control mt-2" value="{{old('patient_name', $patient->patient_name)}}">
                    </div>
                    <div class="patient_name mb-3">
                        <label for="patient_email">Email</label>
                        <input type="text" name="patient_email" placeholder="Enter Patient Email" class="form-control mt-2" value="{{old('patient_email', $patient->patient_email)}}">
                    </div>
                    <div class="patient_phone mb-3">
                        <label for="patient_phone">Phone</label>
                        <input type="text" name="patient_phone" placeholder="Enter Patient Phone" class="form-control mt-2" value="{{old('patient_phone', $patient->patient_phone)}}">
                    </div>
                    <div class="patient_age mb-3">
                        <label for="patient_age">Age</label>
                        <input type="integer" name="patient_age" placeholder="Enter Patient Age" class="form-control mt-2" value="{{old('patient_age', $patient->patient_age)}}">
                    </div>
                    <div class="patient_diseases mb-3">
                        <label for="patient_diseases">Diseases</label>
                        <input type="text" name="patient_diseases" placeholder="Enter Patient Diseases" class="form-control mt-2" value="{{old('patient_diseases', $patient->patient_diseases)}}">
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
     <div>
@endsection


