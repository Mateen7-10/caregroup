@extends('layouts.dashbord_layout')
@section('dashbord_section')
<h1 class="text-center mt-3">Doctors Profile</h1>
<table  class="table table-bordered mt-4">
    <thead  class="table-dark">
        <tr>
            <th>id</th>
            <!-- <th>Profile</th> -->
            <th>Name</th>
            <th>Email</th>
            <th>Specialist</th>
            <th>Description</th>
            <th>Adress</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($doctors->count() > 0)
        @foreach ($doctors as $fields)
            <tr>
                <td>{{$fields->id}}</td>
                <!-- <td>{{$fields->doctor_profile}}</td> -->
                <td>{{$fields->doctor_name}}</td>
                <td>{{$fields->doctor_email}}</td>
                <td>{{$fields->doctor_specialist}}</td>
                <td>{{$fields->doctor_description}}</td>
                <td>{{$fields->doctor_adress}}</td>
                <td >
                    <a href="doctors_profile/{{$fields->id}}/edit" class="d-inline btn btn-primary">Update</a>
                    <a href="doctors_profile/{{$fields->id}}/delete" class="d-inline btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        @else
        <tr>
            <td colspan="8" class="text-center text-danger  fw-bold">No Doctors Are Available</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection