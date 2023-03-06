@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>AEPS Transaction</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">AEPS Transaction</li>
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
                    {{-- <div class="card-header pb-0">
                        <h4>Choose Your Loan/EMI Biller</h4><span></span>
                    </div> --}}
                    <div class="row m-0">
                        <div class="col-12 p-0">

                            <ul class="nav nav-pills mb-3 mt-4 mx-4" id="pills-tab" role="tablist">
                                <li class="nav-item me-2" role="presentation">
                                    
                                    <button class="nav-link active" id="AepsTransaction-tab" data-bs-toggle="pill"
                                        data-bs-target="#AepsTransaction" type="button" role="tab" aria-controls="AepsTransaction"
                                        aria-selected="true">
                                        <span class="d-flex">
                                            <i class="myicon-identification fs-5"></i> 
                                            AEPS Transaction
                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link" id="kyc-tab" data-bs-toggle="pill"
                                        data-bs-target="#kyc" type="button" role="tab"
                                        aria-controls="kyc" aria-selected="false">
                                        <span class="d-flex">
                                            <i class="myicon-file-text1 fs-5"></i> 
                                            KYC
                                        </span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content mt-4" id="pills-tabContent">

                                <!-- FOR AEPS Transaction -->
                                <div class="tab-pane fade show active" id="AepsTransaction" role="tabpanel"
                                    aria-labelledby="pills-prepaid">
                                    <div class="row m-4">
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Type
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="categorytype" id="categorytype" class="form-select">
                                                    <option value="">ICICI</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                            alt="" width="45" id="perpaidOperatorLoading"
                                                            style="display:none;">
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Device Name
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="" id="" class="form-select">
                                                    <option value="">MTYNTRA</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                            alt="" width="45" id="perpaidOperatorLoading"
                                                            style="display:none;">
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Services
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="" id="" class="form-select">
                                                    <option value="">Balance</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                            alt="" width="45" id="perpaidOperatorLoading"
                                                            style="display:none;">
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
            
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Customer Mobile No.</label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="cstmrMobNo" id="cstmrMobNo" class="form-control" type="text"
                                                placeholder="Enter Customer Mobile No." autocomplete="off">
            
                                        </div>
                                        
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Customer Name</label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="cstmrName" id="cstmrName" class="form-control" type="text"
                                                placeholder="Enter Customer Name" autocomplete="off">
            
                                        </div>
            
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Bank Name
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="bankName" id="bankName" class="form-select">
                                                    <option value="">--Select Bank--</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                            alt="" width="45" id="perpaidOperatorLoading"
                                                            style="display:none;">
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
            
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Aadhar Number</label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="aadharNo" id="aadharNo" class="form-control" type="text"
                                                placeholder="Enter Aadhar Number" autocomplete="off">
            
                                        </div>
            
                                        <div class="form-group mt-4">
                                            <button class="btn btn-info" id="">Scan Finger</button>
                                            <button class="btn btn-primary" id="">Submit</button>
                                        </div>
            
                                    </div>
            
                                </div>

                                <!-- FOR POSTPAID -->
                                {{-- <div class="tab-pane fade" id="postpaid" role="tabpanel"
                                    aria-labelledby="pills-postpaid">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Postpaid
                                                Number</label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="Post-mobile" id="Post-mobile" class="form-control"
                                                type="text" placeholder="Enter Postpaid Number"
                                                autocomplete="off">

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Postpaid
                                                Operator</label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                                <option value="0">--Select Prepaid Operator--
                                                </option>
                                                <option value="1">Airtel</option>
                                                <option value="2">Jio</option>
                                                <option value="3">BSNL Special</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Circle</label><span
                                                class="text-danger fa-lg font-weight-500"> *</span>
                                            <select name="Circle" id="Circle" class="form-select">
                                                <option value="0">--Select Circle--</option>
                                                <option value="1">Jharkhand</option>
                                                <option value="2">Gujrat</option>
                                                <option value="3">Odisha</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Recharge
                                                Amount</label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Amount">
                                                <button type="button" class="btn btn-outline-info rounded-end">See
                                                    Plans</button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <button class="btn btn-primary" id="">Process</button>
                                    </div>
                                </div> --}}
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

        });
    </script>
@endsection
