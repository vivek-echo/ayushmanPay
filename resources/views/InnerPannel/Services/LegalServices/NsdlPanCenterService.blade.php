@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>NSDL Pan Center</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">NSDL Pan Center</li>
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
                        <h4>Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">Pan Number</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="Panno" id="Panno" class="form-control" type="text"
                                    placeholder="Enter Pan Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Aadhar Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="aadhar" id="aadhar" class="form-control" type="text"
                                    placeholder="Enter Aadhar Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Shop Address</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <textarea class="form-control" id="" rows="3"></textarea>

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Pancard Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="PancardPhoto" name="PancardPhoto">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Aadhar Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="AadharPhoto" name="AadharPhoto">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Cancel Cheque/ Passbook Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="chequePassbook" name="chequePassbook">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Photo</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="Photo" name="Photo">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Upload Signature</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input class="form-control" type="file" id="SignatureUpld" name="SignatureUpld">

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-primary" id="">Submit</button>
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
