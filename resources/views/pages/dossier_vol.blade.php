{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
      <h3 class="card-label">Liste : {{ $page_title }}
        <div class="text-muted pt-2 font-size-sm font-italic">listing complet des {{ $page_title }} enrégistrés dans {{ config('app.name') }}</div>
      </h3>
    </div>
    <div class="card-toolbar">
      <!--begin::Button-->
      <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#eltModal">
        <span class="svg-icon svg-icon-md">
          <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24" />
              <circle fill="#000000" cx="9" cy="15" r="6" />
              <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
            </g>
          </svg>
          <!--end::Svg Icon-->
        </span>Ajouter</a>
      <!--end::Button-->
    </div>
  </div>
  <div class="card-body">
    <!--begin::Search Form-->
    <div class="mb-7">
      <div class="row align-items-center">
        <div>
          <div class="row align-items-center">
            <div class="col-md-12 my-2 my-md-0">
              <div class="input-icon">
                <input type="text" class="form-control" placeholder="Rechercher..." id="kt_datatable_search_query" />
                <span>
                  <i class="flaticon2-search-1 text-muted"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end::Search Form-->

    <!--begin: Datatable-->
    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
      <thead>
        <tr>
          <th title="Field #1">#</th>
          <th title="Field #2">Priority</th>
          <th title="Field #3">Address</th>
          <th title="Field #4">Filling time</th>
          <th title="Field #5">Originator</th>
          <th title="Field #6">Message Type</th>
          <th title="Field #14">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
        <tr>
          <td>06-36</td>
          <td>
            <span class="label label-warning label-inline font-weight-lighter mr-2  text-white">Low</span>
          </td>
          <td>2569 Farm Meadow Drive, Clarksville</td>
          <td>08:00</td>
          <td>1099 New York Avenue, Grand prairie</td>
          <td>#aAjk34</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <form action="#" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <a href="#" class="btn btn-danger btn-xs">
                <i class="flaticon2-pie-chart"></i> Supp.
              </a>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
    <!--end: Datatable-->
  </div>
</div>

<!-- Modal-->
<div class="modal fade" id="eltModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouvel élément</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" method="POST" action="#">
          @csrf
          <div class="card-body">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Titre : </label>
              <div class="col-lg-9">
                <input type="text" class="form-control form-control-solid" name="title" placeholder="..." required />
                <span class="form-text text-muted font-italic">Veuillez renseigner le ...</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Description : </label>
              <div class="col-lg-9">
                <input type="text" name="description" class="form-control form-control-solid" placeholder="..." />
                <span class="form-text text-muted font-italic">Brève ...</span>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
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
<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection
