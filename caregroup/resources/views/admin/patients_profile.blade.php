@extends('layouts.dashbord_layout')
@section('dashbord_section')
<h1 class="text-center mt-3">Patients Profile</h1>
<div>
    <table  class="table table-bordered mt-4 my-0">
        <thead  class="table-dark">
            <tr>
                <th>id</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Diseases</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($patients->count() > 0)
            @foreach ($patients as $pat)
            <tr>
                <td>{{$pat->id}}</td>
                <td>{{$pat->patient_profile}}</td>
                <td>{{$pat->patient_name}}</td>
                <td>{{$pat->patient_email}}</td>
                <td>{{$pat->patient_phone}}</td>
                <td>{{$pat->patient_age}}</td>
                <td>{{$pat->patient_diseases}}</td>
                <td >
                    <a href="patients_profile/{{$pat->id}}/edit" class="d-inline btn btn-primary">Update</a>
                    <a href="patients_profile/{{$pat->id}}/delete" class="d-inline btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        @else
        <tr>
            <td colspan="8" class="text-center text-danger fw-bold">No Patients Are Available</td>
        </tr>
        @endif
           
        </tbody>
    </table>
 </div>
@endsection