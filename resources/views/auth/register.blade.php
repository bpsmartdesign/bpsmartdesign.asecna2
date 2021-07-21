{{-- Extends layout --}}
@extends('layout.auth_layout')

{{-- Content --}}
@section('content')

<!--begin::Content-->
<div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
  <!--begin::Container-->
  <div class="login-content login-content-signup d-flex flex-column">
    <!--begin::Aside Top-->
    <div class="d-flex flex-column-auto flex-column px-10 mt-10">
      <!--begin::Aside header-->
      <a href="#" class="login-logo pb-lg-4 pb-10 mt-10">
        <img src="{{ asset('media/img/logo.png') }}" class="max-h-70px" alt="" />
      </a>
      <!--end::Aside header-->

      <!--begin: Wizard Nav-->
      <div class="wizard-nav pt-5 pt-lg-15 pb-10">
      </div>
      <!--end: Wizard Nav-->
    </div>
    <!--end::Aside Top-->

    <!--begin::Signin-->
    <div class="login-form">
      <!--begin::Form-->
      <form class="form px-10" novalidate="novalidate" id="kt_login_signup_form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="" data-wizard-type="step-content" data-wizard-state="current">
          <!--begin::Title-->
          <div class="pb-10 pb-lg-12">
            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Création de compte</h3>
            <div class="text-muted font-weight-bold font-size-h4">
              Déjà un compte ?
              <a href="{{ route('login') }}" class="text-primary font-weight-bolder">Se connecter</a>
            </div>
          </div>
          <!--begin::Title-->

          <!--begin::Form Group-->
          <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Nom complet</label>
            <input type="text" class="form-control form-control-solid h-auto py-4 px-3 border-0 rounded-lg font-size-h6 " name="name" placeholder="Votre nom complet" value="{{ old('name') }}" required />

            @error('name')
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
          <!--end::Form Group-->

          <!--begin::Form Group-->
          <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
            <input type="email" class="form-control form-control-solid h-auto py-4 px-3 border-0 rounded-lg font-size-h6 " name="email" placeholder="votre addresse email" value="{{ old('email') }}" required />

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
          <!--end::Form Group-->

          <!--begin::Form Group-->
          <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Mot de passe</label>
            <input type="password" class="form-control form-control-solid h-auto py-4 px-3 border-0 rounded-lg font-size-h6 " name="password" placeholder="Mot de passe" value="{{ old('password') }}" required />

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
          <!--end::Form Group-->

          <!--begin::Form Group-->
          <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Confirmation Mot de passe</label>
            <input type="password" class="form-control form-control-solid h-auto py-4 px-3 border-0 rounded-lg font-size-h6 " name="password_confirmation" placeholder="Confirmer le mot de passe" value="{{ old('password_confirmation') }}" required />
          </div>
          <!--end::Form Group-->
        </div>

        <!--begin: Wizard Actions-->
        <div class="d-flex justify-content-between pt-7">
          <div>
            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3">
              Submit
              <span class="svg-icon svg-icon-md ml-2">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                  </g>
                </svg>
                <!--end::Svg Icon-->
              </span>
            </button>
          </div>
        </div>
        <!--end: Wizard Actions-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Signin-->
  </div>
  <!--end::Container-->
</div>
<!--begin::Content-->

@endsection
{{-- Scripts Section --}}
@section('scripts')
<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>
@endsection
