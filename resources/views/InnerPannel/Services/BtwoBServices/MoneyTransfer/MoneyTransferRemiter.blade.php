@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Money Transfer</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Money Transfer</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Remitter Register</h4>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="col-12 p-0">


                                <div class="tab-content mt-4">
                                    <p class="text-danger">*<?php echo $message; ?></p>
                                    <!-- FOR moneyTransfer -->


                                    <div class="row">

                                        <div class="form-group col-4">
                                            <label class="col-form-label">Mobile Number</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="preMobile" id="preMobile" class="form-control" type="text"
                                                autocomplete="off" value="<?php echo $mobile; ?>" readonly>

                                        </div>

                                        <div class="form-group col-4">
                                            <label class="col-form-label">First Name</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="firstName" id="firstName" class="form-control" type="text"
                                                autocomplete="off" value="<?php echo $firstname; ?>" readonly>

                                        </div>


                                        <div class="form-group col-4">
                                            <label class="col-form-label">Last Name</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="lastName" id="lastName" class="form-control" type="text"
                                                autocomplete="off" value="<?php echo $lastName; ?>" readonly>

                                        </div>


                                        <div class="form-group col-4">
                                            <label class="col-form-label">Address</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="address" id="address" class="form-control" type="text"
                                                autocomplete="off" value="<?php echo $address; ?>" readonly>

                                        </div>

                                        <div class="form-group col-4">
                                            <label class="col-form-label">pincode</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="pincode" id="pincode" class="form-control" type="text"
                                                autocomplete="off" value="<?php echo $pincode; ?>" readonly>

                                        </div>

                                        <div class="form-group col-4">
                                            <label class="col-form-label">Date of Birth</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="dob" id="dob" class="form-control" type="text"
                                                autocomplete="off" value="<?php echo $dob; ?>" readonly>

                                        </div>


                                        <input name="stateresp" id="stateresp" class="form-control" type="hidden"
                                            autocomplete="off" value="<?php echo $stateresp; ?>" readonly>
                                        <input name="bank3_flag" id="bank3_flag" class="form-control" type="hidden"
                                            autocomplete="off" value="<?php echo $bank3_flag; ?>" readonly>
                                        <input name="gst_state" id="gst_state" class="form-control" type="hidden"
                                            autocomplete="off" value="<?php echo $gst_state; ?>" readonly>

                                        <div class="form-group text-center">
                                            <div class="row">
                                                <div class="form-group col-4 "></div>
                                                <div class="form-group col-4 ">
                                                    <label class="col-form-label">OTP</label><span
                                                        class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <input name="otp" id="otp" class="form-control"
                                                        type="text" autocomplete="off" placeholder="Enter OTP">

                                                </div>
                                                <div class="form-group col-4 "></div>
                                            </div>

                                            <button class="btn btn-primary m-t-35" id="remiterRegister">Register</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->


    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');

            $('#remiterRegister').on('click', function() {
                if ($('#otp').val() == "") {
                    errorAlert("Required", "Please enter the otp", "otp");
                    return false;
                }
                submitRemiter();
            });

            function submitRemiter() {
                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to Register Remitter ?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true
                    })
                    .then((willSubmit) => {
                        if (willSubmit) {
                            $('.pageLoader').fadeIn();
                            var preMobile = $('#preMobile').val();
                            var firstName = $('#firstName').val();
                            var lastName = $('#lastName').val();
                            var address = $('#address').val();
                            var pincode = $('#pincode').val();
                            var dob = $('#dob').val();
                            var bank3_flag = $('#bank3_flag').val();
                            var stateresp = $('#stateresp').val();
                            var gst_state = $('#gst_state').val();
                            var otp = $('#otp').val();
                            $.ajax({
                                url: "{{ url('/submitRemiterRegister') }}",
                                data: {
                                    preMobile: preMobile,
                                    firstName: firstName,
                                    lastName: lastName,
                                    address: address,
                                    pincode: pincode,
                                    dob: dob,
                                    bank3_flag: bank3_flag,
                                    gst_state: gst_state,
                                    stateresp: stateresp,
                                    otp: otp
                                },
                                success: function(res) {
                                    $('.pageLoader').fadeOut();
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/services/b2bServices/MoneyTransfer"
                                                }
                                            });
                                    } else {
                                        $('.pageLoader').fadeOut();
                                        swal("Error", res.message, "error").then(
                                            function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/services/b2bServices/MoneyTransfer"
                                                }
                                            }
                                        );
                                    }
                                }
                            });
                        }

                    });
            }
        });
    </script>
@endsection
