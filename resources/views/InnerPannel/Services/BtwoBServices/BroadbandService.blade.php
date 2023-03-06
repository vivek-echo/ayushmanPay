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
                                <label class="col-form-label">Select Broadband Postpaid Biller Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="input-group">
                                    <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                        <option value="">Loading....</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                alt="" width="45" id="perpaidOperatorLoading"
                                                style="display:none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-6" id="accountNumber" style="display:none">
                                <label class="col-form-label" id="lableAccNumber"></label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="canNumber" id="canNumber" class="form-control" type="text"
                                    autocomplete="off">

                            </div>
                            <div class="form-group col-6" id="addOn" style="display:none">
                                <label class="col-form-label" id="lableaddOn"></label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="AppId" id="AppId" class="form-control" type="text" autocomplete="off">

                            </div>

                            <div class="form-group col-6">
                                <label class="col-form-label">Amount</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="amnt" id="amnt" class="form-control" type="text"
                                    placeholder="Enter Amount" autocomplete="off">

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="fetchBillButton">Fetch Bill</button>
                            <button class="btn btn-primary" id="payBillButton">Pay Bill</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="modal fade" id="fetchBillModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bill Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-0">
                        <div class="form-group col-4">
                            <label class="col-form-label">Name</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="userName" id="userNameFetch" class="form-control" type="text"
                                placeholder="Enter Name" autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-4">
                            <label class="col-form-label">Bill Amount</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="billAmnt" id="billAmnt" class="form-control" type="text"
                                placeholder="Enter Bill Amount" autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Due Date</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <div class="input-group">
                                <input class="form-control" type="text" data-language="en" id="dueDate"
                                    placeholder="Due Date" readonly>
                                <div class="input-group-text" id=""><i class="text-secondary"
                                        data-feather="calendar"></i></div>
                            </div>

                        </div>

                        <div class="form-group col-4">
                            <label class="col-form-label">Cell Number</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="cellNo" id="cellNo" class="form-control" type="text"
                                placeholder="DLXXXXXX" autocomplete="off" readonly>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


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

            var fetcBillData;
            $('#perpaidOperatorLoading').show();
            $.ajax({
                url: "{{ url('/getBillOperatorList') }}",
                success: function(res) {

                    var optionOperator = ['<option value="0" >--Select Operator--</option>'];
                    var optionLengthOperator = res.data.length;
                    console.log(optionLengthOperator);
                    for (var i = 0; i < optionLengthOperator; i++) {
                        if (res.data[i].category == "Broadband") {
                            var resOptionOperator = '<option value=' + res.data[i].id +
                                ' data-display = "' + res.data[i].displayname + '" data-ad1 ="' + res
                                .data[i].ad1_name + '" data-regex = "' + res.data[i].regex +
                                '" data-ad1_regex = "' + res.data[i].ad1_regex + '" >' + res.data[i]
                                .name + '</option>'
                            optionOperator.push(resOptionOperator);
                        }

                    }
                    $('#perpaidOperator').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });

            //onchanges options

            $('#perpaidOperator').change(function() {
                $('#accountNumber').hide();
                $('#addOn').hide();
                var selected = $('#perpaidOperator').find('option:selected');
                var extraData = selected.data('display');
                var addOn = selected.data('ad1');
                if (extraData != null) {
                    $('#lableAccNumber').html(extraData);
                    $('#accountNumber').show();
                }

                if (addOn != null) {
                    $('#lableaddOn').html(addOn);
                    $('#addOn').show();
                }

            });

            $('#canNumber').focusout(function() {
                var billerId = $('#perpaidOperator').val();
                var canNumber = $('#canNumber').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "billerId");
                    return false;
                }
                if (canNumber == "") {
                    errorAlert("Required", "Please Enter Acc Number", "canNumber");
                    return false;
                }
                fetchBill(billerId, canNumber);
            })

            $('#fetchBillButton').on('click', function() {
                var billerId = $('#perpaidOperator').val();
                var canNumber = $('#canNumber').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "billerId");
                    return false;
                }
                if (canNumber == "") {
                    errorAlert("Required", "Please Enter Acc Number", "canNumber");
                    return false;
                }
                fetchBill(billerId, canNumber);
                $('#fetchBillModal').modal('show')
            });
            getLocation()

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                }

            }

            function showPosition(position) {

                locationData = {
                    latitude: position.coords.latitude,
                    longitude: position.coords.longitude
                }

            }

            function fetchBill(billerId, canNumber) {
                var billerId = $('#perpaidOperator').val();
                var canNumber = $('#canNumber').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "billerId");
                    return false;
                }
                if (canNumber == "") {
                    errorAlert("Required", "Please Enter Acc Number", "canNumber");
                    return false;
                }
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/fetchBroadbandBill') }}",
                    data: {
                        operator: billerId,
                        canumber: canNumber
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();

                        if (res) {
                            if (res.status == true) {
                                $('#userNameFetch').val(res.data.name);
                                $('#billAmnt').val(res.data.amount);
                                $('#dueDate').val(res.data.duedate);
                                $('#cellNo').val(canNumber);

                                fetcBillData = res.data;
                            } else {

                                swal("Error", res.message, "error")
                            }

                        }
                    }
                });
            }

            $('#payBillButton').on('click', function() {
                var billerId = $('#perpaidOperator').val();
                var billerName = $('#perpaidOperator option:selected').text();
                var canNumber = $('#canNumber').val();
                var amount = $('#amnt').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "perpaidOperator");
                    return false;
                }
                if (canNumber == "") {
                    errorAlert("Required", "Please Enter loan Number", "canNumber");
                    return false;
                }
                if (amount == "") {
                    errorAlert("Required", "Please Enter amount", "amnt");
                    return false;
                }
                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to pay bill ?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true
                    })
                    .then((willSubmit) => {
                        if (willSubmit) {
                            $('.pageLoader').fadeIn();
                            $.ajax({
                                url: "{{ url('/payBroadbandBill') }}",
                                data: {
                                    operator: billerId,
                                    operatorName: billerName,
                                    canumber: canNumber,
                                    amount: amount,
                                    latitude: locationData.latitude,
                                    longitude: locationData.longitude,
                                    billfetch: fetcBillData
                                },
                                success: function(res) {
                                    $('.pageLoader').fadeOut();

                                    if (res) {
                                        if (res.status == true) {
                                            swal("Successfull", res.message, "success")
                                                .then(function(res) {
                                                    $('.pageLoader').fadeIn();
                                                    if (res) {
                                                        var loc = window.location;
                                                        window.location = loc
                                                            .origin +
                                                            "/services/b2bServices/Broadband"
                                                    }
                                                });
                                        } else {

                                            swal("Error", res.message, "error")
                                        }

                                    }
                                }
                            });
                        }
                    });


            })


        });
    </script>
@endsection
