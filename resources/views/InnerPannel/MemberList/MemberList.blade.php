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

                        <div class="dt-ext table-responsive pt-3" id="searched">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Name</th>
                                        <th scope="col" class="text-center">User Id</th>
                                        <th scope="col" class="text-center">Member Type</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profile as $ky => $pr)
                                        <tr>
                                            <td class="text-center">{{ $ky + 1 }}</td>
                                            <td class="text-center">{{ $pr->firstName }} {{ $pr->lastName }}</td>
                                            <td class="text-center">{{ $pr->userId }}</td>
                                            <td class="text-center">{{ config('constant.USERS')[$pr->memberType] }}</td>
                                            <td class="text-center">
                                                <a class="text-primary me-2" data-bs-toggle="modal"
                                                    onclick="getMembersDetails({{ $pr->id }})"
                                                    data-bs-target="#viewDetails">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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

                                    Profile Details
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row m-0">

                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> First Name
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="firstname"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Last Name
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="lastName">Name</label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Email
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="email"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Shop Name
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="shopname"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Date Of Birth
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="dob"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Pin Code
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="pinCode"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> State
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="state"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> City
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="city"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Mobile
                                            Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="mobile"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Gender
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="gender"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Address
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="address"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Member Type
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="memberType"></label>
                                    </div>
                                </div>




                            </div>

                        </div>

                        <div class="card">
                            <div class="card-header bg-light-orange">
                                <h5 class="mb-0">

                                    Bank Details
                                </h5>
                            </div>
                            <div class="card-body" id="bankDetailsRecordFound" style="display:none">
                                <div class="row m-0">
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Account
                                            Holder Name </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="accHolderName"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Account
                                            Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="accNo"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Bank Name
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="bankName"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> IFSC Code
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="ifsc"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="bankDetailsRecordNotFound" style="display:none">
                                <div class="row m-0">
                                    Bank Details Not Updated By User.
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header bg-light-orange">
                                <h5 class="mb-0">

                                    Kyc Details
                                </h5>
                            </div>
                            <div class="card-body" id="kycDivRecordFound" style="display:none">
                                <div class="row m-0">
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> PAN Number
                                        </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="panNo"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Aadhaar
                                            Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="aadhaarNo"></label>
                                    </div>

                                </div>
                                <hr>
                                <div class="row pb-3" >
                                    <div class="col-4 text-center">
                                        <label class="col-form-label">Pan Card Photo</label>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('' . config('constant.ASSET') .'images/dlimage.png') }}" class="img-thumbnail"
                                                alt="img" id="panImg" width="230px">
                                        </div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <label class="col-form-label">Aadhaar Card Front Photo</label>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('' . config('constant.ASSET') .'images/dlimage.png') }}" class="img-thumbnail"
                                                alt="img" id="aadharFrontImg" width="230px">
                                        </div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <label class="col-form-label">Aadhaar Card Back Photo</label>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('' . config('constant.ASSET') .'images/dlimage.png') }}" class="img-thumbnail"
                                                alt="img" id="aadharBackImg" width="230px">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body" id="kycDivRecordNotFound" style="display:none">
                                <div class="row m-0">
                                    KYC Details Not Updated By User.
                                </div>
                            </div>
                        </div>


                        <div class="row" id="profileVerifyDiv" style="display:none">
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
                            <div class="col-3">
                                <div class="btn-showcase d-flex mt-4">
                                    <button class="btn btn-success text-center" id="">Verify</button>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function getMembersDetails(id) {
            $(document).ready(function() {
                $('#bankDetailsRecordFound').hide();
                $('#bankDetailsRecordNotFound').hide();
                $('#kycDivRecordFound').hide();
                $('#kycDivRecordNotFound').hide();
                $('#profileVerifyDiv').hide();
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/getMembersDetails') }}",
                    data: {
                        id: id
                    },
                    success: function(res) {

                        $('.pageLoader').fadeOut();
                        $('#firstname').text(res.profile.firstName);
                        $('#lastName').text(res.profile.lastName);
                        $('#email').text(res.profile.email);
                        $('#shopname').text(res.profile.shopName);
                        $('#dob').text(res.profile.dateOfBirth);
                        $('#pinCode').text(res.profile.pinCode);
                        $('#state').text(res.profile.state);
                        $('#city').text(res.profile.city);
                        $('#mobile').text(res.profile.mobile);
                        if (res.profile.gender == 1) {
                            $('#gender').text('MALE');
                        } else if (res.profile.gender == 2) {
                            $('#gender').text('FEMALE');
                        } else {
                            $('#gender').text('OTHERS');
                        }
                        $('#address').text(res.profile.address);
                        $('#memberType').text(res.profile.memberType);
                        $('#accHolderName').text(res.profile.bankAccHolderName);
                        $('#accNo').text(res.profile.bankAccNo);
                        $('#bankName').text(res.profile.bankName);
                        $('#ifsc').text(res.profile.bankIfscCode);
                        $('#panNo').text(res.profile.panCard);
                        $('#aadhaarNo').text(res.profile.aadharCard);
                        if (res.profile.bankVerify == 1) {
                            $('#bankDetailsRecordFound').show();
                        } else {
                            $('#bankDetailsRecordNotFound').show();
                        }


                        if (res.profile.webKyc == 1) {
                            $('#kycDivRecordFound').show();
                            $('#panImg').attr('src',res.profile.panImg);
                            $('#aadharFrontImg').attr('src',res.profile.aadharFrontImg);
                            $('#aadharBackImg').attr('src',res.profile.aadharBackImg);
                        } else {
                            $('#kycDivRecordNotFound').show();
                        }


                        if (res.profile.profileUpdate == 0) {
                            if (res.profile.bankVerify == 1 && res.profile.webKyc == 1 ) {
                                $('#profileVerifyDiv').show();
                            }
                        }

                    }
                });
            });

        }


        $(document).ready(function() {
            $('#memberLink').addClass('activeLink');
            $('#memberLink').addClass('active');



        });
    </script>
@endsection
