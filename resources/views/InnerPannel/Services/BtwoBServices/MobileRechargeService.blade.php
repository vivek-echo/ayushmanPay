@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Mobile Recharge</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Mobile Recharge</li>
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
                                        <button class="nav-link active" id="prepaid-tab" data-bs-toggle="pill"
                                            data-bs-target="#prepaid" type="button" role="tab" aria-controls="prepaid"
                                            aria-selected="true">Prepaid</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="postpaid-tab" data-bs-toggle="pill"
                                            data-bs-target="#postpaid" type="button" role="tab"
                                            aria-controls="postpaid" aria-selected="false">Postpaid</button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="pills-tabContent">

                                    <!-- FOR PREPAID -->
                                    <div class="tab-pane fade show active" id="prepaid" role="tabpanel"
                                        aria-labelledby="pills-prepaid">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Prepaid Mobile
                                                    Number</label><span class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="Pre-mobile" id="Pre-mobile" class="form-control" type="text"
                                                    placeholder="Enter Prepaid Mobile Number" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Prepaid
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
                                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                                    <button type="button" class="btn btn-outline-info rounded-end"
                                                        data-bs-toggle="modal" data-bs-target="#prepaidList">See
                                                        Plans</button>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <button class="btn btn-primary" id="">Process</button>
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
    </div>
    <!-- Container-fluid Ends-->

    <!-- Modal For Prepaid -->
    <div class="modal fade" id="prepaidList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Popular</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Talktime</th>
                                    <th scope="col">Validity</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-flex align-items-center"> <i class="bg-light-success font-success"
                                            data-feather="check-circle"></i><span class="font-success"></span>
                                    </td>
                                    <td>NA</td>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD
                                        calls
                                        and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                        https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td>
                                        <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex align-items-center"> <i class="bg-light-success font-success"
                                            data-feather="check-circle"></i><span class="font-success"></span>
                                    </td>
                                    <td>NA</td>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD
                                        calls
                                        and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                        https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td>
                                        <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex align-items-center"> <i class="bg-light-success font-success"
                                            data-feather="check-circle"></i><span class="font-success"></span>
                                    </td>
                                    <td>NA</td>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD
                                        calls
                                        and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                        https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td>
                                        <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex align-items-center"> <i class="bg-light-success font-success"
                                            data-feather="check-circle"></i><span class="font-success"></span>
                                    </td>
                                    <td>NA</td>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD
                                        calls
                                        and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                        https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td>
                                        <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex align-items-center"> <i class="bg-light-success font-success"
                                            data-feather="check-circle"></i><span class="font-success"></span>
                                    </td>
                                    <td>NA</td>
                                    <td>28 Days</td>
                                    <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for making ISD
                                        calls
                                        and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                        https://www.jio.com/jio-isd-recharge-plans</td>
                                    <td>
                                        <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div> -->
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');
        });
    </script>
@endsection
