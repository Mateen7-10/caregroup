@extends('layouts.page_layout')
@section('page_section')
<section id="appointment" class="appointment section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Appointment</h2>
      <p>Book your appointment about your disease</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <form action="{{route('storeappointments')}}" method="post"  enctype="multipart/form-data" class="php-email-form">
      @csrf
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control mt-3" id="name" placeholder="Your Name" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control mt-3" name="email" id="email" placeholder="Your Email" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control mt-3" name="phone" id="phone" placeholder="Your Phone" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control mt-3" name="age" id="age" placeholder="Your Age" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control mt-3" name="diseases" id="diseases" placeholder="Your Diseases" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control mt-3" name="adress" id="adress" placeholder="Your Adress" required="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
          </div>
          <div class="col-md-4 form-group mt-3">
            <input type="time" name="time" class="form-control timepicker" id="time" placeholder="Appointment Time" required="">
          </div>
          <div class="col-md-4 form-group mt-3">
          <input type="text" name="doctor_name" class="form-control" id="date" placeholder="Doctor's Name" required="">
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="mt-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </div>
      </form>
    </div>
  </section>
@endsection