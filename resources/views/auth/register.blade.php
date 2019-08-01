{{-- 
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-05 19:48:47
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 15:30:57
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
                      <div class="text-muted text-center mt-2 mb-3"><span>{{ __('Regiter') }}</span></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                       <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>


                        <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">{{ __('Registrarse') }}</button>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                  </div>
                </div>
              </div>

</div>
@endsection
