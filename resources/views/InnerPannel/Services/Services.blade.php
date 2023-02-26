@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Services</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 p-0 d-flex">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="B2Bservices-tab" data-bs-toggle="tab"
                                        href="#B2Bservices" role="tab" aria-controls="B2Bservices"
                                        aria-selected="true"><i data-feather="target"></i>B2B Services</a></li>
                                <li class="nav-item"><a class="nav-link" id="Legalservices-tab" data-bs-toggle="tab"
                                        href="#Legalservices" role="tab" aria-controls="Legalservices"
                                        aria-selected="false"><i data-feather="target"></i>Legal Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="B2Bservices" role="tabpanel"
                                aria-labelledby="B2Bservices-tab">
                                <div class="mb-3">
                                    <h4>B2B Services</h4>
                                </div>

                                <div class="file-manager">
                                    <ul class="quick-file d-flex flex-row">
                                        <li>
                                            <a href="{{ url('/services/b2bServices/mobileRechare') }}"><div class="quick-box"><i class="myicon-payment-gateway-2"></i></div>
                                            <h6>Recharge</h6></a>   
                                        </li>
                                        <li>
                                            <a href="/services/b2bServices/MoneyTransfer"><div class="quick-box"><i class="myicon-online-banking-2"></i></div>
                                            <h6>Money<br> Transfer</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/b2bServices/fasttag"><div class="quick-box"><i class="myicon-barrier"></i></div>
                                            <h6>Fast Tag</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/b2bServices/EmiBill"><div class="quick-box"><i class="myicon-correct"></i></div>
                                            <h6>EMI Bill Pay</h6></a>
                                        </li>
                                        {{-- <li>
                                            <a href="/services/hospital"><div class="quick-box"><i class="myicon-plus1"></i></div>
                                            <h6>Hospital</h6></a>
                                        </li> --}}
                                        <li>
                                            <a href="/services/broadband"><div class="quick-box"><i class="myicon-wifi"></i></div>
                                            <h6>Broadband</h6></a>
                                        </li>
                                        {{-- <li>
                                            <a href="/services/irctcservice"><div class="quick-box"><i class="myicon-train"></i></div>
                                            <h6>IRCTC</h6></a>
                                        </li> --}}
                                        <li>
                                            <a href="/services/PancardUTI"><div class="quick-box"><i class="myicon-membership"></i></div>
                                            <h6>Pan Card(UTI)</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/LpgGasBooking"><div class="quick-box"><i class="myicon-gas"></i></div>
                                            <h6>LPG Gas</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/lifeinsurance"><div class="quick-box"><i class="myicon-family-insurance"></i></div>
                                            <h6>LIC</h6></a>
                                        </li>

                                        {{-- <li>
                                            <a href="/services/fixeddepositservice"><div class="quick-box"><i class="myicon-fd"></i></div>
                                            <h6>Fixed Deposit</h6></a>
                                        </li> --}}
                                        <li>
                                            <a href="/services/aepsservice"><div class="quick-box"><i class="myicon-identification"></i></div>
                                            <h6>AEPS</h6></a>
                                        </li>
                                        {{-- <li>
                                            <a href="#"><div class="quick-box"><i class="myicon-health-insurance"></i></div>
                                            <h6>Health<br> Insurance</h6></a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="#"><div class="quick-box"><i class="myicon-mobile-payment"></i></div>
                                            <h6>Payments</h6></a>
                                        </li> --}}
                                    </ul>
                                </div>

                            </div>


                            <div class="tab-pane fade" id="Legalservices" role="tabpanel"
                                aria-labelledby="Legalservices-tab">
                                <div class="mb-3">
                                    <h4>Legal Services</h4>
                                </div>

                                <div class="file-manager">
                                    <ul class="quick-file d-flex flex-row">
                                        <li>
                                            <a href="/services/birthcertificate"><div class="quick-box"><i class="myicon-bc"></i></div>
                                            <h6>Birth<br> Certificate</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/deathcertificate"><div class="quick-box"><i class="myicon-dc"></i></div>
                                            <h6>Death<br> Certificate</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/nsdlpancenter"><div class="quick-box"><i class="myicon-nsdl"></i></div>
                                            <h6>NSDL Pan<br> Center</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/drivinglicence"><div class="quick-box"><i class="myicon-dl"></i></div>
                                            <h6>Driving<br> Licence</h6></a>
                                        </li>
                                        <li>
                                            <a href="/services/rcservice"><div class="quick-box"><i class="myicon-rc"></i></div>
                                            <h6>RC<br> Registration</h6></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');

        });
    </script>
@endsection
