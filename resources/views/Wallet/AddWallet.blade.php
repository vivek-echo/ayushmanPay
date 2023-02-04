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
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- feather icon js-->
        <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
        <script src="{{ asset('js/sweet-alert/sweetalert.min.js') }}"></script>

        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('js/config.js') }}"></script>
        <!-- Template js-->
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
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
        <!-- <script>
            $(document).ready(function() {
                $('.btn-close').on('click',function(){
                    $('#otpValid').val('');
                })
                var resCaptcha = [];
                captcha();
                /***forCaptcha***/
                // var captchaBind = captcha();
                // $('#capLable').html(captchaBind.captcha);
                /*******/
                $("#pinCode").focusout(function() {
                    $('#loading').show();
                    var pinCode = $(this).val();
                    if (pinCode.length != 6) {
                        errorAlert("Invalid", "Please enter the valid pin code", "pinCode");
                        return false;
                    } else {
                        $.ajax({
                            url: "{{ url('/getState') }}",
                            data: {
                                pinCode: pinCode
                            },
                            success: function(res) {
                                if (res) {
                                    $('#state').val(res.data.state);
                                    $('#stateId').val(res.data.stateId);
                                    $('#city').val(res.data.district);
                                    $('#cityId').val(res.data.districtId);
                                    $('#loading').hide();
                                } else {

                                    $('#loading').hide();
                                    errorAlert("Invalid", "Please enter the valid pin code",
                                        "pinCode");
                                    return false;
                                }

                            }
                        });
                    }

                });

                function captcha() {
                    var res = [];
                    resCaptcha = [];
                    res['captchaA'] = Math.floor(Math.random() * 9 + 1); // generate random number (1-9)
                    res['captchaB'] = Math.floor(Math.random() * 9 + 1); // generate random number (1-9)
                    res['captcha'] = res['captchaA'] + " * " + res['captchaB'];
                    $('#capLable').html(res['captcha']);
                    resCaptcha.push(res);

                }

                $('#refreshCaptch').on('click', function() {
                    captcha();
                });
                $('#submitButton').on('click', function() {
                    submitValidator();
                });

                function submitValidator() {

                    if ($('#memberType').val() == 0) {
                        errorAlert("Required", "Please select Member Type", "memberType");
                        return false;
                    }
                    if ($('#firstName').val() == "") {
                        errorAlert("Required", "Please enter first name", "firstName");
                        return false;
                    }
                    if ($('#lastName').val() == "") {
                        errorAlert("Required", "Please enter last name", "lastName");
                        return false;
                    }
                    if ($('#email').val() == "") {
                        errorAlert("Required", "Please enter email", "email");
                        return false;
                    }
                    if ($('#ShopName').val() == "") {
                        errorAlert("Required", "Please enter Shop Name", "ShopName");
                        return false;
                    }
                    if ($('#dateOfBirth').val() == "") {
                        errorAlert("Required", "Please enter Date of Birth", "dateOfBirth");
                        return false;
                    }

                    if ($('#pinCode').val() == "") {
                        errorAlert("Required", "Please enter Pin Code", "pinCode");
                        return false;
                    }
                    if ($('#state').val() == "") {
                        errorAlert("Required", "Please enter State", "state");
                        return false;
                    }
                    if ($('#city').val() == "") {
                        errorAlert("Required", "Please enter city", "city");
                        return false;
                    }
                    /**validate captcha**/
                    if ($('#captchaCode').val() == "") {
                        errorAlert("Required", "Please enter the captcha", "captchaCode");
                        return false;
                    } else {
                        var captchaValidat = resCaptcha[0].captchaA * resCaptcha[0].captchaB;
                        if (captchaValidat != $('#captchaCode').val()) {
                            errorAlert("Captcha", "Worng Answer", "captchaCode");
                            return false;
                        }
                    }
                    submitForm();
                    // $('#formSubmit').submit();
                }

                function submitForm() {
                    var memberType = $('#memberType').val();
                    var firstName = $('#firstName').val();
                    var lastName = $('#lastName').val();
                    var email = $('#email').val();
                    var shopName = $('#shopName').val();
                    var dateOfBirth = $('#dateOfBirth').val();
                    var pinCode = $('#pinCode').val();
                    var state = $('#state').val();
                    var stateId = $('#stateId').val();
                    var city = $('#city').val();
                    var cityId = $('#cityId').val();
                    var address = $('#address').val();
                    var referralCode = $('#referralCode').val();
                    swal({
                            title: "Are you sure?",
                            text: "Are you sure you want to create a account?",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            //ok


                            $('.pageLoader').fadeIn();
                            $.ajax({
                                url: "{{ url('/vialidateOtpPage') }}",
                                data: {
                                    memberType: memberType,
                                    firstName: firstName,
                                    lastName: lastName,
                                    email: email,
                                    shopName: shopName,
                                    dateOfBirth: dateOfBirth,
                                    pinCode: pinCode,
                                    state: state,
                                    stateId: stateId,
                                    city: city,
                                    cityId: cityId,
                                    address: address,
                                    referralCode: referralCode

                                },

                                success: function(res) {
                                    $('#memberTypeModal').val(res.data.memberType);
                                    $('#firstNameModal').val(res.data.firstName);
                                    $('#lastNameModal').val(res.data.lastName);
                                    $('#emailModal').val(res.data.email);
                                    $('#shopNameModal').val(res.data.shopName);
                                    $('#dateOfBirthModal').val(res.data.dateOfBirth);
                                    $('#pinCodeModal').val(res.data.pinCode);
                                    $('#stateModal').val(res.data.state);
                                    $('#stateIdModal').val(res.data.stateId);
                                    $('#cityModal').val(res.data.city);
                                    $('#cityIdModal').val(res.data.cityId);
                                    $('#addressModal').val(res.data.address);
                                    $('#referralCodeModal').val(res.data.referralCode);
                                    $('#referralCodeModal').val(res.data.referralCode);
                                    $('#otpValidEnc').val(res.data.otpENc);
                                    $('.otpModal').modal('show');
                                    $('.pageLoader').fadeOut();


                                }
                            });
                        })
                }


                //FOR DATEPICKER
                $('#dateOfBirth').datepicker({
                    format: "dd/mm/yyyy"
                });

                $('#createAccountSubmit').on('click', function() {
                    $('.pageLoader').fadeIn();

                    var otpValid = $('#otpValid').val();
                    var otpValidEnc = $('#otpValidEnc').val();
                    $.ajax({
                        url: "{{ url('/validateOtp') }}",
                        data: {
                            otpValidEnc: otpValidEnc,
                            otpValid: otpValid
                        },

                        success: function(res) {

                            if (res.status == false) {
                                $('.pageLoader').fadeOut();
                                $('#InvalidOtp').show();
                               
                            } else {
                                createAccount();
                            }

                        }
                    });
                });

                function createAccount() {

                    $.ajax({
                        url: "{{ url('/createAccount') }}",
                        data: {
                            memberType: $('#memberTypeModal').val(),
                            firstName: $('#firstNameModal').val(),
                            lastName: $('#lastNameModal').val(),
                            email: $('#emailModal').val(),
                            shopName: $('#shopNameModal').val(),
                            dateOfBirth: $('#dateOfBirthModal').val(),
                            pinCode: $('#pinCodeModal').val(),
                            state: $('#stateModal').val(),
                            stateId: $('#stateIdModal').val(),
                            city: $('#cityModal').val(),
                            cityId: $('#cityIdModal').val(),
                            address: $('#addressModal').val(),
                            referralCode: $('#referralCodeModal').val()

                        },
                        success: function(res) {
                            if (res.status == true) {
                                $('.pageLoader').fadeOut();
                                $('.otpModal').modal('hide');
                                swal("Successfull", res.message, "success")
                                    .then(function(res) {
                                        $('.pageLoader').fadeIn();
                                        if (res) {
                                            var loc = window.location;
                                            window.location = loc
                                                .origin + "/login"
                                        }
                                    });
                            } else {
                                $('.pageLoader').fadeOut();
                                $('.otpModal').modal('hide');
                                swal("Error", res.message, "error").then(
                                    function(res) {
                                        $('.pageLoader').fadeIn();
                                        if (res) {
                                            var loc = window.location;
                                            window.location = loc
                                                .origin + "/register"
                                        }
                                    }
                                );
                            }
                        }
                    });
                }

            });
        </script> -->

        <!-- login js-->
    </div>
</body>


</html>