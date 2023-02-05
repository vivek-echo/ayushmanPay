@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>EMI Bill Pay</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">EMI Bill Pay</li>
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
                        <h4>Choose Your Loan/EMI Biller</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">FastTag Biller Id
                                    </label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                    <option value="0">--Select Loan Repayment Biller Id--
                                    </option>
                                    <option value="1">NABFINS</option>
                                    <option value="2">Muthoot Money</option>
                                    <option value="3">Vistaar Financial services Private Limited</option>
                                    <option value="4">Muthoot Capital Services Ltd</option>
                                    <option value="5">Agora Microfinance India Ltd - AMIL</option>
                                    <option value="6">Janakalyan Financial Services Private Limited</option>
                                    <option value="7">Shriram City  Union Finance Ltd</option>
                                    <option value="8">Tata Capital Financial Services Limited</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Loan Account Number</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="loanno" id="loanno" class="form-control" type="text"
                                    placeholder="Enter Loan Account Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Application ID</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="AppId" id="AppId" class="form-control" type="text"
                                    placeholder="Enter Application ID" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Member ID</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="memID" id="memID" class="form-control" type="text"
                                    placeholder="Enter Member ID" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mobile Number</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="MobileNo" id="MobileNo" class="form-control" type="text"
                                    placeholder="Enter Mobile Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Amount</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="amnt" id="amnt" class="form-control" type="text"
                                    placeholder="Enter Amount" autocomplete="off">

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="">Fetch Bill</button>
                            <button class="btn btn-primary" id="">Pay Bill</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');
        });
    </script>
@endsection
