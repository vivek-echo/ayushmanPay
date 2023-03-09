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
    <link rel="icon" href="{{ asset(''.config('constant.ASSET').'images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset(''.config('constant.ASSET').'images/favicon/favicon.png') }}" type="image/x-icon">
    <title>ABP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/feather-icon.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset(''.config('constant.ASSET').'css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/bootstrap-datepicker3.min.css') }}">
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
                        <div><a class="logo text-center" href="index.html"><img class="img-fluid for-light" src="{{ asset('images/logo/ABP.png') }}" alt="looginpage" width="320"></a></div>
                        <div class="login-main">
                            <div class="theme-form">

                                <h4 class="text-center">Updated Wallat</h4>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label"> Name</label>
                                        <input name="name" id="name" class="form-control" type="text" autocomplete="off" value="<?php echo $name; ?>">
                                        <input type="hidden" value="<?php echo $id; ?>" name="userId" id="userId">

                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Amount</label>
                                        <input name="amount" id="amount" class="form-control" type="number" placeholder="Enter Amount" autocomplete="off">

                                    </div>
                                </div>


                            </div>
                            <div class="form-group text-center mt-2">
                                <button class="btn btn-primary" id="submitButton">Updated Wallet</button>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- latest jquery-->
        <script src="{{ asset(''.config('constant.ASSET').'js/jquery-3.6.0.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset(''.config('constant.ASSET').'js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- feather icon js-->
        <script src="{{ asset(''.config('constant.ASSET').'js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/icons/feather-icon/feather-icon.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/sweet-alert/sweetalert.min.js') }}"></script>

        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset(''.config('constant.ASSET').'js/config.js') }}"></script>
        <!-- Template js-->
        <script src="{{ asset(''.config('constant.ASSET').'js/script.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/main.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/bootstrap-datepicker.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#submitButton').on('click', function() {
                    if ($('#amount').val() == "") {
                        errorAlert("Required", "Please enter the amount", "amount");
                        return false;
                    }

                    submitForm();
                });

                function submitForm() {
                    $('.pageLoader').fadeIn();
                    var userId = $('#userId').val();
                    var amount = $('#amount').val();
                    $.ajax({
                        url: "{{ url('/Wallet/UpdateWallet') }}",
                        data: {
                            userId: userId,
                            amount: amount
                        },
                        success: function(res) {
                            if (res.status == true) {
                                $('.pageLoader').fadeOut();
                                swal("Successfull", res.message, "success")
                                    .then(function(resThen) {
                                        $('.pageLoader').fadeIn();
                                        if (resThen) {
                                            var loc = window.location;
                                            window.location = loc
                                                .origin + "/wallet"
                                        }
                                    });
                            } else {
                                $('.pageLoader').fadeOut();
                                swal("Error", res.message, "error").then(
                                    function(resThen) {
                                        $('.pageLoader').fadeIn();
                                        if (resThen) {
                                            var loc = window.location;
                                            window.location = loc
                                                .origin + "/wallet"
                                        }
                                    }
                                );
                            }
                            $('.pageLoader').fadeOut();

                        }
                    });
                }
            });
        </script>
        

        <!-- login js-->
    </div>
</body>


</html>