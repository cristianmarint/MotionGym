{{-- 
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-08-01 10:55:22
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 14:53:29
 * @ Description:
 */
 --}}


@extends('layouts.company')

@section('content')
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-6 col-md-7 col-sm-8">
					<div class="banner-content">
						<h1 class="text-center">{{ setting('site.title') }}</h1><br>
						<p>{{setting('company.slogan')}}</p>
						<a href="{{route('services')}}" class="primary-btn">Our services<span class="lnr lnr-arrow-right"></span></a>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-4">
					<img src="{{ voyager::image(setting('site-main-pages.banner')) }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</section>



	<section class="video-area" style="background: url({{ voyager::image(setting('site-main-pages.gym_tour_background')) }}) no-repeat center center/cover;">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="video-content">
				<a href="{{setting('site-main-pages.gym_tour')}}" class="play-btn"><img src="{{asset('storage/settings/others/play-btn.png')}}" alt=""></a>
				<h3 class="h2 text-white">{{setting('site-main-pages.gym_tour_message')}}</h3>
			</div>
		</div>
	</section>



	<section class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="single-address text-center">
						<h6>Come and take a look!</h6>
						<p>{{setting('company.address')}}</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="single-address text-center">
						<h6>Contact us</h6>
						<p><a href="tel:{{setting('company.phone_primary')}}">{{setting('company.phone_primary')}}</a></p>
						<p><a href="tel:{{setting('company.phone_secundary')}}">{{setting('company.phone_secundary')}}</a></p>
						<a href="mailto:{{setting('company.email_contact')}}">{{setting('company.email_contact')}}</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection