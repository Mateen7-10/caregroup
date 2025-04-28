@extends('layouts.dashbord_layout')
@section('dashbord_section')
<h1 class="text-center">Patients Appointment</h1>
<div>
    <table  class="table table-bordered mt-4 my-0">
        <thead  class="table-dark">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Diseases</th>
                <th>adress</th>
                <th>date</th>
                <th>time</th>
                <th>doctor_name</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($appointments as $pat_appo)
            <tr>
                <td>{{$pat_appo->id}}</td>
                <td>{{$pat_appo->name}}</td>
                <td>{{$pat_appo->email}}</td>
                <td>{{$pat_appo->phone}}</td>
                <td>{{$pat_appo->age}}</td>
                <td>{{$pat_appo->diseases}}</td>
                <td>{{$pat_appo->adress}}</td>
                <td>{{$pat_appo->date}}</td>
                <td>{{$pat_appo->time}}</td>
                <td>{{$pat_appo->doctor_name}}</td>
                <td>{{$pat_appo->message}}</td>
            </tr>
        @endforeach

           
        </tbody>
    </table>
 </div>
@endsection