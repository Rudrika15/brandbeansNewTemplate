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
    <link rel="stylesheet" href="{{asset('asset/css/style.min.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('asset/css/waves.min.css')}}">

</head>

<style>
    body {
        font-size: 18px !important;
    }
</style>

<body>
    <div id="single-wrapper">
        <div class="w-50">
            <form action="{{ route('otp.generate') }}" method="post" class="frm-single">
                @csrf

                <div class="inside">
                    <div class="frm-title">
                        <img src="{{asset('asset/img/logo.png')}}" alt="" style="height: 25%; width:25%;">
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><i class="fa fa-warning ico"></i> {{ $message }}</strong>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Oh snap!</strong> {{__('There were some problems with your input')}}.
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- /.title -->
                    <div class="frm-title">SignUp/SignIn</div>
                    <!-- /.frm-title -->
                    <div class="frm-input" style="width: 90%;">
                        <input type="text" class="frm-inp @error('mobileno') is-invalid @enderror" value="{{ old('mobileno') }}" id="mobileno" name="mobileno" required autocomplete="mobileno" autofocus placeholder="Enter Your Registered Mobile Number"><i class="fa fa-phone frm-ico"></i>
                        @error('mobileno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="frm-submit">
                                {{ __('Generate OTP') }}
                            </button>

                            <!-- @if (Route::has('login'))
                            @endif -->
                            <a class="a-link" href="{{route('login')}}">
                                {{ __('Login With password') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.clearfix -->

                    <!-- /.row -->
                    <!-- <a href="{{ route('otp.login') }}" class="a-link"><i class="fa fa-key"></i>New to Brandbeans? Register.</a> -->
                    <a href="/">
                        <div class="frm-footer">Brandbeans © <script>
                                document.write(new Date().getFullYear())
                            </script>.</div>
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
    <script src="{{asset('asset/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('asset/scripts/modernizr.min.js')}}"></script>
    <script src="{{asset('asset/scripts/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/scripts/nprogress.js')}}"></script>
    <script src="{{asset('asset/scripts/waves.min.js')}}"></script>

    <script src="{{asset('asset/scripts/main.min.js')}}"></script>
</body>

</html>