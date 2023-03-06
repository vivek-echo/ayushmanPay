@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Life Insurance</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">Life Insurance</li>
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
                        <h4>Choose Your Life Insurance Biller</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">Life Insurance Biller Id
                                </label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                    <option value="0">--Select Life Insurance Biller Id--
                                    </option>
                                    <option value="1">HDFC Life Insurance Co. Ltd.</option>
                                    <option value="2">TATA AIA Life Insurance</option>
                                    <option value="3">Reliance Nippon Life Insurance</option>
                                    <option value="4">Future Generali India Life Insurance Company Limited</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Policy Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="policyno" id="policyno" class="form-control" type="text"
                                    placeholder="Enter Policy Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Date Of Birth</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" type="text" data-language="en"
                                        placeholder="DD/MM/YYYY">
                                    <div class="input-group-text" id=""><i class="text-secondary"
                                            data-feather="calendar"></i></div>
                                </div>

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
