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
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
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
                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                    <option value="0">--Select LPG Gas Biller Id--
                                    </option>
                                    <option value="1">Bharat Gas (BPCL)</option>
                                    <option value="2">HP Gas (HPCL)</option>
                                    <option value="3">Indane Gas (Indian Oil)</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">LPG Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="LPGId" id="LPGId" class="form-control" type="text"
                                    placeholder="Enter LPG Id" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Registered Contact Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="regContactNo" id="regContactNo" class="form-control" type="text"
                                    placeholder="Enter Registered Contact Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mobile Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="mobNo" id="mobNo" class="form-control" type="text"
                                    placeholder="Enter Mobile Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
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
