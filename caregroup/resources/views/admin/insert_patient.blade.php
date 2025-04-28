@extends('layouts.dashbord_layout')
@section('dashbord_section')
<h1 class="text-center mt-3">Insert Patient</h1>

   @if (session('success'))
   <div class="alert alert-success alert-block text-center mt-4">
       {{session('success')}}    
  </div>      
@endif
   <!-- Modal -->
   <section>
              <h3 class="text-center" id="exampleModalLabel">Patient Form</h3>
            <form action="{{route('storepatients')}}" method="POST" style="width: 600px; margin-inline: auto;" enctype="multipart/form-data">
                @csrf
            <div>
                <div>
                    <div class="patient_profile mb-3">
                        <label for="patient_profile">Profile</label>
                        <input type="file" name="patient_profile" placeholder="Enter Patient Profile" class="form-control mt-2">
                    </div>
                    <div class="patient_name mb-3">
                        <label for="patient_name">Name</label>
                        <input type="text" name="patient_name" placeholder="Enter Patient Name" class="form-control mt-2">
                    </div>
                    <div class="patient_name mb-3">
                        <label for="patient_email">Email</label>
                        <input type="text" name="patient_email" placeholder="Enter Patient Email" class="form-control mt-2">
                    </div>
                    <div class="patient_phone mb-3">
                        <label for="patient_phone">Phone</label>
                        <input type="text" name="patient_phone" placeholder="Enter Patient Phone" class="form-control mt-2">
                    </div>
                    <div class="patient_age mb-3">
                        <label for="patient_age">Age</label>
                        <input type="integer" name="patient_age" placeholder="Enter Patient Age" class="form-control mt-2">
                    </div>
                    <div class="patient_diseases mb-3">
                        <label for="patient_diseases">Diseases</label>
                        <input type="text" name="patient_diseases" placeholder="Enter Patient Diseases" class="form-control mt-2">
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
     <div>
        {{-- <table  class="table table-bordered mt-4">
            <thead  class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Diseases</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $pat)
                    <tr>
                        <td>{{$pat->id}}</td>
                        <td>{{$pat->patient_name}}</td>
                        <td>{{$pat->patient_email}}</td>
                        <td>{{$pat->patient_phone}}</td>
                        <td>{{$pat->patient_age}}</td>
                        <td>{{$pat->patient_diseases}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div> --}}
@endsection