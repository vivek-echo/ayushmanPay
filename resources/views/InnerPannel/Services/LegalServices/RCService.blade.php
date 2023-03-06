@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>RC Verification</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">RC Verification</li>
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
                        <h4>RC Verification</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">RC Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="rcno" id="rcno" class="form-control" type="text"
                                    placeholder="Enter RC Number" autocomplete="off">

                            </div>


                        </div>

                        <hr>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="submitButton">Fetch Details</button>
                            {{-- <button class="btn btn-warning" id="downloadPdf">Download</button> --}}
                        </div>

                        <div class="form-group mt-4" style="display:none;" id="recordFound">
                            <div class="card-body bg-light box-shadow-1 text-dark rounded">
                                <div class="px-2 border-bottom-dark mb-3 d-flex justify-content-start align-items-center">
                                    <div class="pe-2"><i class="myicon-membership fs-3"></i></div>
                                    <div class="mt-1"><h4>Details</h4></div>
                                </div>
                                <div class="row m-0">
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Client Id </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="client_id"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> RC Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="rc_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Registration Date </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="registration_date"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Owner Name </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="owner_name"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Father Name </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="father_name"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Present Address </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="present_address"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Permanent Address </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="permanent_address"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Mobile Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="mobile_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Vehicle Category </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="vehicle_category"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Vehicle Chassis Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="vehicle_chasi_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Vehicle Engine Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="vehicle_engine_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Maker Description </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="maker_description"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Maker Model </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="maker_model"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Body Type </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="body_type"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Fuel Type </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="fuel_type"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Color </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="color"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Norms Type </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="norms_type"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Fit Upto </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="fit_up_to"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Financer </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="financer"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Financed </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="financed"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Insurance Company </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="insurance_company"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Insurance Policy Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="insurance_policy_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Insurance Upto </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="insurance_upto"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Manufacturing Date </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="manufacturing_date"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Registered At </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="registered_at"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Latest By </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="latest_by"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Tax Upto </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="tax_upto"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Tax Paid Upto </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="tax_paid_upto"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Cubic Capacity </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="cubic_capacity"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Vehicle Gross Weight </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="vehicle_gross_weight"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> No. Of Cylinders </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="no_cylinders"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Seat Capacity </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="seat_capacity"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Sleeper Capacity </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="sleeper_capacity"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Standing Capacity </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="standing_capacity"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Wheelbase </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="wheelbase"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Unladen Weight </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="unladen_weight"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Vehicle Category Description </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="vehicle_category_description"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Pucc Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="pucc_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Pucc Upto </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="pucc_upto"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Permit Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="permit_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Permit Issue Date </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="permit_issue_date"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Permit Valid From </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="permit_valid_from"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Permit Valid Upto </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="permit_valid_upto"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Permit Type </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="permit_type"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> National Permit Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="national_permit_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> National Permit Upto </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="national_permit_upto"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> National Permit Issued By </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="national_permit_issued_by"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Non-Use Status </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="non_use_status"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Non-Use From </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="non_use_from"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Non-Use To </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="non_use_to"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Blacklist Status </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="blacklist_status"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> NOC Details </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="noc_details"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Owner Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="owner_number"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> RC Status </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="rc_status"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4" style="display:none;" id="noRecordFound">
                            <hr>
                            <div class="card-body bg-warning" style="border-radius:10px 10px 10px 10px;">
                                <div class="row m-0">
                                    <h4>NO RECORD FOUND.....</h4>
                                </div>
                            </div>
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
            $('#submitButton').on('click', function() {

                var rcno = $('#rcno').val();
                if (rcno == '') {
                    errorAlert("Required", "Please Enter RC Number", "rcno");
                    return false;
                }
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/fetchRC') }}",
                    data: {
                        rcno: rcno
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.status == true) {
                            $('#client_id').html(res.data.client_id);
                            $('#rc_number').html(res.data.rc_number);
                            $('#registration_date').html(res.data.registration_date);
                            $('#owner_name').html(res.data.owner_name);
                            $('#father_name').html(res.data.father_name);
                            $('#present_address').html(res.data.present_address);
                            $('#permanent_address').html(res.data.permanent_address);
                            $('#mobile_number').html(res.data.mobile_number);
                            $('#vehicle_category').html(res.data.vehicle_category);
                            $('#vehicle_chasi_number').html(res.data.vehicle_chasi_number);
                            $('#vehicle_engine_number').html(res.data.vehicle_engine_number);
                            $('#maker_description').html(res.data.maker_description);
                            $('#maker_model').html(res.data.maker_model);
                            $('#body_type').html(res.data.body_type);
                            $('#fuel_type').html(res.data.fuel_type);
                            $('#color').html(res.data.color);
                            $('#norms_type').html(res.data.norms_type);
                            $('#fit_up_to').html(res.data.fit_up_to);
                            $('#financer').html(res.data.financer);
                            $('#financed').html(res.data.financed);
                            $('#insurance_company').html(res.data.insurance_company);
                            $('#insurance_policy_number').html(res.data.insurance_policy_number);
                            $('#insurance_upto').html(res.data.insurance_upto);
                            $('#manufacturing_date').html(res.data.manufacturing_date);
                            $('#registered_at').html(res.data.registered_at);
                            $('#latest_by').html(res.data.latest_by);
                            $('#tax_upto').html(res.data.tax_upto);
                            $('#tax_paid_upto').html(res.data.tax_paid_upto);
                            $('#cubic_capacity').html(res.data.cubic_capacity);
                            $('#vehicle_gross_weight').html(res.data.vehicle_gross_weight);
                            $('#no_cylinders').html(res.data.no_cylinders);
                            $('#seat_capacity').html(res.data.seat_capacity);
                            $('#sleeper_capacity').html(res.data.sleeper_capacity);
                            $('#standing_capacity').html(res.data.standing_capacity);
                            $('#wheelbase').html(res.data.wheelbase);
                            $('#unladen_weight').html(res.data.unladen_weight);
                            $('#vehicle_category_description').html(res.data.vehicle_category_description);
                            $('#pucc_number').html(res.data.pucc_number);
                            $('#pucc_upto').html(res.data.pucc_upto);
                            $('#permit_number').html(res.data.permit_number);
                            $('#permit_issue_date').html(res.data.permit_issue_date);
                            $('#permit_valid_from').html(res.data.permit_valid_from);
                            $('#permit_valid_upto').html(res.data.permit_valid_upto);
                            $('#permit_type').html(res.data.permit_type);
                            $('#national_permit_number').html(res.data.national_permit_number);
                            $('#national_permit_upto').html(res.data.national_permit_upto);
                            $('#national_permit_issued_by').html(res.data.national_permit_issued_by);
                            $('#non_use_status').html(res.data.non_use_status);
                            $('#non_use_from').html(res.data.non_use_from);
                            $('#non_use_to').html(res.data.non_use_to);
                            $('#blacklist_status').html(res.data.blacklist_status);
                            $('#noc_details').html(res.data.noc_details);
                            $('#owner_number').html(res.data.owner_number);
                            $('#rc_status').html(res.data.rc_status);
                            $('#recordFound').show();

                        }else{
                            $('#noRecordFound').show();
                        }

                    }
                });
            })

            // $('#downloadPdf').on('click', function() {
            //     $('.pageLoader').fadeIn();
            //     var dlno = $('#dlno').val();
            //     var dob = $('#dob').val();
            //     if (dlno == '') {
            //         errorAlert("Required", "Please Enter DL Number", "dlno");
            //         return false;
            //     }

            //     if (dob == '') {
            //         errorAlert("Required", "Please Enter Date of Birth", "dob");
            //         return false;
            //     }
            //     $('#pdfDl').val(dlno);
            //     $('#pdfDob').val(dob);
            //     $('#pdfFormDownload').submit();
            //     $('.pageLoader').fadeOut();

            // })

        });
    </script>
@endsection
