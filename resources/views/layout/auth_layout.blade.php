<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>

<head style="overflow-x: hidden !important;">
  <meta charset="utf-8" />

  {{-- Title Section --}}
  <title>{{ config('app.name') }} | Sign In</title>

  {{-- Meta Data --}}
  <meta name="description" content="@yield('page_description', $page_description ?? '')" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  {{-- Favicon --}}
  <link rel="shortcut icon" href="{{ asset('media/img/logo.png') }}" />

  {{-- Fonts --}}
  {{ Metronic::getGoogleFontsInclude() }}

  {{-- Global Theme Styles (used by all pages) --}}
  @foreach(config('layout.resources.css') as $style)
  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css" />
  @endforeach

  {{-- Layout Themes (used by all pages) --}}
  @foreach (Metronic::initThemes() as $theme)
  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css" />
  @endforeach

  {{-- Includable CSS --}}
  @yield('styles')
</head>

<body style="overflow-x: hidden !important;" id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class=" login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
      <!--begin::Content-->
      @if(\Illuminate\Support\Facades\Session::has('success'))

      <div class="login-container d-flex flex-center flex-row flex-row-fluid order-2 order-lg-1 flex-row-fluid bg-white py-lg-0 pb-lg-0 pt-15 pb-12">
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
              <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert" style="position: absolute;">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text">{{ \Illuminate\Support\Facades\Session::get('success') }}</div>
                <div class="alert-close">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                  </button>
                </div>
              </div>
              <div class="pb-10 pb-lg-12">
                <div class="text-muted font-weight-bold font-size-h4">
                  <a href="{{ route('home') }}" class="btn btn-primary text-primary font-weight-bolder">Retour</a>
                </div>
              </div>
            </div>
            <!--end: Wizard Nav-->
          </div>
          <!--end::Aside Top-->
        </div>
        <!--end::Container-->
      </div>

      @else
      @yield('content')
      @endif
      <!--begin::Content-->

    </div>
    <!--end::Login-->
  </div>

  <script>
    var HOST_URL = "{{ route('quick-search') }}";
  </script>

  {{-- Global Config (global config for global JS scripts) --}}
  <script>
    var KTAppSettings = {
      "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
      },
      "colors": {
        "theme": {
          "base": {
            "white": "#ffffff",
            "primary": "#3699FF",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#E4E6EF",
            "dark": "#181C32"
          },
          "light": {
            "white": "#ffffff",
            "primary": "#E1F0FF",
            "secondary": "#EBEDF3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
          },
          "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#3F4254",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
          }
        },
        "gray": {
          "gray-100": "#F3F6F9",
          "gray-200": "#EBEDF3",
          "gray-300": "#E4E6EF",
          "gray-400": "#D1D3E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#7E8299",
          "gray-700": "#5E6278",
          "gray-800": "#3F4254",
          "gray-900": "#181C32"
        }
      },
      "font-family": "Poppins"
    };
  </script>

  {{-- Global Theme JS Bundle (used by all pages)  --}}
  @foreach(config('layout.resources.js') as $script)
  <script src="{{ asset($script) }}" type="text/javascript"></script>
  @endforeach

  {{-- Includable JS --}}
  @yield('scripts')

  @section('scripts')
  <script src="{{ asset('js/pages/login-4.js') }}" type="text/javascript"></script>
  @endsection
</body>

</html>
