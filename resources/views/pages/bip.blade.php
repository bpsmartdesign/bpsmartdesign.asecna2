{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class=" container-fluid ">
    <div class="card card-custom gutter-b">
      <div class="card-body">
        <div class="d-flex">
          <!--begin: Info-->
          <div class="flex-grow-1">
            <!--begin: Title-->
            <div class="d-flex align-items-center justify-content-between flex-wrap">
              <div class="mr-3">
                <!--begin::Name-->
                <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                  BIP enrégistrés
                </a>
                <!--end::Name-->
              </div>
              <div class="my-lg-0 my-1">
                <a href="#" class="btn btn-sm btn-success font-weight-bolder text-uppercase">consulter</a>
              </div>
            </div>
            <!--end: Title-->
          </div>
          <!--end: Info-->
        </div>
      </div>
    </div>

    <!--begin::Card-->
    <div class="card card-custom gutter-b">
      <div class="card-body">
        <table class="table table-borderless">
          <thead class="thead-light">
            <tr>
              <th colspan="4">FKYS (YAOUNDE NSIMALEN)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="width: 12%" class="font-size-h5">AGA</td>
              <td>2105310935</td>
              <td>2108312300 EST</td>
              <td style="text-align: right">(A0823/21)</td>
            </tr>
            <tr>
              <td></td>
              <td colspan="2">Présence d'oiseaux</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 12%" class="font-size-h5">OTH</td>
              <td>2105310935</td>
              <td>2108312300 EST</td>
              <td style="text-align: right">(A0823/21)</td>
            </tr>
            <tr>
              <td></td>
              <td colspan="2">Defaillance du VOR</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 12%" class="font-size-h5">OTH</td>
              <td>2105310935</td>
              <td>2108312300 EST</td>
              <td style="text-align: right">(A0823/21)</td>
            </tr>
            <tr>
              <td></td>
              <td colspan="2">Présence sur la piste d ingénieur pour réparer les lampes des balises d atterrissage.</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 12%" class="font-size-h5">OTH</td>
              <td>2105310935</td>
              <td>2108312300 EST</td>
              <td style="text-align: right">(A0823/21)</td>
            </tr>
            <tr>
              <td></td>
              <td colspan="2">La piste numéro 3 est indisponible.</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 12%" class="font-size-h5">OTH</td>
              <td>2105310935</td>
              <td>2108312300 EST</td>
              <td style="text-align: right">(A0823/21)</td>
            </tr>
            <tr>
              <td></td>
              <td colspan="2">Le départ de Air France a eu du retard.</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--end::Card-->
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
