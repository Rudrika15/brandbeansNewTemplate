<!DOCTYPE html>
<html lang="en" id="single-wrapper">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.ico') }}">

    <title>Brandbeans</title>
    <link rel="stylesheet" href="{{ asset('asset/css/style.min.css') }}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('asset/css/waves.min.css') }}">

</head>

<style>
    body {
        font-size: 18px !important;
    }
</style>

<body>
    <div id="single-wrapper">
        <div class="w-50">
            <form action="{{ route('login') }}" method="post" class="frm-single">

                @csrf

                <div class="inside">
                    <div class="frm-title">
                        <img src="{{ asset('asset/img/logo.png') }}" alt="" style="height: 25%; width:25%;">
                    </div>
                    <!-- /.title -->
                    <div class="frm-title">Login</div>
                    <!-- /.frm-title -->
                    <div class="frm-input" style="width: 90%;">
                        <input type="text" placeholder="Email" class="frm-inp @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email"><i class="fa fa-user frm-ico"></i>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- /.frm-input -->
                    <div class="frm-input" style="width: 90%;"><input type="password" placeholder="Password" class="frm-inp @error('password') is-invalid @enderror" id="password" name="password"><i class="fa fa-lock frm-ico"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div style="display: flex; justify-content: end;">
                        <input type="checkbox" id="checkbox"><small class="text-primary">Show password</small>
                    </div>

                    <!-- <div class="frm-input">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger text-white" class="reload" id="reload">
                                &#x21bb;
                            </button>
                        </div>
                    </div>
                    <div class="frm-input">
                        <input id="captcha" style="width: 90%;" type="text" class="frm-inp" placeholder="Enter Captcha" name="captcha">
                        @error('captcha')
    <span class="invalid-feedback" role="alert">
                                                                                                                                                <strong>{{ $message }}</strong>
                                                                                                                                            </span>
@enderror
                    </div> -->
                    <!-- /.frm-input -->
                    <div class="clearfix margin-bottom-20 margin-top-20">
                        <div class="pull-left">
                            <div class=""><a href="{{ route('otp.login') }}" class="a-link"><i class="bi bi-grip-horizontal"></i>login with otp</a></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.pull-left -->
                        @if (Route::has('password.request'))
                            <div class="pull-right"><a href="{{ route('password.request') }}" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
                        @endif
                        <!-- /.pull-right -->
                    </div><br><br>
                    <!-- /.clearfix -->
                    <button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>

                    <!-- /.row -->
                    <!-- <a href="{{ route('register') }}" class="a-link"><i class="fa fa-key"></i>New to Brandbeans? Register.</a> -->
                    <a href="/">
                        <div class="frm-footer">Brandbeans ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>.
                        </div>
                    </a>
                    <!-- /.footer -->
                </div>
                <!-- .inside -->
            </form>
            <!-- /.frm-single -->
        </div>
    </div>
    <!--/#single-wrapper -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="assets/script/html5shiv.min.js"></script>
  <script src="assets/script/respond.min.js"></script>
 <![endif]-->
    <!--
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('asset/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/scripts/modernizr.min.js') }}"></script>
    <script src="{{ asset('asset/scripts/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/scripts/nprogress.js') }}"></script>
    <script src="{{ asset('asset/scripts/waves.min.js') }}"></script>

    <script src="{{ asset('asset/scripts/main.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#checkbox').click(function() {
                // alert($(this).is(':checked'));
                $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
            });
        });
    </script>
</body>

</html>
