@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Pan Card (UTI)</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Pan Card (UTI)</li>
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
                        <h4>Sample Card</h4><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div> --}}
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="col-12 p-0">

                                <ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link active" id="requestpan-tab" data-bs-toggle="pill"
                                            data-bs-target="#requestpan" type="button" role="tab"
                                            aria-controls="requestpan" aria-selected="true">Request For UTI Pan</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="requestpanstatus-tab" data-bs-toggle="pill"
                                            data-bs-target="#requestpanstatus" type="button" role="tab"
                                            aria-controls="requestpanstatus" aria-selected="false">Check Status Of Request
                                            Pan</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="UtiLogin-tab" data-bs-toggle="pill"
                                            data-bs-target="#UtiLogin" type="button" role="tab"
                                            aria-controls="UtiLogin" aria-selected="false">UTI Login</button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="pills-tabContent">

                                    <!-- FOR PREPAID -->
                                    <div class="tab-pane fade show active" id="requestpan" role="requestpan"
                                        aria-labelledby="pills-prepaid">
                                        <div class="row m-0">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Customer Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="CustomerName" id="CustomerName" class="form-control"
                                                    type="text" placeholder="Enter Customer Name" autocomplete="off"
                                                    value="Vishal Kumar" disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Location</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="location" id="location" class="form-control" type="text"
                                                    placeholder="Enter Location" autocomplete="off" value="Ranchi" disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Contact</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="contact" id="contact" class="form-control" type="text"
                                                    placeholder="Enter Contact" autocomplete="off" value="Vishal Kumar"
                                                    disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Pincode</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="pincode" id="pincode" class="form-control" type="text"
                                                    placeholder="Enter Pincode" autocomplete="off" value="831005" disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">State</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="state" id="state" class="form-control" type="text"
                                                    placeholder="Enter State" autocomplete="off" value="Jharkhand"
                                                    disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Email Id</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="email" id="email" class="form-control" type="text"
                                                    placeholder="Enter Email Id" autocomplete="off"
                                                    value="vkumar229329@gmail.com" disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Mobile No</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="mobile" id="mobile" class="form-control" type="text"
                                                    placeholder="Enter Mobile No" autocomplete="off" value="8887775555"
                                                    disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Pan Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="Pan" id="Pan" class="form-control" type="text"
                                                    placeholder="Enter Pan Number" autocomplete="off">

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group mt-4">
                                                {{-- <button class="btn btn-warning" id="">Fetch Bill</button> --}}
                                                <button class="btn btn-primary" id="">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FOR STATUS PAN CARD -->
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
    </div>
    <!-- Container-fluid Ends-->
    <script>
        $(document).ready(function() {
            $('#requestpanstatus-tab').on('click', function() {
                functionRequest();
            });

            function functionRequest() {

                swal({
                    text: "Your Are Not Registered Or Invalid Member.",
                    icon: "error"
                })
            }
        });
    </script>
@endsection
