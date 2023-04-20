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
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row ">
            <div class="card">
                {{-- <div class="card card1" style="display:none"> --}}
                <div class="card-header">
                    <h4>BANKING SERVICES</h4>
                </div>
                <div class="card-boay">


                    <ul class="quick-file d-flex flex-row">


                        <li class="p-3">
                            <a href="/services/b2bServices/MoneyTransfer">
                                <div class="quick-box"><i class="myicon-online-banking-2"></i></div>
                                <h6>Money<br> Transfer</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/b2bServices/aepsservice">
                                <div class="quick-box"><i class="myicon-identification"></i></div>
                                <h6>AEPS<br> Withdrawal</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/b2bServices/aepsservice">
                                <div class="quick-box"><i class="myicon-statement"></i></div>
                                <h6>AEPS<br> MiniStatement</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/b2bServices/aepsservice">
                                <div class="quick-box"><i class="myicon-pay"></i></div>
                                <h6>AEPS<br> Balance </h6>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="card">
                {{-- <div class="card card2" style="display:none"> --}}
                <div class="card-header">
                    <h4>E-GOVERNANCE & OTHER SERVICES</h4>
                </div>
                <div class="card-boay">


                    <ul class="quick-file d-flex flex-row">
                        <li class="p-3">
                            <a href="/services/birthcertificate">
                                <div class="quick-box"><i class="myicon-bc"></i></div>
                                <h6>Birth<br> Certificate</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/deathcertificate">
                                <div class="quick-box"><i class="myicon-dc"></i></div>
                                <h6>Death<br> Certificate</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/b2bServices/PanCardUti">
                                <div class="quick-box"><i class="myicon-membership"></i></div>
                                <h6>Pan Card(UTI)</h6>
                            </a>
                        </li>

                        <li class="p-3">
                            <a href="/services/legalServices/PanCardNsld">
                                <div class="quick-box"><i class="myicon-nsdl"></i></div>
                                <h6>NSDL Pan<br> Center</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/legalServices/drivinglicence">
                                <div class="quick-box"><i class="myicon-dl"></i></div>
                                <h6>Driving<br> Licence</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/legalServices/Rc">
                                <div class="quick-box"><i class="myicon-registration"></i></div>
                                <h6>RC<br> Registration</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/legalServices/voterIdCard">
                                <div class="quick-box"><i class="myicon-rc"></i></div>
                                <h6>Voter Id<br> Card</h6>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="card">
                {{-- <div class="card card3" style="display:none"> --}}
                <div class="card-header">
                    <h4>UTILITY SERVICES</h4>
                </div>
                <div class="card-boay">

                    <ul class="quick-file d-flex flex-row">
                        <li class="p-3">
                            <a href="{{ url('/services/b2bServices/mobileRechare') }}">
                                <div class="quick-box"><i class="myicon-payment-gateway-2"></i></div>
                                <h6>Recharge</h6>
                            </a>
                        </li>

                        <li class="p-3">
                            <a href="/services/b2bServices/fasttag">
                                <div class="quick-box"><i class="myicon-barrier"></i></div>
                                <h6>Fast Tag</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="/services/b2bServices/EmiBill">
                                <div class="quick-box"><i class="myicon-correct"></i></div>
                                <h6>EMI Bill Pay</h6>
                            </a>
                        </li class="p-3">

                        <li class="p-3">
                            <a href="/services/broadband">
                                <div class="quick-box"><i class="myicon-wifi"></i></div>
                                <h6>Broadband</h6>
                            </a>
                        </li>

                        <li class="p-3">
                            <a href="/services/b2bServices/LPG">
                                <div class="quick-box"><i class="myicon-gas"></i></div>
                                <h6>LPG Gas</h6>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="card">
                {{-- <div class="card card4" style="display:none"> --}}
                <div class="card-header">
                    <h4>INSURANCE SERVICES</h4>
                </div>
                <div class="card-boay">


                    <ul class="quick-file d-flex flex-row">
                        <li class="p-3">
                            <a href="/services/lifeinsurance">
                                <div class="quick-box"><i class="myicon-family-insurance"></i></div>
                                <h6>LIC</h6>
                            </a>
                        </li>

                        <li class="p-3">
                            {{-- <a href="/services/fixeddepositservice"><div class="quick-box"><i class="myicon-fd"></i></div> --}}
                            <a href="#">
                                <div class="quick-box"><i class="myicon-fd"></i></div>
                                <h6>Fixed Deposit</h6>
                            </a>
                        </li>

                        <li class="p-3">
                            <a href="#">
                                <div class="quick-box"><i class="myicon-health-insurance"></i></div>
                                <h6>Health<br> Insurance</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="#">
                                <div class="quick-box"><i class="myicon-mobile-payment"></i></div>
                                <h6>Payments</h6>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="card">
                {{-- <div class="card card5" style="display:none"> --}}
                <div class="card-header">
                    <h4>TRAVEL SERVICES</h4>
                </div>
                <div class="card-boay">


                    <ul class="quick-file d-flex flex-row">


                        <li class="p-3">
                            <a href="#">
                                <div class="quick-box"><i class="myicon-hotel"></i></div>
                                <h6>Hotel<br> Booking</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="#">
                                <div class="quick-box"><i class="myicon-train"></i></div>
                                <h6>Train<br> Booking</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="#">
                                <div class="quick-box"><i class="myicon-busbooking"></i></div>
                                <h6>Bus<br> Ticketing</h6>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="#">
                                <div class="quick-box"><i class="myicon-airplane"></i></div>
                                <h6>Air<br> Ticketing </h6>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>



        </div>
    </div>

    {{-- <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');
            // $('.card1').slideDown('500');
            // $('.card2').slideDown('500');
            // $('.card3').slideDown('500');
            // $('.card4').slideDown('500');
            // $('.card5').slideDown('500');
        });
    </script>
@endsection
