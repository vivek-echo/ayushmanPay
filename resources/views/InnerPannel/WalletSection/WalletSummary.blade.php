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
                        <li class="breadcrumb-item"><a href="/dashboard"><i data-feather="home"></i></a></li>
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

                        <form method="post" action="/wallet/walletsummary" id="formSubmit" enctype='multipart/form-data'>
                            @csrf
                            <div class="row m-0">
                                <div class="form-group col-6 ps-0">
                                    <label class="col-form-label">From Date</label><span
                                        class="text-danger fa-lg font-weight-500">
                                        *</span>
                                    <div class="input-group">
                                        <input class="datepicker-here form-control digits" type="text" data-language="en"
                                            id="fromDate" name="fromDate" placeholder="From Date" value="" readonly>
                                        <div class="input-group-text" id=""><i class="text-secondary"
                                                data-feather="calendar"></i></div>
                                    </div>

                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">To Date</label><span
                                        class="text-danger fa-lg font-weight-500">
                                        *</span>
                                    <div class="input-group">
                                        <input class="datepicker-here form-control digits" type="text" data-language="en"
                                            id="toDate" name="toDate" placeholder="To Date" value="" readonly>
                                        <div class="input-group-text" id=""><i class="text-secondary"
                                                data-feather="calendar"></i></div>
                                    </div>

                                </div>
                                <input type="hidden" name="btnSearchSubmit" value="1">
                            </div>
                        </form>

                        <div class="form-group col-4 m-t-35">
                            <button class="btn btn-success" id="btnSearch">Search</button>
                        </div>


                        <hr>
                        @if ($searchView == 0)
                            
                                <div class="card">
                                    <div class="card-body bg-warning " style="border-radius:10px 10px 10px 10px;">
                                        <h4>Please Search The Filter To Get The Wallet Summary .</h4>
                                    </div>
                                </div>
                               
                        @else
                            <div class="dt-ext table-responsive pt-3" id="searched">
                                <table class="display" id="export-button">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Service</th>
                                            <th>Acknoledge Number</th>
                                            <th>Refrence Id</th>
                                            <th>Message</th>
                                            <th>TransactionType</th>
                                            <th>Transaction Date</th>
                                            <th>Transaction Amount(Rs.)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="walTrans">
                                        @foreach ($dataView as $k => $item)
                                            <tr>
                                               
                                                <td>{{ $k + 1 }}</td>
                                                <td>{{ $item['servicType'] }}</td>
                                                <td>{{ $item['ackno'] }}</td>
                                                <td>{{ $item['riefId'] }}</td>
                                                <td>{{ $item['message'] }}</td>
                                                <td>{{ $item['transactionType'] == 1 ? "Credited" : "Debited" }}</td>
                                                <td>{{ $item['createdOn'] }}</td>
                                                @if($item['transactionType'] == 1)
                                                <td class="text-success">+ {{ $item['walletAmount'] }}</td>
                                                @else
                                                <td class="text-danger">- {{ $item['walletAmount'] }}</td>
                                                @endIf
                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        @endIf

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
            $('#btnSearch').on('click', function() {
                
                $('.pageLoader').fadeIn();
                $('#formSubmit').submit();
                
            })

        
        });
    </script>
@endsection
