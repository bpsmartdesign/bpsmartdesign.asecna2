{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="row">
  <div class="col-xs-10">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
      <!--begin::Body-->
      <div class="card-body">
        <!--begin::Section-->
        <div class="d-flex align-items-center">
          <!--begin::Pic-->
          <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
            <span class="svg-icon svg-icon-primary svg-icon-7x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Weather\Sun.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24"/>
                  <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" fill-rule="nonzero"/>
                  <path d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
              </g>
          </svg><!--end::Svg Icon--></span>
          </div>
          <!--end::Pic-->
          <!--begin::Info-->
          <div class="d-flex flex-column mr-auto">
            <!--begin: Title-->
            <a href="#"
              class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">
              DOSSIER METEO
            </a>
            <span class="text-muted font-weight-bold">
              Aujourd'hui, Yaoundé : <?= $decoded->coord->lon. ', '. $decoded->coord->lat ?>
            </span>
            <span class="text-muted font-weight-thin font-italic">
              I distinguish three main text objectives.First, your inform people.A second be to persuade people.
            </span>
            <!--end::Title-->
          </div>
          <!--end::Info-->
        </div>
        <!--end::Section-->
      </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer bg-secondary-o-15 d-flex align-items-center">
        <div class="d-flex">
          <div class="d-flex align-items-center mr-7">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Weather\Temperature-empty.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <path d="M13.9985481,12.5339049 L13,11.956276 L13,5 C13,4.73295228 12.4830082,4.00879513 12,4 C11.4840929,3.99060581 11,4.71476297 11,5 L11,11.956276 L10.0014519,12.5339049 C8.77163638,13.2453148 8,14.5543681 8,16 C8,18.209139 9.790861,20 12,20 C14.209139,20 16,18.209139 16,16 C16,14.5543681 15.2283636,13.2453148 13.9985481,12.5339049 Z M18,16 C18,19.3137085 15.3137085,22 12,22 C8.6862915,22 6,19.3137085 6,16 C6,13.7791529 7.20659589,11.8401214 9,10.8026932 L9,5 C9,3.34314575 10.3431458,2 12,2 C13.6568542,2 15,3.34314575 15,5 L15,10.8026932 C16.7934041,11.8401214 18,13.7791529 18,16 Z" fill="#000000" fill-rule="nonzero"/>
              </g>
          </svg><!--end::Svg Icon--></span> <a href="#" class="font-weight-bolder text-primary ml-2">Max / Min</a>
          </div>
        </div>
        <button type="button"
          class="btn btn-primary btn-xs text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto"><?= $decoded->main->temp_max. '° / '. $decoded->main->temp_min. '°' ?></button>
      </div>
      <div class="card-footer bg-primary-o-30 d-flex align-items-center">
        <div class="d-flex">
          <div class="d-flex align-items-center mr-7">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Weather\Snow2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <path d="M5.74714567,14.0425758 C4.09410362,12.9740356 3,11.1147886 3,9 C3,5.6862915 5.6862915,3 9,3 C11.7957591,3 14.1449096,4.91215918 14.8109738,7.5 L17.25,7.5 C19.3210678,7.5 21,9.17893219 21,11.25 C21,13.3210678 19.3210678,15 17.25,15 L8.25,15 C7.28817895,15 6.41093178,14.6378962 5.74714567,14.0425758 Z" fill="#000000"/>
                  <path d="M11.9058667,18.1192596 C12.4393328,18.2622014 12.7559153,18.8105384 12.6129734,19.3440045 C12.4700316,19.8774706 11.9216947,20.1940531 11.3882286,20.0511113 C10.8547625,19.9081694 10.53818,19.3598325 10.6811218,18.8263664 C10.8240636,18.2929003 11.3724006,17.9763178 11.9058667,18.1192596 Z M15.9058667,18.1192596 C16.4393328,18.2622014 16.7559153,18.8105384 16.6129734,19.3440045 C16.4700316,19.8774706 15.9216947,20.1940531 15.3882286,20.0511113 C14.8547625,19.9081694 14.53818,19.3598325 14.6811218,18.8263664 C14.8240636,18.2929003 15.3724006,17.9763178 15.9058667,18.1192596 Z M7.90586666,18.1192596 C8.43933276,18.2622014 8.75591525,18.8105384 8.61297344,19.3440045 C8.47003163,19.8774706 7.92169467,20.1940531 7.38822857,20.0511113 C6.85476246,19.9081694 6.53817997,19.3598325 6.68112179,18.8263664 C6.8240636,18.2929003 7.37240055,17.9763178 7.90586666,18.1192596 Z" fill="#000000" opacity="0.3"/>
              </g>
          </svg><!--end::Svg Icon--></span> <a href="#" class="font-weight-bolder text-primary ml-2">Humidité</a>
          </div>
        </div>
        <button type="button"
          class="btn btn-primary btn-xs text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto"><?= $decoded->main->humidity. '%'?></button>
      </div>
      <div class="card-footer bg-secondary-o-15 d-flex align-items-center">
        <div class="d-flex">
          <div class="d-flex align-items-center mr-7">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Weather\Cloud-wind.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <path d="M5.74714567,11.0425758 C4.09410362,9.9740356 3,8.11478859 3,6 C3,2.6862915 5.6862915,0 9,0 C11.7957591,0 14.1449096,1.91215918 14.8109738,4.5 L17.25,4.5 C19.3210678,4.5 21,6.17893219 21,8.25 C21,10.3210678 19.3210678,12 17.25,12 L8.25,12 C7.28817895,12 6.41093178,11.6378962 5.74714567,11.0425758 Z" fill="#000000"/>
                  <path d="M4,21 L4,19 L17.5,19 C18.3284271,19 19,18.3284271 19,17.5 L19,17 C19,16.4477153 18.5522847,16 18,16 C17.4477153,16 17,16.4477153 17,17 L17,18 L15,18 L15,17 C15,15.3431458 16.3431458,14 18,14 C19.6568542,14 21,15.3431458 21,17 L21,17.5 C21,19.4329966 19.4329966,21 17.5,21 L4,21 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(12.500000, 17.500000) scale(1, -1) translate(-12.500000, -17.500000) "/>
                  <path d="M4,24 L4,22 L10.5,22 C11.3284271,22 12,21.3284271 12,20.5 L12,20 C12,19.4477153 11.5522847,19 11,19 C10.4477153,19 10,19.4477153 10,20 L10,21 L8,21 L8,20 C8,18.3431458 9.34314575,17 11,17 C12.6568542,17 14,18.3431458 14,20 L14,20.5 C14,22.4329966 12.4329966,24 10.5,24 L4,24 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000000, 20.500000) scale(1, -1) translate(-9.000000, -20.500000) "/>
              </g>
          </svg><!--end::Svg Icon--></span> <a href="#" class="font-weight-bolder text-primary ml-2">Pression</a>
          </div>
        </div>
        <button type="button"
          class="btn btn-primary btn-xs text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">1021.0 mb</button>
      </div>
      <div class="card-footer bg-primary-o-30 d-flex align-items-center">
        <div class="d-flex">
          <div class="d-flex align-items-center mr-7">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Media\Vynil.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24"/>
                  <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M12,16 C14.209139,16 16,14.209139 16,12 C16,9.790861 14.209139,8 12,8 C9.790861,8 8,9.790861 8,12 C8,14.209139 9.790861,16 12,16 Z" fill="#000000"/>
                  <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="1"/>
              </g>
          </svg><!--end::Svg Icon--></span> <a href="#" class="font-weight-bolder text-primary ml-2">Visibilité</a>
          </div>
        </div>
        <button type="button"
          class="btn btn-primary btn-xs text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto"><?= (float)$decoded->visibility / 1000 .' km' ?></button>
      </div>
      <div class="card-footer  bg-secondary-o-15 d-flex align-items-center">
        <div class="d-flex">
          <div class="d-flex align-items-center mr-7">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Weather\Wind.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <path d="M3,13 L3,11 L17.5,11 C18.3284271,11 19,10.3284271 19,9.5 L19,9 C19,8.44771525 18.5522847,8 18,8 C17.4477153,8 17,8.44771525 17,9 L17,10 L15,10 L15,9 C15,7.34314575 16.3431458,6 18,6 C19.6568542,6 21,7.34314575 21,9 L21,9.5 C21,11.4329966 19.4329966,13 17.5,13 L3,13 Z" fill="#000000" fill-rule="nonzero"/>
                  <path d="M3,9 L3,7 L9.5,7 C10.3284271,7 11,6.32842712 11,5.5 L11,5 C11,4.44771525 10.5522847,4 10,4 C9.44771525,4 9,4.44771525 9,5 L9,6 L7,6 L7,5 C7,3.34314575 8.34314575,2 10,2 C11.6568542,2 13,3.34314575 13,5 L13,5.5 C13,7.43299662 11.4329966,9 9.5,9 L3,9 Z M3,15 L9.5,15 C11.4329966,15 13,16.5670034 13,18.5 L13,19 C13,20.6568542 11.6568542,22 10,22 C8.34314575,22 7,20.6568542 7,19 L7,18 L9,18 L9,19 C9,19.5522847 9.44771525,20 10,20 C10.5522847,20 11,19.5522847 11,19 L11,18.5 C11,17.6715729 10.3284271,17 9.5,17 L3,17 L3,15 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
              </g>
          </svg><!--end::Svg Icon--></span> <a href="#" class="font-weight-bolder text-primary ml-2">Vent</a>
          </div>
        </div>
        <button type="button"
          class="btn btn-primary btn-xs text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto"><?= $decoded->wind->speed. ' km/h | ' .$decoded->wind->deg. '°' ?></button>
      </div>
      <div class="card-footer  bg-primary-o-30 d-flex align-items-center">
        <div class="d-flex">
          <div class="d-flex align-items-center mr-7">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Weather\Night-rain.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <path d="M17.2283644,2.20458594 C17.094799,3.04356724 17.1734919,3.92788295 17.4998362,4.77803892 C18.4842043,7.34240534 21.3510057,8.63004045 23.9186178,7.66962325 C23.6471598,9.37476707 22.4989388,10.8926507 20.7710836,11.5559121 C18.1930725,12.5455179 15.3009475,11.2578609 14.3113418,8.67984976 C13.321736,6.1018386 14.609393,3.20971365 17.1874041,2.22010788 C17.2010489,2.21487016 17.2147024,2.20969622 17.2283644,2.20458594 Z M6.5,22 C5.67157288,22 5,21.3284271 5,20.5 C5,19.9477153 5.5,19.1143819 6.5,18 C7.5,19.1143819 8,19.9477153 8,20.5 C8,21.3284271 7.32842712,22 6.5,22 Z M11.5,22 C10.6715729,22 10,21.3284271 10,20.5 C10,19.9477153 10.5,19.1143819 11.5,18 C12.5,19.1143819 13,19.9477153 13,20.5 C13,21.3284271 12.3284271,22 11.5,22 Z M16.5,22 C15.6715729,22 15,21.3284271 15,20.5 C15,19.9477153 15.5,19.1143819 16.5,18 C17.5,19.1143819 18,19.9477153 18,20.5 C18,21.3284271 17.3284271,22 16.5,22 Z" fill="#000000" opacity="0.3"/>
                  <path d="M5.74714567,16.0425758 C4.09410362,14.9740356 3,13.1147886 3,11 C3,7.6862915 5.6862915,5 9,5 C11.7957591,5 14.1449096,6.91215918 14.8109738,9.5 L17.25,9.5 C19.3210678,9.5 21,11.1789322 21,13.25 C21,15.3210678 19.3210678,17 17.25,17 L8.25,17 C7.28817895,17 6.41093178,16.6378962 5.74714567,16.0425758 Z" fill="#000000"/>
              </g>
          </svg><!--end::Svg Icon--></span> <a href="#" class="font-weight-bolder text-primary ml-2">Point de rosée</a>
          </div>
        </div>
        <button type="button"
          class="btn btn-primary btn-xs text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto"><?= $decoded->main->feels_like. '°' ?></button>
      </div>
      <!--end::Footer-->
    </div>
    <!--end::Card-->
  </div>
</div>


@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection
