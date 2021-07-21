{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
      <h3 class="card-label">Liste : {{ $page_title }}
        <div class="text-muted pt-2 font-size-sm font-italic">listing complet des {{ $page_title }} enrégistrés dans la chorale {{ config('app.name') }}</div>
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
            <div class="col-md-6 my-2 my-md-0">
              <div class="input-icon">
                <input type="text" class="form-control" placeholder="Rechercher..." id="kt_datatable_search_query" />
                <span>
                  <i class="flaticon2-search-1 text-muted"></i>
                </span>
              </div>
            </div>
            <div class="col-md-4 my-2 my-md-0">
              <div class="d-flex align-items-center">
                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                <select class="form-control-solid kt-select2 select2" id="kt_datatable_search_status" style="width: 100% !important;">
                  <option value="">All</option>
                  <option value="1">Good</option>
                  <option value="2">Medium</option>
                  <option value="3">Bad</option>
                  <option value="4">Unusable</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end::Search Form-->

    <!--begin: Datatable-->
    <table class="datatable-table datatable-bordered datatable-head-custom" id="kt_datatable">
      <thead>
        <tr>
          <th title="Field #2">Nom</th>
          <th title="Field #3">Description</th>
          <th title="Field #4">Qté</th>
          <th title="Field #5">Status</th>
          <th title="Field #6">Actions</th>
          <th title="Field #6"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datas as $data)
        <tr class="data-row">
          <td>{{ $data->nom }}</td>
          <td>{{ $data->description }}</td>
          <td>{{ $data->quantite }}</td>
          <td align="right">{{ $data->status }}</td>
          <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
            <!-- <form action="" method="get" class="d-inline-block">
              @csrf
              <input type="hidden" name="id" value="{{ $data->id }}">
              <button class="btn btn-icon btn-warning btn-xs active-edit" title="Edit">
                <i class="flaticon-edit font-size-xs"></i>
              </button>
            </form> -->
            <form action="{{ route('tools.destroy', ['tool' => $data->id]) }}" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-icon btn-danger btn-xs" title="Delete">
                <i class="flaticon-delete font-size-xs"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouvel instrument</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" method="POST" action="{{ route('tools.store') }}">
          @csrf
          <div class="card-body">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Nom : </label>
              <div class="col-lg-9">
                <input type="text" class="form-control form-control-solid" name="nom" placeholder="Nom de l'instruemnt" required />
                <span class="form-text text-muted font-italic">Veuillez renseigner le nom de l'instrument</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Description : </label>
              <div class="col-lg-9">
                <input type="text" name="description" class="form-control form-control-solid" placeholder="Description de l'instrument" />
                <span class="form-text text-muted font-italic">Brève description de cet instrument</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Quantité : </label>
              <div class="col-lg-9">
                <div class="input-group input-group-lg">
                  <input type="number" name="quantite" value="1" step="1" class="form-control form-control-solid" placeholder="quantité disponible" />
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-3 col-sm-12">Etat : </label>
              <div class=" col-lg-9 col-md-9 col-sm-12">
                <select class="form-control form-control-solid kt-select2 select2" id="kt_select2_1" name="status" style="width: 100% !important;" required>
                  <option value="good">Bon état</option>
                  <option value="medium">Moyen état</option>
                  <option value="bad">Mauvais état</option>
                  <option value="unusable">Inutilisable</option>
                </select>
                <span class="form-text text-muted font-italic">Etat actuel de l'instrument</span>
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

<!-- @if (!is_null($old))
<div class="modal fade show" id="editModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouvel instrument</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" id="edit-form" method="POST">
          @csrf
          <input type="hidden" name="id" value="">
          <div class="card-body">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Nom : </label>
              <div class="col-lg-9">
                <input type="text" class="form-control form-control-solid" name="nom" value="{{ $old->nom }}" placeholder="Nom de l'instruemnt" required />
                <span class="form-text text-muted font-italic">Veuillez renseigner le nom de l'instrument</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Description : </label>
              <div class="col-lg-9">
                <input type="text" name="description" value="{{ $old->description }}" class="form-control form-control-solid" placeholder="Description de l'instrument" />
                <span class="form-text text-muted font-italic">Brève description de cet instrument</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Quantité : </label>
              <div class="col-lg-9">
                <div class="input-group input-group-lg">
                  <input type="number" name="quantite" value="{{ $old->quantite }}" step="1" class="form-control form-control-solid" placeholder="quantité disponible" />
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-3 col-sm-12">Etat : </label>
              <div class=" col-lg-9 col-md-9 col-sm-12">
                <select class="form-control form-control-solid kt-select2 select2" id="kt_select2_1" name="status" style="width: 100% !important;" required>
                  <option value="good">Bon état</option>
                  <option value="medium">Moyen état</option>
                  <option value="bad">Mauvais état</option>
                  <option value="unusable">Inutilisable</option>
                </select>
                <span class="form-text text-muted font-italic">Etat actuel de l'instrument</span>
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
@endif -->

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
<script src="{{ asset('js/pages/crud/ktdatatable/base/tools-table.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
@endsection
