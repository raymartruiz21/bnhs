<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS - Login</title>

    <!-- General CSS Files -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}"> --}}

    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css"> --}}

    <!-- Template CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}"> --}}

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* text-align: center; */
            min-height: 100vh;
        }
        .style {
            color: #ff6600;
            font-size: 20px;
        }
        .login {
            color: #3366cc;
        }
        .address {
            color:  #0066ff;
            font-size: 20px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="container" style="margin-top: -250px;">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 text-center">
                                <img src="{{ asset('image/logo/bn.jpg') }}" class="img-fluid rounded" width="120%">
                            </div>
                            <div class="col-10"><br>
                                <b>
                                    <h4 class="mb-1">REQUIREMENTS FOR INCOMING GRADE 7, TRANSFEREES AND BALIK
                                        ARAL</h4>
                                    <p class="mb-0">&middot; Copy of Latest Grades &middot; Copy of Good Moral
                                        Certificate &middot; Copy of PSA Birth
                                        Certificate</p>
                                    <address class="mb-0">
                                        <i class="fa fa-phone address"></i>&nbsp;&nbsp;0917-112-7716&nbsp;&nbsp;
                                        <i class="fa fa-at address"></i>&nbsp;&nbsp;302016@deped.gov.ph&nbsp;&nbsp;
                                        <i class="fab fa-facebook address"></i>&nbsp;&nbsp;@balaogannationalhighschool  
                                    </address>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="login-box" id="app">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-body">
                <h4 class="login text-center">Login</h4><hr style="border-color: #3366cc;">
                <p class="login-box-msg">Sign in to start your session</p>
                <div class="col-12">
                    @if (session()->has('msg'))
                        <div class="alert alert-warning text-center" role="alert" style="color: white;">
                            {{ session('msg') }}
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{ route('auth.login_post') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="get_your_input">Username | ID No.</label>
                        <input id="get_your_input" type="text" class="form-control" name="get_your_input" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                            Please fill this field [username or ID No.]
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                            Please fill in your password
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form><hr style="border-color: #3366cc;">
                <div class="row">
                    <div class="col-6">
                        <a href="/appoint/register" class="btn btn-block text-black">
                            <i class="far fa-calendar-alt style"></i><br> Get Appointment
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/welcome" class="btn btn-block text-black ">
                            <i class="far fa-id-card style"></i><br> Pre Enrollment
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    {{-- <div id="app">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 center-screen"> --}}
                        {{-- <div class="login-brand">
                            <img src="/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div> --}}
                        {{-- @if (session()->has('msg'))
                        <div class="alert alert-warning text-center" role="alert">
                            {{ session('msg') }}
                        </div>
                        @endif
                        <div class="card card-primary shadow-sm">
                            <div class="card-header pt-1 pb-0">
                                <div class="col-12"> --}}
                                    {{-- <div class="row mt-0 mb-0 justify-content-between">
                                        <div class="py-2">
                                            <h4>Login</h4>
                                        </div>
                                        <div class=" float-right">
                                            <img class="img-fluid m-0 p-0" src="{{ asset('image/logo/ff.jpg') }}"
                                                alt="PNHS LOGO" width="50px">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="py-2 text-center">
                                        <h4>Login</h4>
                                    </div>  
                                </div>
                            </div>

                            <div class="card-body pt-1">
                                <form method="POST" action="{{ route('auth.login_post') }}" class="needs-validation"
                                    novalidate="">@csrf
                                    <div class="form-group">
                                        <label for="get_your_input">Username | ID No.</label>
                                        <input id="get_your_input" type="text" class="form-control"
                                            name="get_your_input" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill this field [username or ID No.]
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            Please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-black">-- OR --</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="/appoint/register" class="btn btn-block text-black">
                                            <span class="fas fa-calendar-check"></span><br> Get Appointment
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="/welcome" class="btn btn-block text-black ">
                                            <span class="fab fa-wpforms"></span><br> Pre Enrollment
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="simple-footer mt-0">
                            Copyright &copy; Stisla 2018
                        </div> --}}
                    {{-- </div>
                </div>
            </div>
        </section>
    </div> --}}

    {{-- <!-- General JS Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script> --}}

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>