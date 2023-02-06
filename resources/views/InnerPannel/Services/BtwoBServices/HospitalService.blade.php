@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Hospital</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Hospital</li>
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
                        <h4>Choose Your Hospital Biller</h4>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">Hospital and Pathology Biller Id
                                    </label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <select name="perpaidOperator" id="perpaidOperator" class="form-select">
                                    <option value="0">--Select Hospital and Pathology Biller Id--
                                    </option>
                                    <option value="1">B.K. Arogyam and Research Pvt. Ltd</option>
                                    <option value="2">Billroth Hospitals Pvt Ltd</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">UHID</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="uhid" id="uhid" class="form-control" type="text"
                                    placeholder="Enter UHID" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Registered Mobile Number</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="regMob" id="regMob" class="form-control" type="text"
                                    placeholder="Enter Registered Mobile Number" autocomplete="off">

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
