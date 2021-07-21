{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class=" container ">
    <!--begin::Row-->
    <div class="row">
      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75">
                  <img alt="Pic" src="{{ asset('media/users/300_1.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-primary d-none">
                  <span class="font-size-h3 font-weight-boldest">JM</span>
                </div>
              </div>
              <!--end::Pic-->

              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Luca Doncic</a>
                <span class="text-muted font-weight-bold">Head of Development</span>
              </div <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              I distinguish three <a href="#" class="text-primary pr-1">#XRS-54PQ</a> objectives First
              objectives and nice cooked rice
            </p>
            <!--end::Desc-->

            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">luca@festudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-1">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">44(76)34254578</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">Barcelona</span>
              </div>
            </div>
            <!--end::Info-->
            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->

      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75">
                  <img alt="Pic" src="{{ asset('media/users/300_10.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-primary d-none">
                  <span class="font-size-h3 font-weight-boldest">JM</span>
                </div>
              </div>
              <!--end::Pic-->

              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Charlie Stone</a>
                <span class="text-muted font-weight-bold">Head of Development</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              I distinguish three <a href="#" class="text-primary pr-1">#XRS-65PQ</a> objectives First
              <span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span> doloremagna
            </p>
            <!--end::Desc-->

            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">luca@festudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-1">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">44(76)34254578</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">Barcelona</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->

      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75 d-none">
                  <img alt="Pic" src="{{ asset('media/users/300_10.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-primary">
                  <span class="symbol-label font-size-h3 font-weight-boldest">AK</span>
                </div>
              </div>
              <!--end::Pic-->

              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Anna Krox</a>
                <span class="text-muted font-weight-bold">Python Developer</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              I distinguish three <a href="#" class="text-primary pr-1">#XRS-54PQ</a> objectives First merely first
              <span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span>
            </p>
            <!--end::Desc-->

            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">giannis@fifestudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-2">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">52(43)56254826</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">Moscow</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row">
      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75">
                  <img alt="Pic" src="{{ asset('media/users/300_2.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-primary d-none">
                  <span class="font-size-h3 font-weight-boldest">JM</span>
                </div>
              </div>
              <!--end::Pic-->
              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Teresa Fox</a>
                <span class="text-muted font-weight-bold">Project Manager</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              Lorem Ipsum is simply <a href="#" class="text-primary pr-1">#XRS-65PQ</a> dummy text of
              objectives and nice cooked rice
            </p>
            <!--end::Desc-->

            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">teresa@festudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-1">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">75(58)87545243</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">France</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75 d-none">
                  <img alt="Pic" src="{{ asset('media/users/300_10.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-primary">
                  <span class="symbol-label font-size-h3 font-weight-boldest">GN</span>
                </div>
              </div>
              <!--end::Pic-->

              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Giannis Nelson</a>
                <span class="text-muted font-weight-bold">Python Developer</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              I distinguish three <a href="#" class="text-primary pr-1">#XRS-65PQ</a>objectives First
              <span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span> doloremagna
            </p>
            <!--end::Desc-->
            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">giannis@fifestudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-2">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">52(43)56254826</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">Moscow</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75">
                  <img alt="Pic" src="{{ asset('media/users/300_16.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-primary d-none">
                  <span class="font-size-h3 font-weight-boldest">LM</span>
                </div>
              </div>
              <!--end::Pic-->

              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Lisa Moss</a>
                <span class="text-muted font-weight-bold">USD421/Annual</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              I distinguish three <a href="#" class="text-primary pr-1">#XRS-54PQ</a> objectives First merely first
              <span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span>
            </p>
            <!--end::Desc-->

            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">lisa@fifestudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-1">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">43(16)98462644</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">London</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row">
      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75">
                  <img alt="Pic" src="{{ asset('media/users/300_7.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-primary d-none">
                  <span class="font-size-h3 font-weight-boldest">JM</span>
                </div>
              </div>
              <!--end::Pic-->

              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Kate Fox</a>
                <span class="text-muted font-weight-bold">Art Director</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              Lorem Ipsum is simply <a href="#" class="text-primary pr-1">#XRS-65PQ</a> dummy text of
              objectives and nice cooked rice
            </p>
            <!--end::Desc-->

            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">teresa@festudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-1">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">75(58)87545243</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">France</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->

      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75 d-none">
                  <img alt="Pic" src="{{ asset('media/users/300_10.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-success">
                  <span class="symbol-label font-size-h3 font-weight-boldest">PL</span>
                </div>
              </div>
              <!--end::Pic-->
              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Nick Nelson</a>
                <span class="text-muted font-weight-bold">Python Developer</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              I distinguish three <a href="#" class="text-primary pr-1">#XRS-65PQ</a>objectives First
              <span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span> doloremagna
            </p>
            <!--end::Desc-->
            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">giannis@fifestudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-2">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">52(43)56254826</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">Moscow</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->

      <!--begin::Col-->
      <div class="col-xl-4">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
          <!--begin::Body-->
          <div class="card-body pt-4">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-7">
              <!--begin::Pic-->
              <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                <div class="symbol symbol-lg-75">
                  <img alt="Pic" src="{{ asset('media/users/300_20.jpg') }}" />
                </div>
                <div class="symbol symbol-lg-75 symbol-danger d-none">
                  <span class="font-size-h3 font-weight-boldest">LM</span>
                </div>
              </div>
              <!--end::Pic-->
              <!--begin::Title-->
              <div class="d-flex flex-column">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Ana Moss</a>
                <span class="text-muted font-weight-bold">USD421/Annual</span>
              </div>
              <!--end::Title-->
            </div>
            <!--end::User-->

            <!--begin::Desc-->
            <p class="mb-7">
              I distinguish three <a href="#" class="text-primary pr-1">#XRS-54PQ</a> objectives First merely first
              <span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span>
            </p>
            <!--end::Desc-->

            <!--begin::Info-->
            <div class="mb-7">
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">lisa@fifestudios.com</a>
              </div>
              <div class="d-flex justify-content-between align-items-cente my-1">
                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                <a href="#" class="text-muted text-hover-primary">43(16)98462644</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                <span class="text-muted font-weight-bold">London</span>
              </div>
            </div>
            <!--end::Info-->

            <div class="row">
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">edit</a>
              </div>
              <div class="col-xl-6">
                <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#exampleModalScrollable">disable</a>
              </div>
            </div>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Card-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->
  </div>
  <!--end::Container-->
</div>
<!--end::Entry-->

<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Launch demo modal
</button>

<!-- Modal-->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <div class="modal-body">
        <form class="form">
          <div class="card-body">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Full Name:</label>
              <div class="col-lg-9">
                <input type="email" class="form-control form-control-solid" placeholder="Enter full name" />
                <span class="form-text text-muted">Please enter your full name</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Email address:</label>
              <div class="col-lg-9">
                <input type="email" class="form-control form-control-solid" placeholder="Enter email" />
                <span class="form-text text-muted">We'll never share your email with anyone else</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Subscription</label>
              <div class="col-lg-9">
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                  <input type="text" class="form-control form-control-solid" placeholder="99.9" />
                </div>
              </div>
            </div>
            <div class="form-group row align-items-center">
              <label class="col-lg-3 col-form-label">Communication:</label>
              <div class="col-lg-6">
                <div class="checkbox-inline">
                  <label class="checkbox">
                    <input type="checkbox" />
                    <span></span>
                    Email
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" />
                    <span></span>
                    SMS
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" />
                    <span></span>
                    Phone
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="reset" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection
