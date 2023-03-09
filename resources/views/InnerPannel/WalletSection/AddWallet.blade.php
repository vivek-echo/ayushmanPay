@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Wallet Update</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Wallet Section</li>
                        <li class="breadcrumb-item active">Wallet Update</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="col-form-label"> Name</label>
                            <input name="name" id="name" class="form-control" type="text" autocomplete="off"
                                value="<?php echo $name; ?>">
                            <input type="hidden" value="<?php echo $id; ?>" name="userId" id="userId">

                        </div>

                        <div class="form-group col-6">
                            <label class="col-form-label">Amount</label>
                            <input name="amount" id="amount" class="form-control" type="number"
                                placeholder="Enter Amount" autocomplete="off">

                        </div>
                    </div>
                    <div class="form-group text-center mt-2">
                        <button class="btn btn-primary" id="submitButton">Updated Wallet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#submitButton').on('click', function() {
                if ($('#amount').val() == "") {
                    errorAlert("Required", "Please enter the amount", "amount");
                    return false;
                }

                submitForm();
            });

            function submitForm() {
                $('.pageLoader').fadeIn();
                var userId = $('#userId').val();
                var amount = $('#amount').val();
                $.ajax({
                    url: "{{ url('/Wallet/UpdateWallet') }}",
                    data: {
                        userId: userId,
                        amount: amount
                    },
                    success: function(res) {
                        if (res.status == true) {
                            $('.pageLoader').fadeOut();
                            swal("Successfull", res.message, "success")
                                .then(function(resThen) {
                                    $('.pageLoader').fadeIn();
                                    if (resThen) {
                                        var loc = window.location;
                                        window.location = loc
                                            .origin + "/wallet"
                                    }
                                });
                        } else {
                            $('.pageLoader').fadeOut();
                            swal("Error", res.message, "error").then(
                                function(resThen) {
                                    $('.pageLoader').fadeIn();
                                    if (resThen) {
                                        var loc = window.location;
                                        window.location = loc
                                            .origin + "/wallet"
                                    }
                                }
                            );
                        }
                        $('.pageLoader').fadeOut();

                    }
                });
            }
        });
    </script>
@endsection
