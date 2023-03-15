@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Member List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Member List</li>
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

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">User Id</th>
                                        <th scope="col">Member Type</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Test Name</td>
                                        <td>121212</td>
                                        <td>Test Member</td>
                                        <td class="text-center">
                                            <a class="text-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#viewDetails">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Test Name</td>
                                        <td>121212</td>
                                        <td>Test Member</td>
                                        <td class="text-center">
                                            <a class="text-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#viewDetails">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->


    <!-- Modal For View Details -->
    <div class="modal fade" id="viewDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="default-according style-1" id="accordionoc">
                        <div class="card">
                            <div class="card-header bg-light-orange">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapse11"><i
                                            class="myicon-disc"></i>
                                        Profile Details</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                data-bs-parent="#accordionoc">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> First Name
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">Test</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Last Name
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">Name</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Email
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold"
                                                id="">asasas@assasas.com</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Shop Name
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">asasa</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Date Of Birth
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">12/12/2023</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Pin Code
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">12354878</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> State
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold"
                                                id="">Jharkhand</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> City
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">Ranchi</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Mobile
                                                Number </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold"
                                                id="">7878455422</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Gender
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">Male</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Address
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">asasasa
                                                adasa</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Member Type
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">asasas</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-light-orange">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon1" aria-expanded="false"><i class="myicon-disc"></i>
                                        Bank Details</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon1" aria-labelledby="headingeight"
                                data-bs-parent="#accordionoc">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Account
                                                Holder Name </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">Test
                                                Name</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Account
                                                Number </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold"
                                                id="">1212544874612</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Bank Name
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">Test
                                                Bank</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> IFSC Code
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">TS00012</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-light-orange">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon2" aria-expanded="false"><i class="myicon-disc"></i>
                                        KYC Details</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon2" aria-labelledby="headingeight"
                                data-bs-parent="#accordionoc">
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> PAN Number
                                            </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id="">Test
                                                Name</label>
                                        </div>
                                        <div class="row form-group mb-2 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Aadhaar
                                                Number </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold"
                                                id="">1212544874612</label>
                                        </div>
                                        <div class="row form-group mb-0 col-6">
                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Pan Card
                                                Photo </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-6 fw-bold" id=""><a
                                                    href="javascript:void(0);" class="text-danger"><i
                                                        data-feather="image"></i></a></label>
                                        </div>
                                        <div class="row form-group mb-0 col-6">
                                            <label class="col-form-label col-sm-6"><i class="myicon-disc"></i> Aadhaar
                                                Card Front Photo </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-5 fw-bold" id=""><a
                                                    href="javascript:void(0);" class="text-danger"><i
                                                        data-feather="image"></i></a></label>
                                        </div>
                                        <div class="row form-group mb-0 col-6">
                                            <label class="col-form-label col-sm-6"><i class="myicon-disc"></i> Aadhaar
                                                Card Back Photo </label>
                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                            <label class="col-form-label col-sm-5 fw-bold" id=""><a
                                                    href="javascript:void(0);" class="text-danger"><i
                                                        data-feather="image"></i></a></label>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row pb-3">
                                        <div class="col-3">
                                            <label class="col-form-label">Pan Card Photo</label>
                                            <div class="col-lg-12">
                                                <img src="{{ asset('images/dlimage.png') }}" class="img-thumbnail"
                                                    alt="img" id="" width="230px">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label class="col-form-label">Aadhaar Card Front Photo</label>
                                            <div class="col-lg-12">
                                                <img src="{{ asset('images/dlimage.png') }}" class="img-thumbnail"
                                                    alt="img" id="" width="230px">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label class="col-form-label">Aadhaar Card Back Photo</label>
                                            <div class="col-lg-12">
                                                <img src="{{ asset('images/dlimage.png') }}" class="img-thumbnail"
                                                    alt="img" id="" width="230px">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Action</label><span
                                                class="text-danger fa-lg font-weight-500"> *</span>
                                            <select name="gender" id="gender" class="form-select">
                                                <option value="1">Accept</option>
                                                <option value="2">Reject</option>
                                            </select>

                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Remarks</label><span
                                                class="text-danger fa-lg font-weight-500"> *</span>
                                                <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="btn-showcase d-flex mt-4">
                                                <button class="btn btn-success text-center" id="">Accept</button>
                                                <button class="btn btn-danger text-center" id="">Reject</button>
                                            </div>
                                        </div>
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
