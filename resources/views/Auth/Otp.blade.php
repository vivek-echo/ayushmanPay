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
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper" >
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo text-center" href="index.html"><img class="img-fluid for-light" src="{{ asset('images/logo/ABP.png') }}" alt="looginpage" width="320"></a></div>
                        <div class="login-main">
                            <form class="theme-form" id="formSubmit" method="POST" novalidate action="{{url('createAccount')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <h4 class="text-center">OTP</h4>
                                <p class="text-center">Enter your otp which was shared in your email and mobile number</p>

                                <div class="row text-center">
                                    <input name="memberType" id="memberType" class="form-control" type="hidden" value="<?php echo $memberType; ?>">
                                    <input name="firstName" id="firstName" class="form-control" type="hidden" value="<?php echo $firstName; ?>">
                                    <input name="lastName" id="lastName" class="form-control" type="hidden" value="<?php echo $lastName; ?>">
                                    <input name="email" id="email" class="form-control" type="hidden" value="<?php echo $email; ?>">
                                    <input name="shopName" id="shopName" class="form-control" type="hidden" value="<?php echo $shopName; ?>">
                                    <input name="dateOfBirth" id="dateOfBirth" class="form-control" type="hidden" value="<?php echo $dateOfBirth; ?>">
                                    <input name="pinCode" id="pinCode" class="form-control" type="hidden" value="<?php echo $pinCode; ?>">
                                    <input name="state" id="state" class="form-control" type="hidden" value="<?php echo $state; ?>">
                                    <input name="stateId" id="stateId" class="form-control" type="hidden" value="<?php echo $stateId; ?>">
                                    <input name="city" id="city" class="form-control" type="hidden" value="<?php echo $city; ?>">
                                    <input name="cityId" id="cityId" class="form-control" type="hidden" value="<?php echo $cityId; ?>">
                                    <input name="address" id="address" class="form-control" type="hidden" value="<?php echo $address; ?>">
                                    <input name="referralCode" id="referralCode" class="form-control" type="hidden" value="<?php echo $referralCode; ?>">
                                </div>
                                <div class="form-group col-6">
                                    <input name="otpValid" id="otpValid" class="form-control" type="text" placeholder="Enter your OTP" value="<?php echo $otp; ?>">
                                    <input name="otpValidEnc" id="otpValidEnc" class="form-control" type="hidden" placeholder="Enter your OTP" value="<?php echo $otpENc; ?>">
                                </div>
                            </form>
                            <div class="form-group text-center mt-2">
                                <button class="btn btn-primary" id="submitButton">Create
                                    Account</button>
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
        {{-- <script src="{{ asset('js/sweet-alert/app.js') }}"></script> --}}
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('js/config.js') }}"></script>
        <!-- Template js-->
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#submitButton').on('click', function() {
                    // $('#formSubmit').submit();
                    $('.loader-wrapper').show();
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
                    var otpValidEnc = $('#otpValidEnc').val();
                    var otpValid = $('#otpValid').val();
                    $.ajax({
                        url: "{{ url('/validateOtp') }}",
                        data: {
                            otpValidEnc: otpValidEnc,
                            otpValid: otpValid
                        },
                        success: function(res) {
                            console.log(res);
                            if (res.status == false) {
                                swal("INVALID OTP", "Entered otp is invalid", "error");
                                // $('.loader-wrapper').hide();
                            } else {

                                $.ajax({
                                    url: "{{ url('/createAccount') }}",
                                    data: {
                                        memberType: memberType,
                                        firstName:firstName ,
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
                                        if(res.status == true){
                                            swal("Good job!", "You clicked the button!", "success");
                                        }
                                        // $('.loader-wrapper').hide();

                                    }
                                });
                                // $('#formSubmit').submit();
                            }
                            // if (res) {
                            //     $('#state').val(res.data.state);
                            //     $('#stateId').val(res.data.stateId);
                            //     $('#city').val(res.data.district);
                            //     $('#cityId').val(res.data.districtId);
                            //     $('#loading').hide();
                            // } else {

                            //     $('#loading').hide();
                            //     errorAlert("Invalid", "Please enter the valid pin code", "pinCode");
                            //     return false;
                            // }

                        }
                    });
                });
            });
        </script>
        <!-- login js-->
    </div>
</body>


</html>