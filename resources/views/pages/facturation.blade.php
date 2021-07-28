{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom overflow-hidden">
        <div class="card-body p-0">
            <!-- begin: Invoice-->
            <!-- begin: Invoice header-->
            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0"
                style="background-image: url({{ asset('media/bg/bg-6.jpg') }});">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                        <h1 class="display-4 text-white font-weight-boldest mb-10">Facture de redevances d'aéroport</h1>
                        <div class="d-flex flex-column align-items-md-end px-0">
                            <!--begin::Logo-->
                            <a href="#" class="mb-5">
                                <img src="{{ asset('/media/img/logo.png') }}" alt="" />
                            </a>
                            <!--end::Logo-->
                            <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                                <span>Yaoundé Nsimalen</span>
                            </span>
                        </div>
                    </div>
                    <div class="border-bottom w-100 opacity-20"></div>
                    <div class="d-flex justify-content-between text-white pt-6">
                        <div class="d-flex flex-column flex-root">
                            <span class="font-weight-bolde mb-2r">DATE</span>
                            <span class="opacity-70">31 Juillet, 2021</span>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <span class="font-weight-bolder mb-2">N° Facture.</span>
                            <span class="opacity-70">201257</span>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <span class="font-weight-bolder mb-2">DOIT a.</span>
                            <span class="opacity-70">Yaoundé Nsimalen</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Invoice header-->

            <!-- begin: Invoice body-->
            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pl-0 font-weight-bold text-muted  text-uppercase">Type de redevances</th>
                                    <th class="text-right font-weight-bold text-muted text-uppercase">Nombre</th>
                                    <th class="text-right font-weight-bold text-muted text-uppercase">Tarif</th>
                                    <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Totaux</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="font-weight-boldest font-size-lg">
                                    <td class="pl-0 pt-7">Redevance de route</td>
                                    <td class="text-right pt-7">1</td>
                                    <td class="text-right pt-7">287675.47</td>
                                    <td class="text-danger pr-0 pt-7 text-right">287 675.47</td>
                                </tr>
                                <tr class="font-weight-boldest font-size-lg">
                                    <td class="pl-0 pt-7">
                                      Atterissage/Langing <br> Balisage/Runway light <br><br>
                                      Stationement/Runway light <br> Passagers/Passengers <br><br>
                                      SURETE/Safety <br><br>
                                      FRET/Freight <br><br>
                                    </td>
                                    <td class="text-right pt-7">1</td>
                                    <td class="text-right pt-7">1 300</td>
                                    <td class="text-danger pr-0 pt-7 text-right">22.066</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end: Invoice body-->

            <!-- begin: Invoice footer-->
            <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                        <div class="d-flex flex-column mb-10 mb-md-0">
                            <div class="font-weight-bolder font-size-lg mb-3">INFORMATIONS SUPPLEMENTAIRES</div>

                            <div class="d-flex justify-content-between mb-3">
                                <span class="mr-15 font-weight-bold">Date:</span>
                                <span class="text-right">31.07.2021</span></span>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <span class="mr-15 font-weight-bold">Par:</span>
                                <span class="text-right">ABE MANGA</span></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="mr-15 font-weight-bold">Numéraire:</span>
                                <span class="text-right">CFA 1,00000</span></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column text-md-right">
                            <span class="font-size-lg font-weight-bolder mb-1">MONTANT TOTAL</span>
                            <span class="font-size-h2 font-weight-boldest text-danger mb-1">288 975.47 XAF</span>
                            <span>Taxes Comprise</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end: Invoice footer-->

            <!-- begin: Invoice action-->
            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-light-primary font-weight-bold"onclick="window.print();">Télécharger</button>
                    </div>
                </div>
            </div>
            <!-- end: Invoice action-->

            <!-- end: Invoice-->
        </div>

    </div>
    <div class="row links_container">
        
        <div class="links mt-10 ml-5">
            <div id="paypal-button"></div>
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
    
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
    paypal.Button.render({
        env: 'sandbox', // Or 'production'
        style: {
        size: 'large',
        color: 'gold',
        shape: 'pill',
        },
        local:'en_us',
        client:{
            sandbox:'AXQucGaFlxZn156Gp_jiBv8aOIfYeSo757MfR-fSBNkgRbVePOUdUvypt8r6FdRmLfxyiyt_w5_3fp3m',
            production:'demo_production_client_id'
        },
        // Set up the payment:
        // 1. Add a payment callback
        payment: function(data, actions) {
        // 2. Make a request to your server
            return actions.payment.create({
                transactions: [{
                    amount:{
                        total:'0.01',
                        currency:'USD'
                    }
                }]
            })
        },
        // Execute the payment:
        // 1. Add an onAuthorize callback
        onAuthorize: function(data, actions) {
        // 2. Make a request to your server
        return actions.payment.execute().then(function(details){
            window.alert('Thank ypu for your purchase')
            console.log(data)
            console.log(details.cart);
            
        })
        }
    }, '#paypal-button');
    </script>
@endsection
