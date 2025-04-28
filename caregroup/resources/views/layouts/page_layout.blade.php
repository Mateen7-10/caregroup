
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>caregroup</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    {{--
        ==============================================================================================================
        Favicons
        ==============================================================================================================
    --}}
    <link href="{{asset('assets/img/brand_icon.png')}}" rel="icon" />
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    {{--
        ==============================================================================================================
        Fonts
        ==============================================================================================================
    --}}
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    {{--
        ==============================================================================================================
        Vendor CSS Files
        ==============================================================================================================
    --}}
    <link
      href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link
      href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    {{--
        ==============================================================================================================
        Main CSS File
        ==============================================================================================================
    --}}
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
  </head>
  <body class="starter-page-page">
    <header id="header" class="header sticky-top">
      <div class="branding d-flex align-items-center">
        <div
          class="container position-relative d-flex align-items-center justify-content-between"
        >
          <a href="{{route('index')}}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <!-- <h1 class="sitename">caregroup</h1> -->
             <img src="assets/img/brand_icon.png" alt="caregroup">
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{route('index')}}">Home</a></li>
              @if (Route::has('login'))
                    @auth
                      <form method="post" action="{{route('logout')}}" x-data>
                        @csrf
                        <button class="btn btn-outline-danger">
                          {{__('Log Out')}}
                        </button>
                      </form>
                    @else
                       <li>
                        <a href="{{ route('login') }}">Log in</a>
                       </li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
        </div>
      </div>
    </header>

    <main class="main">
        {{--
        ==============================================================================================================
        sections content
        ==============================================================================================================
        --}}
       @yield('page_section')
    </main>

    <footer id="footer" class="footer light-background pb-4">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">caregroup</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Garden Center Karachi</p>
              <p>PC: 75330</p>
              <p class="mt-3">
                <strong>Phone:</strong> <span>+92 322 4594 117</span>
              </p>
              <p><strong>Email:</strong> <span>rehmanalixheikh786@gmail.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://www.tiktok.com/login" target="_blank"><i class="bi bi-tiktok"></i></a>
              <a href="https://www.facebook.com/login/" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/login" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">About us</a></li>
              <li><a href="">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Diabetes</a></li>
              <li><a href="#">Hypertension</a></li>
              <li><a href="#">Asthma</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Preventions</h4>
            <ul>
              <li><a href="#">Healthy Diet</a></li>
              <li><a href="#">Regular Exercise</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Cures</h4>
            <ul>
              <li><a href="#">Medication</a></li>
              <li><a href="#">Surgery</a></li>
              <li><a href="#">Therapy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    {{--
        ==============================================================================================================
        Scroll Top 
        ==============================================================================================================
    --}}
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    {{--
        ==============================================================================================================
        Preloader
        ==============================================================================================================
    --}}
    <div id="preloader"></div>

    {{--
        ==============================================================================================================
        Vendor JS Files
        ==============================================================================================================
    --}}
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    {{--
        ==============================================================================================================
        Main JavaScript File
        ==============================================================================================================
    --}}
    <script src="assets/js/main.js"></script>
  </body>
</html>
