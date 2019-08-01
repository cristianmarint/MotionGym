{{-- 
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-08-01 10:55:21
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 14:53:11
 * @ Description:
 */
 --}}


@extends('layouts.company')
@section('title','Privacy policy')

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

	<section class="sample-text-area">
		<div class="container">
				{!! setting('company.policy') !!}
		</div>
	</section>

@endsection