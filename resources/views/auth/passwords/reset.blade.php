{{-- 
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-05 19:48:47
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 15:30:08
 * @ Description:
 */ 
--}}

@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                  <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                      <div class="text-muted text-center mt-2 mb-3"><span>{{ __('Reset password') }}</span></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                     <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                                <small >{{ __('Confirm password') }}</small>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">{{ __('Reset') }}</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

</div>
@endsection
