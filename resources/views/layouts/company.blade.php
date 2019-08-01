{{-- 
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-15 10:01:33
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 15:56:03
 * @ Description:
 */ 
 --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>

	<link rel="icon" type="image/png" href="{{Voyager::image(setting('site.logo'))}}">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="authors" content="@cristianmarint">
	
	<meta name="description" content="{{setting('site.description')}}">
	
	<meta name="keywords" content="{{setting('site.description').' , '.setting('site.title')}}">
	
	<meta charset="UTF-8">
	
	<title>{{setting('site.title')}} @yield('title')</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		{{-- =========== CSS =========== --> --}}
        <link rel="stylesheet" href="{{asset('assets/layouts/company/css/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('assets/layouts/company/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('assets/layouts/company/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/layouts/company/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('assets/layouts/company/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('assets/layouts/company/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/layouts/company/css/main.css')}}">

	</head>
	<body>
		{{-- <!-- Start Header Area --> --}}
		<header class="default-header">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center">
					<div class="logo">
						<a href="{{ route('welcome')}}"><img src="{{voyager::image(setting('site.logo'))}}" height="70" width="70"></a>
					</div>
					<div class="main-menubar d-flex align-items-center">
						<nav class="hide">
							@if(!Request::is('/'))	<a href="{{ route('welcome')}}">Home</a>@endif
							
							@if (Route::has('login'))
									@auth
										<a href="{{ url('/admin') }}">{{setting('admin.title')}}</a>

										<a href="{{route('voyager.profile')}}" >
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>

										<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									@else
										<a href="{{ route('login') }}">login</a>
									@endauth
							@endif
						</nav>
						<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
					</div>
				</div>
			</div>
		</header>
        {{-- <!-- End Header Area --> --}}
        
        <!-- Start content -->
            @yield('content')
        <!-- End content -->

		


		{{-- <!-- Strat Footer Area --> --}}
		<footer class="section-gap footer-widget-area" style="background: url({{voyager::image(setting('site-main-pages.footer'))}}) no-repeat center center/cover;">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">More!</h6>
							<ul class="footer-nav">
								<li><a href="{{route('aboutus')}}">About us</a></li>
								<li><a href="{{route('services')}}">Services</a></li>
								<li><a href="{{route('policy')}}">Policy</a></li>
								<li><a href="{{route('conditions')}}">Conditions</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<div class="container">
				<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-text m-0">Copyright {{setting('site.title')}} &copy; {{date('Y')}} All rights reserved  
					@if(setting('admin.creator')!=NULL)
						| Made with <i class="fa fa-heart" style="color:red !important;"></i> by {!! setting('admin.creator')!!}</p>
					@endif
					<div class="footer-social d-flex align-items-center">
						<a href="{{setting('company.facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="{{setting('company.twitter')}}"  target="_blank"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<script src="{{asset('assets/layouts/company/js/vendor/popper.min.js')}}"></script>
		<script src="{{asset('assets/layouts/company/js/vendor/jquery-2.2.4.min.js')}}"></script>
		<script src="{{asset('assets/layouts/company/js/vendor/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/layouts/company/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('assets/layouts/company/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/layouts/company/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('assets/layouts/company/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/layouts/company/js/main.js')}}"></script>
	</body>
</html>
