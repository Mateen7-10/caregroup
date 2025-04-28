@extends('layouts.website_layout')

@section('website_layout')
{{--
        ==============================================================================================================
        hero section
        ==============================================================================================================
--}}
<section id="hero" class="hero section light-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
        <div class="container position-relative">
          <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
            <h2>Welcome To CareGroup</h2>
            <br>
            <p>"Your Partner in Health: Prevention, Care, and Recovery Made Simple"</p>
          </div>
          <div class="content row gy-4">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                <h3>Why Choose Care Group?</h3>
                <p>
                  With a deep understanding of chronic conditions like Diabetes, Hypertension, and Asthma, I provide personalized guidance to help you manage and overcome health challenges. My approach combines prevention strategies, such as healthy diets and regular exercise, with effective treatment options like medication, therapy, and surgery when needed. I am committed to empowering you with the knowledge and tools to take control of your health.
                </p>
                <div class="text-center">
                  <a href="{{route('GetInTouch')}}" class="more-btn"><span>Get in Touch</span> <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="d-flex flex-column justify-content-center">
                <div class="row gy-4">
    
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                      <i class="bi bi-clipboard-data"></i>
                      <h4>Empowering Health, Every Day</h4>
                      <p>Take control of chronic conditions like Diabetes, Hypertension, and Asthma.
                        Discover prevention tips, effective cures, and therapies for a healthier tomorrow.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                      <i class="bi bi-gem"></i>
                      <h4>Your Health, Your Priority</h4>
                      <p>From managing Diabetes to overcoming Asthma, we guide you with prevention, treatment, and care.
                        Start your journey to better health today.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                      <i class="bi bi-inboxes"></i>
                      <h4>Live Well, Stay Strong</h4>
                      <p>Learn how to prevent and manage chronic diseases with healthy diets, exercise, and expert care.
                        Your path to recovery begins here.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
{{--
        ==============================================================================================================
        about section
        ==============================================================================================================
--}}
<section id="about" class="about section">

        <div class="container">
    
          <div class="row gy-4 gx-5">
    
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
    
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
              <h3>About Us</h3>
              <br>
              <p class="lh-lg" style=" font-size: 18px;">
                At CareGroup, we are dedicated to helping individuals take control of their health and well-being. With a focus on chronic conditions like Diabetes, Hypertension, and Asthma, we provide expert guidance on prevention, treatment, and recovery. Our mission is to empower you with the knowledge, tools, and support needed to live a healthier, more fulfilling life. Whether it’s through personalized care plans, lifestyle recommendations, or advanced treatment options, we are here to walk alongside you on your journey to better health. Your wellness is our priority.
              </p>
              
            </div>
    
          </div>
    
        </div>
    
      </section>

{{--
        ==============================================================================================================
        states section
        ==============================================================================================================
--}}
<section id="stats" class="stats section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fa-solid fa-user-doctor"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Doctors</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fa-regular fa-hospital"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                <p>Departments</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fas fa-flask"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
                <p>Research Labs</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
              <i class="fas fa-award"></i>
              <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="107" data-purecounter-duration="1" class="purecounter"></span>
                <p>Awards</p>
              </div>
            </div>
          </div>
        </div>
      </section>

{{--
        ==============================================================================================================
        services section
        ==============================================================================================================
--}}
<section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Comprehensive Health Solutions for Chronic Conditions
            <br>
            From Diabetes and Hypertension to Asthma, we offer prevention, management,
            <br> and recovery services tailored to your needs.</p>
        </div>
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <img src="assets/img/snorkel.png" alt="">
                  <br>
                  <br>
                <a href="#" class="stretched-link">
                  <h3>Diabetes Management</h3>
                </a>
                <p>We provide comprehensive care for diabetes, helping you understand and manage blood sugar levels effectively. From personalized diet plans to medication guidance, we ensure you stay on track. Our goal is to empower you to live a healthy, balanced life.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                  <img src="assets/img/Hypertension.png" alt="">
                  <br>
                  <br>
                <a href="#" class="stretched-link">
                  <h3>Hypertension Care</h3>
                </a>
                <p>High blood pressure can be silent but dangerous. Our team offers tailored strategies to monitor and control hypertension. Through lifestyle changes and medical support, we help you reduce risks and improve heart health.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <img src="assets/img/Asthma.png" alt="">
                  <br>
                  <br>
                <a href="#" class="stretched-link">
                  <h3>Asthma Relief Programs</h3>
                </a>
                <p>Struggling with asthma? We offer solutions to manage symptoms and improve breathing. From inhaler techniques to lifestyle adjustments, our programs are designed to help you breathe easier and live better.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <img src="assets/img/Preventative.png" alt="">
                  <br>
                  <br>
                <a href="#" class="stretched-link">
                  <h3>Preventative Health Plans</h3>
                </a>
                <p>Prevention is better than cure. Our services include creating personalized plans for a healthy diet and regular exercise. We guide you in building habits that reduce the risk of chronic diseases and boost overall wellness.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item position-relative">
                <img src="assets/img/Medication&Treatment.png" alt="">
                  <br>
                  <br>
                <a href="#" class="stretched-link">
                  <h3>Medication & Treatment Guidance</h3>
                </a>
                <p>Managing chronic conditions requires the right medication and treatment. We provide expert advice on prescribed medications, ensuring you follow the best practices for effective disease management and recovery.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item position-relative">
                <img src="assets/img/Therapy&Surgical_Support.png" alt="">
                  <br>
                  <br>
                <a href="#" class="stretched-link">
                  <h3>Therapy & Surgical Support</h3>
                </a>
                <p>For conditions requiring advanced care, we offer therapy and surgical options. Whether it’s physical therapy, psychological support, or surgical interventions, we’re here to guide you through every step of your recovery journey.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{--
        ==============================================================================================================
        doctors section
        ==============================================================================================================
--}}
      <section id="doctors" class="doctors section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Doctors</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-6 my-4" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="assets/img/doctors/mateen.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Dr. Mateen</h4>
                  <span>Specializing in Diabetes Management</span>
                  <p>Offers personalized care plans to help patients regulate blood sugar levels effectively. With a focus on diet, medication, and lifestyle adjustments, he empowers individuals to lead healthier, balanced lives while managing diabetes.</p>
                  {{-- <div class="social">
                    <a href="https://www.tiktok.com/login"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.facebook.com/login/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/login"> <i class="bi bi-linkedin"></i> </a>
                  </div> --}}
                  <div class="div">
                    <p class="adress fw-bold">Adress :</p>
                    <p>Saddar Karachi</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 my-4" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member d-flex align-items-start">
                  <div class="pic"><img src="assets/img/doctors/kanwal.png" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Dr. Kanwal</h4>
                    <span>An expert in Hypertension Care</span>
                    <p>Provides tailored strategies to monitor and control high blood pressure. Through a combination of lifestyle changes and medical support, he helps patients reduce cardiovascular risks and improve overall heart health.</p>
                    {{-- <div class="social">
                      <a href="https://www.tiktok.com/login"><i class="bi bi-tiktok"></i></a>
                      <a href="https://www.facebook.com/login/"><i class="bi bi-facebook"></i></a>
                      <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                      <a href="https://www.linkedin.com/login"> <i class="bi bi-linkedin"></i> </a>
                    </div> --}}
                    <div class="div">
                      <p class="adress fw-bold">Adress :</p>
                      <p>Saddar Karachi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="row gy-4">
            <div class="col-lg-6 my-4" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="assets/img/doctors/bisma.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Dr. Bisma</h4>
                  <span>Focused on Asthma Relief Programs</span>
                  <p>Designs comprehensive plans to manage symptoms and improve breathing. From inhaler techniques to lifestyle modifications, her goal is to help patients breathe easier and enhance their quality of life.</p>
                  {{-- <div class="social">
                    <a href="https://www.tiktok.com/login"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.facebook.com/login/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/login"> <i class="bi bi-linkedin"></i> </a>
                  </div> --}}
                  <div class="div">
                    <p class="adress fw-bold">Adress :</p>
                    <p>Saddar Karachi</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 my-4" data-aos="fade-up" data-aos-delay="200">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="assets/img/doctors/sunita.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Dr. Sunita</h4>
                  <span>Specializing in Preventative Health Plans</span>
                  <p>Creates customized wellness strategies, including diet and exercise routines, to reduce the risk of chronic diseases. She emphasizes building healthy habits to promote long-term well-being.</p>
                  {{-- <div class="social">
                    <a href="https://www.tiktok.com/login"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.facebook.com/login/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/login"> <i class="bi bi-linkedin"></i> </a>
                  </div> --}}
                  <div class="div">
                    <p class="adress fw-bold">Adress :</p>
                    <p>Saddar Karachi</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 my-1" data-aos="fade-up" data-aos-delay="300">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="assets/img/doctors/rehmanali.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Dr. Rehman Ali</h4>
                  <span>Medication & Treatment Guidance</span>
                  <p>Ensures patients with chronic conditions receive the right medications and follow best practices for effective disease management. She also provides support for advanced care, including therapy and surgical interventions, guiding patients through every step of their recovery journey.</p>
                  {{-- <div class="social">
                    <a href="https://www.tiktok.com/login"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.facebook.com/login/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/login"> <i class="bi bi-linkedin"></i> </a>
                  </div> --}}
                  <div class="div">
                    <p class="adress fw-bold">Adress :</p>
                    <p>Punjab Multan</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

      {{--
        ==============================================================================================================
        gallery section
        ==============================================================================================================
--}}
      <section id="gallery" class="gallery section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-0">
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                  <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection