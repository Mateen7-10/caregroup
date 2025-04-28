@extends('layouts.page_layout')

@section('page_section')
 <!-- Common Diseases Section -->
 <section class="container my-5">
    <h2 class="text-center mb-4">Common Diseases</h2>
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="assets/img/diabetes.jpg" alt="Common Diseases" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h3>Diabetes, Hypertension & Asthma</h3>
        <p>We specialize in managing chronic conditions like Diabetes, Hypertension, and Asthma. Our services include personalized care plans, lifestyle recommendations, and advanced treatment options to help you live a healthier life.</p>
        <ul>
          <li><strong>Diabetes:</strong> Manage blood sugar levels with expert guidance.</li>
          <li><strong>Hypertension:</strong> Control high blood pressure with tailored strategies.</li>
          <li><strong>Asthma:</strong> Improve breathing with effective symptom management.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Preventative Health Section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Preventative Health</h2>
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <img src="assets/img/healthy_leaving.jpg" alt="Preventative Health" class="img-fluid rounded">
      </div>
      <div class="col-md-6 order-md-1">
        <h3>Healthy Living Starts Here</h3>
        <p>Prevention is the key to long-term health. We offer personalized plans to help you adopt a healthy diet, engage in regular exercise, and build habits that reduce the risk of chronic diseases.</p>
        <ul>
          <li><strong>Healthy Diet:</strong> Balanced nutrition plans tailored to your needs.</li>
          <li><strong>Regular Exercise:</strong> Guidance on staying active for at least 30 minutes a day.</li>
          <li><strong>Lifestyle Changes:</strong> Practical tips to boost overall wellness.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Treatment & Recovery Section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Treatment & Recovery</h2>
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="assets/img/treatment.jpg" alt="Treatment & Recovery" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h3>Comprehensive Care for Recovery</h3>
        <p>From medication management to advanced therapies, we provide the support you need to recover and thrive. Our team is here to guide you through every step of your treatment journey.</p>
        <ul>
          <li><strong>Medication:</strong> Expert advice on prescribed treatments.</li>
          <li><strong>Therapy:</strong> Physical and psychological support for recovery.</li>
          <li><strong>Surgery:</strong> Advanced surgical options when needed.</li>
        </ul>
      </div>
    </div>
  </section>
@endsection