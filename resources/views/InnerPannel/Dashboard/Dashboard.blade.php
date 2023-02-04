@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dashboardLink').addClass('activeLink');

        });
    </script>
@endsection
{{-- @push('script') --}}

{{-- position: absolute;
content: '';
width: 35px;
height: 35px;
background-color: #5c61f2;
top: 6px;
left: 13px;
-webkit-transition: 0.8s;
transition: 0.8s;
z-index: -1;
border-radius: 8px;
opacity: 0;
-webkit-box-shadow: 1.5px 0.33px 16px 0px rgba(92, 97, 242, 0.6);
box-shadow: 1.5px 0.33px 16px 0px rgba(92, 97, 242, 0.6) --}}
