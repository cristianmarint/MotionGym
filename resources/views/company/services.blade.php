{{-- 
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-08-01 10:55:21
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 14:53:21
 * @ Description:
 */
 --}}
 


@extends('layouts.company')
@section('title','Services')

@section('content')
	<section class="banner-area relative">
		<div class="container">
			<div class="row align-items-center justify-content-between" style="height:500px;">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="banner-content">
						<h1 class="text-center">{{ setting('site.title') }}</h1><br>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	
	<section class="section-gap carousel-area" style="background: url({{voyager::image(setting('site-main-pages.carousel_background'))}}) no-repeat center center/cover;">
		{{-- <section class="section-gap carousel-area"> --}}
			<div class="overlay overlay-bg"></div>
			<div class="active-bottle-carousel">
			@foreach ($services as $sv)
				<div class="item">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xl-6 col-md-4">
								<div class="carousel-thumb">
									<img src="{{Voyager::image($sv->photo)}}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xl-6 col-md-7">
								<div class="carousel-content">
									<h2 class="text-white">{{$sv->name}}</h2>
									<h5 class="text-white mb-20">{{$sv->price}}</h5>
								<p class="text-white mb-30">{!!$sv->description!!}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach	
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