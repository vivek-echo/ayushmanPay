@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Fixed Deposit</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Fixed Deposit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Fixed Deposit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-12">
                                <label class="col-form-label">Amount</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="col">
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline1" type="radio" name="radio1"
                                                value="option1">
                                            <label class="form-check-label mb-0" for="radioinline1">10,000</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline2" type="radio" name="radio1"
                                                value="option1">
                                            <label class="form-check-label mb-0" for="radioinline2">20,000</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline3" type="radio" name="radio1"
                                                value="option1">
                                            <label class="form-check-label mb-0" for="radioinline3">25,000</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline4" type="radio" name="radio1"
                                                value="option1">
                                            <label class="form-check-label mb-0" for="radioinline4">50,000</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-12">
                                <label class="col-form-label">Duration</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="col">
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline5" type="radio" name="radio2"
                                                value="option2">
                                            <label class="form-check-label mb-0" for="radioinline5">60 Days</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline6" type="radio" name="radio2"
                                                value="option2">
                                            <label class="form-check-label mb-0" for="radioinline6">90 Days</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline7" type="radio" name="radio2"
                                                value="option2">
                                            <label class="form-check-label mb-0" for="radioinline7">180 Days</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline8" type="radio" name="radio2"
                                                value="option2">
                                            <label class="form-check-label mb-0" for="radioinline8">280 Days</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline9" type="radio" name="radio2"
                                                value="option2">
                                            <label class="form-check-label mb-0" for="radioinline9">360 Days</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-6">
                                <label class="col-form-label">Referral Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="policyno" id="policyno" class="form-control" type="text"
                                    placeholder="Enter Referral Id" autocomplete="off">

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-primary" id="">Process</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Maturity Amount</h4>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="offer-style">
                            <div class="card mb-0">
                                <div class="d-flex p-20 justify-content-between">
                                    <h4 class="mt-0 mb-0 mega-title-badge fs-5 text-primary">Rs.10150*</h4>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-header pt-0 pb-0">
                        <h4>Total Interest Earned</h4>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="offer-style">
                            <div class="card mb-0">
                                <div class="d-flex p-20 justify-content-between">
                                    <h6 class="mt-0 mb-0 mega-title-badge fs-5 text-primary">Rs.150</h6>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-header pt-0 pb-0">
                        <h4>Tenure</h4>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="offer-style">
                            <div class="card">
                                <div class="d-flex p-20 justify-content-between">
                                    <h6 class="mt-0 mb-0 mega-title-badge fs-5 text-primary">60 Days</h6>
                                </div>
                            </div>
                        </form>
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
