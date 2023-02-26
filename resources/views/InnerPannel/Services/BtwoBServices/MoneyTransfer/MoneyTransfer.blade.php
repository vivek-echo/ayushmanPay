@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Money Transfer</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Money Transfer</li>
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
                                        <button class="nav-link active" id="beneficiaryList-tab" data-bs-toggle="pill"
                                            data-bs-target="#beneficiaryList" type="button" role="tab"
                                            aria-controls="beneficiaryList" aria-selected="false">Beneficiary List</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link " id="moneyTransfer-tab" data-bs-toggle="pill"
                                            data-bs-target="#moneyTransfer" type="button" role="tab"
                                            aria-controls="moneyTransfer" aria-selected="true">Money Transfer</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="addBeneficiary-tab" data-bs-toggle="pill"
                                            data-bs-target="#addBeneficiary" type="button" role="tab"
                                            aria-controls="addBeneficiary" aria-selected="false">Add Beneficiary</button>
                                    </li>

                                </ul>
                                <div class="tab-content mt-4" id="pills-tabContent">

                                    <!-- FOR moneyTransfer -->
                                    <div class="tab-pane fade " id="moneyTransfer" role="tabpanel"
                                        aria-labelledby="pills-moneyTransfer">

                                        <div class="row">

                                            <div class="form-group col-3">
                                                <label class="col-form-label">Mobile Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="preMobile" id="preMobile" class="form-control" type="text"
                                                    placeholder="Enter Mobile Number" autocomplete="off">

                                            </div>
                                            <div class="form-group col-3">
                                                <button class="btn btn-primary m-t-35" data-bs-toggle="modal"
                                                    data-bs-target="#viewBeneficiary">Search</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FOR Add Beneficiary -->
                                    <div class="tab-pane fade" id="addBeneficiary" role="tabpanel"
                                        aria-labelledby="pills-addBeneficiary">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Bank Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <select name="bankId" id="bankId" class="form-select">
                                                    <option value="">Loading ....
                                                    </option>
                                                </select>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">IFSC Code</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="ifcscode" id="ifcscode" class="form-control" type="text"
                                                    placeholder="Enter IFSC Code" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Account Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Account Number" id="accNumber">

                                                </div>

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Account Holder Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="acntHoldName" id="acntHoldName" class="form-control"
                                                    type="text" placeholder="Enter Account Holder Name"
                                                    autocomplete="off">

                                            </div>


                                            <div class="form-group col-6">
                                                <label class="col-form-label">Pincode</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="pinCode" id="pinCode" class="form-control" type="text"
                                                    placeholder="Enter Mobile Number" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Address</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="address" id="address" class="form-control" type="text"
                                                    placeholder="Enter Mobile Number" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Date Of Birth</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <div class="input-group">
                                                    <input name="dateOfBirth" id="dateOfBirth"
                                                        class="datepicker-here form-control digits" type="text"
                                                        data-language="en" placeholder="Date Of Birth" readonly>
                                                    <div class="input-group-text" id="btnGroupAddon"><i
                                                            class="text-secondary" data-feather="calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="remiterMobile" id="remiterMobile" class="form-control"
                                            type="hidden" autocomplete="off" value="<?php echo $mobile; ?>" readonly>
                                        <div class="form-group mt-4">
                                            <button class="btn btn-primary" id="addBenButton">Submit</button>
                                            <button class="btn btn-danger" id="">Reset</button>
                                        </div>
                                    </div>

                                    <!-- FOR beneficiary List -->
                                    <div class="tab-pane fade show active" id="beneficiaryList" role="tabpanel"
                                        aria-labelledby="pills-beneficiaryList">
                                        <?php if($fetchbenficery != []) { ?>
                                        <div class="table-responsive">
                                            <table class="table">
                                                {{-- <caption>List of users</caption> --}}
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Bank Name</th>
                                                        <th scope="col">Account Number</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">IFSC Code</th>
                                                        <th scope="col">verification Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($fetchbenficery as $key=>$value) { ?>
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td>{{ $value['bankname'] }}</td>
                                                        <td>{{ $value['accno'] }}</td>
                                                        <td>{{ $value['name'] }}</td>
                                                        <td>{{ $value['ifsc'] }}</td>
                                                        <td>
                                                            <?php if($value['verified'] == 0){ ?>
                                                            <span class="text-danger">Not Verified</span>
                                                            <?php }else{ ?>
                                                            <span class="text-success">Verified</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td><a class="text-danger me-2" data-bs-toggle="tooltip" title="Delete"
                                                                onclick="deletebenefeciry({{ $value['bene_id'] }}) ;">
                                                                <i data-feather="trash-2"></i>
                                                            </a>
                                                            <?php if($value['verified'] == 1){ ?>
                                                            <a class="text-info" data-bs-toggle="tooltip" title="Money Transfer"
                                                                onclick="moneyTransferDetails({{ $value['bene_id'] }})">
                                                                <i data-feather="corner-up-right"></i>
                                                            </a>
                                                            <?php } ?>

                                                        </td>

                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php }else{ ?>
                                        <div>Not Found</div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Modal For viewBeneficiary -->
    <div class="modal fade" id="viewBeneficiary" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Beneficiary Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="col-form-label">Select Bank Limit</label><span> *</span><br>
                            <input type="radio" id="bankLimit1" name="bankLimitMoneyTransfer" value="bank1">
                            <label for="bankLimit1"> Bank 1 limit : <b><span id="bank1"></span></b></label><br>
                            <input type="radio" id="bankLimit2" name="bankLimitMoneyTransfer" value="bank2">
                            <label for="bankLimit2">Bank 2 limit : <b><span id="bank2"></span></b></label><br>
                            <input type="radio" id="bankLimit3" name="bankLimitMoneyTransfer" value="bank3">
                            <label for="bankLimit3">Bank 3 limit : <b><span id="bank3"></span></b></label>
                            

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Gst State</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <select name="gstStateMoneyTransfer" id="gstStateMoneyTransfer" class="form-select">
                                <option value="">Loading .....</option>
                            </select>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Tax Type</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <select name="taxTypeMoneyTransfer" id="taxTypeMoneyTransfer" class="form-select">
                                <option value="0">--Select--</option>
                                <option value="1">IMPS</option>
                                <option value="2">NEFT</option>
                            </select>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Amount</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="amountMoneyTransfer" id="amountMoneyTransfer" class="form-control"
                                type="text" placeholder="Enter Amount" autocomplete="off">
                        </div>

                        <div class="form-group col-6" id="OTPDiv" style="display:none">
                            <label class="col-form-label">OTP</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="" id="otpMoneyTransfer" class="form-control" type="text"
                                placeholder="Enter Mobile Number" autocomplete="off" >
                                <input name="" id="beneId" class="form-control" type="hidden"
                                 autocomplete="off" readonly>
                            <span id="spanOtp" class="text-danger"></span>
                        </div>

                    </div>
                    <input name="otpEncMoneyTransfer" id="otpEncMoneyTransfer" class="form-control" type="hidden"
                        autocomplete="off">
                    <div class="form-group mt-4">
                        <button class="btn btn-primary" id="getOTPMoneyTransfer">Get OTP</button>
                        <button class="btn btn-warning" id="sendMoneyTransfer">Send</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        //for money transfer 
        function moneyTransferDetails(bene_id) {
            $(document).ready(function() {
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/fetchMoneyTransferDetails') }}",
                    data: {
                        bene_id: bene_id,
                        remiterMobile: $('#remiterMobile').val()
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.status == true) {
                            getGstState();
                            $('#bank1').html(res.data.bank1_limit);
                            $('#bank2').html(res.data.bank2_limit);
                            $('#bank3').html(res.data.bank3_limit);
                            $('#beneId').val(bene_id);
                            $('#viewBeneficiary').modal('show');
                        }
                    }
                });
            });
        }
        //get gst state
        function getGstState() {
            $(document).ready(function() {
                $.ajax({
                    url: "{{ url('/getGstStateList') }}",
                    success: function(res) {
                        var optionOperatorMoneyTransfer = [
                            '<option value="0" >--Select Bank Name--</option>'
                        ];
                        var optionLengthOperatormoney = res.data.length;

                        for (var i = 0; i < optionLengthOperatormoney; i++) {
                            var resOptionOperatorMoneyTransfer = '<option value=' + res.data[i]
                                .gstStateId + ' >' + res.data[i].gstStateName + '</option>'
                            optionOperatorMoneyTransfer.push(resOptionOperatorMoneyTransfer);
                        }
                        $('#gstStateMoneyTransfer').html(optionOperatorMoneyTransfer);
                    }
                });
            });
        }
        //for delete
        function deletebenefeciry(bene_id) {
            $(document).ready(function() {
                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to delete this beneficiary ?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true
                    })
                    .then((willSubmit) => {
                        if (willSubmit) {
                            $('.pageLoader').fadeIn();
                            $.ajax({
                                url: "{{ url('/deletebeneficiary') }}",
                                data: {
                                    bene_id: bene_id,
                                    remiterMobile: $('#remiterMobile').val()
                                },
                                success: function(res) {
                                    $('.pageLoader').fadeOut();
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/services/b2bServices/MoneyTransfer"
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
                                                        "/services/b2bServices/MoneyTransfer"
                                                }
                                            }
                                        );
                                    }

                                }
                            });
                        }
                    });
            });

        }

        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');

            $.ajax({
                url: "{{ url('/getBankList') }}",
                success: function(res) {
                    var optionOperator = ['<option value="0" >--Select Bank Name--</option>'];
                    var optionLengthOperator = res.data.length;

                    for (var i = 0; i < optionLengthOperator; i++) {
                        var resOptionOperator = '<option value=' + res.data[i].BANKID + ' >' + res.data[
                                i]
                            .BANKNAME + '</option>'
                        optionOperator.push(resOptionOperator);
                    }
                    $('#bankId').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });

            $('#addBenButton').on('click', function() {
                var bankId = $('#bankId').val();
                var ifcscode = $('#ifcscode').val();
                var accNumber = $('#accNumber').val();
                var acntHoldName = $('#acntHoldName').val();
                var address = $('#address').val();
                var dateOfBirth = $('#dateOfBirth').val();
                var pincode = $('#pinCode').val();
                var remiterMobile = $('#remiterMobile').val();
                if (bankId == 0) {
                    errorAlert("Required", "Please select the Bank.", "bankId");
                    return false;
                }

                if (ifcscode == 0) {
                    errorAlert("Required", "Please enter the ifsc code.", "ifcscode");
                    return false;
                }

                if (accNumber == 0) {
                    errorAlert("Required", "Please enter the account number.", "accNumber");
                    return false;
                }

                if (acntHoldName == 0) {
                    errorAlert("Required", "Please enter the account holder name.", "acntHoldName");
                    return false;
                }
                if (pincode == 0) {
                    errorAlert("Required", "Please enter the date of birth.", "pincode");
                    return false;
                }

                if (address == 0) {
                    errorAlert("Required", "Please enter the address.", "address");
                    return false;
                }

                if (dateOfBirth == 0) {
                    errorAlert("Required", "Please enter the date of birth.", "dateOfBirth");
                    return false;
                }


                addBenFun(remiterMobile, acntHoldName, bankId, accNumber, ifcscode, 0, dateOfBirth, address,
                    pincode);
            })

            function addBenFun(remiterMobile, acntHoldName, bankId, accNumber, ifcscode, verified, dateOfBirth,
                address, pincode) {
                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to add this beneficiary ?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true
                    })
                    .then((willSubmit) => {
                        if (willSubmit) {
                            $('.pageLoader').fadeIn();
                            $.ajax({
                                url: "{{ url('/addBenfeiciry') }}",
                                data: {
                                    remiterMobile: remiterMobile,
                                    acntHoldName: acntHoldName,
                                    bankId: bankId,
                                    accNumber: accNumber,
                                    ifcscode: ifcscode,
                                    verified: verified,
                                    dateOfBirth: dateOfBirth,
                                    address: address,
                                    pincode: pincode
                                },
                                success: function(res) {
                                    $('.pageLoader').fadeOut();
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/services/b2bServices/MoneyTransfer"
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
                                                        "/services/b2bServices/MoneyTransfer"
                                                }
                                            }
                                        );
                                    }
                                }
                            });
                        }
                    });

            }

            //get otp for money transfer
            $('#getOTPMoneyTransfer').on('click', function() {
                var bankLimitMoneyTransfer = $('[name="bankLimitMoneyTransfer"]:checked').val();
                var gstStateMoneyTransfer = $('#gstStateMoneyTransfer').val();
                var gstStateMoneyTransferAddress = $('#gstStateMoneyTransfer option:selected').text();
                var taxTypeMoneyTransfer = $('#taxTypeMoneyTransfer').val();
                var amountMoneyTransfer = $('#amountMoneyTransfer').val();
                var otpMoneyTransfer = $('#otpMoneyTransfer').val();
                if (gstStateMoneyTransfer == 0) {
                    errorAlert("Required", "Please select the Gst state", "gstStateMoneyTransfer");
                    return false;
                }
                if (taxTypeMoneyTransfer == 0) {
                    errorAlert("Required", "Please select the Tax Type", "taxTypeMoneyTransfer");
                    return false;
                }
                if (otpEncMoneyTransfer == "") {
                    errorAlert("Required", "Please Enter the amount", "amountMoneyTransfer");
                    return false;
                }
               
                getOtpMoneyTansfer();
            });


            function getOtpMoneyTansfer() {
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/getOtpMoneyTansfer') }}",

                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.status == true) {
                            $('#OTPDiv').show();
                            $('#spanOtp').html(res.message);
                            $('#otpEncMoneyTransfer').val(res.otpEnc);
                        } else {
                            swal("Error", res.message, "error").then(
                                function(res) {
                                    $('.pageLoader').fadeIn();
                                    if (res) {
                                        var loc = window.location;
                                        window.location = loc
                                            .origin +
                                            "/services/b2bServices/MoneyTransfer"
                                    }
                                }
                            );
                        }
                    }
                });
            }

            $('#sendMoneyTransfer').on('click',function(){
                var bankLimitMoneyTransfer = $('[name="bankLimitMoneyTransfer"]:checked').val();
                var gstStateMoneyTransfer = $('#gstStateMoneyTransfer').val();
                var taxTypeMoneyTransfer = $('#taxTypeMoneyTransfer option:selected').text();
                var amountMoneyTransfer = $('#amountMoneyTransfer').val();
                var otpMoneyTransfer = $('#otpMoneyTransfer').val();
                var otpEncMoneyTransfer = $('#otpEncMoneyTransfer').val();
                var gstStateMoneyTransferAddress = $('#gstStateMoneyTransfer option:selected').text();
                var beneId = $('#beneId').val();
                if (gstStateMoneyTransfer == 0) {
                    errorAlert("Required", "Please select the Gst state", "gstStateMoneyTransfer");
                    return false;
                }
                if (taxTypeMoneyTransfer == 0) {
                    errorAlert("Required", "Please select the Tax Type", "taxTypeMoneyTransfer");
                    return false;
                }
                if (amountMoneyTransfer == "") {
                    errorAlert("Required", "Please Enter the amount", "amountMoneyTransfer");
                    return false;
                }
                if (otpEncMoneyTransfer == "") {
                    errorAlert("Required", "Please get the otp & Enter the otp", "otpEncMoneyTransfer");
                    return false;
                }
                if (otpMoneyTransfer == "") {
                    errorAlert("Required", " Enter the otp", "otpEncMoneyTransfer");
                    return false;
                }

                validateOtp(otpEncMoneyTransfer,otpMoneyTransfer,beneId,gstStateMoneyTransfer,taxTypeMoneyTransfer,amountMoneyTransfer,bankLimitMoneyTransfer,gstStateMoneyTransferAddress);
            })

            function validateOtp(encOtp,otp,beneId,gstState,taxType,amount,bankPipe,gstAddress){
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/sendMoneyValidateOtp') }}",
                    data:{
                        encOtp:encOtp,otp:otp
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.status == true) {
                            sendmoney(beneId,gstState,taxType,amount,bankPipe,gstAddress);
                        } else {
                            swal("Error", "Invalid Otp .Please Enter the Valid Otp", "error")
                        }
                    }
                });
            }

          function  sendmoney(beneId,gstState,taxType,amount,bankPipe,gstAddress){
                $.ajax({
                    url: "{{ url('/sendMoney') }}",
                    data:{
                        beneId:beneId,gstState:gstState,taxType:taxType,amount:amount,bankPipe:bankPipe,gstAddress:gstAddress
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.status == true) {
                            
                        } else {
                            swal("Error", "Invalid Otp .Please Enter the Valid Otp", "error")
                        }
                    }
                });
            }


           

        });
    </script>
@endsection
