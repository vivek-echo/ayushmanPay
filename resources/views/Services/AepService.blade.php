<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/sign-up-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 15:34:56 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.png') }}" type="image/x-icon">
    <title>ABP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker3.min.css') }}">
</head>

<body>
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
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <!-- <div><a class="logo text-center" href="index.html"><img class="img-fluid for-light"
                                    src="{{ asset('images/logo/ABP.png') }}" alt="looginpage" width="320"></a></div> -->
                        <div class="login-main" style="width: 1000px;">
                            <div class="theme-form">

                                <h3>Recharge</h3>

                                <ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link active" id="prepaid-tab" data-bs-toggle="pill" data-bs-target="#prepaid" type="button" role="tab" aria-controls="prepaid" aria-selected="true">Prepaid</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="postpaid-tab" data-bs-toggle="pill" data-bs-target="#postpaid" type="button" role="tab" aria-controls="postpaid" aria-selected="false">Postpaid</button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="pills-tabContent">

                                    <!-- FOR PREPAID -->
                                    <div class="tab-pane fade show active" id="prepaid" role="tabpanel" aria-labelledby="pills-prepaid">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Prepaid Mobile Number</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="Pre-mobile" id="Pre-mobile" class="form-control" type="text" placeholder="Enter Prepaid Mobile Number" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Prepaid Operator</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                                    <option value="0">--Select Prepaid Operator--</option>
                                                    <option value="1">Airtel</option>
                                                    <option value="2">Jio</option>
                                                    <option value="3">BSNL Special</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Circle</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <select name="Circle" id="Circle" class="form-select">
                                                    <option value="0">--Select Circle--</option>
                                                    <option value="1">Jharkhand</option>
                                                    <option value="2">Gujrat</option>
                                                    <option value="3">Odisha</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Recharge Amount</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                                    <button type="button" class="btn btn-outline-info rounded-end" data-bs-toggle="modal" data-bs-target="#prepaidList">See Plans</button>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <button class="btn btn-primary" id="">Process</button>
                                        </div>
                                    </div>

                                    <!-- FOR POSTPAID -->
                                    <div class="tab-pane fade" id="postpaid" role="tabpanel" aria-labelledby="pills-postpaid">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Postpaid Number</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="Post-mobile" id="Post-mobile" class="form-control" type="text" placeholder="Enter Postpaid Number" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Postpaid Operator</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                                    <option value="0">--Select Prepaid Operator--</option>
                                                    <option value="1">Airtel</option>
                                                    <option value="2">Jio</option>
                                                    <option value="3">BSNL Special</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Circle</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <select name="Circle" id="Circle" class="form-select">
                                                    <option value="0">--Select Circle--</option>
                                                    <option value="1">Jharkhand</option>
                                                    <option value="2">Gujrat</option>
                                                    <option value="3">Odisha</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Recharge Amount</label><span class="text-danger fa-lg font-weight-500"> *</span>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                                    <button type="button" class="btn btn-outline-info rounded-end">See Plans</button>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <button class="btn btn-primary" id="">Process</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal For Prepaid -->
        <div class="modal fade" id="prepaidList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Popular</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        .<table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Talktime</th>
                                    <th scope="col">Validity</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">NA</th>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD calls and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td><h5><span class="badge badge-sm badge-default"></span></h5></td>
                                </tr>
                                <tr>
                                <th scope="row">NA</th>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD calls and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td><h5><span class="badge badge-sm badge-default"></span></h5></td>
                                </tr>
                                <tr>
                                <th scope="row">NA</th>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD calls and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td><h5><span class="badge badge-sm badge-default"></span></h5></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- latest jquery-->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- feather icon js-->
        <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
        <script src="{{ asset('js/sweet-alert/sweetalert.min.js') }}"></script>
        {{-- <script src="{{ asset('js/sweet-alert/app.js') }}"></script> --}}
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('js/config.js') }}"></script>
        <!-- Template js-->
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

        <!-- login js-->
    </div>
</body>


</html>