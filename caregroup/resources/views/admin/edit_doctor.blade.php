@extends('layouts.dashbord_layout')
@section('dashbord_section')
<h1 class="text-center mt-3">Update Doctor</h1>

  @if (session('success'))
     <div class="alert alert-success alert-block text-center mt-4">
         {{session('success')}}    
    </div>      
  @endif
          <h3 class="text-center">Update Doctor Form</h3>
        <form action="{{route('update_doctor', $doctor->id)}}" method="POST" enctype="multipart/form-data" style="width: 600px; margin-inline: auto;" >
            @csrf
            @method('PUT')
        <div style="width: 600px; margin-inline: auto;">
            <div>
                <div class="doctor_profile mb-3">
                    <label for="doctor_profile">Profile</label>
                    <input type="file" name="doctor_profile" placeholder="Enter Doctor Profile" class="form-control mt-2" value="{{old('doctor_profile', $doctor->doctor_profile)}}">
                </div>
                <div class="doctor_name mb-3">
                    <label for="doctor_name">Name</label>
                    <input type="text" name="doctor_name" placeholder="Enter Doctor Name" class="form-control mt-2" value="{{old('doctor_name', $doctor->doctor_name)}}">
                </div>
                <div class="doctor_name mb-3">
                    <label for="doctor_email">Email</label>
                    <input type="text" name="doctor_email" placeholder="Enter Doctor Email" class="form-control mt-2" value="{{old('doctor_email', $doctor->doctor_email)}}">
                </div>
                <div class="doctor_specialist mb-3">
                    <label for="doctor_specialist">Specialist</label>
                    <input type="text" name="doctor_specialist" placeholder="Enter Doctor Specialist" class="form-control mt-2" value="{{old('doctor_specialist', $doctor->doctor_specialist)}}">
                </div>
                <div class="doctor_description mb-3">
                    <label for="doctor_description">Description</label>
                    <input type="text" name="doctor_description" placeholder="Enter Doctor Description" class="form-control mt-2" value="{{old('doctor_description', $doctor->doctor_description)}}">
                </div>
                <div class="doctor_adress mb-3">
                    <label for="doctor_adress">Adress</label>
                    <input type="text" name="doctor_adress" placeholder="Enter Doctor Adress" class="form-control mt-2" value="{{old('doctor_adress', $doctor->doctor_adress)}}">
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
        
      </div>
    </div>
  </div>
@endsection