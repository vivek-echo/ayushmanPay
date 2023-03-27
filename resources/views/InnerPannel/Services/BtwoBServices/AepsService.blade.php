@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('' . config('constant.ASSET') . 'css/vendors/sweetalert2.css') }}">
    <script src="{{ asset('' . config('constant.ASSET') . 'js/sweet-alert/sweetalert.min.js') }}"></script>
    @if (Session::get('status') != '')
        @if (Session::get('status') == true)
            <script>
                swal("Successfull", "KYC Done successfully", "success");
            </script>
        @else
            <script>
                swal("Error", "KYC not registred. Please try again later.", "error");
            </script>
        @endIf
    @endIf
    {{-- <style type="text/css">
    body {
        font-family: 'Segoe UI';
        background-color: #DDDDDD;
        margin: 0px 5px 5px 5px;
        padding: 0px 5px 5px 5px;
        color: #555;
        font-size: 12px;
    }

    .panel {
        background-color: #FFFFFF;
        -moz-user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        margin: 12px 12px;
        padding: 6px 12px;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -moz-user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .btn-50 {
        width: 50px;
    }
    .btn-100 {
        width: 100px;
    }

    .btn-150 {
        width: 150px;
    }

    .btn-200 {
        width: 205px;
    }

    .btn-primary {
        color: #FFF;
        background-color: #428BCA;
        border-color: #357EBD;
    }

        .btn-primary:hover {
            color: #FFF;
            background-color: #357EBD;
            border-color: #428BCA;
        }

    .form-control {
        display: block;
        width: 100%;
        height: 24px;
        padding: 3px 6px;
        font-size: 12px;
        /*line-height: 1.42857;*/
        color: #555;
        background-color: #FFF;
        background-image: none;
        border: 1px solid #bdbdbd;
        border-radius: 4px;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    }

    textarea.form-control {
        height: auto;
    }

    .text-bold {
        font-weight: bold;
    }

    .img {
        min-width: 125px;
        min-height: 155px;
        width: 125px;
        height: 155px;
        border: 1px solid #CCC;
        border-radius: 4px;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
        background-color: #FFFFFF;
    }
</style> --}}
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>AEPS Transaction</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active">AEPS Transaction</li>
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
                        <h4>Choose Your Loan/EMI Biller</h4><span></span>
                    </div> --}}
                    <div class="row m-0">
                        <div class="col-12 p-0">

                            <ul class="nav nav-pills mb-3 mt-4 mx-4" id="pills-tab" role="tablist">
                                <li class="nav-item me-2" role="presentation">

                                    <button class="nav-link active" id="AepsTransaction-tab" data-bs-toggle="pill"
                                        data-bs-target="#AepsTransaction" type="button" role="tab"
                                        aria-controls="AepsTransaction" aria-selected="true">
                                        <span class="d-flex">
                                            <i class="myicon-identification fs-5"></i>
                                            AEPS Transaction
                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="nav-link" id="kyc-tab" data-bs-toggle="pill" data-bs-target="#kyc"
                                        type="button" role="tab" aria-controls="kyc" aria-selected="false">
                                        <span class="d-flex">
                                            <i class="myicon-file-text1 fs-5"></i>
                                            KYC
                                        </span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content mt-4" id="pills-tabContent">

                                <!-- FOR AEPS Transaction -->
                                <div class="tab-pane fade show active" id="AepsTransaction" role="tabpanel"
                                    aria-labelledby="pills-prepaid">
                                    <div class="row m-4">

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Services
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="transType" id="transType" class="form-select">
                                                    <option value="">--Select--</option>
                                                    <option value="BE">Balance Enquiry</option>
                                                    <option value="CW">Cash Withdrawal</option>
                                                    <option value="MS">Mini Statement</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="form-group col-1 mb-0"> <img
                                                            src="{{ asset(''.config('constant.ASSET').'images/loader-5.gif') }}" alt=""
                                                            width="45" id="perpaidOperatorLoading"
                                                            style="display:none;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label"> Mobile No.</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="cstmrMobNo" id="cstmrMobNo" class="form-control" type="number"
                                                placeholder="Enter Customer Mobile No." autocomplete="off">

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Name</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="cstmrName" id="cstmrName" class="form-control" type="text"
                                                placeholder="Enter Customer Name" autocomplete="off">

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Bank Name
                                            </label><span class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <div class="input-group">
                                                <select name="bankName" id="bankName" class="form-select">
                                                    <option value="">--Select Bank--</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="form-group col-1 mb-0"> <img
                                                            src="{{ asset(''.config('constant.ASSET').'images/loader-5.gif') }}" alt=""
                                                            width="45" id="perpaidOperatorLoading"
                                                            style="display:none;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Aadhar Number</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="aadharNo" id="aadharNo" class="form-control" type="number"
                                                placeholder="Enter Aadhar Number" autocomplete="off">
                                            <input name="lat" id="lat" class="form-control" type="hidden">
                                            <input name="long" id="long" class="form-control" type="hidden">

                                        </div>
                                        <div class="form-group col-6" id="amountDiv" style="display:none">
                                            <label class="col-form-label">Amount</label><span
                                                class="text-danger fa-lg font-weight-500">
                                                *</span>
                                            <input name="amount" id="amount" class="form-control" type="number"
                                                placeholder="Enter Amount" autocomplete="off">
                                        </div>

                                        <div class="form-group mt-4">
                                            <button class="btn btn-info" id="checkDeviceBtn"
                                                onclick="discoverAvdm();">CHECK
                                                DEVICE</button>
                                            <button type="button" class="btn btn-warning" style="display:none"
                                                id="scanFingerBtn" onclick="CaptureAvdm();">Scan Finger</button>
                                            <button class="btn btn-primary" id="submitAepsForm">Submit</button>
                                        </div>

                                    </div>

                                </div>

                                <div class="tab-pane fade " id="kyc" role="tabpanel"
                                    aria-labelledby="pills-prepaid">
                                    <div class="row m-4">
                                        <div class="col-3">
                                            <a class="btn btn-primary" href="{{ $redirectUrl }}"><i
                                                    class="myicon-log-in"></i> CLICK FOR KYC</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div > --}}
        <div class="table-responsive" id="miniStateDiv" style="display:none">
            <table class="table" id="beneficiaryList">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">TxnType</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Narration</th>
                    </tr>
                </thead>
                <tbody >
                    

                </tbody>
            </table>
        </div>
        {{-- </div> --}}
    </div>

    <input id="method" type="hidden" value="">
    <input id="info" type="hidden" value="">
    <input type="hidden" name="txtWadh" id="txtWadh">
    <textarea id="txtDeviceInfo" rows="10" cols="50" height="1000" style="display:none"></textarea>
    <textarea id="txtPidData" rows="20" cols="100" height="1000" style="display:none"></textarea>


    <!-- Container-fluid Ends-->

    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');
            $('#transType').on('change', function() {
                $('#amount').val('');
                var transVal = $(this).val();
                if (transVal == 'CW') {
                    $('#amountDiv').show();
                } else {
                    $('#amountDiv').hide();
                }
            })
            $('#perpaidOperatorLoading').show();
            $.ajax({
                url: "{{ url('/getBankNameList') }}",
                success: function(res) {

                    var optionOperator = ['<option value="0" >--Select Operator--</option>'];
                    var optionLengthOperator = res.data.length;
                    for (var i = 0; i < optionLengthOperator; i++) {

                        var resOptionOperator = '<option value="' + res.data[i].iinno + '" >' + res
                            .data[i]
                            .bankName + '</option>'
                        optionOperator.push(resOptionOperator);


                    }

                    $('#bankName').html(optionOperator);
                    $('#perpaidOperatorLoading').hide();
                }
            });

            $('#submitAepsForm').on('click', function() {
                var transType = $('#transType').val();
                var cstmrMobNo = $('#cstmrMobNo').val();
                var cstmrName = $('#cstmrName').val();
                var bankName = $('#bankName').val();
                var aadharNo = $('#aadharNo').val();
                var txtDeviceInfo = $('#txtDeviceInfo').val();
                var txtPidData = $('#txtPidData').val();
                var amount = $('#amount').val();
                var lat = $('#lat').val();
                var long = $('#long').val();
                if (transType == "") {
                    errorAlert("Required", "Please select the transaction Type", "transType");
                    return false;
                }
                if (cstmrMobNo == "") {
                    errorAlert("Required", "Please enter coustomer mobile number", "cstmrMobNo");
                    return false;
                }
                if (cstmrName == "") {
                    errorAlert("Required", "Please enter coustomer name", "cstmrName");
                    return false;
                }
                if (bankName == 0) {
                    errorAlert("Required", "Please select bank", "bankName");
                    return false;
                }
                if (aadharNo == "") {
                    errorAlert("Required", "Please enter the adhaar number ", "aadharNo");
                    return false;
                }
                if (transType == "CW") {
                    if (amount == '') {
                        errorAlert("Required", "Please Enter Amount ", "amount");
                        return false;

                    }
                }
                if (txtDeviceInfo == "") {
                    errorAlert("Required", "Please Get the device details ", "txtDeviceInfo");
                    return false;
                }
                if (txtPidData == "") {
                    errorAlert("Required", "Please get the finger print ", "txtPidData");
                    return false;
                }
                $('.pageLoader').show();

                $.ajax({
                    url: "{{ url('/getBEAeps') }}",
                    data: {
                        'transType': transType,
                        'cstmrMobNo': cstmrMobNo,
                        'cstmrName': cstmrName,
                        'bankName': bankName,
                        'aadharNo': aadharNo,
                        'txtPidData': txtPidData,
                        'amount': amount,
                        'lat': lat,
                        'long': long

                    },
                    success: function(res) {
                        $('.pageLoader').hide();
                        $('#miniStateDiv').hide();
                        if (res.status == false) {
                            swal("Error", res.message, "error");
                        } else {
                           
                            if (res.transType == "BE") {
                                swal("Successfull", 'Your Avaliable Balance is: Rs ' + res
                                    .balance + '', "success");
                            } else if (res.transType == "CW") {
                                swal("Successfull", '' + res.message + ' of Rs. ' + res
                                    .balance + '', "success");
                            } else if (res.transType == "MS") {
                                swal("Successfull", 'Mini-Statement Generated successfully.',
                                    "success");
                                var StatementCount = res.ministatement.length
                                var StatementData = res.ministatement
                                var staArr = '';
                                for (var i = 0; i < StatementCount; i++) {
                                    staArr += '<tr><td scope="row">'+(i+1)+'</td><td>'+StatementData[i].date+'</td><td>'+StatementData[i].txnType+'</td><td>'+StatementData[i].amount+'</td><td>'+StatementData[i].narration+'</td> </tr>';
                                    
                                }
                                $('#beneficiaryList tbody').append(staArr);
                                $('#miniStateDiv').show();
                            }
                        }
                    }
                });


            });
        });
        getLocation();

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }

        }

        function showPosition(position) {

            locationData = {
                latitude: position.coords.latitude,
                longitude: position.coords.longitude
            }
            $(document).ready(function() {
                $('#lat').val(locationData.latitude);
                $('#long').val(locationData.longitude);
            });

        }
    </script>

    <script type="text/javascript">
        function discoverAvdm() {
            var GetCustomDomName = "127.0.0.1";
            var SuccessFlag = 0;
            var primaryUrl = "http://" + GetCustomDomName + ":";

            try {
                var protocol = window.location.href;
                if (protocol.indexOf("https") >= 0) {
                    primaryUrl = "https://" + GetCustomDomName + ":";
                }
            } catch (e) {}

            url = "";

            SuccessFlag = 0;
            for (var i = 11100; i <= 11112; i++) {
                console.log("Discovering RD service on port : " + i.toString());
                var verb = "RDSERVICE";
                var err = "";

                var res;
                $.support.cors = true;
                var httpStaus = false;
                var jsonstr = "";
                var data = new Object();
                var obj = new Object();

                $.ajax({
                    type: "RDSERVICE",
                    async: false,
                    crossDomain: true,
                    url: primaryUrl + i.toString(),
                    contentType: "text/xml; charset=utf-8",
                    processData: false,
                    cache: false,
                    crossDomain: true,

                    success: function(data) {
                        httpStaus = true;
                        res = {
                            httpStaus: httpStaus,
                            data: data
                        };
                        $("#txtDeviceInfo").val(data);
                        finalUrl = primaryUrl + i.toString();
                        var $doc = $.parseXML(data); //$data
                        // debugger;
                        var CmbData1 = $($doc).find('RDService').attr('status');
                        var CmbData2 = $($doc).find('RDService').attr('info');

                        if (RegExp('\\b' + 'Mantra' + '\\b').test(CmbData2) == true || RegExp('\\b' +
                                'Morpho_RD_Service' + '\\b').test(CmbData2) == true || RegExp('\\b' +
                                'SecuGen India Registered device Level 0' + '\\b').test(CmbData2) == true ||
                            RegExp('\\b' + 'Precision - Biometric Device is ready for capture' + '\\b').test(
                                CmbData2) == true || RegExp('\\b' +
                                'RD service for Startek FM220 provided by Access Computech' + '\\b').test(
                                CmbData2) == true || RegExp('\\b' + 'NEXT' + '\\b').test(CmbData2) == true) {

                            // debugger;
                            console.log($($doc).find('Interface').eq(0).attr('path'));

                            if (RegExp('\\b' + 'Mantra' + '\\b').test(CmbData2) == true) {

                                if ($($doc).find('Interface').eq(0).attr('path') == "/rd/capture") {
                                    MethodCapture = $($doc).find('Interface').eq(0).attr('path');
                                }
                                if ($($doc).find('Interface').eq(1).attr('path') == "/rd/capture") {
                                    MethodCapture = $($doc).find('Interface').eq(1).attr('path');
                                }
                                if ($($doc).find('Interface').eq(0).attr('path') == "/rd/info") {
                                    MethodInfo = $($doc).find('Interface').eq(0).attr('path');
                                }
                                if ($($doc).find('Interface').eq(1).attr('path') == "/rd/info") {
                                    MethodInfo = $($doc).find('Interface').eq(1).attr('path');
                                }
                            } else if (RegExp('\\b' + 'Morpho_RD_Service' + '\\b').test(CmbData2) == true) {
                                MethodCapture = $($doc).find('Interface').eq(0).attr('path');
                                MethodInfo = $($doc).find('Interface').eq(1).attr('path');
                            } else if (RegExp('\\b' + 'SecuGen India Registered device Level 0' + '\\b').test(
                                    CmbData2) == true) {
                                MethodCapture = $($doc).find('Interface').eq(0).attr('path');
                                MethodInfo = $($doc).find('Interface').eq(1).attr('path');
                            } else if (RegExp('\\b' + 'Precision - Biometric Device is ready for capture' +
                                    '\\b').test(CmbData2) == true) {
                                MethodCapture = $($doc).find('Interface').eq(0).attr('path');
                                MethodInfo = $($doc).find('Interface').eq(1).attr('path');
                            } else if (RegExp('\\b' +
                                    'RD service for Startek FM220 provided by Access Computech' + '\\b').test(
                                    CmbData2) == true) {
                                MethodCapture = $($doc).find('Interface').eq(0).attr('path');
                                MethodInfo = $($doc).find('Interface').eq(1).attr('path');
                            } else if (RegExp('\\b' + 'NEXT' + '\\b').test(CmbData2) == true) {
                                MethodCapture = $($doc).find('Interface').eq(0).attr('path');
                                MethodInfo = $($doc).find('Interface').eq(1).attr('path');
                            }

                            if (CmbData1 == 'READY') {

                                $('#method').val(finalUrl + MethodCapture);
                                $('#info').val(finalUrl + MethodInfo);

                                SuccessFlag = 1;

                                // alert("Device detected successfully");
                                swal("Successfull", "Device detected successfully", "success")
                                    .then(function(res) {
                                        // $('.pageLoader').fadeIn();
                                        if (res) {

                                            $('#checkDeviceBtn').hide();
                                            $('#scanFingerBtn').show();
                                        }
                                    });


                                return false;
                            } else if (CmbData1 == 'USED') {
                                $('#method').val(finalUrl + MethodCapture);
                                $('#info').val(finalUrl + MethodInfo);

                                SuccessFlag = 1;

                                // alert("Device detected successfully");
                                swal("Successfull", "Device detected successfully", "success")
                                    .then(function(res) {
                                        // $('.pageLoader').fadeIn();
                                        if (res) {

                                            $('#checkDeviceBtn').hide();
                                            $('#scanFingerBtn').show();
                                        }
                                    });


                                return false;
                            } else if (CmbData1 == 'NOTREADY') {
                                // alert("Device Not Discover");
                                swal("Error", "Device Not Discover", "error")
                                return false;
                            }
                        }

                    },
                    error: function(jqXHR, ajaxOptions, thrownError) {
                        if (i == "8005" && OldPort == true) {
                            OldPort = false;
                            i = "11099";
                        }
                    },

                });

                if (SuccessFlag == 1) {
                    break;
                }
            }

            if (SuccessFlag == 0) {
                // alert("Connection failed Please try again.");
                swal("Error", "Connection failed Please try again.", "error")
            } else {
                //alert("RDSERVICE Discover Successfully");
            }
            $("select#ddlAVDM").prop('selectedIndex', 0);
            return res;
        };




        function deviceInfoAvdm() {
            var GetCustomDomName = "127.0.0.1";
            var SuccessFlag = 0;
            var primaryUrl1 = "http://" + GetCustomDomName + ":";

            try {
                var protocol = window.location.href;
                if (protocol.indexOf("https") >= 0) {
                    primaryUrl1 = "https://" + GetCustomDomName + ":";
                }
            } catch (e) {}

            url = "";
            SuccessFlag = 0;


            var finUrl = $('#info').val();
            url = "";

            var err = "";

            var res;
            $.support.cors = true;
            var httpStaus = false;
            var jsonstr = "";;
            $.ajax({

                type: "DEVICEINFO",
                async: false,
                crossDomain: true,
                url: finUrl,
                contentType: "text/xml; charset=utf-8",
                processData: false,
                success: function(data) {
                    httpStaus = true;
                    res = {
                        httpStaus: httpStaus,
                        data: data
                    };
                    $('#txtDeviceInfo').val(data);
                },
                error: function(jqXHR, ajaxOptions, thrownError) {
                    // alert(thrownError);
                    swal("Error", thrownError, "error")
                    res = {
                        httpStaus: httpStaus,
                        err: getHttpError(jqXHR)
                    };
                },
            });

            return res;

        }



        function CaptureAvdm() {

            DString = '';
            device = "mantra";


            var strWadh = "";
            var strOtp = "";


            var XML =
                '<PidOptions ver="1.0"> <Opts fCount="1" fType="2" iCount="0" pCount="0" format="0" pidVer="2.0" timeout="10000" posh="UNKNOWN" env="P" /> ' +
                DString + '<CustOpts><Param name="mantrakey" value="" /></CustOpts> </PidOptions>';


            var finUrl = $('#method').val();


            var verb = "CAPTURE";


            var err = "";

            var res;
            $.support.cors = true;
            var httpStaus = false;
            var jsonstr = "";

            $.ajax({

                type: "CAPTURE",
                async: false,
                crossDomain: true,
                url: finUrl,
                data: XML,
                contentType: "text/xml; charset=utf-8",
                processData: false,
                success: function(data) {

                    if (device == "morpho") {
                        var xmlString = (new XMLSerializer()).serializeToString(data); //morpho
                    } else if (device == "mantra") {
                        var xmlString = data; //mantra
                    } else if (device == "secugen") {
                        var xmlString = (new XMLSerializer()).serializeToString(data); //secugen
                    } else if (device == "precision") {
                        var xmlString = (new XMLSerializer()).serializeToString(data); //precision
                    } else if (device == "startek") {
                        var xmlString = (new XMLSerializer()).serializeToString(data); //startek
                    } else if (device == "nextrd") {
                        var xmlString = (new XMLSerializer()).serializeToString(data); //next rd
                    }
                    httpStaus = true;
                    res = {
                        httpStaus: httpStaus,
                        data: xmlString
                    };

                    $('#txtPidData').val(xmlString);

                    var $doc = data;
                    var Message = $($doc).find('Resp').attr('errInfo');
                    var errorcode = $($doc).find('Resp').attr('errCode');
                    if (errorcode == 0) {

                        var $doc = $.parseXML(data);
                        var Message = $($doc).find('Resp').attr('errInfo');

                        // alert();

                        swal("Successfull", Message, "success")

                    } else {
                        $('#loaderbala').css("display", "none");
                        // alert('Capture Failed');
                        swal("Error", "Capture Failed", "error")
                        window.location.reload();
                    }

                },
                error: function(jqXHR, ajaxOptions, thrownError) {
                    //$('#txtPidOptions').val(XML);
                    // alert(thrownError);
                    swal("Error", thrownError, "error")
                    res = {
                        httpStaus: httpStaus,
                        err: getHttpError(jqXHR)
                    };
                },
            });

            return res;
        }

        function getHttpError(jqXHR) {
            var err = "Unhandled Exception";
            if (jqXHR.status === 0) {
                err = 'Service Unavailable';
            } else if (jqXHR.status == 404) {
                err = 'Requested page not found';
            } else if (jqXHR.status == 500) {
                err = 'Internal Server Error';
            } else if (thrownError === "parsererror") {
                err = 'Requested JSON parse failed';
            } else if (thrownError === "timeout") {
                err = 'Time out error';
            } else if (thrownError === "abort") {
                err = 'Ajax request aborted';
            } else {
                err = 'Unhandled Error';
            }
            return err;
        }
    </script>
@endsection
