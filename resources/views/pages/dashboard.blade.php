{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="row">
        <div class="col-lg-12">
            <p class="text-bold text-inverse-dark-25 font-size-h5">AGENCE POUR LA SÉCURITÉ DE LA NAVIGATION AÉRIENNE EN AFRIQUE ET A MADAGASCAR</p>
        </div>
        <div class="col-lg-6 col-xxl-4">
            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0 lg_img m-auto card card-custom" style="background-image: url({{ asset('media/bg/1.jpeg') }});"></div>
        </div>

        <div class="col-lg-6 col-xxl-4">
            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0 lg_img m-auto card card-custom" style="background-image: url({{ asset('media/bg/2.jpeg') }});"></div>
        </div>

        <div class="col-lg-6 col-xxl-4">
            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0 sm_img card card-custom" style="background-image: url({{ asset('media/bg/3.jpeg') }});"></div>
            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0 sm_img mt-10 card card-custom" style="background-image: url({{ asset('media/bg/4.jpeg') }});"></div>
        </div>
        <div class="col-lg-12 mt-5">
            <a href="https://asecnaonline.asecna.aero/index.php/fr/" target="blank" class="font-italic">En savoir plus ...</a>
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
