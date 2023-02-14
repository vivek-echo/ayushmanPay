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
                                        <button class="nav-link active" id="moneyTransfer-tab" data-bs-toggle="pill"
                                            data-bs-target="#moneyTransfer" type="button" role="tab"
                                            aria-controls="moneyTransfer" aria-selected="true">Money Transfer</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="addBeneficiary-tab" data-bs-toggle="pill"
                                            data-bs-target="#addBeneficiary" type="button" role="tab"
                                            aria-controls="addBeneficiary" aria-selected="false">Add Beneficiary</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="beneficiaryList-tab" data-bs-toggle="pill"
                                            data-bs-target="#beneficiaryList" type="button" role="tab"
                                            aria-controls="beneficiaryList" aria-selected="false">Beneficiary List</button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="pills-tabContent">

                                    <!-- FOR moneyTransfer -->
                                    <div class="tab-pane fade show active" id="moneyTransfer" role="tabpanel"
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
                                    <div class="tab-pane fade" id="beneficiaryList" role="tabpanel"
                                        aria-labelledby="pills-beneficiaryList">
                                        <div class="row">

                                            <div class="form-group col-3">
                                                <label class="col-form-label">Mobile Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="preMobileBen" id="preMobileBen" class="form-control"
                                                    type="text" placeholder="Enter Mobile Number" autocomplete="off">

                                            </div>
                                            <div class="form-group col-4">
                                                <button class="btn btn-primary m-t-35" data-bs-toggle="modal"
                                                    data-bs-target="#viewBeneficiary">Search</button>
                                            </div>
                                        </div>
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
                                                        <th scope="col">Mobile Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Test Name </td>
                                                        <td>121332312</td>
                                                        <td>Test Name </td>
                                                        <td>SBIN000000 </td>
                                                        <td>8887778888 </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Test Name </td>
                                                        <td>121332312</td>
                                                        <td>Test Name </td>
                                                        <td>SBIN000000 </td>
                                                        <td>8887778888 </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Test Name </td>
                                                        <td>121332312</td>
                                                        <td>Test Name </td>
                                                        <td>SBIN000000 </td>
                                                        <td>8887778888 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                            <label class="col-form-label">Bank Name</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="bankName" id="bankName" class="form-control" type="text"
                                placeholder="Enter Bank Name" autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Account Number</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="acntNo" id="acntNo" class="form-control" type="text"
                                placeholder="Enter Account Number" autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Account Holder Name</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="acntHoldNameBen" id="acntHoldNameBen" class="form-control" type="text"
                                placeholder="Enter Account Holder Name" autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">IFSC Code</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="ifcscodeBen" id="ifcscodeBen" class="form-control" type="text"
                                placeholder="Enter IFSC Code" autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Mobile Number</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="mobNo" id="mobNo" class="form-control" type="text"
                                placeholder="Enter Mobile Number" autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Amount</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="amnt" id="amnt" class="form-control" type="text"
                                placeholder="Enter Amount" autocomplete="off">

                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button class="btn btn-primary" id="">Get OTP</button>
                        <button class="btn btn-warning" id="">Send</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
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
                        text: "Are you sure you want to Register Remitter ?",
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

        });
    </script>
@endsection
