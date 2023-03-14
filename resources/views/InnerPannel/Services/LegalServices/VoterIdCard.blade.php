@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Voter ID verification</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">Voter ID verification</li>
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
                        <h4>Voter ID verification</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">Voter Id</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="voterid" id="voterid" class="form-control" type="text"
                                    placeholder="Enter Voter Id" autocomplete="off">

                            </div>
                        </div>

                        <hr>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="submitButton">Fecth Details</button>
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
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Relation Type </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="relation_type"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Gender </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="gender"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Age </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="age"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Epic Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="epic_no"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> CLient Id </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="client_id"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> DOB </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="dob"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Relation Name </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="relation_name"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Name </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="name"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Area </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="area"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> State </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="state"></label>
                                    </div>
                                    <div class="row form-group mb-2 col-6">
                                        <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> House Number </label>
                                        <label class="col-form-label col-sm-1 fw-bold">:</label>
                                        <label class="col-form-label col-sm-6 fw-bold" id="house_no"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="form-group mt-4" style="display:none;" id="noRecordFound">
                            <div class="card-body bg-light box-shadow-1 text-dark rounded">
                                <div class="row m-0">
                                    <h4 class="mb-0">NO RECORD FOUND.....</h4>
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

                var voterid = $('#voterid').val();
                if (voterid == '') {
                    errorAlert("Required", "Please Enter Voter Id", "voterid");
                    return false;
                }
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/fetchVoter') }}",
                    data: {
                        voterid: voterid
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if (res.status == true) {
                            $('#relation_type').html(res.data.relation_type);
                            $('#gender').html(res.data.gender);
                            $('#age').html(res.data.age);
                            $('#epic_no').html(res.data.epic_no);
                            $('#client_id').html(res.data.client_id);
                            $('#dob').html(res.data.dob);
                            $('#relation_name').html(res.data.relation_name);
                            $('#name').html(res.data.name);
                            $('#area').html(res.data.area);
                            $('#state').html(res.data.state);
                            $('#house_no').html(res.data.house_no);
                            $('#recordFound').show();

                        } else {
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
