{{--
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-05 19:48:48
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 15:35:53
 * @ Description:
 */
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="authors" content="@cristianmarint">
	
	<meta name="description" content="{{setting('site.description')}}">
	
	<meta name="keywords" content="{{setting('site.description').' , '.setting('site.title')}}">
	
	<meta charset="UTF-8">
	
	<title>{{setting('site.title')}} @yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('assets/layouts/app/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/layouts/app/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('assets/layouts/app/css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="{{route('welcome')}}">
          <img src="{{ voyager::image(setting('site.logo')) }}" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="{{route('welcome')}}">
                  <img src="{{ voyager::image(setting('site.logo')) }}">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          
          <ul class="navbar-nav ml-auto">
            @guest
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                  <span class="nav-link-inner--text">{{ __('Login') }}</span>
                </a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                      <i class="ni ni-circle-08"></i>
                      <span>{{ __('Register') }}</span>
                    </a>
                </li>
              @endif                
            @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
            @endguest

          </ul>

        </div>
      </div>
    </nav>


    {{-- <!-- Header --> --}}
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">{{setting('site.title')}}</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>


    {{-- <!-- Page content --> --}}
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <footer class="py-5">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                  <p class="font-weight-regular ml-1">Copyright {{setting('site.title')}} &copy; {{date('Y')}} All rights reserved  
                    @if(setting('admin.creator')!=NULL)
                      | Made with <i class="fa fa-heart" style="color:red !important;"></i> by {!! setting('admin.creator')!!}</p>
                    @endif  
              </div>
            </div>
            <div class="col-xl-6">
              <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('policy')}}">Policy</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('conditions')}}">Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  </div>

  {{-- <!--   Core   --> --}}
  <script src="{{asset('assets/layouts/app/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/layouts/app/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>