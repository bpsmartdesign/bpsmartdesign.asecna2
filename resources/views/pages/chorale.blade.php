{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class=" container ">
    <!--begin::Education-->
    <div class="d-flex flex-row">
      <!--begin::Aside-->
      <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
        <!--begin::Nav Panel Widget 1-->
        <div class="card card-custom gutter-b">
          <!--begin::Body-->
          <div class="card-body">
            <!--begin::Wrapper-->
            <div class="d-flex justify-content-between flex-column pt-4 h-100">
              <!--begin::Container-->
              <div class="pb-5">
                <!--begin::Header-->
                <div class="d-flex flex-column flex-center">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                    <span class="symbol-label">
                      <img src="{{ asset('media/img/logo.png') }}" class="h-75 align-self-center" alt="Chorale logo" />
                    </span>
                  </div>
                  <!--end::Symbol-->

                  <!--begin::Username-->
                  <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{ count($datas) > 0 ? $datas[0]->name : 'Nothing saved yet' }}</a>
                  <!--end::Username-->

                  <!--begin::Info-->
                  <div class="font-weight-bold text-dark-50 font-size-sm pb-6">{{ count($datas) > 0 ? $datas[0]->address1 : 'Nothing saved yet' }}</div>
                  <!--end::Info-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="pt-1">
                  <!--begin::Text-->
                  <p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7">
                    {{ count($datas) > 0 ? $datas[0]->description : 'Nothing saved yet' }}
                  </p>
                  <!--end::Text-->

                  <!--begin::Item-->
                  <div class="d-flex align-items-center pb-9">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-45 symbol-light mr-4">
                      <span class="symbol-label">
                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                              <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                              <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                              <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span> </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column flex-grow-1">
                      <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Members count</a>
                      <span class="text-muted font-weight-bold">All available members</span>
                    </div>
                    <!--end::Text-->

                    <!--begin::label-->
                    <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">{{ $nbr_user }}</span>
                    <!--end::label-->
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="d-flex align-items-center pb-9">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-45 symbol-light mr-4">
                      <span class="symbol-label">
                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                              <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span> </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column flex-grow-1">
                      <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Chorale events</a>
                      <span class="text-muted font-weight-bold">All chorale events</span>
                    </div>
                    <!--end::Text-->

                    <!--begin::label-->
                    <span class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">{{ $nbr_event }}</span>
                    <!--end::label-->
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="d-flex align-items-center pb-9">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-45 symbol-light mr-4">
                      <span class="symbol-label">
                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                              <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span> </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Text-->
                    <div class="d-flex flex-column flex-grow-1">
                      <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Chorale actualities</a>
                      <span class="text-muted font-weight-bold">Acc chorale actualities</span>
                    </div>
                    <!--end::Text-->

                    <!--begin::label-->
                    <span class="font-weight-bolder label label-xl label-light-info label-inline py-5 min-w-45px">+{{ $nbr_actualite }}</span>
                    <!--end::label-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Body-->
              </div>
              <!--eng::Container-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Body-->
        </div>
        <!--end::Nav Panel Widget 1-->
      </div>
      <!--end::Aside-->

      <!--begin::Content-->
      <div class="flex-row-fluid ml-lg-8">
        <!--begin::Card-->
        <div class="card card-custom gutter-bs">
          <!--Begin::Header-->
          <div class="card-header card-header-tabs-line">
            <div class="card-toolbar">
              <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x " role="tablist">
                <li class="nav-item mr-3">
                  <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                    <span class="nav-icon mr-2">
                      <span class="svg-icon mr-3">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span> </span>
                    <span class="nav-text font-weight-bold">Informations</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!--end::Header-->

          <!--Begin::Body-->
          <div class="card-body px-0">
            <div class="tab-content pt-5">
              <!--begin::Tab Content-->
              <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                <form class="form" method="POST" action="{{ route('chorale.store') }}">
                  @csrf

                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Photo</label>
                    <div class="col-lg-9 col-xl-9">
                      <div class="image-input image-input-outline image-input-circle" id="kt_user_avatar" style="background: #eee">
                        <div class="image-input-wrapper" style="background-image: url(/media/img/logo.png)"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Nom</label>
                    <div class="col-lg-9 col-xl-6">
                      <input class="form-control form-control-lg form-control-solid" type="text" value="{{ count($datas) > 0 ? $datas[0]->name : '' }}" placeholder="Nom de la chorale" name="name" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Addresse</label>
                    <div class="col-lg-9 col-xl-6">
                      <input class="form-control form-control-lg form-control-solid" type="text" value="{{ count($datas) > 0 ? $datas[0]->address1 : '' }}" placeholder="Addresse principale de la chorale" name="address1" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Description</label>
                    <div class="col-lg-9 col-xl-6">
                      <input class="form-control form-control-lg form-control-solid" type="text" value="{{ count($datas) > 0 ? $datas[0]->description : '' }}" placeholder="Description brève de la chorale" name="description" />
                      <span class="form-text text-muted">Random text to explain what is the chorale description.</span>
                    </div>
                  </div>

                  <div class="separator separator-dashed my-10"></div>

                  <!--begin::Heading-->
                  <div class="row">
                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                      <h3 class="font-size-h6 mb-5">Contact Info:</h3>
                    </div>
                  </div>
                  <!--end::Heading-->

                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Phone</label>
                    <div class="col-lg-9 col-xl-6">
                      <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{ count($datas) > 0 ? $datas[0]->phone1 : '' }}" placeholder="Phone" name="phone1" />
                      </div>
                      <span class="form-text text-muted">We'll never share your phone number with anyone else.</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-6">
                      <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{ count($datas) > 0 ? $datas[0]->mail : '' }}" placeholder="Email" name="mail" />
                      </div>
                      <span class="form-text text-muted">We'll never share your email address with anyone else.</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Site url</label>
                    <div class="col-lg-9 col-xl-6">
                      <div class="input-group input-group-lg input-group-solid">
                        <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Website uri" value="{{ count($datas) > 0 ? $datas[0]->website_link : '' }}" name="website_link" />
                      </div>
                    </div>
                  </div>

                  <div class="separator separator-dashed my-10"></div>

                  <!--begin::Heading-->
                  <div class="row">
                    <div class="col-lg-9 col-xl-6 offset-xl-3">
                      <h3 class="font-size-h6 mb-5">Social Info:</h3>
                    </div>
                  </div>
                  <!--end::Heading-->

                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Facebook</label>
                    <div class="col-lg-9 col-xl-6">
                      <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-facebook"></i></span></div>
                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{ count($datas) > 0 ? $datas[0]->facebook_link : '' }}" placeholder="Facebook" name="facebook_link" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 text-right col-form-label">Instagram</label>
                    <div class="col-lg-9 col-xl-6">
                      <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-instagram"></i></span></div>
                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{ count($datas) > 0 ? $datas[0]->instagram_link : '' }}" placeholder="Instagram" name="instagram_link" />
                      </div>
                    </div>
                  </div>

                  <div class="separator separator-dashed my-10"></div>

                  <div class="form-group row">
                    <div class="col-lg-9 col-xl-6">
                      <div class="pl-10">
                        <button type="submit" class="btn btn-warning font-weight-bolder font-size-h6">
                          Update
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
                  </div>
                </form>
              </div>
              <!--end::Tab Content-->
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Education-->
  </div>
  <!--end::Container-->
</div>
<!--end::Entry-->

@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection