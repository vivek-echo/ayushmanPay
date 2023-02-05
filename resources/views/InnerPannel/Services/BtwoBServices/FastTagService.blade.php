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
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
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
                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                    <option value="0">--Select FastTag Biller Id--
                                    </option>
                                    <option value="1">Paytm Payments Bank FASTag</option>
                                    <option value="2">IDBI Bank FASTag</option>
                                    <option value="3">Axis Bank FASTag</option>
                                    <option value="4">Jammu and Kashmir Bank FASTag</option>
                                    <option value="5">Transcorp International Limited</option>
                                    <option value="6">IOB FASTag</option>
                                    <option value="7">Paul Merchants</option>
                                    <option value="8">State Bank of India - NETC FASTag</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Vehicle Registration Number / Wallet Number</label><span class="text-danger fa-lg font-weight-500">
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
