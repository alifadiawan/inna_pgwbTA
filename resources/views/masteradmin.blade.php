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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                                href="" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard text-white"></i><span
                                    class="hide-menu text-white">Dashboard</span></a></li>
                        <li class="sidebar-item" style="background-color: #424549"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"><i class="mdi mdi-account-network text-white"></i><span
                                    class="hide-menu text-white">Website Ekstra</span></a></li>
                        <li class="sidebar-item" style="background-color: #424549"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('Masteradmin.inbox')}}"
                                aria-expanded="false"><i class="mdi mdi-account-network text-white"></i><span
                                    class="hide-menu text-white">Inbox</span></a></li>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background-color:#1e2124">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title fw-bold text-danger" style="font-size: 30px">Dashboard Master Admin</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title fw-bold">Jumlah Seluruh Siswa</h4>
                                        <h5 class="card-subtitle text-warning">ini adalah jumlah siswa yang telah
                                            terdaftar di ekstrakulikuler</h5>
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12 mt-2">
                                        <div class="card">
                                            <h1>{{ $jumlah_siswa }} siswa</h4>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-left: 20px">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title fw-bold">Jumlah Ekstrakulikuler</h4>
                                        <h5 class="card-subtitle text-warning">ini adalah jumlah ekstrakulikuler yang
                                            ada di SMKN 1 SBY</h5>
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12 mt-2">
                                        <div class="card">
                                            <div class="body">
                                                <h1>{{ $jumlah_ekskul }} Ekstrakulikuler</h4>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-12">
                            <div class="card" style="border-radius: 5px">
                                <div class="card-body">
                                    <!-- title -->
                                    <div class="d-md-flex">
                                        <div>
                                            <h4 class="card-title fw-bold">Daftar Seluruh Siswa</h4>
                                            <h5 class="card-subtitle text-warning">Berikut adalah nama-nama siswa yang
                                                telah mendaftar ke ekstrakulikuler</h5>
                                        </div>
                                    </div>
                                    <!-- title -->
                                </div>
                                <div class="table-responsive table-bordered "
                                    style="padding-left: 15px;padding-right: 15px;">
                                    <table class="table v-middle text-center">
                                        <thead>
                                            <tr class="bg-light">

                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Nama</th>
                                                <th class="border-top-0">Kelas</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Nomor Handphone</th>
                                                <th class="border-top-0">Ekstrakulikuler</th>

                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($siswa as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->kelas->kelas }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->no_hp }}</td>
                                                    <td>{{ $item->ekstrakulikuler->nama_ekskul }}</td>
                                            @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- =========================================================================== --}}
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card" style="border-radius: 5px">
                                <div class="card-body">
                                    <!-- title -->
                                    <div class="d-md-flex">
                                        <div>
                                            <h4 class="card-title fw-bold">Daftar Ekstrakulikuler</h4>
                                            <h5 class="card-subtitle text-warning">Berikut adalah ekskul - ekskul yang
                                                terdafar di SMKN 1 SBY</h5>
                                        </div>
                                    </div>
                                    <!-- title -->
                                </div>
                                <div class="table-responsive table-bordered"
                                    style="padding-left: 15px;padding-right: 15px;">
                                    <table class="table v-middle text-center">
                                        <thead>
                                            <tr class="bg-light">
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Nama Ekstrakulikuler</th>
                                                <th class="border-top-0">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($ekskul as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_ekskul }}</td>
                                                    <td class="text-center">
                                                        <a
                                                            class="btn-sm btn-info"onclick="show({{ $item->id }})">
                                                            <i class="fas fa-folder-open"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- column -->
                        <div class="col-lg-6" style="padding-left: 20px">
                            <div class="card" style="border-radius: 5PX" id="siswa">
                                <div class="card-header">
                                    <strong> Daftar siswa</strong>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center flex-row m-t-30" id="siswa">
                                        <h5>Silahkan Pilih ekskul terlebih dahulu</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer text-center">
                    Selamat Datang Master Admin
                </footer>
            </div>
        </div>
        <script>
            function show(id) {
                $.get('admin/' + id, function(ini) {
                    $('#siswa').html(ini);
                })
            }
        </script>



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
        <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
        <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>

</body>

</html>


{{-- iki isie tabel daftar siswa per ekskul --}}

{{-- <div class="d-flex align-items-center flex-row m-t-30">
                                    <div class="display-5 text-info"><i class="wi wi-day-showers"></i>
                                        <span>73<sup>°</sup></span></div>
                                    <div class="m-l-10">
                                        <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small>
                                    </div>
                                </div>
                                <table class="table no-border mini-table m-t-20">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted">Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <ul class="row list-style-none text-center m-t-30">
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
                                        <span class="d-block text-muted">09:30</span>
                                        <h3 class="m-t-5">70<sup>°</sup></h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
                                        <span class="d-block text-muted">11:30</span>
                                        <h3 class="m-t-5">72<sup>°</sup></h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
                                        <span class="d-block text-muted">13:30</span>
                                        <h3 class="m-t-5">75<sup>°</sup></h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
                                        <span class="d-block text-muted">15:30</span>
                                        <h3 class="m-t-5">76<sup>°</sup></h3>
                                    </li>
                                </ul> --}}
