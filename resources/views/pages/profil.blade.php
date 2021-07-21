{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class=" container ">
    <!--begin::Profile Personal Information-->
    <div class="d-flex flex-row">
      <!--begin::Aside-->
      <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
        <!--begin::Profile Card-->
        <div class="card card-custom gutter-b">
          <!--begin::Body-->
          <div class="card-body pt-4">

            <!--begin::User-->
            <div class="d-flex align-items-center">
              <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                <i class="symbol-badge bg-success"></i>
              </div>
              <div>
                <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                  User full_name
                </a>
                <div class="text-muted">
                  User title
                </div>
                <div class="mt-2">
                  <a href="#" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">User role 1</a>
                  <a href="#" class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">User role 2</a>
                </div>
              </div>
            </div>
            <!--end::User-->

            <!--begin::Contact-->
            <div class="py-9">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">matt@fifestudios.com</a>
              </div>
              <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Phone:</span>
                <span class="text-muted">44(76)34254578</span>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <span class="font-weight-bold mr-2">Address:</span>
                <span class="text-muted">Melbourne</span>
              </div>
            </div>
            <!--end::Contact-->
          </div>
          <!--end::Body-->
        </div>
        <!--end::Profile Card-->
      </div>
      <!--end::Aside-->
      <!--begin::Content-->
      <div class="flex-row-fluid ml-lg-8">
        <!--begin::Card-->
        <div class="card card-custom card-stretch">
          <!--begin::Header-->
          <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
              <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
              <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
            </div>
            <div class="card-toolbar">
              <button type="reset" class="btn btn-success mr-2">Save Changes</button>
              <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
          </div>
          <!--end::Header-->

          <!--begin::Form-->
          <form class="form">
            <!--begin::Body-->
            <div class="card-body">
              <div class="row">
                <label class="col-xl-3"></label>
                <div class="col-lg-9 col-xl-6">
                  <h5 class="font-weight-bold mb-6">Customer Info</h5>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                <div class="col-lg-9 col-xl-6">
                  <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                    <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>

                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                      <i class="fa fa-pen icon-sm text-muted"></i>
                      <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                      <input type="hidden" name="profile_avatar_remove" />
                    </label>

                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </span>

                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </span>
                  </div>
                  <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Full_Name</label>
                <div class="col-lg-9 col-xl-6">
                  <input class="form-control form-control-lg form-control-solid" type="text" value="Nick" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Address 1</label>
                <div class="col-lg-9 col-xl-6">
                  <input class="form-control form-control-lg form-control-solid" type="text" value="Bold" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Address 2</label>
                <div class="col-lg-9 col-xl-6">
                  <input class="form-control form-control-lg form-control-solid" type="text" value="Loop Inc." />
                </div>
              </div>
              <div class="row">
                <label class="col-xl-3"></label>
                <div class="col-lg-9 col-xl-6">
                  <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone 1</label>
                <div class="col-lg-9 col-xl-6">
                  <div class="input-group input-group-lg input-group-solid">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                    <input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone 1" />
                  </div>
                  <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone 2</label>
                <div class="col-lg-9 col-xl-6">
                  <div class="input-group input-group-lg input-group-solid">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                    <input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone 2" />
                  </div>
                  <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                <div class="col-lg-9 col-xl-6">
                  <div class="input-group input-group-lg input-group-solid">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                    <input type="text" class="form-control form-control-lg form-control-solid" value="nick.bold@loop.com" placeholder="Email" />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-xl-3"></label>
                <div class="col-lg-9 col-xl-6">
                  <h5 class="font-weight-bold mt-10 mb-6">Instruments</h5>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
                <div class=" col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2 select2" id="kt_select2_1" name="param" multiple>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                  </select>
                </div>
              </div>
            </div>
            <!--end::Body-->
          </form>
          <!--end::Form-->
        </div>
      </div>
      <!--end::Content-->
    </div>
    <!--end::Profile Personal Information-->
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
<script src="{{ asset('js/pages/crud/forms/widgets/select2.js') }}" type="text/javascript"></script>
@endsection
