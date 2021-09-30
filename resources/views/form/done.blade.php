<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS - Pre-enrollment</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    {{-- <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}"> --}}

    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css"> --}}

    {{-- <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}"> --}}
    <style>
        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* text-align: center; */
            min-height: 100vh;
        }
        .address{
            color: #668cff;
            font-size: 20px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <br><br><br>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="page-error text-center">
                    <div class="page-inner">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('image/logo/bn.jpg') }}" class="rounded mx-auto d-block" height="150px;">
                            </div>
                        </div>
                        <div class="page-description mt-5">
                            <h2>Online Pre-Enrollment was successful</h2>
                            <br><br>
                            <h4>Enrollment No: <u><b>{{ $data }}</b></u></h4>
                            <br>
                            <h5><b><i style="color: red;">*</i> Please save and take picture the <u>Enrollment No.</u> for your inquries </b></h5><br>
                            <h5><i class="fas fa-phone address"></i> &nbsp;&nbsp;09918742564 | <i class="fa fa-at address"></i>&nbsp;&nbsp;
                                302016@deped.gov.ph
                                <br><i class="fas fa-map-marked-alt address"></i>&nbsp;&nbsp; Balaugan, Bula, Camarines Sur</h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="simple-footer mt-5">
                    Copyright &copy; Stisla 2018
                </div> --}}
            </div>
        </section>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    {{-- <!-- General JS Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script> --}}
    <script src="{{ asset('js/moment.min.js') }}"></script>
    {{-- <script src="{{ asset('js/stisla.js') }}"></script> --}}

    <!-- JS Libraies -->

    {{-- <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script> --}}

    <!-- Page Specific JS File -->
</body>

</html>