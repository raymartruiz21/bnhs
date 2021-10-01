<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS - Welcome Portal</title>
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
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">


    <!-- Template CSS -->
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
    </style>
</head>

<body class="hold-transition login-page">

    <div id="app">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-8 offset-xl-2 center-screen">
                        {{-- <div class="login-brand">
                                PNHS
                            </div> --}}

                        <div class="card card-outline card-primary">
                            <div class="card-body p-5">
                                <h5>BNHS ONLINE PRE-ENROLLMENT (Pre-registration)</h5><hr>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-5 text-center">
                                            <img src="{{ asset('image/logo/bn.jpg') }}" class="img-fluid rounded ">
                                        </div>
                                        <div class="col-lg-7"><br>
                                            <p> <i>Dear <b>Parent/Guardian and Student</b>,</i><br>
                                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Welcome to our School new Admission Portal. Please fill in the form after this welcome message to apply for the school admission. Pleace complete and be accurate about the information you provide on the perspective field to avoid inconvinience. Plese read carefully and understand the form before you click the submit. <br> <b>Thank you</b>.

                                            </p>
                                            <a href="{{ route('auth.login') }}" class="btn btn-outline-warning float-left mt-2"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Back</a>
                                            <a href="{{ route('form') }}" class="btn btn-primary float-right mt-2"><i class="fas fa-check"></i>&nbsp;&nbsp;Proceed</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- <!-- General JS Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    <!-- JS Libraies -->

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