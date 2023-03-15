@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Profile Update</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Profile Section</li>
                        <li class="breadcrumb-item active">profile Update</li>
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
                    <div class="card-body">

                        <div class="default-according style-1" id="accordionoc">
                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon" aria-expanded="true"
                                            aria-controls="collapse11"><i class="myicon-disc"></i>
                                            Profile Update</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">First Name</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="firstName" id="firstName" class="form-control" type="text"
                                                    placeholder="First name" autocomplete="off"
                                                    value="{{ $profile->firstName }}">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Last Name</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="lastName" id="lastName" class="form-control" type="text"
                                                    placeholder="Last name" autocomplete="off"
                                                    value="{{ $profile->lastName }}">

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Email</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="email" id="email" class="form-control" type="text"
                                                    placeholder="Email" autocomplete="off" value="{{ $profile->email }}"
                                                    readonly>

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Shop Name</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="shopName" id="shopName" class="form-control" type="text"
                                                    placeholder="Shop name" autocomplete="off"
                                                    value="{{ $profile->shopName }}">

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Date Of Birth</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <div class="input-group">
                                                    <input name="dateOfBirth" id="dateOfBirth"
                                                        class="datepicker-here form-control digits" type="text"
                                                        data-language="en" placeholder="Date Of Birth"
                                                        value="{{ $profile->dateOfBirth }}" readonly>
                                                    <div class="input-group-text" id="btnGroupAddon"><i
                                                            class="text-secondary" data-feather="calendar"></i></div>
                                                </div>
                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Pin Code</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <div class="input-group">
                                                    <input name="pinCode" id="pinCode" class="form-control" type="text"
                                                        autocomplete="off" placeholder="Pin Code"
                                                        value="{{ $profile->pinCode }}">
                                                    <div class="input-group-append">
                                                        <div class="form-group col-1 mb-0"> <img
                                                                src="{{ asset('images/loader-5.gif') }}" alt=""
                                                                width="45" id="loading" style="display:none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">State</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="state" id="state" class="form-control" type="text"
                                                    placeholder="State" readonly value="{{ $profile->state }}">
                                                <input name="stateId" id="stateId" class="form-control" type="hidden"
                                                    placeholder="State" value="{{ $profile->stateId }}">
                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">City</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="city" id="city" class="form-control" type="text"
                                                    placeholder="City" readonly value="{{ $profile->city }}">
                                                <input name="cityId" id="cityId" class="form-control" type="hidden"
                                                    placeholder="City" value="{{ $profile->cityId }}">

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Mobile Number</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="mobile" id="mobile" class="form-control" type="number"
                                                    placeholder="Enter your mobile" autocomplete="off"
                                                    value="{{ $profile->mobile }}">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Gender</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <select name="gender" id="gender" class="form-select">
                                                    <option value="0">--Select--</option>
                                                    <option value="1" <?php if ($profile->gender == 1) {
                                                        echo 'selected';
                                                    } ?>>MALE</option>
                                                    <option value="2" <?php if ($profile->gender == 2) {
                                                        echo 'selected';
                                                    } ?>>FEMALE</option>
                                                    <option value="3" <?php if ($profile->gender == 3) {
                                                        echo 'selected';
                                                    } ?>>OTHERS</option>
                                                </select>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Address</label>
                                                <input name="address" id="address" class="form-control" type="text"
                                                    placeholder="Enter your address" autocomplete="off"
                                                    value="{{ $profile->address }}">

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Member Type</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <select name="memberType" id="memberType" class="form-select" disabled>
                                                    <option value="0">--Select--</option>
                                                    <option value="1" <?php if ($profile->memberType == 1) {
                                                        echo 'selected';
                                                    } ?>>District Mananger</option>
                                                    <option value="2" <?php if ($profile->memberType == 2) {
                                                        echo 'selected';
                                                    } ?>>Agent</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="d-flex align-items-center">
                                            <div class="form-group mt-3">
                                                <button class="btn btn-success" id="submitButton">Update</button>
                                                {{-- <button class="btn btn-warning" id="downloadPdf">Download</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon1" aria-expanded="false"><i
                                                class="myicon-disc"></i> Bank Details</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon1" aria-labelledby="headingeight"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Account Holder Name</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="firstName" id="firstName" class="form-control"
                                                    type="text" placeholder="Enter Account Holder Name"
                                                    autocomplete="off" value="">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Account Number</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="lastName" id="lastName" class="form-control"
                                                    type="text" placeholder="Account Number" autocomplete="off"
                                                    value="">
                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Bank Name</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="lastName" id="lastName" class="form-control"
                                                    type="text" placeholder="Enter Bank Name" autocomplete="off"
                                                    value="">
                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">IFSC Code</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="lastName" id="lastName" class="form-control"
                                                    type="text" placeholder="Enter IFSC Code" autocomplete="off"
                                                    value="">
                                            </div>

                                        </div>

                                        <div class="d-flex align-items-center">
                                            <div class="form-group mt-3">
                                                <button class="btn btn-success" id="">Verify</button>
                                                {{-- <button class="btn btn-warning" id="downloadPdf">Download</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon2" aria-expanded="false"><i
                                                class="myicon-disc"></i> KYC Details</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon2" aria-labelledby="headingeight"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-6 mb-0">
                                                <label class="col-form-label">PAN Number</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="firstName" id="firstName" class="form-control"
                                                    type="text" placeholder="Enter Account Holder Name"
                                                    autocomplete="off" value="">

                                            </div>

                                            <div class="form-group col-6 mb-0">
                                                <label class="col-form-label">Aadhaar Number</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <input name="lastName" id="lastName" class="form-control"
                                                    type="text" placeholder="Enter Aadhaar Number" autocomplete="off"
                                                    value="">
                                            </div>

                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-3">
                                                <label class="col-form-label">Pan Card Photo</label>
                                                <div class="col-lg-12">
                                                    <img src="{{ asset('images/dlimage.png') }}" class="img-thumbnail"
                                                        alt="DLimage" id="my_image" width="230px">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label class="col-form-label">Aadhaar Card Front Photo</label>
                                                <div class="col-lg-12">
                                                    <img src="{{ asset('images/dlimage.png') }}" class="img-thumbnail"
                                                        alt="DLimage" id="my_image" width="230px">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label class="col-form-label">Aadhaar Card Back Photo</label>
                                                <div class="col-lg-12">
                                                    <img src="{{ asset('images/dlimage.png') }}" class="img-thumbnail"
                                                        alt="DLimage" id="my_image" width="230px">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <div class="row">
                                                    <div class="form-group mt-3">
                                                    <button class="btn btn-success" id="">Accept</button>
                                                    <button class="btn btn-danger" id="">Reject</button>
                                                </div>
                                              
                                                {{-- <button class="btn btn-warning" id="downloadPdf">Download</button> --}}
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
    </div>
    <!-- Container-fluid Ends-->

    <script>
        $(document).ready(function() {
            $('#profileLink').addClass('activeLink');
            $('#profileLink').addClass('active');

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

                submitForm();
            }

            function submitForm() {

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
                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to Update Your account?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $('.pageLoader').fadeIn();
                            $.ajax({
                                url: "{{ url('/profileUpdate') }}",
                                data: {

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
                                    address: address

                                },
                                success: function(res) {
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin + "/profile/profileUpdate"
                                                }
                                            });
                                        $('.pageLoader').fadeOut();
                                    } else {
                                        $('.pageLoader').fadeOut();
                                        swal("Error", res.message, "error").then(
                                            function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin + "/profile/profileUpdate"
                                                }
                                            }
                                        );
                                    }



                                }
                            });
                        }

                    })
            }

            // $('#downloadPdf').on('click', function() {
            //     $('.pageLoader').fadeIn();
            //     var dlno = $('#dlno').val();
            //     var dob = $('#dob').val();
            //     if (dlno == '') {
            //         errorAlert("Required", "Please Enter DL Number", "dlno");
            //         return false;
            //     }

            //     if (dob == '') {
            //         errorAlert("Required", "Please Enter Date of Birth", "dob");
            //         return false;
            //     }
            //     $('#pdfDl').val(dlno);
            //     $('#pdfDob').val(dob);
            //     $('#pdfFormDownload').submit();
            //     $('.pageLoader').fadeOut();

            // })

        });
    </script>
@endsection
