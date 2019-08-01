{{--
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-05 19:48:47
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 15:29:26
 * @ Description:
*/
--}}


@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7">
                  <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                      <div class="text-muted text-center mt-2 mb-3"><span>{{ __('Reset password') }}</span></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                            
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">{{ __('Send reset link') }}</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

</div>
@endsection
