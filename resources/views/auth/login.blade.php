{{-- Extends layout --}}
@extends('layout.auth_layout')

{{-- Content --}}
@section('content')

<div class=" login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
  <!--begin::Wrapper-->
  <div class="login-content d-flex flex-column pt-lg-0 pt-12">
    <!--begin::Logo-->
    <a href="{{ route('login') }}" class="login-logo pb-xl-20 pb-15">
      <img src="{{ asset('media/img/logo.png') }}" class="max-h-70px" alt="" />
    </a>
    <!--end::Logo-->

    <!--begin::Signin-->
    <div class="login-form">
      <!--begin::Form-->
      <form class="form" id="kt_login_singin_form" method="POST" action="{{ route('login') }}">
        @csrf
        <!--begin::Title-->
        <div class="pb-5 pb-lg-15">
          <h3 class=" font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
          <div class="text-muted font-weight-bold font-size-h4">
            New Here?
            <a href="{{ route('register') }}" class="text-primary font-weight-bolder">Create Account</a>
          </div>
        </div>
        <!--begin::Title-->

        <!--begin::Form group-->
        <div class="form-group">
          <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
          <input class=" form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

          @error('email')
          <div class="alert alert-custom alert-notice alert-light-danger fade show mt-2 py-3" role="alert">
            <div class="alert-icon"><small><i class="flaticon-warning" style="font-size: 12px;"></i></small></div>
            <div class="alert-text">{{ $message }}</div>
            <div class="alert-close">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
              </button>
            </div>
          </div>
          @enderror
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group">
          <div class="d-flex justify-content-between mt-n5">
            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
          </div>
          <input class=" form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" required autocomplete="current-password" />

          @error('password')
          <div class="alert alert-custom alert-notice alert-light-danger fade show mt-2 py-3" role="alert">
            <div class="alert-icon"><small><i class="flaticon-warning" style="font-size: 12px;"></i></small></div>
            <div class="alert-text">{{ $message }}</div>
            <div class="alert-close">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
              </button>
            </div>
          </div>
          @enderror
        </div>
        <!--end::Form group-->

        <div class="form-group">
          <label class="checkbox" for="remember">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <span></span>
            {{ __('Remember Me') }}
          </label>
        </div>

        <!--begin::Action-->
        <div class="pb-lg-0 pb-5">
          <button type="submit" id="kt_login_singin_form_submit_button" class=" btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
            Sign In
          </button>

          @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
          @endif
        </div>
        <!--end::Action-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Signin-->
  </div>
  <!--end::Wrapper-->
</div>

@endsection
