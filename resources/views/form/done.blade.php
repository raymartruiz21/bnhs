<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS - Pre-enrollment</title>
    <link rel="shortcut icon" href="{{ asset('image/logo/bn.jpg') }}">
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
        .address{
            color: #0066cc;
            font-size: 20px;
        }
        .hr {
            border-color: #0066cc;
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
                            <h2>Enrollment was successful</h2>
                            <hr class="hr">
                            <br><br>
                            <h4>Enrollment No: <u><b style="color: #ff1a1a;">{{ $data }}</b></u></h4>
                            <br>
                            <h5>
                                <b><i style="color: red;">*</i> Please save or take picture of the Enrollment No.</b>
                                <p>For more details, contact us. </p>
                            </h5>
                            <br>
                            <h5>
                                <i class="fas fa-phone address"></i> &nbsp;&nbsp;09918742564 | <i class="fa fa-at address"></i>&nbsp;&nbsp;
                                302016@deped.gov.ph
                                <br><i class="fas fa-map-marked-alt address"></i>&nbsp;&nbsp; Balaugan, Bula, Camarines Sur
                            </h5>
                            <br><br><hr class="hr">
                            <a href="{{ route('form') }}" class="btn btn-outline-success btn-block mt-2"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Back to Enrollment Form</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
</body>

</html>