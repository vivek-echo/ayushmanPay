@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Driving Licence</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active">Driving Licence</li>
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
                        <h4>Driving Licence Download</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-6">
                                <label class="col-form-label">DL Number</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <input name="dlno" id="dlno" class="form-control" type="text"
                                    placeholder="Enter DL Number" autocomplete="off">

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

                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('images/dlimage.png') }}" class="img-thumbnail" alt="DLimage" width="250px">
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-warning" id="">Download</button>
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
