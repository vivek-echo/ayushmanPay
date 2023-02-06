@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Wallet Summary</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Wallet Section</li>
                        <li class="breadcrumb-item active">Wallet Summary</li>
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
                        <h4>Wallet Transaction :</h4><span></span>
                    </div>
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="form-group col-4 ps-0">
                                <label class="col-form-label">From Date</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" type="text" data-language="en" placeholder="From Date">
                                    <div class="input-group-text" id=""><i class="text-secondary"
                                            data-feather="calendar"></i></div>
                                </div>

                            </div>
                            <div class="form-group col-4">
                                <label class="col-form-label">To Date</label><span
                                    class="text-danger fa-lg font-weight-500">
                                    *</span>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" type="text" data-language="en" placeholder="To Date">
                                    <div class="input-group-text" id=""><i class="text-secondary"
                                            data-feather="calendar"></i></div>
                                </div>

                            </div>
                            <div class="form-group col-4 m-t-35">
                                <button class="btn btn-success" id="">Search</button>
                            </div>

                        </div>
                        <hr>
                        <div class="dt-ext table-responsive pt-3">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Transaction Amount(Rs.)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Service 1</td>
                                        <td>Type 1</td>
                                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td>10,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="myicon-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="myicon-trash-2"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Service 2</td>
                                        <td>Type 2</td>
                                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td>20,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="myicon-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="myicon-trash-2"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Service 3</td>
                                        <td>Type 3</td>
                                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td>5,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="myicon-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="myicon-trash-2"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Service 3</td>
                                        <td>Type 3</td>
                                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td>7,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="myicon-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="myicon-trash-2"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Service 5</td>
                                        <td>Type 5</td>
                                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td>2,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="myicon-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="myicon-trash-2"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Transaction Amount(Rs.)</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        {{-- <div class="form-group mt-4">
                            <button class="btn btn-warning" id="">Fetch Bill</button>
                            <button class="btn btn-primary" id="">Pay Bill</button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <script>
        $(document).ready(function() {
            // FOR ACTIVE SIDEBAR LINK
            $('#walletLink').addClass('activeLink');


            //FOR DATEPICKER
            // $('#fromDate').datepicker({
            //     format: "dd/mm/yyyy"
            // });
            // $('#toDate').datepicker({
            //     format: "dd/mm/yyyy"
            // });
        });
    </script>
@endsection
