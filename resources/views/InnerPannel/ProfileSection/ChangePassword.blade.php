@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Change Password</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Profile Section</li>
                        <li class="breadcrumb-item active">Change Password</li>
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
                        <h4>Change Password</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label class="col-form-label">New Password</label><span
                                    class="text-danger fa-lg font-weight-500"> *</span>
                                <input name="newPassword" id="newPassword" class="form-control" type="password"
                                    placeholder="Enter New Password" autocomplete="off" >

                            </div>

                            <div class="form-group col-6">
                                <label class="col-form-label">Confirm New Password</label><span
                                    class="text-danger fa-lg font-weight-500"> *</span>
                                <input name="confirmNewPassword" id="confirmNewPassword" class="form-control" type="password"
                                    placeholder="Confirm New Password" autocomplete="off" >

                            </div>
                        </div>
                       
                        <hr>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="submitButton">Update</button>
                            {{-- <button class="btn btn-warning" id="downloadPdf">Download</button> --}}
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <script>
        $(document).ready(function() {
            $('#profileLink').addClass('activeLink');
            $('#profileLink').addClass('active');



            $('#submitButton').on('click', function() {
                submitValidator();

            });

            function submitValidator() {
                var newPassword = $('#newPassword').val();
                var confirmNewPassword = $('#confirmNewPassword').val();
               
                if (newPassword == "") {
                    errorAlert("Required", "Please Enter New Password", "newPassword");
                    return false;
                }
                if (confirmNewPassword == "") {
                    errorAlert("Required", "Please Confirm Your Password", "confirmNewPassword");
                    return false;
                }
                if (confirmNewPassword != newPassword) {
                    errorAlert("Invalid", "Password does not match", "confirmNewPassword");
                    return false;
                }
               

                submitForm(newPassword,confirmNewPassword);
            }

            function submitForm(newPassword,confirmNewPassword) {

                
                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to change your password?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $('.pageLoader').fadeIn();
                            $.ajax({
                                url: "{{ url('/changePassword') }}",
                                data: {

                                    newPassword: newPassword,
                                    confirmNewPassword: confirmNewPassword

                                },
                                success: function(res) {
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin + "/profile/changePassword"
                                                }
                                            });
                                        $('.pageLoader').fadeOut();
                                    } else {
                                        $('.pageLoader').fadeOut();
                                        swal("Error", res.message, "error").then(
                                            function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin + "/profile/changePassword"
                                                }
                                            }
                                        );
                                    }



                                }
                            });
                        }

                    })
            }



        });
    </script>
@endsection
