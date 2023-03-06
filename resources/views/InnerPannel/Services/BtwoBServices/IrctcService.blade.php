@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>IRCTC Booking</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">IRCTC Booking</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Registration Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">Full Name</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="fullName" id="fullName" class="form-control" type="text"
                                    placeholder="Enter Full Name" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Shop Name</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="shopName" id="shopName" class="form-control" type="text"
                                    placeholder="Enter Shop Name" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Email Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="email" id="email" class="form-control" type="email"
                                    placeholder="abc@domain.com" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mobile Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="mobNo" id="mobNo" class="form-control" type="text"
                                    placeholder="Enter Mobile Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Computer Mac Address</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="MacAddress" id="MacAddress" class="form-control" type="text"
                                    placeholder="Enter Computer Mac Address" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mobile IMEI Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="IMEI" id="IMEI" class="form-control" type="text"
                                    placeholder="Enter Mobile IMEI Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="uploadPhoto" name="uploadPhoto">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Aadhar Front Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="AadharFrontPhoto" name="AadharFrontPhoto">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Aadhar Back Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="AadharBackPhoto" name="AadharBackPhoto">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Pancard Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="PancardPhoto" name="PancardPhoto">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Referral Id</label>
                                <input name="Referral" id="Referral" class="form-control" type="text"
                                    placeholder="Enter Referral Id" autocomplete="off">

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-primary" id="">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Registration Amount</h4>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="offer-style">
                              <div class="card">
                                <div class="d-flex p-20 justify-content-between">
                                    <h6 class="mt-0 mega-title-badge fs-5 text-primary">Rs.2800.00+18% GST</h6>
                                    <h6 class="mt-0 mega-title-badge fs-5"><span class="badge badge-danger pull-right digits"><span class="custom-line-through">Rs.3000.00</span>+GST</span></h6>
                                </div>
                              </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');
        });
    </script>
@endsection
