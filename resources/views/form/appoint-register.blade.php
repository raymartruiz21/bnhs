<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS &mdash; Appointment</title>
    <link rel="shortcut icon" href="{{ asset('image/logo/bn.jpg') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <style>
        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* text-align: center; */
            min-height: 90vh;
        }

        .full .ui-state-default {
            color: red;
            border: 1px solid red;
        }

        .vacant .ui-state-default {
            color: green;
            border: .5px solid green;
        }

        .not .ui-state-default {
            color: gray;
            border: 1px solid gray;
        }

        .ui-datepicker-unselectable .ui-state-default {
            background: gray;
            color: black;
            border: none
        }
        .login {
            color: #3366cc;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div id="app">
        <section class="section">
            <div class="container mt-2 center-screen">
                <div class="row">
                    <div class="col-lg">
                        <p style="font-size: 20px" class="mt-5"><b><i>Dear user,</i></b></p>
                        <p style="font-size: 20px" class="mt-5">All of the information you provided will be secure and
                            restricted only to Balaogan National High School. We assure your information provided is protected. This form is for school-related businesses appointment purposes only.</p>
                        <p style="font-size: 20px" class="mt-4">This online services of the school aim to avoid the
                            crowd at the school premises observing the COVID-19 health protocols.</p>
                        <p style="font-size: 20px" class="mt-4"><b>Thank you</b></p>
                    </div>
                    <div class="col-lg">
                        <form action="{{ route('appoint.save') }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="card card-outline card-primary shadow-sm">
                                <div class="card-body pb-0">
                                    <h4 class="login"><b>Appointment Form</b></h4>
                                    <hr style="border-color: #3366cc;">
                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input type="text" class="form-control" name="fullname" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Contact no.</label>
                                            <input type="text" class="form-control" placeholder="Contact no."
                                                name="contact_no" required onkeypress="return numberOnly(event)"
                                                maxlength="11">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Date</label>
                                        <input class="form-control datepicker" name="set_date" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Purpose</label>
                                        <textarea class="form-control" data-height="80" name="purpose"
                                            required></textarea>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ route('auth.login') }}" class="btn btn-outline-warning btn-block"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Back</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-outline-primary  btn-block"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    {{-- loaction --}}
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/appoint.js') }}"></script>
</body>

</html>