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
                                                <label class="col-form-label">Prepaid
                                                    Operator</label><span class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">

                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Circle</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <select name="circle" id="circle" class="form-select">
                                                    <option value="0">--Select Circle--</option>
                                                    {{-- <option value="1">Jharkhand</option>
                                                    <option value="2">Gujrat</option> --}}
                                                    <option value="Delhi NCR">Delhi NCR</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Prepaid Mobile
                                                    Number</label><span class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="Pre-mobile" id="Pre-mobile" class="form-control" type="text"
                                                    placeholder="Enter Prepaid Mobile Number" autocomplete="off">

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
                    <h5 class="modal-title" id="exampleModalLabel">Plans</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="planButton">

                    </div>

                    <div class="tab-content mt-4" id="fulllpan">

                        {{-- <div id="fulllpan"></div> --}}
                        <!-- FOR POPULAR -->
                        {{-- <div class="tab-pane fade show active" id="popular" role="tabpanel"
                            aria-labelledby="pills-popular">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ssasa</th>
                                                <th scope="col">Talktime</th>
                                                <th scope="col">Validity</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
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
                        </div>

                        <!-- FOR ANNUAL -->
                        <div class="tab-pane fade" id="annual" role="tabpanel" aria-labelledby="pills-annual">
                            <div class="row">
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
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
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
                        </div>

                        <!-- FOR DATA ADD-ON -->
                        <div class="tab-pane fade" id="data-add" role="tabpanel" aria-labelledby="pills-data-add">
                            <div class="row">
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
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
                                                    calls
                                                    and ISD SMS while in India.Validity: 28 Days | For ISD Call rates,visit
                                                    https://www.jio.com/jio-isd-recharge-plans</td>
                                                <td>
                                                    <h5><span class="badge badge-sm badge-primary">Rs.501</span></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
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
                        </div>

                        <!-- FOR DATA ADD-ON -->
                        <div class="tab-pane fade" id="voucher" role="tabpanel" aria-labelledby="pills-voucher">
                            <div class="row">
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
                                                <td>
                                                    <div class="form-check checkbox checkbox-solid-primary">
                                                        <input class="form-check-input" id="solid1" type="checkbox">
                                                        <label class="form-check-label" for="solid1"></label>
                                                    </div>
                                                </td>
                                                <td>NA</td>
                                                <td>28 Days</td>
                                                <td>ISD Talktime: Rs. 424.58 and 5 ISD SMS, Talktime can be used only for
                                                    making ISD
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
                        </div> --}}
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

            $.ajax({
                url: "{{ url('/getPerpaidOperatorList') }}",
                success: function(res) {
                    var optionOperator = ['<option >--Select--</option>'];
                    var optionLengthOperator = res.data.length;

                    for (var i = 0; i < optionLengthOperator; i++) {
                        var resOptionOperator = '<option value=' + res.data[i].name + ' >' + res.data[i]
                            .name + '</option>'
                        optionOperator.push(resOptionOperator);
                    }
                    $('#perpaidOperator').html(optionOperator);
                }
            });

            $('#circle').on('change', function() {
                var circle = $('#circle').val();
                var operator = $('#perpaidOperator').val();
                console.log(circle + "----" + operator);
                $.ajax({
                    url: "{{ url('/getPerpaidOperatorPlan') }}",
                    data: {
                        circle: circle,
                        op: operator
                    },
                    success: function(res) {
                        
                        if (res) {

                            var planbutton = [];
                            var fullPlanDiv = [];
                            var rt = [];
                            var optionplanlengthmain = res.data.length;
                            for (var i = 0; i < optionplanlengthmain; i++) {
                                var resActive = "";
                                if(i == 0)
                                {
                                     resActive = "active";
                                }else{
                                    resActive ="";
                                }
                                // var resActive = (i = 0)? "active": "";
                                var resplan =
                                    '<li class="nav-item me-2" role="presentation"><button class="nav-link '+resActive+'"  data-bs-toggle="pill" data-bs-target="#' +
                                    res.data[i].replace(/[^A-Za-z]+/g, '') +
                                    '" type="button" role="tab" aria-controls="' + res.data[i] +
                                    '" aria-selected="true">' + res.data[i] + '</button></li>'
                                planbutton.push(resplan);
                                rt.push( res.data[i]);
                                
                               
                            }
                        
                            var divImplant ='<ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist" >'
                            divImplant += planbutton.join(" ")
                            divImplant += '</ul>'
                            $('#planButton').html(divImplant);
                        }
                        var rtLength = rt.length;

                        var fullPan = [];
                        
                        // console.log(rtLength);
                        for (var k = 0; k < rtLength; k++) {
                            var resActivePlans = "";
                                if(k == 0)
                                {
                                     resActivePlans = "show active";
                                }else{
                                    resActivePlans ="";
                                }
                            var trap ='<div class="tab-pane fade '+resActivePlans+'" id="'+rt[k].replace(/[^A-Za-z]+/g, '')+'" role="tabpanel" aria-labelledby="pills-voucher"><div class="row"> <div class="table-responsive"><table class="table table-hover"><thead> <tr><th scope="col"></th><th scope="col">Talktime</th><th scope="col">Validity</th> <th scope="col">Description</th><th scope="col">Price</th></tr></thead><tbody>';
                            var planName = res.plans[rt[k]];
                            var inPlanResponse = [];
                            if(planName != null)
                            {
                                // console.log(planName)
                                var planNameLength = planName.length;
                                for(var b = 0 ; b < planNameLength ; b++)
                                {
                                    var tdm = '<tr> <td>'+(b+1)+'</td> <td>NA</td> <td>'+planName[b].validity+'</td> <td>'+planName[b].desc+'</td>  <td>'+planName[b].rs+'</td> </tr>'
                                    inPlanResponse.push(tdm);
                                }
                            }else{
                                    var tdm = '<tr> <td>NA</td> <td>NA</td> <td>NA</td> <td>NA</td>  <td>NA</td> </tr>'
                                    inPlanResponse.push(tdm);
                                }
                            trap+= inPlanResponse.join(" ")
                            trap += '</tbody></table></div></div></div>';
                          
                                fullPan.push(trap); 
                        }
                        var tramp = fullPan.join(" ");
                        $('#fulllpan').html(tramp);

                        //     var t ='<div class="tab-pane fade" id="'+rt[k]+'" role="tabpanel" aria-labelledby="pills-voucher"><div class="row"> <div class="table-responsive"><table class="table table-hover"><thead> <tr><th scope="col"></th><th scope="col">Talktime</th><th scope="col">Validity</th> <th scope="col">Description</th><th scope="col">Price</th></tr></thead><tbody>'
                               
                        //         var planRes = [];
                        //         var planResLength = res.plan[rt[k]].length;
                        //         console.log(planResLength);
                        //         for(var h= 0 ; h<planResLength ; h++){
                        //             console.log(res.plan[rt[k]]);
                        //             if(res.plan[rt[k]][h] != null){
                        //                 var pl = ' <tr><td><div class="form-check checkbox checkbox-solid-primary"> <input class="form-check-input" id="solid1" type="checkbox"><label class="form-check-label" for="solid1"></label></div></td><td>NA</td><td>'+res.plan[rt[k]][h].validity+'</td><td>'+res.plan[rt[k]][h].desc+'</td><td><h5><span class="badge badge-sm badge-primary">'+res.plan[rt[k]][h].rs+'</span></h5> </td> </tr>'
                        //             planRes.push(pl);
                        //             }else{
                        //                 var pl = ' <tr><td><div class="form-check checkbox checkbox-solid-primary"> <input class="form-check-input" id="solid1" type="checkbox"><label class="form-check-label" for="solid1"></label></div></td><td>NA</td><td>--</td><td>--</td><td><h5><span class="badge badge-sm badge-primary">--</span></h5> </td> </tr>'
                        //                 planRes.push(pl);
                        //             }
                                    
                        //         }
                        //      t+= plResponse////////

                        //     t+= '</tbody></table></div></div></div>'
                        //     fullPan.push(t);
                        // }

                        // console.log(fullPan);
                        // var plResponse=[];
                        //         console.log( res.plans['COMBO']);
                        //         var plnLength = res.plans[res.data[i]].length;
                        //         for(var k = 0 ; k < plnLength ; k++)
                        //         {
                        //             var pl= ' <tr><td><div class="form-check checkbox checkbox-solid-primary"> <input class="form-check-input" id="solid1" type="checkbox"><label class="form-check-label" for="solid1"></label></div></td><td>NA</td><td>'+res.plans[res.data[i]][k].validity+'</td><td>'+res.plans[res.data[i]][k].desc+'</td><td><h5><span class="badge badge-sm badge-primary">'+res.plans[res.data[i]][k].rs+'</span></h5> </td> </tr>'
                        //             plResponse.push(pl);
                        //         }

                        //         var t ='<div class="tab-pane fade" id="'+res.data[i]+'" role="tabpanel" aria-labelledby="pills-voucher"><div class="row"> <div class="table-responsive"><table class="table table-hover"><thead> <tr><th scope="col"></th><th scope="col">Talktime</th><th scope="col">Validity</th> <th scope="col">Description</th><th scope="col">Price</th></tr></thead><tbody>'

                        //         t+= plResponse
                        //         t+= '</tbody></table></div></div></div>'
                        //         fullPlanDiv.push(t);
                        // console.log(fullPlanDiv);
                        // console.log(res.plans[res.data[1]]);

                        // var optionOperator = ['<option >--Select--</option>'];
                        // var optionLengthOperator = res.data.length;

                        // for (var i = 0; i < optionLengthOperator; i++) {
                        //     var resOptionOperator = '<option value=' + res.data[i].name + ' >' +
                        //         res.data[i]
                        //         .name + '</option>'
                        //     optionOperator.push(resOptionOperator);
                        // }
                        // $('#perpaidOperator').html(optionOperator);
                    }
                });
            })
        });
    </script>
@endsection
