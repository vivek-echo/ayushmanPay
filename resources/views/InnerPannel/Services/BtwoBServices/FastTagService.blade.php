@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Fast Tag</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">Fast Tag</li>
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
                        <h4>Choose Your Fast Tag Bank</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">FastTag Biller Id
                                </label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="input-group">
                                    <select name="billerId" id="billerId" class="form-select">
                                        <option value="">Loading ....</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="form-group col-1 mb-0"> <img src="{{ asset(''.config('constant.ASSET').'images/loader-5.gif') }}"
                                                alt="" width="45" id="perpaidOperatorLoading"
                                                style="display:none;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Vehicle Registration Number / Wallet Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="vehicleNo" id="vehicleNo" class="form-control" type="text"
                                    placeholder="Enter Registration Number / Wallet Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Amount</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="amnt" id="amnt" class="form-control" type="text"
                                    placeholder="Enter Amount" autocomplete="off">

                            </div>



                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="fetchBillData" data-bs-toggle="modal">Fetch Bill</button>
                            <button class="btn btn-primary" id="payBill">Pay Bill</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Modal For Prepaid -->
    <div class="modal fade" id="fetchBill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label class="col-form-label">Bill Amount</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="billAmnt" id="billAmnt" class="form-control" type="text"
                                placeholder="Enter Bill Amount" autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Bill Net Amount</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="billNetAmnt" id="billNetAmnt" class="form-control" type="text"
                                placeholder="Enter Bill Net Amount" autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Max Net Amount</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="maxNetAmnt" id="maxNetAmnt" class="form-control" type="text"
                                placeholder="Enter Max Net Amount" autocomplete="off" readonly>

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
            $('#perpaidOperatorLoading').show();
            var fetcBillData;
            var locationData;
            $.ajax({
                url: "{{ url('/getFastTagOperatorList') }}",
                success: function(res) {

                    var optionOperator = ['<option value="0" >--Select Operator--</option>'];
                    var optionLengthOperator = res.data.length;

                    for (var i = 0; i < optionLengthOperator; i++) {

                        var resOptionOperator = '<option value=' + res.data[i].id + ' >' + res.data[i]
                            .name + '</option>'
                        optionOperator.push(resOptionOperator);


                    }
                    $('#billerId').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });


            $('#fetchBillData').on('click', function() {
                var billerId = $('#billerId').val();
                var vehicleNo = $('#vehicleNo').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "billerId");
                    return false;
                }
                if (vehicleNo == "") {
                    errorAlert("Required", "Please Enter wallet Number", "billerId");
                    return false;
                }
                fetchBill(billerId, vehicleNo);
                $('#fetchBill').modal('show');
            })

            $('#vehicleNo').focusout(function() {
                var billerId = $('#billerId').val();
                var vehicleNo = $('#vehicleNo').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "billerId");
                    return false;
                }
                if (vehicleNo == "") {
                    errorAlert("Required", "Please Enter wallet Number", "billerId");
                    return false;
                }
                fetchBill(billerId, vehicleNo);
            })

            function fetchBill(billerId, vehicleNo) {


                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/getBillData') }}",
                    data: {
                        operator: billerId,
                        canumber: vehicleNo
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();

                        if (res) {
                            $('#userNameFetch').val(res.data.userName);
                            $('#billAmnt').val(res.data.billAmount);
                            $('#dueDate').val(res.data.dueDate);
                            $('#billNetAmnt').val(res.data.billnetamount);
                            $('#maxNetAmnt').val(res.data.maxBillAmount);
                            $('#cellNo').val(res.data.cellNumber);
                            fetcBillData = res.data;
                        }
                    }
                });
            }

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

            $('#payBill').on('click', function() {

                var billerId = $('#billerId').val();
                var billerName = $('#billerId option:selected').text();
                var vehicleNo = $('#vehicleNo').val();
                var amnt = $('#amnt').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "billerId");
                    return false;
                }
                if (vehicleNo == "") {
                    errorAlert("Required", "Please Enter wallet Number", "billerId");
                    return false;
                }
                if (amnt == "") {
                    errorAlert("Required", "Please Enter your amount", "amnt");
                    return false;
                }

                if (fetcBillData == undefined) {
                    swal("Error", "unable to process the bill. Please try again later.", "error").then(
                        function(res) {
                            $('.pageLoader').fadeIn();
                            if (res) {
                                var loc = window.location;
                                window.location = loc
                                    .origin + "/services/b2bServices/fasttag"
                            }
                        }
                    );

                }

                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to pay fast tag bill ?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true
                    })
                    .then((willSubmit) => {
                        if (willSubmit) {
                            $('.pageLoader').fadeIn();
                            $.ajax({
                                url: "{{ url('/payBillFastTag') }}",
                                data: {
                                    operator: billerId,
                                    canumber: vehicleNo,
                                    amount: amnt,
                                    latitude: locationData.latitude,
                                    longitude: locationData.longitude,
                                    billfetch: fetcBillData,
                                    billerName: billerName
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
                                                            "/services/b2bServices/fasttag"
                                                    }
                                                });
                                        } else {
                                            $('.pageLoader').fadeOut();
                                            swal("Error", res.message, "error").then(
                                                function(res) {
                                                    $('.pageLoader').fadeIn();
                                                    if (res) {
                                                        var loc = window.location;
                                                        window.location = loc
                                                            .origin +
                                                            "/services/b2bServices/fasttag"
                                                    }
                                                }
                                            );
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
