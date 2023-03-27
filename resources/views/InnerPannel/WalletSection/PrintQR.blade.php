@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Print QR</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Wallet Section</li>
                        <li class="breadcrumb-item active">Print My QR</li>
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
                        <h4>Print QR</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="col-xxl-4">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">Vpa Id Charges (Rs.)<span class="badge badge-primary px-2 py-2 fs-6 counter">5.00</span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">Van Account Charges (Rs.)<span class="badge badge-secondary px-2 py-2 fs-6 counter">100.00</span></li>
                                </ul>
                            </div>
                            <div class="col-xxl-6">
                                <div class="QRcard">
                                    <img src="{{ asset(''.config('constant.ASSET').'images/qrcode.png') }}" width="300" alt="">
                                    {{-- <div class="QRcard-content">
                                      <h2>Improve your front-end skills by building projects</h2>
                                      <p>Scan the QR Code to visit Frontend Mentor and take your coding skills to the next level!</p>
                                    </div> --}}
                                </div>
                            </div>

                        </div>


                        <div class="form-group mt-4">
                            <button class="btn btn-danger" id="">Print</button>
                            <button class="btn btn-danger" id="">Van Account Create</button>
                            <button class="btn btn-danger" id="">Vpa ID Create</button>
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
