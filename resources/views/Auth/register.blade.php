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
    <link rel="icon" href="{{ asset('' . config('constant.ASSET') . 'images/favicon/favicon.png') }}"
        type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('' . config('constant.ASSET') . 'images/favicon/favicon.png') }}"
        type="image/x-icon">
    <title>ABP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/feather-icon.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('' . config('constant.ASSET') . 'css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('' . config('constant.ASSET') . 'css/color-1.css') }}"
        media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('' . config('constant.ASSET') . 'css/responsive.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('' . config('constant.ASSET') . 'css/vendors/date-picker.css') }}">
    {{-- <style>
select option:hover {
  box-shadow: 0 0 10px 100px green inset;
  color:white;
}
select option:checked{
  box-shadow: 0 0 10px 100px green inset;
  }
    </style> --}}
    <style>
        .otpbox {
            width: 32px;
            height: 32px;
            text-align: center;

            border: 1px solid #EB7B17;
            margin: 0 10px;
        }

        .otpbox:focus {
            box-shadow: 0px 2px 5px #efb480;
            -webkit-box-shadow: 0px 2px 5px #efb480;
            outline: none;
        }
    </style>
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
                                    src="{{ asset('' . config('constant.ASSET') . 'images/logo/ayp-logo-new.png') }}"
                                    alt="looginpage" width="320"></a>
                        </div>
                        <div class="login-main">
                            <div class="theme-form">

                                <h4 class="text-center">Create your account</h4>
                                <p class="text-center">Enter your personal details to create account</p>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Member Type</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <select name="memberType" id="memberType" class="form-select">
                                            <option value="0">--Select--</option>
                                            <option value="1">District Mananger</option>
                                            <option value="2">Agent</option>
                                        </select>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">First Name</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="firstName" id="firstName" class="form-control" type="text"
                                            placeholder="First name" autocomplete="off">

                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Last Name</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="lastName" id="lastName" class="form-control" type="text"
                                            placeholder="Last name" autocomplete="off">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Email</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="email" id="email" class="form-control" type="text"
                                            placeholder="Email" autocomplete="off">

                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Shop Name</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="shopName" id="shopName" class="form-control" type="text"
                                            placeholder="Shop name" autocomplete="off">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Date Of Birth</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <div class="input-group">
                                            <input name="dateOfBirth" id="dateOfBirth"
                                                class="datepicker-here form-control digits" type="text"
                                                data-language="en" placeholder="Date Of Birth" readonly>
                                            <div class="input-group-text" id="btnGroupAddon"><i
                                                    class="text-secondary" data-feather="calendar"></i></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Pin Code</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <div class="input-group">
                                            <input name="pinCode" id="pinCode" class="form-control" type="text"
                                                autocomplete="off" placeholder="Pin Code">
                                            <div class="input-group-append">
                                                <div class="form-group col-1 mb-0"> <img
                                                        src="{{ asset('' . config('constant.ASSET') . 'images/loader-5.gif') }}"
                                                        alt="" width="45" id="loading"
                                                        style="display:none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">State</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="state" id="state" class="form-control" type="text"
                                            placeholder="State" readonly>
                                        <input name="stateId" id="stateId" class="form-control" type="hidden"
                                            placeholder="State">
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">City</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="city" id="city" class="form-control" type="text"
                                            placeholder="City" readonly>
                                        <input name="cityId" id="cityId" class="form-control" type="hidden"
                                            placeholder="City">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Mobile Number</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <input name="mobile" id="mobile" class="form-control" type="number"
                                            placeholder="Enter your mobile" autocomplete="off">

                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Gender</label><span
                                            class="text-danger fa-lg font-weight-500"> *</span>
                                        <select name="gender" id="gender" class="form-select">
                                            <option value="0">--Select--</option>
                                            <option value="1">MALE</option>
                                            <option value="2">FEMALE</option>
                                            <option value="3">OTHERS</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Address</label>
                                        <input name="address" id="address" class="form-control" type="text"
                                            placeholder="Enter your address" autocomplete="off">

                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Referral Code</label>
                                        <input name="referralCode" id="referralCode" class="form-control"
                                            type="text" placeholder="Enter Referral Code" autocomplete="off">

                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Let's solve this math problem : <span
                                                id="capLable"></span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="captchaCode"
                                                placeholder="Enter User Captcha" autocomplete="off">
                                            <div class="input-group-append">
                                                <div class="form-group col-1 mb-0">
                                                    <div class="form-group col-1 mb-0 p-2">
                                                        <a href="javascript:void(0)" id="refreshCaptch"
                                                            type="button"><img
                                                                src="{{ asset('' . config('constant.ASSET') . 'images/reload.png') }}"
                                                                alt="" width="30"></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group text-center mt-2">
                                <button class="btn btn-primary" id="submitButton">Create
                                    Account</button>
                            </div>
                            <hr>
                            <div class="form-group">

                            </div>
                            <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2"
                                    href="/login">Sign in</a></p>

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
                        <img class="img-fluid for-light"
                            src="{{ asset('' . config('constant.ASSET') . 'images/logo/ayp-new-single.png') }}"
                            alt="looginpage" width="40">
                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center">Authenticate OTP</h4>
                        <p class="text-center">Enter your Otp which is shared in your E-mail Id</p>
                        <input name="memberType" id="memberTypeModal" class="form-control" type="hidden">
                        <input name="firstName" id="firstNameModal" class="form-control" type="hidden">
                        <input name="lastName" id="lastNameModal" class="form-control" type="hidden">
                        <input name="email" id="emailModal" class="form-control" type="hidden">
                        <input name="shopName" id="shopNameModal" class="form-control" type="hidden">
                        <input name="dateOfBirth" id="dateOfBirthModal" class="form-control" type="hidden">
                        <input name="pinCode" id="pinCodeModal" class="form-control" type="hidden">
                        <input name="state" id="stateModal" class="form-control" type="hidden">
                        <input name="stateId" id="stateIdModal" class="form-control" type="hidden">
                        <input name="city" id="cityModal" class="form-control" type="hidden">
                        <input name="mobile" id="mobileModal" class="form-control" type="hidden">
                        <input name="gender" id="genderModal" class="form-control" type="hidden">
                        <input name="cityId" id="cityIdModal" class="form-control" type="hidden">
                        <input name="address" id="addressModal" class="form-control" type="hidden">
                        <input name="referralCode" id="referralCodeModal" class="form-control" type="hidden">
                        <div class="row text-center">
                            <div class="form-group col-10 mx-auto">
                                <input id='inputOtp1' class="otpbox" type='text' maxLength="1"
                                    autocomplete="off" />
                                <input id='inputOtp2' class="otpbox" type='text' maxLength="1"
                                    autocomplete="off" />
                                <input id='inputOtp3' class="otpbox" type='text' maxLength="1"
                                    autocomplete="off" />
                                <input id='inputOtp4' class="otpbox" type='text' maxLength="1"
                                    autocomplete="off" />
                                <input id='inputOtp5' class="otpbox" type='text' maxLength="1"
                                    autocomplete="off" />
                                <input id='inputOtp6' class="otpbox" type='text' maxLength="1"
                                    autocomplete="off" />
                                <input name="otpValidEnc" id="otpValidEnc" class="form-control" type="hidden"
                                    placeholder="Enter your OTP">

                                <code class="text-danger fs-6 " id="InvalidOtp" style="display: none">*Invalid Otp.
                                    Please enter valid otp. </code>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-primary" type="button" id="createAccountSubmit">Validate Otp</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- latest jquery-->
        <script src="{{ asset('' . config('constant.ASSET') . 'js/jquery-3.6.0.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('' . config('constant.ASSET') . 'js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- feather icon js-->
        <script src="{{ asset('' . config('constant.ASSET') . 'js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('' . config('constant.ASSET') . 'js/icons/feather-icon/feather-icon.js') }}"></script>
        <script src="{{ asset('' . config('constant.ASSET') . 'js/sweet-alert/sweetalert.min.js') }}"></script>
        {{-- <script src="{{ asset(''.config('constant.ASSET').'js/sweet-alert/app.js') }}"></script> --}}
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('' . config('constant.ASSET') . 'js/config.js') }}"></script>
        <!-- Template js-->
        <script src="{{ asset('' . config('constant.ASSET') . 'js/script.js') }}"></script>
        <script src="{{ asset('' . config('constant.ASSET') . 'js/main.js') }}"></script>
        <script src="{{ asset('' . config('constant.ASSET') . 'js/datepicker/date-picker/datepicker.js') }}"></script>
        <script src="{{ asset('' . config('constant.ASSET') . 'js/datepicker/date-picker/datepicker.en.js') }}"></script>
        <script src="{{ asset('' . config('constant.ASSET') . 'js/datepicker/date-picker/datepicker.custom.js') }}"></script>
        <script>
            const inputs = ["inputOtp1", "inputOtp2", "inputOtp3", "inputOtp4", "inputOtp5", "inputOtp6"];

            inputs.map((id) => {
                const input = document.getElementById(id);
                addListener(input);
            });

            function addListener(input) {
                input.addEventListener("keyup", () => {

                    const code = parseInt(input.value);
                    if (code >= 0 && code <= 9) {
                        const n = input.nextElementSibling;
                        if (n) n.focus();
                    } else {
                        input.value = "";
                    }

                    const key = event.key; // const {key} = event; ES6+
                    if (key === "Backspace" || key === "Delete") {
                        const prev = input.previousElementSibling;
                        if (prev) prev.focus();
                    }
                });
            }

            $(document).ready(function() {
                $('.btn-close').on('click', function() {
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
                    if ($('#mobile').val() == "") {
                        errorAlert("Required", "Please enter mobile number", "mobile");
                        return false;
                    }
                    if ($('#gender').val() == 0) {
                        errorAlert("Required", "Please select your Gender", "city");
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
                    var mobile = $('#mobile').val();
                    var gender = $('#gender').val();
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
                            if (willDelete) {
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
                                        mobile: mobile,
                                        gender: gender,
                                        address: address,
                                        referralCode: referralCode

                                    },

                                    success: function(res) {
                                        if (res.status == true) {
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
                                            $('#mobileModal').val(res.data.mobile);
                                            $('#genderModal').val(res.data.gender);
                                            $('#addressModal').val(res.data.address);
                                            $('#referralCodeModal').val(res.data.referralCode);
                                            $('#referralCodeModal').val(res.data.referralCode);
                                            $('#otpValidEnc').val(res.data.otpENc);
                                            $('.otpModal').modal('show');
                                            $('.pageLoader').fadeOut();
                                        } else {
                                            $('.pageLoader').fadeOut();
                                            swal("Error", res.msg, "error").then(
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



                        })
                }


                $('#createAccountSubmit').on('click', function() {
                    var ot = $('#inputOtp1').val() + $('#inputOtp2').val() + $('#inputOtp3').val() + $(
                        '#inputOtp4').val() + $(
                        '#inputOtp5').val() + $('#inputOtp6').val()
                    if ($('#inputOtp6').val() == "") {

                        errorAlert("Required", "Please enter OTP", "inputOtp6");
                        return false;
                    }
                    $('.pageLoader').fadeIn();

                    var otpValid = ot;
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
                            mobile: $('#mobileModal').val(),
                            gender: $('#genderModal').val(),
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
        </script>

        <!-- login js-->
    </div>
</body>


</html>
