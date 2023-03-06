@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Home - Pan Card (UTI)</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">Pan Card (UTI)</li>
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
                    {{-- <div class="card-header pb-0">
                        <h4>Sample Card</h4><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div> --}}
                    <div class="card-body">

                        <div class="default-according style-1" id="accordionoc">
                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon" aria-expanded="true"
                                            aria-controls="collapse11"><i class="myicon-disc"></i>
                                            UTI Pancard</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="">
                                                <form method="post" action="{{$url}}">
                                                    <textarea name="encdata" style="display:none">{{$encdata}}</textarea>
                                                    <button class="btn btn-lg btn-success" type="submit" value="submit" ><i
                                                        class="myicon-log-in"></i> Login To UTI</button>
                                                  </form>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon1" aria-expanded="false"><i
                                                class="myicon-disc"></i> Recent UTI Pancard Transactions</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon1" aria-labelledby="headingeight"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order Id</th>
                                                        <th scope="col">User Details</th>
                                                        <th scope="col">Transactions Details</th>
                                                        <th scope="col">Reference Details</th>
                                                        <th scope="col">Amount/Commission</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><strong>35548</strong> <br>01/03/2023 10:00 AM
                                                        </th>
                                                        <td><strong>Vishal Kumar(2)</strong> <br>(Retailer) 9898555444</td>
                                                        <td>Vle Id - STEK2</td>
                                                        <td>Ref No. - Null <br>TxnId - YT9998886543</td>
                                                        <td><strong>Amount</strong> - ₹ 0 <br><strong>Profit</strong> - ₹ 0</td>
                                                        <td>
                                                            <h5><span class="badge badge-danger">PENDING</span></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>35548</strong> <br>01/03/2023 10:00 AM
                                                        </th>
                                                        <td><strong>Vishal Kumar(2)</strong> <br>(Retailer) 9898555444</td>
                                                        <td>Vle Id - STEK2</td>
                                                        <td>Ref No. - Null <br>TxnId - YT9998886543</td>
                                                        <td><strong>Amount</strong> - ₹ 0 <br><strong>Profit</strong> - ₹ 0</td>
                                                        <td>
                                                            <h5><span class="badge badge-danger">PENDING</span></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>35548</strong> <br>01/03/2023 10:00 AM
                                                        </th>
                                                        <td><strong>Vishal Kumar(2)</strong> <br>(Retailer) 9898555444</td>
                                                        <td>Vle Id - STEK2</td>
                                                        <td>Ref No. - Null <br>TxnId - YT9998886543</td>
                                                        <td><strong>Amount</strong> - ₹ 0 <br><strong>Profit</strong> - ₹ 0</td>
                                                        <td>
                                                            <h5><span class="badge badge-success">SUCCESS</span></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row m-0">
                            <div class="col-12 p-0">

                                <ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link active" id="requestpan-tab" data-bs-toggle="pill"
                                            data-bs-target="#requestpan" type="button" role="tab"
                                            aria-controls="requestpan" aria-selected="true">Request For UTI Pan</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="requestpanstatus-tab" data-bs-toggle="pill"
                                            data-bs-target="#requestpanstatus" type="button" role="tab"
                                            aria-controls="requestpanstatus" aria-selected="false">Check Status Of Request
                                            Pan</button>
                                    </li>
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link" id="UtiLogin-tab" data-bs-toggle="pill"
                                            data-bs-target="#UtiLogin" type="button" role="tab"
                                            aria-controls="UtiLogin" aria-selected="false">UTI Login</button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="pills-tabContent">

                                    <!-- FOR PREPAID -->
                                    <div class="tab-pane fade show active" id="requestpan" role="requestpan"
                                        aria-labelledby="pills-prepaid">
                                        <div class="row m-0">
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Customer Name</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="CustomerName" id="CustomerName" class="form-control"
                                                    type="text" placeholder="Enter Customer Name" autocomplete="off"
                                                    value="Vishal Kumar" disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Location</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="location" id="location" class="form-control"
                                                    type="text" placeholder="Enter Location" autocomplete="off"
                                                    value="Ranchi" disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Contact</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="contact" id="contact" class="form-control" type="text"
                                                    placeholder="Enter Contact" autocomplete="off" value="Vishal Kumar"
                                                    disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Pincode</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="pincode" id="pincode" class="form-control" type="text"
                                                    placeholder="Enter Pincode" autocomplete="off" value="831005"
                                                    disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">State</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="state" id="state" class="form-control" type="text"
                                                    placeholder="Enter State" autocomplete="off" value="Jharkhand"
                                                    disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Email Id</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="email" id="email" class="form-control" type="text"
                                                    placeholder="Enter Email Id" autocomplete="off"
                                                    value="vkumar229329@gmail.com" disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Mobile No</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="mobile" id="mobile" class="form-control" type="text"
                                                    placeholder="Enter Mobile No" autocomplete="off" value="8887775555"
                                                    disabled>

                                            </div>
                                            <div class="form-group col-6">
                                                <label class="col-form-label">Pan Number</label><span
                                                    class="text-danger fa-lg font-weight-500">
                                                    *</span>
                                                <input name="Pan" id="Pan" class="form-control" type="text"
                                                    placeholder="Enter Pan Number" autocomplete="off">

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group mt-4">
                                                <button class="btn btn-primary" id="">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    <script>
        $(document).ready(function() {
            $('#requestpanstatus-tab').on('click', function() {
                functionRequest();
            });

            function functionRequest() {

                swal({
                    text: "Your Are Not Registered Or Invalid Member.",
                    icon: "error"
                })
            }
        });
    </script>
@endsection
