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
                                                    <select name="bankName" id="bankName" class="form-select">
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
                                                        placeholder="Enter Account Number" id="">
                                                    <button type="button" class="btn btn-outline-info rounded-end">
                                                        Verify <img src="{{ asset('images/loader-5.gif') }}"
                                                            alt="" width="25" id="loading"
                                                            style="display:none;"></button>
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
                                                <label class="col-form-label">Mobile Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="mobNo" id="mobNo" class="form-control" type="text"
                                                    placeholder="Enter Mobile Number" autocomplete="off">

                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <button class="btn btn-primary" id="">Submit</button>
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
                                                <input name="preMobile" id="preMobile" class="form-control" type="text"
                                                    placeholder="Enter Mobile Number" autocomplete="off">

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
                            <input name="acntHoldName" id="acntHoldName" class="form-control" type="text"
                                placeholder="Enter Account Holder Name" autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">IFSC Code</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="ifcscode" id="ifcscode" class="form-control" type="text"
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
                        var resOptionOperator = '<option value=' + res.data[i].BANKID + ' >' + res.data[i]
                            .BANKNAME + '</option>'
                        optionOperator.push(resOptionOperator);
                    }
                    $('#bankName').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });

        });
    </script>
@endsection
