
        {{-- <p>{{$data['license_number']}}</p>
        <img src="{{public_path($imageSrc)}}" alt=""> --}}




<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apna Bharat Pay">
    <meta name="keywords" content="Apna Bharat Pay, Online Payment System">
    <meta name="author" content="Apna Bharat Pay">
    <link rel="icon" href="{{ asset('images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.png') }}" type="image/x-icon">
    <title>Download PDF</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/font-awesome.css') }}"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/photoswipe.css') }}">
    <!-- icomoon icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('custom-icomoon/style.css') }}">
    <!-- Datatable-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatable-extension.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/prism.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/sweetalert2.css') }}">


    <!-- latest jquery-->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <div class="pageLoader" style="display: none;">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <div class="container py-5">
                <div class="col-12">
                    <div class="header-title text-center">
                       <h4>Driving Licence Details</h4>
                    </div>
                    <form class="theme-form">
                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label" for="inputEmail3">Email</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="inputEmail3" type="email" placeholder="Email" data-bs-original-title="" title="">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label" for="inputPassword3">Password</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="inputPassword3" type="password" placeholder="Password" data-bs-original-title="" title="">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label" for="inputPassword3">Contact Number</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="inputnumber" type="number" placeholder="Contact" data-bs-original-title="" title="">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label" for="inputPassword3">Company name</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="url" type="text" placeholder="Company name" data-bs-original-title="" title="">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label" for="inputPassword3">Website</label>
                          <div class="col-sm-9">
                            <input class="form-control" id="Website" type="url" placeholder="Website" data-bs-original-title="" title="">
                          </div>
                        </div>
                        <fieldset class="mb-3">
                          <div class="row">
                            <label class="col-form-label col-sm-3 pt-0">Radios</label>
                            <div class="col-sm-9">
                              <div class="form-check radio radio-primary">
                                <input class="form-check-input" id="radio11" type="radio" name="radio1" value="option1" data-bs-original-title="" title="">
                                <label class="form-check-label" for="radio11">Option 1</label>
                              </div>
                              <div class="form-check radio radio-primary">
                                <input class="form-check-input" id="radio22" type="radio" name="radio1" value="option1" data-bs-original-title="" title="">
                                <label class="form-check-label" for="radio22">Option 2</label>
                              </div>
                              <div class="form-check radio radio-primary">
                                <input class="form-check-input" id="radio33" type="radio" name="radio1" value="option1" disabled="" data-bs-original-title="" title="">
                                <label class="form-check-label" for="radio33">Disabled</label>
                              </div>
                              <div class="form-check radio radio-primary">
                                <input class="form-check-input" id="radio44" type="radio" name="radio1" value="option1" checked="" data-bs-original-title="" title="">
                                <label class="form-check-label" for="radio44">Option 3</label>
                              </div>
                              <div class="form-check radio radio-primary">
                                <input class="form-check-input" id="radio55" type="radio" name="radio1" value="option1" checked="" data-bs-original-title="" title="">
                                <label class="form-check-label" for="radio44">Option 4</label>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <div class="row mb-0">
                          <label class="col-sm-3 col-form-label pb-0 pt-2">Checkbox</label>
                          <div class="col-sm-9">
                            <div class="mb-0">
                              <div class="form-check form-check-inline checkbox checkbox-primary">
                                <input class="form-check-input" id="inline-form-1" type="checkbox" data-bs-original-title="" title="">
                                <label class="form-check-label" for="inline-form-1">Option 1</label>
                              </div>
                              <div class="form-check form-check-inline checkbox checkbox-primary">
                                <input class="form-check-input" id="inline-form-2" type="checkbox" data-bs-original-title="" title="">
                                <label class="form-check-label" for="inline-form-2">Option 1</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap js-->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('js/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ asset('js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('js/chart/knob/knob-chart.js') }}"></script>
    <!-- <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script> -->
    <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('js/owlcarousel/owl.carousel.js') }}"></script>
    <!-- <script src="{{ asset('js/dashboard/dashboard_2.js') }}"></script> -->

    <script src="{{ asset('js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/tooltip-init.js') }}"></script>
    <!-- Template js-->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- login js-->
</body>

</html>
