@extends('doctor.doctors-layout')
@section('doctors-layout-section')
<h1 class="text-center">Patients Info</h1>
<table  class="table table-bordered mt-4 my-0">
    <thead  class="table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Diseases</th>
            <th>doctor_name</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($appointments as $pat_appo)
        <tr>
            <td>{{$pat_appo->name}}</td>
            <td>{{$pat_appo->email}}</td>
            <td>{{$pat_appo->phone}}</td>
            <td>{{$pat_appo->diseases}}</td>
            <td>{{$pat_appo->doctor_name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection