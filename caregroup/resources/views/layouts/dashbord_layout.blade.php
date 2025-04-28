<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>caregroup</title>
  <link rel="shortcut icon" type="image/png" href="../assets/img/brand_icon.png" />
  <link rel="stylesheet" href="{{asset('/dashbord_assets/css/styles.min.css')}}" />
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

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between text-align-center">
          <a href="" class="text-nowrap logo-img">
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('insert_doctor')}}" aria-expanded="false">
                  <span>
                    <i class="fa-solid fa-file-import"></i>
                  </span>
                  <span class="hide-menu">Insert Doctor</span>
                </a>
              </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('doctors_profile')}}" aria-expanded="false">
                  <span>
                    <i class="fa-solid fa-user-doctor"></i>
                  </span>
                  <span class="hide-menu">Doctors Profile</span>
                </a>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('insert_patient')}}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-file-arrow-down"></i>
                </span>
                <span class="hide-menu">Insert Patient</span>
              </a>
            </li>       
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patients_profile')}}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-hospital-user"></i>
                </span>
                <span class="hide-menu">Patients Profile</span>
              </a>
            </li>       
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patients_appointment')}}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-calendar-check"></i>
                </span>
                <span class="hide-menu">Patients Appointment</span>
              </a>
            </li>       
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" >
            <ul class="m-0 p-0">
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
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <section style="
      margin: 0 40px;
      ">
        @yield('dashbord_section')
      </section>
    </div>
  </div>
  <script src="{{asset('dashbord_assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('dashbord_assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('dashbord_assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('dashbord_assets/js/app.min.js')}}"></script>
  <script src="{{asset('dashbord_assets/libs/simplebar/dist/simplebar.js')}}"></script>

  {{--
        ==============================================================================================================
        Vendor JS Files
        ==============================================================================================================
    --}}
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    {{--
        ==============================================================================================================
        Main JavaScript File
        ==============================================================================================================
    --}}
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>