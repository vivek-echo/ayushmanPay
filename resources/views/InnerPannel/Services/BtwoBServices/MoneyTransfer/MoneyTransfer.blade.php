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
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services"> Services</a> </li>
                        <li class="breadcrumb-item active"><a href="/services/b2bServices/MoneyTransfer"> Money Transfer</a>
                        </li>
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
                                        <button class="nav-link active" id="remitter-tab" data-bs-toggle="pill"
                                            data-bs-target="#remitter" type="button" role="tab"
                                            aria-controls="remitter" aria-selected="false">Remiter</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link " id="fetchBeneficiary-tab" data-bs-toggle="pill"
                                            data-bs-target="#fetchBeneficiary" type="button" role="tab"
                                            aria-controls="fetchBeneficiary" aria-selected="true">Fetch Beneficiary</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="addBeneficiary-tab" data-bs-toggle="pill"
                                            data-bs-target="#addBeneficiary" type="button" role="tab"
                                            aria-controls="addBeneficiary" aria-selected="false">Add Beneficiary</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="checkTransStatus-tab" data-bs-toggle="pill"
                                            data-bs-target="#checkTransStatus" type="button" role="tab"
                                            aria-controls="checkTransStatus" aria-selected="false">Check Transaction
                                            Status</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="refundDivision-tab" data-bs-toggle="pill"
                                            data-bs-target="#refundDivision" type="button" role="tab"
                                            aria-controls="refundDivision" aria-selected="false">Refund</button>
                                    </li>

                                </ul>
                                <div class="tab-content mt-4" id="pills-tabContent">


                                    <!------------------------------------------- FOR Remiter ---------------------------------------------------------->
                                    <div class="tab-pane fade show active" id="remitter" role="tabpanel"
                                        aria-labelledby="pills-remitter">
                                        <div class="row">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Mobile Number</label><span
                                                        class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Mobile Number" id="remiterCheckMobile">

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <button class="btn btn-warning" id="checkRemitter">Check</button>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row" id="registerRemitterDivision" style="display:none">
                                            <div class="form-group col-4">
                                                <label class="col-form-label">Mobile Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="preMobileRegRem" id="preMobileRegRem" class="form-control"
                                                    type="text" autocomplete="off" value=""
                                                    placeholder="Enter Mobile Number" readonly>

                                            </div>

                                            <div class="form-group col-4">
                                                <label class="col-form-label">First Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="firstNameRegRem" id="firstNameRegRem" class="form-control"
                                                    type="text" autocomplete="off" value=""
                                                    placeholder="Enter First Name">

                                            </div>


                                            <div class="form-group col-4">
                                                <label class="col-form-label">Last Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="lastNameRegRem" id="lastNameRegRem" class="form-control"
                                                    type="text" autocomplete="off" value=""
                                                    placeholder="Enter Last Name">

                                            </div>


                                            <div class="form-group col-4">
                                                <label class="col-form-label">Address</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="addressRegRem" id="addressRegRem" class="form-control"
                                                    type="text" autocomplete="off" value=""
                                                    placeholder="Enter Address">

                                            </div>

                                            <div class="form-group col-4">
                                                <label class="col-form-label">pincode</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="pincodeRegRem" id="pincodeRegRem" class="form-control"
                                                    type="text" autocomplete="off" value=""
                                                    placeholder="Enter Pincode">

                                            </div>

                                            <div class="form-group col-4">
                                                <label class="col-form-label">Date Of Birth</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <div class="input-group">
                                                    <input name="dobRegRem" id="dobRegRem"
                                                        class="datepicker-here form-control digits" type="text"
                                                        data-language="en" placeholder="Date Of Birth" readonly>
                                                    <div class="input-group-text" id="btnGroupAddon"><i
                                                            class="text-secondary" data-feather="calendar"></i></div>
                                                </div>


                                            </div>


                                            <input name="staterespRegRem" id="staterespRegRem" class="form-control"
                                                type="hidden" autocomplete="off" value="" readonly>
                                            <input name="bank3_flagRegRem" id="bank3_flagRegRem" class="form-control"
                                                type="hidden" autocomplete="off" value="No" readonly>
                                            <input name="gst_stateRegRem" id="gst_stateRegRem" class="form-control"
                                                type="hidden" autocomplete="off" value="07" readonly>

                                            <div class="form-group text-center">
                                                <div class="row">
                                                    <div class="form-group col-4 "></div>
                                                    <div class="form-group col-4 ">
                                                        <label class="col-form-label">OTP</label><span
                                                            class="text-danger fa-lg font-weight-500">
                                                            *</span>
                                                        <input name="otpRegRem" id="otpRegRem" class="form-control"
                                                            type="text" autocomplete="off" placeholder="Enter OTP">

                                                    </div>
                                                    <div class="form-group col-4 "></div>
                                                </div>

                                                <button class="btn btn-primary m-t-35" id="remiterRegister">Register
                                                    Remiter</button>
                                            </div>
                                        </div>

                                        <div class="row" id="getRegisteredRemitterDivision" style="display:none">
                                            <div class="card-body bg-light box-shadow-1 text-dark rounded">
                                                <div
                                                    class="px-2 border-bottom-dark mb-3 d-flex justify-content-start align-items-center">
                                                    <div class="pe-2"><i class="myicon-membership fs-3"></i></div>
                                                    <div class="mt-1">
                                                        <h4>Details</h4>
                                                    </div>
                                                </div>
                                                <div class="row m-0">
                                                    <div class="row form-group mb-2 col-6">
                                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i>
                                                            First Name </label>
                                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                        <label class="col-form-label col-sm-6 fw-bold"
                                                            id="firstNameGetRegRem"></label>
                                                    </div>
                                                    <div class="row form-group mb-2 col-6">
                                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i>
                                                            Last Name </label>
                                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                        <label class="col-form-label col-sm-6 fw-bold"
                                                            id="lastNameGetRegRem"></label>
                                                    </div>
                                                    <div class="row form-group mb-2 col-6">
                                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i>
                                                            Mobile </label>
                                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                        <label class="col-form-label col-sm-6 fw-bold"
                                                            id="mobileGetRegRem"></label>
                                                    </div>
                                                    {{-- <div class="row form-group mb-2 col-6">
                                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i>
                                                            Bank3_status </label>
                                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                        <label class="col-form-label col-sm-6 fw-bold"
                                                            id="bank3StsGetRegRem"></label>
                                                    </div> --}}

                                                    <div class="row form-group mb-2 col-6">
                                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i>
                                                            Bank1_limit </label>
                                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                        <label class="col-form-label col-sm-6 fw-bold"
                                                            id="bank1limGetRegRem"></label>
                                                    </div>

                                                    <div class="row form-group mb-2 col-6">
                                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i>
                                                            Bank2_limit </label>
                                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                        <label class="col-form-label col-sm-6 fw-bold"
                                                            id="bank2limGetRegRem"></label>
                                                    </div>

                                                    <div class="row form-group mb-2 col-6">
                                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i>
                                                            Bank3_limit </label>
                                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                        <label class="col-form-label col-sm-6 fw-bold"
                                                            id="bank3limGetRegRem"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!------------------------------------------- FOR Remiter ---------------------------------------------------------->
                                    <!------------------------------------------- Fetch Beneficiary ---------------------------------------------------------->
                                    <div class="tab-pane fade" id="fetchBeneficiary" role="tabpanel"
                                        aria-labelledby="pills-fetchBeneficiary">
                                        <div class="row">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Mobile Number</label><span
                                                        class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Mobile Number" id="searchBenMobile"
                                                            autocomplete="off">

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <button class="btn btn-warning"
                                                        id="fetchBeneficiaryBtn">Search</button>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="hidden" id="universalMobileNumber">
                                        <div class="row" style="display:none" id="dataTableFetchBen">
                                            <div class="dt-ext table-responsive pt-3" id="searched">
                                                <table class="display" id="export-button">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-center">SL#</th>
                                                            <th scope="col" class="text-center">Bank Name</th>
                                                            <th scope="col" class="text-center">Account Number</th>
                                                            <th scope="col" class="text-center">Name</th>
                                                            <th scope="col" class="text-center">IFSC Code</th>
                                                            <th scope="col" class="text-center">Verified Status</th>
                                                            <th scope="col" class="text-center">Action</th>
                                                            <th scope="col" class="text-center">Delete</th>

                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------- Fetch Beneficiary ---------------------------------------------------------->
                                    <!------------------------------------------- ADD Beneficiary ---------------------------------------------------------->
                                    <div class="tab-pane fade" id="addBeneficiary" role="tabpanel"
                                        aria-labelledby="pills-addBeneficiary">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Bank Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <select name="bankIdADDBen" id="bankIdADDBen" class="form-select">
                                                    <option value="">Loading ....
                                                    </option>
                                                </select>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">IFSC Code</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="ifcscodeADDBen" id="ifcscodeADDBen" class="form-control"
                                                    type="text" placeholder="Enter IFSC Code" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Account Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Account Number" id="accNumberADDBen">

                                                </div>

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Account Holder Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="acntHoldNameADDBen" id="acntHoldNameADDBen"
                                                    class="form-control" type="text"
                                                    placeholder="Enter Account Holder Name" autocomplete="off">

                                            </div>


                                            <div class="form-group col-6">
                                                <label class="col-form-label">Pincode</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="pinCodeADDBen" id="pinCodeADDBen" class="form-control"
                                                    type="text" placeholder="Enter pincode" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Address</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="addressADDBen" id="addressADDBen" class="form-control"
                                                    type="text" placeholder="Enter Address" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Date Of Birth</label><span
                                                    class="text-danger fa-lg font-weight-500"> *</span>
                                                <div class="input-group">
                                                    <input name="dateOfBirthADDBen" id="dateOfBirthADDBen"
                                                        class="datepicker-here form-control digits" type="text"
                                                        data-language="en" placeholder="Date Of Birth" readonly>
                                                    <div class="input-group-text" id="btnGroupAddon"><i
                                                            class="text-secondary" data-feather="calendar"></i></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Remitter Mobile No.</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="remiterMobileADDBen" id="remiterMobileADDBen"
                                                    class="form-control" type="text"
                                                    placeholder="Enter Remitter Mobile No." autocomplete="off">

                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <button class="btn btn-primary" id="addBenButton">Submit</button>
                                            <button class="btn btn-danger" id="">Reset</button>
                                        </div>
                                    </div>
                                    <!------------------------------------------- ADD Beneficiary ---------------------------------------------------------->
                                    <!------------------------------------------- check Status ---------------------------------------------------------->
                                    <div class="tab-pane fade" id="checkTransStatus" role="tabpanel"
                                        aria-labelledby="pills-checkTransStatus">
                                        <div class="row">

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Reference Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="referenceidTransStatus" id="referenceidTransStatus"
                                                    class="form-control" type="text"
                                                    placeholder="Enter Reference Number" autocomplete="off">

                                            </div>


                                            <div class="form-group mt-4">
                                                <button class="btn btn-primary" id="checkTransStatusbtn">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                    <!------------------------------------------- check Status ---------------------------------------------------------->
                                    <div class="tab-pane fade" id="refundDivision" role="tabpanel"
                                        aria-labelledby="pills-refundDivision">
                                        <div class="row">

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Reference Id</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="refundRefId" id="refundRefId" class="form-control"
                                                    type="text" placeholder="Enter Refrence Code" autocomplete="off">

                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Ackno Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Ackno Number" id="refundAckno">

                                                </div>

                                            </div>

                                            <div class="form-group col-6" style="display:none" id="refundOtpDiv">
                                                <label class="col-form-label">Refund OTP</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter OTP"
                                                        id="refundOtp">
                                                    <input type="hidden" class="form-control" placeholder="Enter OTP"
                                                        id="isRefundOtp">
                                                </div>

                                            </div>


                                            <div class="form-group mt-4">
                                                <button class="btn btn-primary" id="refundOtpBtn">Get OTP</button>

                                            </div>
                                        </div>
                                    </div>
                                    <script></script>
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

    {{-- send Money modal --}}
    <div class="modal fade" id="sendMoney" tabindex="-1" aria-labelledby="sendMoneyLabel" aria-hidden="true">
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
                                placeholder="Enter Otp" autocomplete="off">

                            <span id="spanOtp" class="text-danger"></span>
                        </div>

                    </div>
                    <input name="otpEncMoneyTransfer" id="otpEncMoneyTransfer" class="form-control" type="hidden"
                        autocomplete="off">
                    <input name="" id="beneId" class="form-control" type="hidden" autocomplete="off"
                        readonly>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary" id="getOTPMoneyTransfer">Get OTP</button>
                        <button class="btn btn-warning" id="sendMoneyTransfer">Send</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- status --}}
    <div class="modal fade" id="fetchCheckStatusModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaction Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <div class="row m-0">
                        <div class="form-group col-4">
                            <label class="col-form-label">UTR</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="utrCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Amount</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="amountCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Acknowledgement Number</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="acknoCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Refrence Number</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="referenceidCheckStatus" class="form-control" type="text"
                                placeholder="Enter Name" autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Account Number</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="accountCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>

                        <div class="form-group col-4">
                            <label class="col-form-label">Message</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="messageCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Customer Charge</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="customerchargeCheckStatus" class="form-control" type="text"
                                placeholder="Enter Name" autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">GST</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="gstCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Discount</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="discountCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">TDS</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="tdsCheckStatus" class="form-control" type="text" placeholder="Enter Name"
                                autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Net commission</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="netcommissionCheckStatus" class="form-control" type="text"
                                placeholder="Enter Name" autocomplete="off" readonly>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Refund txn id</label><span
                                class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input id="refundtxnidCheckStatus" class="form-control" type="text"
                                placeholder="Enter Name" autocomplete="off" readonly>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
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
                                    remiterMobile: $('#searchBenMobile').val()
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

        function monneySend(param) {
            // getGstState();
            moneyTransferDetails(param)
            //    $('#sendMoney').modal('show');
        }

        function penneyDrop(beneId) {
            $('.pageLoader').fadeIn();
            $.ajax({
                url: "{{ url('/penneyDropMoneyTransfer') }}",
                data: {
                    bene_id: beneId,
                    remiterMobile: $('#universalMobileNumber').val()
                },
                success: function(res) {
                    $('.pageLoader').fadeOut();
                    if (res.api.status == true) {
                        swal("SUCCESSFULL", res.api.message, "success");
                    } else {
                        swal("Error", res.api.message, "error");
                    }
                }
            });

        }
        ///get bank limits
        function moneyTransferDetails(bene_id) {
            $('#OTPDiv').hide();
            $('[name="bankLimitMoneyTransfer"]:checked').val('');
            $('#gstStateMoneyTransfer').val('');
            $('#taxTypeMoneyTransfer').val('0');
            $('#amountMoneyTransfer').val('');
            $('#otpMoneyTransfer').val('');
            $('#otpEncMoneyTransfer').val('');
            $('#beneId').val(bene_id);

            $(document).ready(function() {
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/fetchMoneySendDetails') }}",
                    data: {
                        bene_id: bene_id,
                        remiterMobile: $('#universalMobileNumber').val()
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.status == true) {
                            getGstState();
                            $('#bank1').html(res.data.bank1_limit);
                            $('#bank2').html(res.data.bank2_limit);
                            $('#bank3').html(res.data.bank3_limit);
                            $('#beneId').val(bene_id);
                            $('#sendMoney').modal('show');
                        }
                    }
                });
            });
        }

        //get otp for money transfer
        $('#getOTPMoneyTransfer').on('click', function() {
            var bankLimitMoneyTransfer = $('[name="bankLimitMoneyTransfer"]:checked').val();
            var gstStateMoneyTransfer = $('#gstStateMoneyTransfer').val();
            var gstStateMoneyTransferAddress = $('#gstStateMoneyTransfer option:selected')
                .text();
            var taxTypeMoneyTransfer = $('#taxTypeMoneyTransfer').val();
            var amountMoneyTransfer = $('#amountMoneyTransfer').val();
            var otpMoneyTransfer = $('#otpMoneyTransfer').val();
            if (gstStateMoneyTransfer == 0) {
                errorAlert("Required", "Please select the Gst state",
                    "gstStateMoneyTransfer");
                return false;
            }
            if (taxTypeMoneyTransfer == 0) {
                errorAlert("Required", "Please select the Tax Type",
                    "taxTypeMoneyTransfer");
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

        $('#sendMoneyTransfer').on('click', function() {
            var bankLimitMoneyTransfer = $('[name="bankLimitMoneyTransfer"]:checked').val();
            var gstStateMoneyTransfer = $('#gstStateMoneyTransfer').val();
            var taxTypeMoneyTransfer = $('#taxTypeMoneyTransfer option:selected').text();
            var amountMoneyTransfer = $('#amountMoneyTransfer').val();
            var otpMoneyTransfer = $('#otpMoneyTransfer').val();
            var otpEncMoneyTransfer = $('#otpEncMoneyTransfer').val();
            var gstStateMoneyTransferAddress = $('#gstStateMoneyTransfer option:selected')
                .text();
            var beneId = $('#beneId').val();
            if (gstStateMoneyTransfer == 0) {
                errorAlert("Required", "Please select the Gst state",
                    "gstStateMoneyTransfer");
                return false;
            }
            if (taxTypeMoneyTransfer == 0) {
                errorAlert("Required", "Please select the Tax Type",
                    "taxTypeMoneyTransfer");
                return false;
            }
            if (amountMoneyTransfer == "") {
                errorAlert("Required", "Please Enter the amount", "amountMoneyTransfer");
                return false;
            }
            if (otpEncMoneyTransfer == "") {
                errorAlert("Required", "Please get the otp & Enter the otp",
                    "otpEncMoneyTransfer");
                return false;
            }
            if (otpMoneyTransfer == "") {
                errorAlert("Required", " Enter the otp", "otpEncMoneyTransfer");
                return false;
            }

            validateOtp(otpEncMoneyTransfer, otpMoneyTransfer, beneId,
                gstStateMoneyTransfer,
                taxTypeMoneyTransfer, amountMoneyTransfer, bankLimitMoneyTransfer,
                gstStateMoneyTransferAddress);
        })

        function validateOtp(encOtp, otp, beneId, gstState, taxType, amount, bankPipe, gstAddress) {
            $('.pageLoader').fadeIn();
            $.ajax({
                url: "{{ url('/sendMoneyValidateOtp') }}",
                data: {
                    encOtp: encOtp,
                    otp: otp
                },
                success: function(res) {
                    $('.pageLoader').fadeOut();
                    if (res.status == true) {
                        sendmoneyFunctSend(beneId, gstState, taxType, amount, bankPipe,
                            gstAddress);
                    } else {
                        swal("Error", "Invalid Otp .Please Enter the Valid Otp",
                            "error")
                    }
                }
            });
        }

        function sendmoneyFunctSend(beneId, gstState, taxType, amount, bankPipe, gstAddress) {
            $('.pageLoader').fadeIn();
            $.ajax({
                url: "{{ url('/sendMoney') }}",
                data: {
                    mobile: $('#universalMobileNumber').val(),
                    beneId: beneId,
                    gstState: gstState,
                    taxType: taxType,
                    amount: amount,
                    bankPipe: bankPipe,
                    gstAddress: gstAddress
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
                        swal("Error", res.message, "error")
                    }
                }
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
        $(document).ready(function() {
            $('#refundOtpBtn').on('click', function() {
                var refundRefId = $('#refundRefId').val();
                var refundAckno = $('#refundAckno').val();
                var isRefundOtp = $('#isRefundOtp').val();
                var refundOtp = $('#refundOtp').val();
                if (refundRefId == "") {
                    errorAlert("Required", "Please Enter Your Refrence Id", "refundRefId");
                    return false;
                }
                if (refundAckno == "") {
                    errorAlert("Required", "Please Enter Your Ackno Number", "refundAckno");
                    return false;
                }
                if (isRefundOtp != "") {
                    if (refundOtp == "") {
                        errorAlert("Required", "Please Enter Your Otp", "refundOtp");
                        return false;
                    }
                }
                $.ajax({
                    url: "{{ url('/refundDMT') }}",
                    data: {
                        refundRefId: refundRefId,
                        refundAckno: refundAckno,
                        isRefundOtp: isRefundOtp,
                        refundOtp: refundOtp
                    },
                    success: function(res) {
                        if (isRefundOtp != 1) {
                            if (res.api.status == true) {
                                $('#refundOtpDiv').show();
                                $('#isRefundOtp').val(1);
                                swal("Successfull", res.message, "success")
                            } else {
                                swal("Error", res.api.message, "error")
                            }
                        } else {
                            if (res.api.status == true) {
                                swal("Successfull", res.message, "success")
                            } else {
                                swal("Error", res.api.message, "error")
                            }

                        }
                    }
                });
            });
            ///checking status 
            $('#checkTransStatusbtn').on('click', function() {
                $('.pageLoader').fadeIn();
                var referenceid = $('#referenceidTransStatus').val();
                $.ajax({
                    url: "{{ url('/checkTransStatusfun') }}",
                    data: {
                        referenceid: referenceid
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.api.status == true) {
                            $('#fetchCheckStatusModal').modal('show');
                            $('#utrCheckStatus').val(res.api.utr);
                            $('#amountCheckStatus').val(res.api.amount);
                            $('#acknoCheckStatus').val(res.api.ackno);
                            $('#referenceidCheckStatus').val(res.api.referenceid);
                            $('#accountCheckStatus').val(res.api.account);
                            $('#messageCheckStatus').val(res.api.message);
                            $('#customerchargeCheckStatus').val(res.api.customercharge);
                            $('#gstCheckStatus').val(res.api.gst);
                            $('#discountCheckStatus').val(res.api.discount);
                            $('#tdsCheckStatus').val(res.api.tds);
                            $('#netcommissionCheckStatus').val(res.api.netcommission);
                            $('#daterefundedCheckStatus').val(res.api.daterefunded);
                            $('#refundtxnidCheckStatus').val(res.api.refundtxnid);

                        } else {
                            swal("Error", res.api.message, "error")
                        }

                    }
                });
            });

            //get bank
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
                    $('#bankIdADDBen').html(optionOperator);
                    $('#perpaidOperatorLoadingADDBen').hide();
                }
            });
            //////add ben
            $('#addBenButton').on('click', function() {
                var bankId = $('#bankIdADDBen').val();
                var ifcscode = $('#ifcscodeADDBen').val();
                var accNumber = $('#accNumberADDBen').val();
                var acntHoldName = $('#acntHoldNameADDBen').val();
                var address = $('#addressADDBen').val();
                var dateOfBirth = $('#dateOfBirthADDBen').val();
                var pincode = $('#pinCodeADDBen').val();
                var remiterMobile = $('#remiterMobileADDBen').val();
                if (bankId == 0) {
                    errorAlert("Required", "Please select the Bank.", "bankIdADDBen");
                    return false;
                }

                if (ifcscode == "") {
                    errorAlert("Required", "Please enter the ifsc code.", "ifcscodeADDBen");
                    return false;
                }

                if (accNumber == "") {
                    errorAlert("Required", "Please enter the account number.", "accNumberADDBen");
                    return false;
                }

                if (acntHoldName == "") {
                    errorAlert("Required", "Please enter the account holder name.", "acntHoldNameADDBen");
                    return false;
                }
                if (pincode == "") {
                    errorAlert("Required", "Please enter Pin Code.", "pincodeADDBen");
                    return false;
                }

                if (address == "") {
                    errorAlert("Required", "Please enter the address.", "addressADDBen");
                    return false;
                }

                if (dateOfBirth == "") {
                    errorAlert("Required", "Please enter the date of birth.", "dateOfBirthADDBen");
                    return false;
                }
                if (remiterMobile == "") {
                    errorAlert("Required", "Please enter the remitter Mobile No.", "remiterMobileADDBen");
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
            //////add ben

            /***************************** Check remiter  *****************************************************************************************/
            $('#checkRemitter').on('click', function() {
                $('#registerRemitterDivision').hide();
                $('#getRegisteredRemitterDivision').hide();
                var remiterCheckMobile = $('#remiterCheckMobile').val();
                if (remiterCheckMobile == "") {
                    errorAlert("Required", "Please enter the Mobile Number.", "remiterCheckMobile");
                    return false;
                }
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/checkRemitter') }}",
                    data: {
                        remiterCheckMobile: remiterCheckMobile,

                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.api.status == false) {
                            swal("NOT REGISTERED!", res.api.message, "error").then(
                                function(e) {
                                    $('#preMobileRegRem').val(remiterCheckMobile)
                                    $('#staterespRegRem').val(res.api.stateresp)
                                    $('#registerRemitterDivision').show();
                                }
                            )
                        } else {
                            swal("REGISTERED!", res.api.message, "success").then(
                                function(i) {
                                    console.log(res.api.data.fname);
                                    $('#firstNameGetRegRem').text(res.api.data.fname);
                                    $('#lastNameGetRegRem').text(res.api.data.lname);
                                    $('#mobileGetRegRem').text(res.api.data.mobile);
                                    // $('#bank3StsGetRegRem').text(res.api.data.bank3_status);
                                    $('#bank1limGetRegRem').text(res.api.data.bank1_limit);
                                    $('#bank2limGetRegRem').text(res.api.data.bank2_limit);
                                    $('#bank3limGetRegRem').text(res.api.data.bank3_limit);
                                    $('#getRegisteredRemitterDivision').show();

                                }
                            )

                        }
                    }

                })
            })
            /**************************************************************************************************************************************************************/

            /************************************************************ Register Remiter ********************************************************************************/
            $('#remiterRegister').on('click', function() {
                var preMobileRegRem = $('#preMobileRegRem').val();
                var firstNameRegRem = $('#firstNameRegRem').val();
                var lastNameRegRem = $('#lastNameRegRem').val();
                var addressRegRem = $('#addressRegRem').val();
                var pincodeRegRem = $('#pincodeRegRem').val();
                var dobRegRem = $('#dobRegRem').val();
                var bank3_flagRegRem = $('#bank3_flagRegRem').val();
                var staterespRegRem = $('#staterespRegRem').val();
                var gst_stateRegRem = $('#gst_stateRegRem').val();
                var otpRegRem = $('#otpRegRem').val();
                if (preMobileRegRem == "") {
                    errorAlert("Required", "Please enter the Mobile Number.", "preMobileRegRem");
                    return false;
                }
                if (firstNameRegRem == "") {
                    errorAlert("Required", "Please enter First Name.", "firstNameRegRem");
                    return false;
                }
                if (lastNameRegRem == "") {
                    errorAlert("Required", "Please enter Last Name.", "lastNameRegRem");
                    return false;
                }
                if (addressRegRem == "") {
                    errorAlert("Required", "Please enter the Address.", "addressRegRem");
                    return false;
                }
                if (pincodeRegRem == "") {
                    errorAlert("Required", "Please enter the pincode.", "pincodeRegRem");
                    return false;
                }
                if (dobRegRem == "") {
                    errorAlert("Required", "Please enter the Mobile Number.", "dobRegRem");
                    return false;
                }
                if (otpRegRem == "") {
                    errorAlert("Required", "Please enter the OTP.", "otpRegRem");
                    return false;
                }
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
                                url: "{{ url('/submitRemiterRegister') }}",
                                data: {
                                    preMobile: preMobileRegRem,
                                    firstName: firstNameRegRem,
                                    lastName: lastNameRegRem,
                                    address: addressRegRem,
                                    pincode: pincodeRegRem,
                                    dob: dobRegRem,
                                    bank3_flag: bank3_flagRegRem,
                                    gst_state: gst_stateRegRem,
                                    stateresp: staterespRegRem,
                                    otp: otpRegRem
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

            })
            /**************************************************************************************************************************************************************/

            /************************************************************ fetch Ben ********************************************************************************/
            $('#fetchBeneficiaryBtn').on('click', function() {
                var i = 1;
                var searchBenMobile = $('#searchBenMobile').val();
                $('#universalMobileNumber').val(searchBenMobile);

                $('.pageLoader').fadeIn();
                $('#export-button').DataTable({
                    processing: true,
                    serverSide: true,
                    "bDestroy": true,
                    ajax: {
                        url: "{{ url('/fetchMoneyTransferDetails') }}" + '?mobile=' +
                            searchBenMobile,
                        type: 'POST'
                    },
                    // data:{
                    //     'mobile':searchBenMobile

                    // },
                    columns: [{
                            "render": function(data, type, full, meta) {
                                return '<span class="text-danger">' + (i++) + '</span>';
                            }
                        },
                        {
                            data: 'bankname'
                        },
                        {
                            data: 'accno'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'ifsc'
                        },
                        {
                            "render": function(data, type, full, meta) {
                                var verified = full.verified;
                                if (verified == 0) {
                                    return '<span class="text-danger">Not-Verified</span>'
                                } else {
                                    // return '<a href="#" onclick="monneySend(' + full.bene_id +')" class="buttons edit-button"><span class="fa fa-times-circle"></span></a>'
                                    return '<span class="text-success">Verified</span>'
                                }

                            }
                        },
                        {
                            "render": function(data, type, full, meta) {

                                var verified = full.verified;
                                if (verified == 0) {
                                    return '<button class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="penneyDrop(' +
                                        (full.bene_id) + ');">Penny Drop</button>'
                                } else {


                                    return '<button class="btn btn-success btn-sm" href="javascript:void(0);" onclick="monneySend(' +
                                        full.bene_id + ');">Send Money</button>'
                                }

                            }
                        },
                        {
                            "render": function(data, type, full, meta) {

                                return '<button class="btn btn-success btn-sm" href="javascript:void(0);" onclick="deletebenefeciry(' +
                                    full.bene_id + ');">Delete</button>'


                            }
                        }
                    ],
                    columnDefs: [{
                        targets: [0, 1, 2, 3, 4, 5, 6, 7],
                        className: 'text-center'
                        // "createdCell": function(td, cellData, rowData, row, col) {
                        //     $(td).addClass('text-danger');
                        // }
                    }],
                    "drawCallback": function(data) {

                        $('.pageLoader').fadeOut();
                        $('#dataTableFetchBen').show();
                        if (data.json.status == false) {
                            swal("Error", data.json.message, "error");
                        }
                    }
                });


            })
            /**************************************************************************************************************************************************************/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
@endsection
