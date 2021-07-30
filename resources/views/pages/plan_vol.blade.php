{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Liste : {{ $page_title }}
                    <div class="text-muted pt-2 font-size-sm font-italic">listing complet des {{ $page_title }}
                        enrégistrés dans {{ config('app.name') }}</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#eltModal">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path
                                    d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                    fill="#000000" opacity="0.3" />
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
                                    <input type="text" class="form-control" placeholder="Rechercher..."
                                        id="kt_datatable_search_query" />
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
                        <th title="Field #1">Liste de plan de vol</th>
                        <th title="Field #2">Dates</th>
                        <th title="Field #3">Aérodrome de départ</th>
                        <th title="Field #3">Heure de départ</th>
                        <th title="Field #4">Aérodrome d'arrivé</th>
                        <th title="Field #5">Routes</th>
                        <th title="Field #6">Aéronefs</th>
                        <th title="Field #14"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Plan de vol numéro 1</td>
                        <td>22 Mars 2021</td>
                        <td>Yaoundé Nsimalen</td>
                        <td>08:00</td>
                        <td>Paris Charles de Gaule's</td>
                        <td>A1</td>
                        <td>Boeing</td>
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
                        <td>Plan de vol numéro 2</td>
                        <td>30 Avril 2021</td>
                        <td>Malabo</td>
                        <td>09:00</td>
                        <td> International jonh F Kennedy</td>
                        <td>A2</td>
                        <td>AirBus</td>
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
                        <td>Plan de vol numéro 3</td>
                        <td>1 Juin 2021</td>
                        <td>Garoua</td>
                        <td>23:45</td>
                        <td> Yaoundé Nsimalen</td>
                        <td>A3</td>
                        <td>Boeing</td>
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
                        <td>Plan de vol numéro 4</td>
                        <td>11 Juin 2021</td>
                        <td>Bamenda</td>
                        <td>09:00</td>
                        <td>Malabo</td>
                        <td>A4</td>
                        <td>Congo</td>
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
                        <td>Plan de vol numéro 5</td>
                        <td>14 Juillet 2021</td>
                        <td>Malabo</td>
                        <td>10:20</td>
                        <td>Yaoundé Nsimalen</td>
                        <td>A2</td>
                        <td>AirBus</td>
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
                    <form class="form" method="POST" action="{{ route('add_plan_vol') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="priority">Priority</label>
                                            <input type="text" name="priority" id="priority" class="form-control"
                                                placeholder="Define priority"  />
                                        </div>
                                    </div>
                                </div>

                                <!-- Right side form -->
                                <div class="col-md-8">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Set address"  />
                                            <input type="text" name="address2" id="address2" class="form-control" />
                                            <input type="text" name="address3" id="address3" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="filing-time">Filing Time</label>
                                            <input type="date" name="filing-time" id="filing-time" class="form-control" placeholder="Set filing time"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side form -->
                                <div class="col-md-8">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="originator">Originator</label>
                                            <input type="text" name="originator" id="originator" class="form-control"
                                                 />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="aircraft-identification">Message type</label>
                                            <input type="text" name="aircraft-identification" id="ircraft-identificatio"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="aircraft-identification">Aircraft identification</label>
                                            <input type="text" name="aircraft-identification" id="ircraft-identificatio"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="flight-group">Flight group</label>
                                            <input type="text" name="flight-group" id="flight-group"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="type-of-flight">Type of flight</label>
                                            <input type="text" name="type-of-flight" id="type-of-flight"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="number">Number</label>
                                            <input type="number" name="number" id="number" class="form-control"
                                                 />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="type-of-aircraft">Type of aircraft</label>
                                            <input type="text" name="type-of-aircraft" id="type-of-aircraft"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="wake-turbulence-cat">Wake turbulence cat</label>
                                            <input type="text" name="wake-turbulence-cat" id="wake-turbulence-cat"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="equipment">EQUIPMENT</label>
                                            <input type="text" name="equipment" id="equipment" class="form-control"
                                                 />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-6">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="departure-aerodrome">DEPARTURE AERODROME</label>
                                            <input type="text" name="departure-aerodrome" id="departure-aerodrome"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form -->
                                <div class="col-md-6">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="time">Time</label>
                                            <input type="time" name="time" id="time" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row" style="margin: 0">
                              <!-- Left side form -->
                              <div class="col-md-3">
                                  <div class="row" style="margin: 0">
                                      <div class="form-group" style="width: 100%">
                                          <label for="cruising-speed">CRUISING SPEED</label>
                                          <input type="number" name="cruising-speed" id="cruising-speed"
                                              class="form-control"  />
                                      </div>
                                  </div>
                              </div>
                              <!-- Middle side form -->
                              <div class="col-md-3">
                                  <div class="row" style="margin: 0">
                                      <div class="form-group" style="width: 100%">
                                          <label for="Level">LEVEL</label>
                                          <input type="int" name="level" id="level" class="form-control"  />
                                      </div>
                                  </div>
                              </div>
                              <!-- Right side form -->
                              <div class="col-md-6">
                                  <div class="row" style="margin: 0">
                                      <div class="form-group" style="width: 100%">
                                          <label for="route">Route</label>
                                          <input type="text" name="route" id="route" class="form-control" placeholder="Set route" />
                                          <input type="text" name="route2" id="route2" class="form-control" />
                                          <input type="text" name="route3" id="route3" class="form-control" />
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="destination-aerodrome">AERODROME DEST</label>
                                            <input type="int" name="destination-aerodrome" id="destination-aerodrome"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form -->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="hr mn">HR MN</label>
                                            <input type="time" name="hr mn" id="hr mn" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form-->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="altn-aerodrome">ALTN AERODROME</label>
                                            <input type="int" name="altn-aerodrome" id="altn-aerodrome"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form-->
                                <div class="col-md-3">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="2nd-altn-aerodrome">2ND ALTN AERODROME</label>
                                            <input type="int" name="2nd-altn-aerodrome" id="2nd-altn-aerodrome"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Right side form -->
                                <div class="col-md-12">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                          <label for="other-information">OTHER INFORMATION</label>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <input type="text" name="other-information" id="other-information" class="form-control" placeholder="Set other informations here" />
                                            </div>
                                            <div class="col-md-4">
                                              <input type="text" name="other-information2" id="other-information2" class="form-control"  placeholder="Also here"/>
                                            </div>
                                            <div class="col-md-4">
                                              <input type="text" name="other-information3" id="other-information3" class="form-control"  placeholder="and here ..."/>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="endurance">ENDURANCE HR MIN</label>
                                            <input type="time" name="endurance" id="endurance" class="form-control"
                                                 />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form -->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="person-on-board">PERSON ON BOARD</label>
                                            <input type="number" name="person-on-board" id="person-on-board"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side form-->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="emergency_radio">Emergency radio</label>
                                            <input type="text" name="emergency_radio" id="emergency_radio"
                                                class="form-control" placeholder="U/V/E"  />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-6">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="polar-desert-maritime-jungle">POLAR DESERT MARITIME
                                                JUNGLE</label>
                                            <input type="int" name="polar-desert-maritime-jungle"
                                                id="polar-desert-maritime-jungle" class="form-control"
                                                placeholder="PDMJ/kk/kkk/kkkk"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side form -->
                                <div class="col-md-6">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="light-fluores-uhf-vhf">LIGHT FLUORES UHF VHF</label>
                                            <input type="int" name="light-fluores-uhf-vhf" id="light-fluores-uhf-vhf"
                                                class="form-control" placeholder="LFUV/kk/kkk/kkkk"  />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-6">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="dinghies-numbers">DINGHIES NUMBERS CAPACITY COVER</label>
                                            <input type="int" name="dinghies-numbers-capacity-cover"
                                                id="dinghies-numbers-capacity-cover" class="form-control"
                                                placeholder="DCC/kk/kkk"  />
                                        </div>
                                    </div>
                                </div>

                                <!-- Left side form -->
                                <div class="col-md-6">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="color">COLOR</label>
                                            <input type="int" name="color" id="coler" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-12">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="aircraft-color-and-markings">AIRCRAFT COLOR AND MARKINGS</label>
                                            <input type="int" name="aircraft-color-and-markings"
                                                id="aircraft-color-and-markings" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-12">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="remarks">REMARKS</label>
                                            <input type="int" name="remarks" id="remarks" class="form-control"
                                                 />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Right side form -->
                                <div class="col-md-12">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="pilot-in-command">PILOT-IN-COMMAND</label>
                                            <input type="int" name="pilot-in-command" id="pilot-in-command"
                                                class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 0">
                                <!-- Left side form -->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="filed-by">FILED BY</label>
                                            <input type="int" name="filed-by" id="filed-by" class="form-control"
                                                 />
                                        </div>
                                    </div>
                                </div>
                                <!-- Middle side form -->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="accepted-by">ACCEPTED BY</label>
                                            <input type="int" name="accepted-by" id="accepted-by" class="form-control"
                                                 />
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side form -->
                                <div class="col-md-4">
                                    <div class="row" style="margin: 0">
                                        <div class="form-group" style="width: 100%">
                                            <label for="additionnal-information">ADDITIONNAL INFORMATION</label>
                                            <input type="int" name="additionnal-information"
                                                id="additionnal-information" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
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
