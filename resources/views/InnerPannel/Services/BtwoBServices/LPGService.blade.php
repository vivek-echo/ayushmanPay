@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>LPG Gas Booking</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">LPG Gas Booking</li>
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
                        <h4>Choose Your LPG Gas Biller</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">

                            <div class="form-group col-6">
                                <label class="col-form-label">LPG Gas Biller Id
                                </label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="input-group">
                                    <select name="lpgBillerId" id="lpgBillerId" class="form-select">
                                        <option value="">Loading ....</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                alt="" width="45" id="perpaidOperatorLoading"
                                                style="display:none;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group col-6" id="caNumberDiv" style="display: none;">
                                <label class="col-form-label" id="caLabel"></label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="canumber" id="canumber" class="form-control" type="text"
                                    autocomplete="off">

                            </div>
                            <div class="form-group col-6" id="ad1Div" style="display: none;">
                                <label class="col-form-label" id="ad1Lable"></label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="ad1" id="ad1" class="form-control" type="text" autocomplete="off">

                            </div>
                           <div class="form-group col-6">
                                <label class="col-form-label">Amount</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="amt" id="amt" class="form-control" type="text"
                                    placeholder="Enter Amount" autocomplete="off">

                            </div>
                             {{-- <div class="form-group col-6">
                                <label class="col-form-label">Consumer Number/Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="consumerNo" id="consumerNo" class="form-control" type="text"
                                    placeholder="Enter Consumer Number/Id" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Distributor Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="distributorId" id="distributorId" class="form-control" type="text"
                                    placeholder="Enter Distributor Id" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Unique Consumer Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="uniConsID" id="uniConsID" class="form-control" type="text"
                                    placeholder="Enter Unique Consumer Id" autocomplete="off">

                            </div> --}}

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="fetchBill">Fetch Bill</button>
                            <button class="btn btn-primary" id="payBillButton">Pay Bill</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Modal For Prepaid -->
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
            var selected;
            var extraData;
            var addOn;
            $.ajax({
                url: "{{ url('/getLpgOperatorList') }}",
                success: function(res) {

                    var optionOperator = ['<option value="0" >--Select Operator--</option>'];
                    var optionLengthOperator = res.data.length;

                    for (var i = 0; i < optionLengthOperator; i++) {

                        var resOptionOperator = '<option value=' + res.data[i].id +
                            ' data-displayname = "' + res.data[i].displayname + '" data-regex = "' + res
                            .data[i].regex + '" data-ad1_d_name = "' + res.data[i].ad1_d_name +
                            '"  data-ad1_regex = "' + res.data[i].ad1_regex + '" >' + res.data[i].name +
                            '</option>'
                        optionOperator.push(resOptionOperator);


                    }
                    $('#lpgBillerId').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });

            $('#lpgBillerId').on('change', function() {
                selected = $('#lpgBillerId').find('option:selected');
                extraData = selected.data('displayname');
                addOn = selected.data('ad1_d_name');

                if (extraData != null) {
                    $('#caLabel').html(extraData);
                    $('#caNumberDiv').show();
                }

                if (addOn != null) {
                    $('#ad1Lable').html(addOn);
                    $('#ad1Div').show();
                }
            });

            // $('#canumber').focusout(function() {
            //     fetchBill();
            // })

            function fetchBill(billerId ,caNumber) {
              

                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/getLpgBillData') }}",
                    data: {
                        operator: billerId,
                        canumber: caNumber
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();

                        if (res) {
                            $('#userNameFetch').val(res.name);
                            $('#billAmnt').val(res.amount);
                            $('#cellNo').val(caNumber);
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

            $('#fetchBill').on('click', function() {
                var billerId = $('#lpgBillerId').val();
                
                var caNumber = $('#canumber').val();
                if (billerId == 0) {
                    errorAlert("Required", "Please select the operator", "lpgBillerId");
                    return false;
                }
                if (caNumber == "") {
                    errorAlert("Required", 'Please Enter ' + extraData + '', "canumber");
                    return false;
                }
            
                fetchBill(billerId ,caNumber);
                $('#fetchBillModal').modal('show');

            })

            $('#payBillButton').on('click',function(){
                var lpgBillerId = $('#lpgBillerId').val();
                var operatorName = $('#lpgBillerId option:selected').text();
                var lpgCaNumber = $('#canumber').val();
                var amount = $('#amt').val();
                if (lpgBillerId == 0) {
                    errorAlert("Required", "Please select the operator", "lpgBillerId");
                    return false;
                }
                if (lpgCaNumber == "") {
                    errorAlert("Required", 'Please Enter ' + extraData + '', "canumber");
                    return false;
                }
                if (amount == "") {
                    errorAlert("Required", "Please select the operator", "amt");
                    return false;
                }
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/payLpgBill') }}",
                    data: {
                        operator: lpgBillerId,
                        canumber: lpgCaNumber,
                        amount: amount,
                        latitude:locationData.latitude,
                        longitude:locationData.longitude,
                        operatorName:operatorName

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
                                                "/services/b2bServices/LPG"
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
                                                "/services/b2bServices/LPG"
                                        }
                                    }
                                );
                            }

                        }

                        // if (res) {
                        //     $('#userNameFetch').val(res.name);
                        //     $('#billAmnt').val(res.amount);
                        //     $('#cellNo').val(caNumber);
                        // }
                    }
                });
            })
            
        });
    </script>
@endsection
