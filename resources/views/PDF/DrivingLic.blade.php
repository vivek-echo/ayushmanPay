<!DOCTYPE html>
<html lang="en">

<head>
    <title>Download PDF</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .page-wrapper .page-body-wrapper {
            background-color: #f6f8fc;
        }

        body {
            font-size: 14px;
            overflow-x: hidden;
            font-family: "Montserrat", sans-serif;
            color: #2b2b2b;
            background-color: #f6f8fc;
            margin: 0;
            padding: 0;
        }

        .page-wrapper {
            position: relative;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        @media (min-width: 1400px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg,
            .container-xl,
            .container-xxl {
                max-width: 1320px;
            }
        }

        @media (min-width: 1200px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg,
            .container-xl {
                max-width: 1140px;
            }
        }


        .container,
        .container-fluid,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl,
        .container-xxl {
            width: 100%;
            padding-right: var(--bs-gutter-x, .75rem);
            padding-left: var(--bs-gutter-x, .75rem);
            margin-right: auto;
            margin-left: auto;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66667%;
        }

        .text-center {
            text-align: center !important;
        }

        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3,
        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h4 {
            font-size: 26px;
            font-weight: 700;
        }

        .border {
            border-color: #eee !important;
        }

        .border {
            border: 1px solid #dee2e6 !important;
        }

        .rounded {
            border-radius: 0.25rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }

        form {
            display: block;
            margin-top: 0em;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) / -2);
            margin-left: calc(var(--bs-gutter-x) / -2);
        }

        .col-form-label {
            padding-top: calc(0.375rem + 1px);
            padding-bottom: calc(0.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25% !important;
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333% !important;
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333% !important;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .row>* {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) / 2);
            padding-left: calc(var(--bs-gutter-x) / 2);
            margin-top: var(--bs-gutter-y);
        }

        form label {
            font-weight: 500;
        }

        label {
            display: inline-block;
        }

        .img-thumbnail {
            border-color: #eee;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto;
        }

        img,
        svg {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper">
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <div class="container-fluid px-5 py-5">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h4>Driving Licence Details</h4>
                        </div>
                        <div class="p-4 mt-4">
                            <form class="theme-form">
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Client Id</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['client_id'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">License Number</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['license_number'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">State</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['state'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Name</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['name'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Permanent Address</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['permanent_address'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Permanent Zip</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['permanent_zip'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Temporary Address</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['temporary_address'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Temporary Zip</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['temporary_zip'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Citizenship</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['citizenship'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Ola Name</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['ola_name'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Ola Code</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['ola_code'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Gender</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['gender'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Father/ Husband Name</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label
                                        class="col-4 col-form-label fw-bold">{{ $data['father_or_husband_name'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Date Of Birth</label>
                                    <label class="col-1 col-form-label">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['dob'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Date Of Expiry</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['doe'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Transport Date Of Expiry</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['transport_doe'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Date Of Issue</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['doi'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Transport Date Of Issue</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['transport_doi'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Profile Image</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label">
                                        <img src="{{ public_path($imageSrc) }}" class="img-thumbnail" alt="DLimage"
                                            id="my_image" width="200">
                                    </label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Blood Group</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['blood_group'] }}</label>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Vehicle Classes</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    {{-- <label class="col-4 col-form-label fw-bold">{{$data['vehicle_classes']}}</label> --}}
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label fw-bold">Initial Date Of Issue</label>
                                    <label class="col-1 col-form-label fw-bold">:</label>
                                    <label class="col-4 col-form-label fw-bold">{{ $data['initial_doi'] }}</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- login js-->
</body>

</html>
