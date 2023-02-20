@extends('layoutv2.bodypolos')
<div class="container" style="margin-top: 100px">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg p-3 mb-5 rounded-3 text-light" style="background-color: #2f3037">
                <div class="card-body mb-0">
                    <div class="row">
                        <div class="col-4">
                            <a href="/" class="btn text-light">
                                <i class="fa-solid fa-angle-left"></i>
                            </a>
                        </div>
                        <div class="col">
                            <h1 class="fw-bold mb-4">LOGIN</h1>
                        </div>
                    </div>

                    <form action="login" class="user" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="font-size-2" for="ekstrakulikuler"> Masukkan Email </label>
                            <input type="email" class="form-control bg-light" id="email" placeholder="Enter Email Address..."
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="ekstrakulikuler"> Password</label>
                            <input type="password" class="form-control " id="password" placeholder="Password"
                                name="password">
                        </div>
                        <div class="form-group m-0">
                            <input type="submit" class="btn btn-warning w-25 mb-3 fw-bold" value="LOGIN">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



























































{{-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sbadmin/template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="login" class="user" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-size-2" for="ekstrakulikuler"> Masukkan Email </label>
                                            <input type="email" class="form-control "
                                                id="email" placeholder="Enter Email Address..."
                                                name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="ekstrakulikuler"> Password</label>
                                            <input type="password" class="form-control "
                                                id="password" placeholder="Password" name="password">
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="ekstrakulikuler"> Pilih Ekstrakulikuler</label>
                                            <select class="form-select form-control  " id="ekstrakulikuler" name="ekstrakulikuler " aria-label="Default select example">
                                                @foreach ($daftar_ekskul as $item)
                                                    <option value="{{($item->id)}}">{{($item->nama_ekskul)}}</option>
                                                @endforeach
                                        </select>

                                    </div> --}}
{{-- <input type="submit" class="btn btn-primary btn-block" value="login">

</form>

</div>
</div>
</div>
</div>
</div>

</div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="template/vendor/jquery/jquery.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="template/js/sb-admin-2.min.js"></script>

</body>

</html> --}}
