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
                            <hr>
                            <div class="card-body bg-warning text-secondary" style="border-radius:10px 10px 10px 10px;">
                                <div class="row m-0">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Epic Number</label><span
                                            class="text-danger fa-lg font-weight-500">
                                            :</span>
                                        <label class="col-form-label" id="epic_no"></label>

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
                            $('#epic_no').html(res.data.epic_no);
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
