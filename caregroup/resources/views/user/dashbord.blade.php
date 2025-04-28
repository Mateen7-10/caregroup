@extends('layouts.page_layout')
@section('page_section')
<h1 class="text-center">User Dashbord</h1>
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Appointment Booking Form</h2>
        <form action="/submit-form" method="POST">
          <!-- Name Field -->
          <div class="mb-3">
            <label for="name" class="form-label">Enter Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
          </div>

          <!-- Email Field -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
          </div>

          <!-- Phone Number Field -->
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required>
          </div>

          <!-- Doctor Name Field -->
          <div class="mb-3">
            <label for="doctor" class="form-label">Doctor Name</label>
            <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor's Name" required>
          </div>

          <!-- Date Field -->
          <div class="mb-3">
            <label for="date" class="form-label">Appointment Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>

          <!-- Time Field -->
          <div class="mb-3">
            <label for="time" class="form-label">Appointment Time</label>
            <input type="time" class="form-control" id="time" name="time" required>
          </div>

          <!-- Message Field -->
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
          </div>

          <!-- Submit Button -->
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection