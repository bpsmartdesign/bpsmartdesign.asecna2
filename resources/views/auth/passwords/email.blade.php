@extends('layout.auth_layout')

@section('content')

<!--begin::Content-->
<div class=" login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
  <!--begin::Wrapper-->
  <div class="login-content d-flex flex-column pt-lg-0 pt-12">
    <!--begin::Logo-->
    <a href="/" class="login-logo pb-xl-20 pb-15">
      <img src="{{ asset('media/img/logo.png') }}" class="max-h-70px" alt="" />
    </a>
    <!--end::Logo-->

    @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
    @endif

    <!--begin::Signin-->
    <div class="login-form">
      <form class="form" id="kt_login_forgot_form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <!--begin::Title-->
        <div class="pb-5 pb-lg-15">
          <h3 class=" font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
            Forgotten Password ?
          </h3>
          <p class="text-muted font-weight-bold font-size-h4">
            Enter your email to reset your password
          </p>
        </div>
        <!--end::Title-->

        <!--begin::Form group-->
        <div class="form-group">
          <input class=" form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />

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
        <div class="form-group d-flex flex-wrap">
          <button type="submit" id="kt_login_forgot_form_submit_button" class=" btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">
            Submit
          </button>
          <a href="{{ route('login') }}" id="kt_login_forgot_cancel" class=" btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
        </div>
        <!--end::Form group-->
      </form>
    </div>
    <!--end::Signin-->
  </div>
  <!--end::Wrapper-->
</div>
<!--begin::Content-->

@endsection
