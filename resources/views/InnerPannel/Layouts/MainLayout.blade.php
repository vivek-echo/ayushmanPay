<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apna Bharat Pay">
    <meta name="keywords" content="Apna Bharat Pay, Online Payment System">
    <meta name="author" content="Apna Bharat Pay">
    <link rel="icon" href="{{ asset('images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.png') }}" type="image/x-icon">
    <title>Apna Bharat pay - Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/font-awesome.css') }}"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- icomoon icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('custom-icomoon/style.css') }}">
    <!-- Datatable-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatable-extension.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/prism.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/sweetalert2.css') }}">


    <!-- latest jquery-->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <div class="pageLoader" style="display: none;">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Tivo .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span></div><i class="close-search"
                                    data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                        </i>
                    </div>
                    <div class="logo-header-main"><a href="{{ url('/dashboard') }}"><img
                                class="img-fluid for-light img-100" src="{{ asset('images/favicon/favicon.png') }}"
                                alt=""><img class="img-fluid for-dark"
                                src="{{ asset('images/favicon/favicon.png') }}" alt=""></a></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <div class="left-menu-header">
                        <ul class="header-left">
                            <li class=""><span class="f-w-600" id="walletId">Wallet Balance: </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="right-header ps-0">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text mobile-search"><i
                                                class="fa fa-search"></i></span></div>
                                    <input class="form-control" type="text" placeholder="Search Here........">
                                </div>
                            </div>
                        </li>
                        <li class="serchinput">
                            <div class="serchbox"><i data-feather="search"></i></div>
                            <div class="form-group search-form">
                                <input type="text" placeholder="Search here...">
                            </div>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"></i></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"> </i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><i data-feather="truck"></i></div>
                                        <div class="flex-grow-1">
                                            <p><a href="order-history.html">Delivery processing </a><span
                                                    class="pull-right">6 hr</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                                        <div class="flex-grow-1">
                                            <p><a href="cart.html">Order Complete</a><span class="pull-right">3
                                                    hr</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                                        <div class="flex-grow-1">
                                            <p><a href="invoice-template.html">Tickets Generated</a><span
                                                    class="pull-right">1 hr</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><i data-feather="send"></i></div>
                                        <div class="flex-grow-1">
                                            <p><a href="email_inbox.html">Delivery Complete</a><span
                                                    class="pull-right">45 min</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="message"><i data-feather="message-square"></i></div>
                            <ul class="message-dropdown onhover-show-div">
                                <li><i data-feather="message-square"></i>
                                    <h6 class="f-18 mb-0">Messages</h6>
                                </li>
                                <li>
                                    <div class="d-flex align-items-start">
                                        <div class="message-img bg-light-primary"><img
                                                src="{{ asset('images/user/3.jpg') }}" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1"><a href="email_inbox.html">Emay Walter</a></h5>
                                            <p>Do you want to go see movie?</p>
                                        </div>
                                        <div class="notification-right"><i data-feather="x"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-start">
                                        <div class="message-img bg-light-primary"><img
                                                src="{{ asset('images/user/6.jpg') }}" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                                            <p>Thank you for rating us.</p>
                                        </div>
                                        <div class="notification-right"><i data-feather="x"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-start">
                                        <div class="message-img bg-light-primary"><img
                                                src="{{ asset('images/user/10.jpg') }}" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                                            <p>What`s the project report update?</p>
                                        </div>
                                        <div class="notification-right"><i data-feather="x"></i></div>
                                    </div>
                                </li>
                                <li><a class="btn btn-primary" href="email_inbox.html">Check Messages</a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize-2"></i></a></li>
                        <li class="profile-nav onhover-dropdown">
                            <div class="account-user"><i data-feather="user"></i></div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                            data-feather="log-in"> </i><span>Log Out</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">name</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="{{ url('/dashboard') }}"><img class="w-75"
                                src="{{ asset('images/logo/abp-white.png') }}" alt=""></a>
                        <div class="back-btn"><i data-feather="grid"></i></div>
                        <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle"
                                data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="{{ url('/dashboard') }}">
                            <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
                        </a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i
                                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                id="dashboardLink" href="{{ url('/dashboard') }}"><i
                                                    data-feather="home"> </i><span>Dashboard</span></a></li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                id="serviceLink" href="{{ url('/services') }}"><i
                                                    data-feather="grid"> </i><span>Services</span></a></li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                            id="walletLink" href="javascript:void(0)"><i data-feather="briefcase"></i><span>Wallet
                                                    Section</span></a>
                                            <ul class="sidebar-submenu">
                                                <li><a href="{{ url('/walletsection/walletsummary') }}">Wallet Summary</a></li>
                                                <li><a href="#">Print My QR</a></li>
                                                <li><a href="#">Settlement</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @yield('content')
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-left">
                            <p class="mb-0">@ 2023 Apna Bharat Pay. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap js-->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('js/chart/knob/knob-chart.js') }}"></script>
    <!-- <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script> -->
    <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('js/owlcarousel/owl.carousel.js') }}"></script>
    <!-- <script src="{{ asset('js/dashboard/dashboard_2.js') }}"></script> -->

    <script src="{{ asset('js/sweet-alert/sweetalert.min.js') }}"></script>
    
    <!-- Datatable-->
    <script src="{{ asset('js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatable-extension/custom.js') }}"></script>
    <script src="{{ asset('js/tooltip-init.js') }}"></script>
    <!-- Template js-->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ url('/profileData') }}",
                success: function(res) {
                    if(res)
                    {
                        $('#walletId').html("Wallet Balance: Rs. " +res.walletAmount);
                    }
                }
            });
        })
        </script>
    
    <!-- login js-->
</body>

</html>
