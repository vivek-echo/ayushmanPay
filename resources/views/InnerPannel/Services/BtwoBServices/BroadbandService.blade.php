@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Broadband</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Hospital</li>
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
                        <h4>Choose Your Broadband Biller</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">Select Broadband Postpaid Biller Id
                                </label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                    <option value="0">--Select Select Broadband Postpaid Biller Id--
                                    </option>
                                    <option value="1">Nextra Broadband</option>
                                    <option value="2">Microscan Infocommtech Pvt. Ltd.</option>
                                    <option value="3">Asianet Broadband</option>
                                    <option value="4">Pink Broadband</option>
                                    <option value="5">Apple Fibernet</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Consumer Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="consID" id="consID" class="form-control" type="text"
                                    placeholder="Enter Consumer Id" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Username</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="username" id="username" class="form-control" type="text"
                                    placeholder="Enter Username" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mobile Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="mobile" id="mobile" class="form-control" type="text"
                                    placeholder="Enter Mobile Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Sub Code</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="SubCode" id="SubCode" class="form-control" type="text"
                                    placeholder="Enter Sub Code" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Billing Account Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="billingActNo" id="billingActNo" class="form-control" type="text"
                                    placeholder="Enter Billing Account Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Date</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="input-group">
                                    <input name="yearMonth" id="yearMonth" class="form-control" type="text"
                                        placeholder="Year-Month">
                                    <div class="input-group-text" id=""><i class="text-secondary"
                                            data-feather="calendar"></i></div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="">Fetch Bill</button>
                            <button class="btn btn-primary" id="">Pay Bill</button>
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

            $("#yearMonth").datepicker({
                format: "mm-yyyy",
                viewMode: "months",
                minViewMode: "months"
            });
        });

        $(document).ready(function() {

        });
    </script>
@endsection
