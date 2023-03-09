<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset(''.config('constant.ASSET').'images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset(''.config('constant.ASSET').'images/favicon/favicon.png') }}" type="image/x-icon">
    <title>Ayushman Pay - Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="{{ asset(''.config('constant.ASSET').'css/vendors/date-picker.css') }}">
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
                        <div><a class="logo text-center" href="/"><img class="img-fluid for-light"
                                    src="{{ asset(''.config('constant.ASSET').'images/logo/ayp-black.png') }}" alt="looginpage" width="320"></a>
                        </div>
                        <div class="login-main-small">
                            <div class="theme-form">

                                <h4 class="text-center">Login</h4>
                                <p class="text-center">Enter your personal details</p>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Email</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="email" id="email" class="form-control" type="text"
                                            placeholder="Email" autocomplete="off">

                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-12">
                                        <label class="col-form-label">Password</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input class="form-control" type="password" name="pswd" id="pswd"
                                            required="" placeholder="Enter Password">

                                    </div>
                                </div>

                            </div>
                            <input name="location" id="location" type="hidden">
                            <div class="form-group text-center mt-2">
                                <button class="btn btn-primary" id="submitButton" type="button">Login</button>
                            </div>
                            <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                    href="/register">Create Account</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal for otp --}}
        <div class="modal fade otpModal" id="otpModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenter" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-center">Authenticate OTP</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Enter your Otp which is shared in your E-mail Id</p>
                        <div class="row">
                            <div class="form-group col-10 mx-auto">
                                <input name="otpValid" id="otpValid" class="form-control" type="number"
                                    autocomplete="off" placeholder="Enter your OTP">
                                <input name="encOTP" id="encOTP" class="form-control" type="hidden"
                                    placeholder="Enter your OTP">


                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-primary" type="button" onclick="validateOtp()">Validate Otp</button>
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
        {{-- <script src="{{ asset(''.config('constant.ASSET').'js/sweet-alert/app.js') }}"></script> --}}
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset(''.config('constant.ASSET').'js/config.js') }}"></script>
        <!-- Template js-->
        <script src="{{ asset(''.config('constant.ASSET').'js/script.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/main.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/datepicker/date-picker/datepicker.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/datepicker/date-picker/datepicker.en.js') }}"></script>
        <script src="{{ asset(''.config('constant.ASSET').'js/datepicker/date-picker/datepicker.custom.js') }}"></script>

        <!-- login js-->

        <script>
            const successCallback = (position) => {
                console.log(position);
            };

            const errorCallback = (error, codeLoc) => {
                if (error.code == 1) {
                    $('#location').val('1');
                    swal("Error", "Please unable the location permission.", "error");

                }
            };
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            $('#submitButton').on('click', function(codeLoc) {

                if ($('#location').val() == 1) {
                    swal("Error", "Please unable the location permission.", "error");
                    return false;
                } else {
                    $('#encOTP').val('');
                    $('#otpValid').val('');
                    submitValidator();
                }

            });



            function submitValidator() {

                if ($('#email').val() == '') {
                    errorAlert("Required", "Please enter Email", "email");
                    return false;
                }

                if ($('#pswd').val() == '') {
                    errorAlert("Required", "Please enter Password", "pswd");
                    return false;
                }


                var email = $('#email').val();
                var pswd = $('#pswd').val();

                $('.pageLoader').show();
                $.ajax({

                    url: "{{ url('/checkExistingUser') }}",
                    data: {
                        email: email,
                        pswd: pswd
                    },
                    success: function(res) {

                        $('.pageLoader').hide();

                        if (res.status == false) {
                            swal("Error", res.message, "error");
                        } else {
                            $('#encOTP').val(res.encOtp);
                            $('#otpModal').modal('show');
                        }

                    }
                });


                // $('#otpModal').modal('show');


                // $('#formSubmit').submit();
            }

            function validateOtp() {
                $('.pageLoader').show();
                var otpValid = $('#otpValid').val();
                var encOtp = $('#encOTP').val();
                $.ajax({

                    url: "{{ url('/checkUserTypedAndEncryptedOTP') }}",
                    data: {
                        encOtp: encOtp,
                        otpValid: otpValid
                    },
                    success: function(res) {

                        $('.pageLoader').hide();

                        if (res.status == false) {
                            swal("Error", res.message, "error");
                        } else {
                            $('.pageLoader').show();
                            var email = $('#email').val();
                            var pswd = $('#pswd').val();
                            $.ajax({
                                url: "{{ url('/loginAction') }}",
                                data: {
                                    email: email,
                                    pswd: pswd
                                },
                                success: function(res) {
                                    $('.pageLoader').fadeIn();
                                    if (res.status == true) {
                                        var loc = window.location;
                                        window.location = loc
                                            .origin + "/dashboard"
                                    } else {
                                        swal("Error", "Something went wrong .Please try again later",
                                            "error").then(
                                            function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin + "/"
                                                }
                                            }
                                        );
                                    }
                                }

                            });
                        }
                    }
                });
            }
        </script>
    </div>
</body>


</html>
