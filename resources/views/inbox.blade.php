<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Master Admin-Ekstrakulikuler Smkn 1 SBY</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ asset('../../assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('../../dist/css/style.min.css') }}" rel="stylesheet">
    <script src='{{ asset('https://kit.fontawesome.com/a076d05399.js') }}' crossorigin='anonymous'></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md " style="box-shadow: 1px 1px 1px 1px rgb(97, 94, 94);">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="images/logosmk 1.png" width="100px" alt="homepage" />
                            <!-- Light Logo icon -->

                        </b>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        {{-- lahan kosong --}}

                    </ul>
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                    width="31">
                            </a>
                            {{-- <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                            </ul> --}}
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar " style="background-color: #282b30" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20 "
                                style="background-color: #424549">
                                <div class="user-pic"><img src="../../assets/images/users/1.jpg" alt="users"
                                        class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="#" class="" id="Userdd" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name fw-bold text-white">Inna <i
                                                class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email text-white" style="font-size: 10px">Hallo,
                                            Master</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="Userdd">

                                        <a class="dropdown-item" href="/login"><i
                                                class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                        <li class="sidebar-item" style="background-color: #424549"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('Masteradmin.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard text-white"></i><span
                                    class="hide-menu text-white">Dashboard</span></a></li>
                        <li class="sidebar-item" style="background-color: #424549"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"><i class="mdi mdi-account-network text-white"></i><span
                                    class="hide-menu text-white">Website Ekstra</span></a></li>
                        <li class="sidebar-item" style="background-color: #424549"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"><i class="mdi mdi-account-network text-white"></i><span
                                    class="hide-menu text-white">Inbox</span></a></li>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper" style="background-color:#1e2124">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="card " style="border-radius: 10px;background-color:#1e2124">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h2 class="card-title text-danger fw-bold">Kotak Pesan</h2>
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12 mt-1">
                                        <div class="card" style="background-color:#1e2124">
                                            <h5 style="line-height: 30px">Dibawah ini adalah daftar pesan dari para
                                                siswa pada anda. <br> Klik button show untuk melihat pesannya.</h5>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-left: 20px">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <h4 class="card-title fw-bold text-danger" style="font-size: 20px">Jumlah
                                        Pesan Yang Masuk</h4>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12 mt-2">
                                        <div class="card">
                                            <div class="body">
                                                <h1>{{ $jumlah_pesan }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="border-radius: 4px">
                                <table class="table table-striped text-center ">
                                    <thead>
                                        <tr class="bg-dark text-warning">
                                            <th scope="col">No</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($inbox->isEmpty())
                                            <tr>
                                                <td colspan="3">
                                                    <H4 class="fw-bold">Pesan Masih Kosong</H4>
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($inbox as $item)
                                                <tr class="fw-bold" style="font-size: 15px">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        <a onclick="show({{ $item->id }})"
                                                            class="btn btn-info rounded-2"><i
                                                                class="fas fa-info"></i></a>
                                                        <a href="{{ route('Masteradmin.hapus', $item->id) }}"
                                                            class="btn btn-danger rounded-2"><i
                                                                class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-6" style="padding-left: 20px">
                            <div class="card" id="wek" style="border-radius: 4px">
                                <div class="card-header bg-dark border-bottom border-info" style="height: 55px;">
                                    <h5 class="text-warning ">Pesan dan Kesan</h5>
                                </div>
                                <div class="card-body">
                                    @if ($inbox->isEmpty())
                                        <h4 style="font-family:monospace;font-size: 20px">Pesan Masih Kosong</h4>
                                    @else
                                        <h3 style="font-family:monospace;font-size: 20px">Silahkan pilih email</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function show(id) {
                        $.get('Masteradmin/' + id, function(inbox) {
                            $('#wek').html(inbox);
                        })
                    }
                </script>

            </div>
            <footer class="footer text-center">
                Selamat Datang Master Admin
            </footer>
        </div>

        
        <script src="{{ asset('../../assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('../../dist/js/app-style-switcher.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('../../dist/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('../../dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('../../dist/js/custom.js') }}"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        {{-- <script src="{{asset('../../assets/libs/chartist/dist/chartist.min.js')}}"></script>
            <script src="{{asset('../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
            <script src="{{asset('../../dist/js/pages/dashboards/dashboard1.js')}}"></script> --}}

</body>

</html>
