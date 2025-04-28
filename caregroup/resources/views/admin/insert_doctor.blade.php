@extends('layouts.dashbord_layout')
@section('dashbord_section')
<h1 class="text-center mt-3">Insert Doctor</h1>

  @if (session('success'))
     <div class="alert alert-success alert-block text-center mt-4">
         {{session('success')}}    
    </div>      
  @endif
          <h3 class="text-center">Doctor Form</h3>
        <form action="{{route('storedoctors')}}" method="POST" enctype="multipart/form-data" style="width: 600px; margin-inline: auto;">
            @csrf
        <div style="width: 600px; margin-inline: auto;">
            @csrf
            <div>
                <div class="doctor_profile mb-3">
                    <label for="doctor_profile">Profile</label>
                    <input type="file" name="doctor_profile" placeholder="Enter Doctor Profile" class="form-control mt-2" value="{{old('doctor_profile')}}">
                </div>
                <div class="doctor_name mb-3">
                    <label for="doctor_name">Name</label>
                    <input type="text" name="doctor_name" placeholder="Enter Doctor Name" class="form-control mt-2" value="{{old('doctor_name')}}">
                   @if ($errors->has('doctor_name'))
                       <span>{{$errors->first('doctor_name')}}</span>
                   @endif
                </div>
                <div class="doctor_name mb-3">
                    <label for="doctor_email">Email</label>
                    <input type="text" name="doctor_email" placeholder="Enter Doctor Email" class="form-control mt-2" value="{{old('doctor_email')}}">
                    @if ($errors->has('doctor_email'))
                        <span class="text-danger">{{$errors->first('doctor_email')}}</span>
                    @endif
                </div>
                <div class="doctor_specialist mb-3">
                    <label for="doctor_specialist">Specialist</label>
                    <input type="text" name="doctor_specialist" placeholder="Enter Doctor Specialist" class="form-control mt-2" value="{{old('doctor_specialist')}}">
                    @if ($errors->has('doctor_specialist'))
                        <span class="text-danger">{{$errors->first('doctor_specialist')}}</span>
                    @endif
                </div>
                <div class="doctor_description mb-3">
                    <label for="doctor_description">Description</label>
                    <input type="text" name="doctor_description" placeholder="Enter Doctor Description" class="form-control mt-2" value="{{old('doctor_description')}}">
                    @if ($errors->has('doctor_description'))
                        <span class="text-danger">{{$errors->first('doctor_description')}}</span>
                    @endif
                </div>
                <div class="doctor_name mb-3">
                    <label for="doctor_adress">Adress</label>
                    <input type="text" name="doctor_adress" placeholder="Enter Doctor Adress" class="form-control mt-2" value="{{old('doctor_adress')}}">
                    @if ($errors->has('doctor_adress'))
                        <span class="text-danger">{{$errors->first('doctor_adress')}}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        
      </div>
    </div>
  </div>
  {{-- <section>
    <table  class="table table-bordered mt-4">
    <thead  class="table-dark">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Specialist</th>
            <th>Description</th>
            <th>Adress</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $fields)
            <tr>
                <td>{{$fields->id}}</td>
                <td>{{$fields->doctor_name}}</td>
                <td>{{$fields->doctor_email}}</td>
                <td>{{$fields->doctor_specialist}}</td>
                <td>{{$fields->doctor_description}}</td>
                <td>{{$fields->doctor_adress}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</section> --}}
@endsection