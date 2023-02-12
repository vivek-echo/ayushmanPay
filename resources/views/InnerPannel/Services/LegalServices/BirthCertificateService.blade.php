@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Birth Certificate</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Birth Certificate</li>
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
                                <label class="col-form-label">Name</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="Name" id="Name" class="form-control" type="text"
                                    placeholder="Enter Name" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Applicant Aadhar Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="aadhar" id="aadhar" class="form-control" type="text"
                                    placeholder="Enter Applicant Aadhar Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mobile Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="mobile" id="mobile" class="form-control" type="text"
                                    placeholder="Enter Mobile Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Email Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="email" id="email" class="form-control" type="email"
                                    placeholder="abc@domain.com" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Gender</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="col">
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline5" type="radio" name="radio2"
                                                value="option2">
                                            <label class="form-check-label mb-0" for="radioinline5">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline6" type="radio" name="radio2"
                                                value="option2">
                                            <label class="form-check-label mb-0" for="radioinline6">Female</label>
                                        </div>
                                    </div>
                                </div>

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
                            <div class="form-group col-6">
                                <label class="col-form-label">Place Of Birth</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="birthPlace" id="birthPlace" class="form-control" type="text"
                                    placeholder="Enter Place Of Birth" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Father Name</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="fatherName" id="fatherName" class="form-control" type="text"
                                    placeholder="Enter Father Name" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Father Aadhar Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="fatherAadharno" id="fatherAadharno" class="form-control" type="text"
                                    placeholder="Enter Father Aadhar Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mother Name</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="MotherName" id="MotherName" class="form-control" type="text"
                                    placeholder="Enter Mother Name" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Mother Aadhar Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="MotherAadharno" id="MotherAadharno" class="form-control" type="text"
                                    placeholder="Enter Mother Aadhar Number" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Post</label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="post" id="post" class="form-control" type="text"
                                    placeholder="Enter Post" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Block</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="Block" id="Block" class="form-control" type="text"
                                    placeholder="Enter Block" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">District</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="District" id="District" class="form-control" type="text"
                                    placeholder="Enter District" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">State
                                </label><span class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <select name="state" id="state" class="form-select">
                                    <option value="0"> --Select State-- </option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Pincode</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="Pincode" id="Pincode" class="form-control" type="text"
                                    placeholder="Enter Pincode" autocomplete="off">

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Address</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <textarea class="form-control" id="" rows="3"></textarea>

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
