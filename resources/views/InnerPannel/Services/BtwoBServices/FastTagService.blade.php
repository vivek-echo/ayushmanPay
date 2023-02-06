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
                                <div class="input-group">
                                    <select name="billerId" id="billerId" class="form-select">
                                        <option value="">Loading ....</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                alt="" width="45" id="perpaidOperatorLoading"
                                                style="display:none;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group col-6">
                                <label class="col-form-label">Vehicle Registration Number / Wallet Number</label><span
                                    class="text-danger fa-lg font-weight-500">
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
                            <button class="btn btn-warning" id="" data-bs-toggle="modal"
                                data-bs-target="#fetchBill">Fetch Bill</button>
                            <button class="btn btn-primary" id="">Pay Bill</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Modal For Prepaid -->
    <div class="modal fade" id="fetchBill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bill Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-0">
                        <div class="form-group col-4">
                            <label class="col-form-label">Name</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="userName" id="userName" class="form-control" type="text"
                                placeholder="Enter Name" autocomplete="off">

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Due Date</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <div class="input-group">
                                <input class="datepicker-here form-control digits" type="text" data-language="en"
                                    placeholder="Due Date">
                                <div class="input-group-text" id=""><i class="text-secondary"
                                        data-feather="calendar"></i></div>
                            </div>

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Bill Amount</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="billAmnt" id="billAmnt" class="form-control" type="text"
                                placeholder="Enter Bill Amount" autocomplete="off">

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Bill Net Amount</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="billNetAmnt" id="billNetAmnt" class="form-control" type="text"
                                placeholder="Enter Bill Net Amount" autocomplete="off">

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Max Net Amount</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="maxNetAmnt" id="maxNetAmnt" class="form-control" type="text"
                                placeholder="Enter Max Net Amount" autocomplete="off">

                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">Cell Number</label><span class="text-danger fa-lg font-weight-500">
                                *</span>
                            <input name="cellNo" id="cellNo" class="form-control" type="text"
                                placeholder="DLXXXXXX" autocomplete="off">

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');
            $('#perpaidOperatorLoading').show();

            $.ajax({
                url: "{{ url('/getFastTagOperatorList') }}",
                success: function(res) {

                    var optionOperator = ['<option value="0" >--Select Operator--</option>'];
                    var optionLengthOperator = res.data.length;

                    for (var i = 0; i < optionLengthOperator; i++) {
                        var resOptionOperator = '<option value=' + res.data[i].id + ' >' + res.data[i]
                            .name + '</option>'
                        optionOperator.push(resOptionOperator);
                    }
                    $('#billerId').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });


        });
    </script>
@endsection
