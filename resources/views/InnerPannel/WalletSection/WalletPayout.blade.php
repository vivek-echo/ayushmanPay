@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('' . config('constant.ASSET') . 'css/vendors/sweetalert2.css') }}">
    <script src="{{ asset('' . config('constant.ASSET') . 'js/sweet-alert/sweetalert.min.js') }}"></script>
    @if ($status === true)
        <script type="text/javascript">
            var msg = '<?php echo $message; ?>';
            swal("Successfull", msg, "success");
        </script>
    @endIf
    @if ($status === false)
        <script>
            var msg = '<?php echo $message; ?>';
            swal("Error", msg, "error");
        </script>
    @endIf
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Wallet Payout</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Wallet Section</li>
                        <li class="breadcrumb-item active">Wallet Payout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="row m-0">
                        <div class="col-12 p-0">
                            <ul class="nav nav-pills mb-3 mt-4 mx-4" id="pills-tab" role="tablist">

                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link active" id="accountList-tab" data-bs-toggle="pill"
                                        data-bs-target="#accountList" type="button" role="tab"
                                        aria-controls="accountList" aria-selected="false">
                                        <span class="d-flex">
                                            <i class="myicon-file-text1 fs-5"></i>
                                            Account List
                                        </span>
                                    </button>
                                </li>

                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link " id="addAccount-tab" data-bs-toggle="pill"
                                        data-bs-target="#addAccount" type="button" role="tab"
                                        aria-controls="addAccount" aria-selected="false">
                                        <span class="d-flex">
                                            <i data-feather="plus-square" class="fs-5 me-1"></i>
                                            Add Account
                                        </span>
                                    </button>
                                </li>
                            </ul>
                            <hr>
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active " id="accountList" role="tabpanel"
                                    aria-labelledby="pills-prepaid">

                                    <div class="row m-4">
                                        @if ($dataListCount != 0)
                                            <div class="dt-ext table-responsive pt-3" id="searched">
                                                <table class="display" id="export-button">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Bank Name</th>
                                                            <th>Account Number</th>
                                                            <th>IFSC code</th>
                                                            <th>Name</th>
                                                            <th>Account Type</th>
                                                            <th>Verified Status</th>
                                                            <th>Document Verified Status</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dataList as $k => $item)
                                                            <tr>

                                                                <td>{{ $k + 1 }}</td>
                                                                <td>{{ $item['bankname'] }}</td>
                                                                <td>{{ $item['account'] }}</td>
                                                                <td>{{ $item['ifsc'] }}</td>
                                                                <td>{{ $item['name'] }}</td>
                                                                <td>{{ $item['account_type'] }}</td>
                                                                <td>
                                                                    <?php
                                                                    if ($item['verified'] == 1) {
                                                                        echo '<span class="text-success">VERIFIED</span>';
                                                                    } else {
                                                                        echo '<span class="text-success">NOT VERIFIED</span>';
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($item['status'] == 1) {
                                                                        echo '<span class="text-success">DOCUMENTS UPLOADED</span>';
                                                                    } else {
                                                                        echo '<span class="text-danger">NOT UPLOADED</span>';
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    @if ($item['status'] == 2)
                                                                        <a class="text-warning me-2"
                                                                            title="Upload Documents" href="javascript:void(0);"
                                                                            onclick="fileUpload({{ $item['beneid'] }})"> <i
                                                                                data-feather="upload"></i> </a>
                                                                    @endif


                                                                    <a class="text-success"  title="Check Account Status" href="javascript:void(0);"
                                                                        onclick="accountStatus({{ $item['beneid'] }})">
                                                                        <i data-feather="check-square"></i></a>


                                                                    @if ($item['verified'] == 1 && $item['status'] == 1)
                                                                        <a class="text-success" title="Transfer Wallet" href="javascript:void(0);"
                                                                            onclick="transferWalletMoney({{ $item['beneid'] }})">
                                                                            <i data-feather="send"></i></a>
                                                                    @endif
                                                                </td>

                                                            </tr>
                                                        @endforeach


                                                    </tbody>

                                                </table>
                                            </div>
                                        @else
                                            <div class="card">
                                                <div class="card-body bg-warning "
                                                    style="border-radius:10px 10px 10px 10px;">
                                                    <h4>{{ $message }}</h4>
                                                </div>
                                            </div>
                                        @endIf
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="addAccount" role="tabpanel" aria-labelledby="pills-prepaid">

                                    <div class="row m-4">
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Bank Name
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="bankNameAddAcount" id="bankNameAddAcount" class="form-select">
                                                    <option value="">--Select Bank--</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="form-group col-1 mb-0"> <img
                                                            src="{{ asset('' . config('constant.ASSET') . 'images/loader-5.gif') }}"
                                                            alt="" width="45" id="perpaidOperatorLoading"
                                                            style="display:none;">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Account Number</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="accNoAddAcount" id="accNoAddAcount" class="form-control"
                                                type="text" placeholder="Enter Account Number" autocomplete="off">

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">IFSC Code</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="ifscAddAcount" id="ifscAddAcount" class="form-control"
                                                type="text" placeholder="Enter IFSC Code" autocomplete="off">

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Name</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="nameAddAcount" id="nameAddAcount" class="form-control"
                                                type="text" placeholder="Enter Your name" autocomplete="off">

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Account type
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="accTypeAddAcount" id="accTypeAddAcount"
                                                    class="form-select">
                                                    <option value="">--Select--</option>
                                                    <option value="PRIMARY">PRIMARY</option>
                                                    <option value="RELATIVE">RELATIVE</option>
                                                </select>

                                            </div>

                                        </div>
                                        <div class="form-group mt-4">

                                            <a class="btn btn-primary" id="submitAddAccount">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="fileUploadModal" tabindex="-1" aria-labelledby="fileUploadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileUploadModalLabel">Upload Documents</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <form method="POST" action="{{ url('wallet/payoutWallet') }}" id="formSubmitUploadDoc"
                        enctype='multipart/form-data'>
                        @csrf
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">Document Type
                                </label>
                                <div class="input-group">
                                    <select name="docTypeFileUpload" id="docTypeFileUpload" class="form-select"
                                        onchange="selectDocType()">
                                        <option value="">--Select--</option>
                                        <option value="PAN">PAN CARD</option>
                                        <option value="AADHAAR">AADHAAR CARD</option>
                                    </select>

                                </div>

                            </div>
                            <div class="form-group col-6">
                                <input type="hidden" id="beneidFileUpload" name="beneidFileUpload">
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Bank Passbook</label>
                                <input class="form-control" type="file" id="uploadPassbook" accept="image/*"
                                    onchange="loadFilePassbook(event)" name="uploadPassbook">
                            </div>

                            <div class="form-group col-6" id="AadhaarDivFront" style="display:none;">
                                <label class="col-form-label">Upload Aadhaar Front</label>
                                <input class="form-control" type="file" id="uploadAadhaarFront" accept="image/*"
                                    onchange="loadFileAadhaarFront(event)" name="uploadAadhaarFront">
                            </div>
                            <div class="form-group col-6" id="AadhaarDivBack" style="display:none;">
                                <label class="col-form-label">Upload Aadhaar Back</label>
                                <input class="form-control" type="file" id="uploadAadhaarBack" accept="image/*"
                                    onchange="loadFileAadhaarBack(event)" name="uploadAadhaarBack">
                            </div>

                            <div class="form-group col-6" id="PanDiv" style="display:none;">
                                <label class="col-form-label">Upload Pan card</label>
                                <input class="form-control" type="file" id="uploadPan" accept="image/*"
                                    onchange="loadFilePan(event)" name="uploadPan">
                            </div>


                            <hr>
                            <div class="form-group col-4" id="passbookDivPhoto" style="display:none;">
                                <label class="col-form-label">Bank Passbook</label>
                                <div class="col-lg-12">
                                    <img class="img-thumbnail"
                                        src="{{ asset('' . config('constant.ASSET') . 'images/dlimage.png') }}"
                                        alt="DLimage" id="outputPassbook" width="230px" height="230px">
                                </div>
                            </div>
                            <div class="form-group col-4" id="AadharFrontDivPhoto" style="display:none;">
                                <label class="col-form-label">Aadhar Front</label>
                                <div class="col-lg-12">
                                    <img class="img-thumbnail"
                                        src="{{ asset('' . config('constant.ASSET') . 'images/dlimage.png') }}"
                                        alt="DLimage" id="outputAadharFront" width="230px" height="230px">
                                </div>
                            </div>
                            <div class="form-group col-4" id="AadharBackDivPhoto" style="display:none;">
                                <label class="col-form-label">Aadhar Back</label>
                                <div class="col-lg-12">
                                    <img class="img-thumbnail"
                                        src="{{ asset('' . config('constant.ASSET') . 'images/dlimage.png') }}"
                                        alt="DLimage" id="outputAadharBack" width="230px" height="230px">
                                </div>
                            </div>
                            <div class="form-group col-4" id="PanDivPhoto" style="display:none;">
                                <label class="col-form-label">Pan Card</label>
                                <div class="col-lg-12">
                                    <img class="img-thumbnail"
                                        src="{{ asset('' . config('constant.ASSET') . 'images/dlimage.png') }}"
                                        alt="DLimage" id="outputPan" width="230px" height="230px">
                                </div>
                            </div>


                        </div>
                    </form>
                    <div class="form-group mt-4">

                        <a class="btn btn-primary" id="submitUploadDoc">Uplaod</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="TransferMoneyModal" tabindex="-1" aria-labelledby="TransferMoneyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TransferMoneyModalLabel">Transfer Wallet Money</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">
                    <div class="row m-0">
                        <div class="form-group col-6">
                            <label class="col-form-label">Mode
                            </label>
                            <div class="input-group">
                                <select name="modeMT" id="modeMT" class="form-select">
                                    <option value="">--Select--</option>
                                    <option value="IMPS">IMPS</option>
                                    <option value="NEFT">NEFT</option>
                                </select>

                            </div>

                        </div>
                        <input type="hidden" id="beneIdMT">
                        <div class="form-group col-6">
                            <label class="col-form-label">Mode
                            </label>
                            <input type="text" id="amountMT" class="form-control" placeholder="Enter Amount">

                        </div>
                        <div class="form-group mt-4">

                            <a class="btn btn-primary" id="submitTransferWalletMoney">Uplaod</a>
                        </div>
                    </div>
                
            </div>

        </div>
    </div>
</div>

    <script>
        function transferWalletMoney(e){
            $('#beneIdMT').val(e);
            $('#modeMT').val('');
            $('#amountMT').val('');
            $('#TransferMoneyModal').modal('show');
        }

        function accountStatus(beneid) {
            $('.pageLoader').fadeIn();
            $(document).ready(function() {
                $.ajax({
                    url: "{{ url('/accountStatusPayout') }}",
                    data: {
                        'beneid': beneid
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.api.status == true) {
                            if (res.api.accountstatus == 0) {
                                swal("Deactivated", "Account is Deactivated", "info");
                            } else if (res.api.accountstatus == 1) {
                                swal("Activated", "Account is Activated", "success");
                            } else if (res.api.accountstatus == 2) {
                                swal("Pending", "Document Upload Pending", "info");
                            } else if (res.api.accountstatus == 3) {

                                swal("Pending", "Document verifcation pending at admin end", "info");
                            } else {
                                swal("Deactivated", "Account is Deactivated", "info");
                            }

                        } else {
                            swal("Error", res.api.message, "error");
                        }
                    }
                });

            });
        }

        var loadFilePassbook = function(event) {
            var readerPan = new FileReader();
            readerPan.onload = function() {
                var outputPassbook = document.getElementById('outputPassbook');
                outputPassbook.src = readerPan.result;
            };
            readerPan.readAsDataURL(event.target.files[0]);
            $(document).ready(function() {
                $('#passbookDivPhoto').show();
            });
        };

        var loadFileAadhaarFront = function(event) {
            var readerPan = new FileReader();
            readerPan.onload = function() {
                var outputAadharFront = document.getElementById('outputAadharFront');
                outputAadharFront.src = readerPan.result;
            };
            readerPan.readAsDataURL(event.target.files[0]);
            $(document).ready(function() {
                $('#AadharFrontDivPhoto').show();
            });
        };

        var loadFileAadhaarBack = function(event) {
            var readerPan = new FileReader();
            readerPan.onload = function() {
                var outputAadharBack = document.getElementById('outputAadharBack');
                outputAadharBack.src = readerPan.result;
            };
            readerPan.readAsDataURL(event.target.files[0]);
            $(document).ready(function() {
                $('#AadharBackDivPhoto').show();
            });
        };

        var loadFilePan = function(event) {
            var readerPan = new FileReader();
            readerPan.onload = function() {
                var outputPan = document.getElementById('outputPan');
                outputPan.src = readerPan.result;
            };
            readerPan.readAsDataURL(event.target.files[0]);
            $(document).ready(function() {
                $('#PanDivPhoto').show();
            });
        };

        function selectDocType() {
            $(document).ready(function() {
                $('#AadhaarDivFront').hide();
                $('#AadhaarDivBack').hide();
                $('#PanDiv').hide();
                $('#PanDivPhoto').hide();
                $('#AadharBackDivPhoto').hide();
                $('#AadharFrontDivPhoto').hide();
                var docTypeFileUpload = $('#docTypeFileUpload').val();
                if (docTypeFileUpload == "AADHAAR") {
                    $('#AadhaarDivFront').show();
                    $('#AadhaarDivBack').show();
                } else if (docTypeFileUpload == "PAN") {
                    $('#PanDiv').show();

                }
            });
        }

        function fileUpload(beneid) {
            $(document).ready(function() {
                $('#AadhaarDivFront').hide();
                $('#AadhaarDivBack').hide();
                $('#PanDiv').hide();
                $('#PanDivPhoto').hide();
                $('#AadharBackDivPhoto').hide();
                $('#AadharFrontDivPhoto').hide();
                $('#passbookDivPhoto').hide();


                $('#beneidFileUpload').val(beneid);
                $('#docTypeFileUpload').val('');


                $('#uploadPassbook').val('');
                $('#uploadAadhaarFront').val('');
                $('#uploadAadhaarBack').val('');
                $('#uploadPan').val('');

                $('#fileUploadModal').modal('show');
            })
        }
        $(document).ready(function() {
            ///send money
            $('#submitTransferWalletMoney').on('click',function(){
                if ($('#modeMT').val() == "") {
                    errorAlert("Required", "Please select Payment Mode", "modeMT");
                    return false;
                }
                if ($('#amountMT').val() == "") {
                    errorAlert("Required", "Please Enter Amount", "amountMT");
                    return false;
                }

                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/sendMoneyWalletPayout') }}",
                    data: {
                        "bene_id": $('#beneIdMT').val(),
                        "amount": $('#amountMT').val(),
                        "mode": $('#modeMT').val()
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.api.status == false) {
                            swal("Error", res.api.message, "error")
                        } else {
                            swal("Successfull", res.api.message, "success")
                        }
                    }
                });

            })

            $('#submitUploadDoc').on('click', function() {
                $('.pageLoader').fadeIn();
                $('#formSubmitUploadDoc').submit();


            })
            // FOR ACTIVE SIDEBAR LINK
            $('#walletLink').addClass('activeLink');
            $('#perpaidOperatorLoading').show();
            $.ajax({
                url: "{{ url('/getBankNameList') }}",
                success: function(res) {

                    var optionOperator = ['<option value="0" >--Select Operator--</option>'];
                    var optionLengthOperator = res.data.length;
                    for (var i = 0; i < optionLengthOperator; i++) {

                        var resOptionOperator = '<option value="' + res.data[i].iinno + '" >' + res
                            .data[i]
                            .bankName + '</option>'
                        optionOperator.push(resOptionOperator);


                    }

                    $('#bankNameAddAcount').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });

            $('#submitAddAccount').on('click', function() {

                var bankNameAddAcount = $('#bankNameAddAcount').val();
                var accNoAddAcount = $('#accNoAddAcount').val();
                var ifscAddAcount = $('#ifscAddAcount').val();
                var nameAddAcount = $('#nameAddAcount').val();
                var accTypeAddAcount = $('#accTypeAddAcount').val();
                if (bankNameAddAcount == "") {
                    errorAlert("Required", "Please Select bank", "bankNameAddAcount");
                    return false;
                }

                if (accNoAddAcount == "") {
                    errorAlert("Required", "Please Enter Your Account Number", "accNoAddAcount");
                    return false;
                }

                if (ifscAddAcount == "") {
                    errorAlert("Required", "Please Enter Your IFSC Code", "ifscAddAcount");
                    return false;
                }

                if (nameAddAcount == "") {
                    errorAlert("Required", "Please Enter Your Name", "nameAddAcount");
                    return false;
                }

                if (accTypeAddAcount == "") {
                    errorAlert("Required", "Please Select Account type", "accTypeAddAcount");
                    return false;
                }
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/addAccountPayout') }}",
                    data: {
                        "bankid": bankNameAddAcount,
                        "account": accNoAddAcount,
                        "ifsc": ifscAddAcount,
                        "name": nameAddAcount,
                        "account_type": accTypeAddAcount
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.api.status == false) {
                            swal("Error", res.api.message, "error")
                        } else {
                            swal("Successfull", res.api.message, "success").then(function(e) {
                                $('.pageLoader').fadeIn();
                                var loc = window.location;
                                window.location = loc.origin + "/wallet/payoutWallet"
                            });
                        }
                    }
                });

            });

        });
    </script>
@endsection
