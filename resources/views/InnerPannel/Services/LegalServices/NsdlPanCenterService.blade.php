@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Home - Pan Card (NSDL)</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">Pan Card (NSLD)</li>
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
                                            NSLD Pancard</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">
                                        <div class=" justify-content-center align-items-center">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">First Name
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                       <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name">
                                                        
                                                    </div>
                    
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Last Name
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                       <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name">
                                                        
                                                    </div>
                    
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Gender
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    
                                                        <select name="gender" id="gender" class="form-select">
                                                            <option value="">--Select--</option>
                                                            <option value="Male">MALE</option>
                                                            <option value="Female">FEMALE</option>
                                                            <option value="Transgender">TRANSGENDER</option>
                                                        </select>
                                                        
                                                    
                    
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Title
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                        <select name="title" id="title" class="form-select">
                                                            <option value="">--Select--</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <div class="form-group col-1 mb-0"> <img src="{{ asset('images/loader-5.gif') }}"
                                                                    alt="" width="45" id="titleLoad"
                                                                    style="display:none;">
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Mode
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                        <select name="mode" id="mode" class="form-select">
                                                            <option value="">--Select--</option>
                                                            <option value="P"> Physical Pan</option>
                                                            <option value="E">Electronic Pan</option>
                                                        </select>
                                                        
                                                    </div>
                    
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Email
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                       <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                                                        
                                                    </div>
                    
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-2 justify-content-center">
                                                    <button class="btn btn-lg btn-success" type="submit" id="getRedirectLink" >Get Redirect Link</button>
                                                    <div id="formAuth" style="display:none" class="mt-2">
                                                        <form method="post" action="">
                                                            <textarea name="encdata"  id="encdata" style="display:none" ></textarea>
                                                            <button class="btn btn-lg btn-success" type="submit" value="submit" ><i
                                                                class="myicon-log-in"></i> Login To NSLD</button>
                                                          </form>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            {{-- <div class="">
                                                <form method="post" action="{{$url}}">
                                                    <textarea name="encdata" style="display:none">{{$encdata}}</textarea>
                                                    <button class="btn btn-lg btn-success" type="submit" value="submit" ><i
                                                        class="myicon-log-in"></i> Login To UTI</button>
                                                  </form>
                                               
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon" aria-expanded="true"
                                            aria-controls="collapse12"><i class="myicon-disc"></i>
                                            Transaction Status Check</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon" aria-labelledby="collapseicon"
                                    data-bs-parent="#accordionoc12">
                                    <div class="card-body">
                                        <div class=" justify-content-center align-items-center">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Reference Id
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                       <input type="text" class="form-control" id="refidTrans" name="refidTrans" placeholder="Reference Id">
                                                        
                                                    </div>
                    
                                                </div>
                                             
                                              
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-2 justify-content-center">
                                                    <button class="btn btn-lg btn-success"  id="getTransStatusNSDL" >Get Status</button>
                                                 
                                                </div>
                                               
                                            </div>
                                            <div class="form-group mt-4" style="display:none;" id="statusRecordFound">
                                                <div class="card-body bg-light box-shadow-1 text-dark rounded">
                                                    <div class="px-2 border-bottom-dark mb-3 d-flex justify-content-start align-items-center">
                                                        <div class="pe-2"><i class="myicon-membership fs-3"></i></div>
                                                        <div class="mt-1"><h4>Details</h4></div>
                                                    </div>
                                                    <div class="row m-0">
                                                        <div class="row form-group mb-2 col-6">
                                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> name </label>
                                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                            <label class="col-form-label col-sm-6 fw-bold" id="namePan"></label>
                                                        </div>

                                                        <div class="row form-group mb-2 col-6">
                                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> UTR </label>
                                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                            <label class="col-form-label col-sm-6 fw-bold" id="utr_noPan"></label>
                                                        </div>
                                                        <div class="row form-group mb-2 col-6">
                                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> ack_no </label>
                                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                            <label class="col-form-label col-sm-6 fw-bold" id="ack_noPan"></label>
                                                        </div>
                                                        <div class="row form-group mb-2 col-6">
                                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> amount </label>
                                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                            <label class="col-form-label col-sm-6 fw-bold" id="amountPan"></label>
                                                        </div>

                                                        <div class="row form-group mb-2 col-6">
                                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> status </label>
                                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                            <label class="col-form-label col-sm-6 fw-bold" id="statusPan"></label>
                                                        </div>
                                                        <div class="row form-group mb-2 col-6">
                                                            <label class="col-form-label col-sm-5"><i class="myicon-disc"></i> Added Date </label>
                                                            <label class="col-form-label col-sm-1 fw-bold">:</label>
                                                            <label class="col-form-label col-sm-6 fw-bold" id="addeddatePan"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            {{-- <div class="">
                                                <form method="post" action="{{$url}}">
                                                    <textarea name="encdata" style="display:none">{{$encdata}}</textarea>
                                                    <button class="btn btn-lg btn-success" type="submit" value="submit" ><i
                                                        class="myicon-log-in"></i> Login To UTI</button>
                                                  </form>
                                               
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon" aria-expanded="true"
                                            aria-controls="collapse12"><i class="myicon-disc"></i>
                                            Pan Status Check</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon" aria-labelledby="collapseicon"
                                    data-bs-parent="#accordionoc12">
                                    <div class="card-body">
                                        <div class=" justify-content-center align-items-center">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label class="col-form-label">Reference Id
                                                    </label><span class="text-danger fa-lg font-weight-500">
                                                        *</span>
                                                    <div class="input-group">
                                                       <input type="text" class="form-control" id="refid" name="refid" placeholder="Enter First Name">
                                                        
                                                    </div>
                    
                                                </div>
                                             
                                              
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-2 justify-content-center">
                                                    <button class="btn btn-lg btn-success"  id="getCheckPanStatus" >Get Status</button>
                                                 
                                                </div>
                                               
                                            </div>
                                           
                                            {{-- <div class="">
                                                <form method="post" action="{{$url}}">
                                                    <textarea name="encdata" style="display:none">{{$encdata}}</textarea>
                                                    <button class="btn btn-lg btn-success" type="submit" value="submit" ><i
                                                        class="myicon-log-in"></i> Login To UTI</button>
                                                  </form>
                                               
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                            <div class="card">
                                <div class="card-header bg-light-orange">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon1" aria-expanded="false"><i
                                                class="myicon-disc"></i> Recent NSLD Pancard Transactions</button>
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

                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    <script>
        $(document).ready(function() {

            $('#getTransStatusNSDL').on('click',function(){
                $('#statusRecordFound').hide();
                $('.pageLoader').fadeIn();
                var refidTrans = $('#refidTrans').val();
                $.ajax({
                    url: "{{ url('/getTransStatusNSDLFun') }}",
                    data: {
                        refidTrans:refidTrans
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if(res.api.status == true)
                        {
                            $('#statusRecordFound').show();
                            $('namePan').val(res.api.data.name);
                            $('utr_noPan').val(res.api.data.utr_no);
                            $('ack_noPan').val(res.api.data.ack_no);
                            $('amountPan').val(res.api.data.amount);
                            $('statusPan').val(res.api.data.status);
                            $('addeddatePan').val(res.api.data.addeddate);
                           
                        }else{
                            swal("Error", res.api.message, "error");
                        }
                        
                       

                    }
                });
            })

            $('#getCheckPanStatus').on('click',function(){
                $('.pageLoader').fadeIn();
                var refid = $('#refid').val();
                $.ajax({
                    url: "{{ url('/getCheckPanStatusFun') }}",
                    data: {
                        refid:refid
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if(res.api.status == true)
                        {
                            swal("Successfull", res.api.message, "success");
                        }else{
                            swal("Error", res.api.message, "error");
                        }
                        
                       

                    }
                });
            })
            $('#getRedirectLink').on('click',function(){
                var firstName = $('#firstName').val();
                var lastName = $('#lastName').val();
                var gender = $('#gender').val();
                var title = $('#title').val();
                var mode = $('#mode').val();
                var email = $('#email').val();
               
                if (firstName == '') {
                    errorAlert("Required", "Please Enter first Name", "firstName");
                    return false;
                }
                if (lastName == '') {
                    errorAlert("Required", "Please Enter Last Name", "lastName");
                    return false;
                }
                if (gender == '') {
                    errorAlert("Required", "Please select gender", "gender");
                    return false;
                }
                if (title == '') {
                    errorAlert("Required", "Please select title", "title");
                    return false;
                }
                if (email == '') {
                    errorAlert("Required", "Please Enter email", "email");
                    return false;
                }
                $('.pageLoader').fadeIn();
                $.ajax({
                    url: "{{ url('/PanCardNsldGen') }}",
                    data: {
                        firstName: firstName,
                        lastName: lastName,
                        gender: gender,
                        title: title,
                        mode: mode,
                        email: email
                    },
                    success: function(res) {
                        $('.pageLoader').fadeOut();
                        if(res.status == true)
                        {
                            var loc = res.url;
                            $('form').attr('action',loc);
                            $('#encdata').html(res.encdata);
                            $('#formAuth').show();
                        }else{
                            swal("Error", res.message, "error").then(
                                            function(res) {
                                                $('.pageLoader').fadeIn();
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/services/legalServices/PanCardNsld"
                                                }
                                            }
                                        );
                        }
                        
                       

                    }
                });
            });

            $('#gender').on('change',function(){
                var gender =  $('#gender').val();
                $('#titleLoad').show();
                var option;
                if(gender == 'Male'){
                    option = '<option value="">--Select--</option><option value="1">Shri</option>';
                }else if(gender == 'Female'){
                    option = '<option value="">--Select--</option><option value="2">Smt</option><option value="3">Kumari</option>';
                }else if(gender == 'Transgender'){
                    option = '<option value="">--Select--</option><option value="1">Shri</option><option value="2">Smt</option><option value="3">Kumari</option>';
                }
                $('#title').html(option);
                $('#titleLoad').hide();
               

            })
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
