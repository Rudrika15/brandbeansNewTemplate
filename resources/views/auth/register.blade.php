<!DOCTYPE html>
<html lang="en" id="single-wrapper">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brandbeans</title>
    <link rel="stylesheet" href="{{ asset('asset/css/style.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.ico') }}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('asset/css/waves.min.css') }}">

</head>


<body>
    <div id="single-wrapper">
        <div class="w-50">


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
            <form action="{{ route('register') }}" method="post" class="frm-single">
                @csrf

                <div class="inside">
                    <div class="frm-title">
                        <img src="{{asset('asset/img/logo.png')}}" alt="" style="height: 22%; width:22%;">
                    </div>
                    <!-- /.title -->
                    <div class="frm-title"></div>
                    <!-- /.frm-title -->
                    <div class="frm-input" style="width: 90%;"><input type="name" placeholder="Name" class="frm-inp  @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name"><i class="fa fa-user frm-ico"></i>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="frm-input" style="width: 90%;"><input type="email" placeholder="Email" class="frm-inp @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email"><i class="fa fa-envelope frm-ico"></i>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="frm-input" style="width: 90%;"><input type="text" placeholder="Create Your Unique Username" class="frm-inp  @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" name="username"><i class="fa fa-user-secret frm-ico"></i>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <?php
                    session_start();
                    if (isset($_SESSION['mobileno'])) {
                        $mobileno = $_SESSION['mobileno'];
                    ?>

                        <div class="frm-input" style="width: 90%;"><input type="text" placeholder="Enter your Phone number" readonly class="frm-inp  @error('mobileno') is-invalid @enderror" value="{{$mobileno}}" id="mobileno" name="mobileno"><i class="fa fa-phone frm-ico"></i>
                            @error('mobileno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    <?php
                    } else {
                        $mobileno = "";
                    ?>
                        <div class="frm-input" style="width: 90%;"><input type="text" placeholder="Enter your Phone number" class="frm-inp  @error('mobileno') is-invalid @enderror" value="{{$mobileno}}" id="mobileno" name="mobileno"><i class="fa fa-phone frm-ico"></i>
                            @error('mobileno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    <?php
                    }
                    ?>

                    <div class="frm-input" style="width: 90%;"><input type="password" placeholder="Password" class="frm-inp  @error('password') is-invalid @enderror" id="password" name="password"><i class="fa fa-lock frm-ico"></i>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="frm-input" style="width: 90%;"><input type="password" placeholder="Confirm Password" class="frm-inp" id="password_confirmation" name="confirm-password"><i class="fa fa-lock frm-ico"></i></div>

                    <div class="row">
                        <div class="col-md-12">
                            <label><input type="radio" class="" id="" name="type" value="Individual">Individual</label>
                            <label><input type="radio" class="" id="" name="type" value="Business">Business</label>
                        </div>
                    </div>

                    <br>
                    <div class="frm-input Business box" style="display: none;">
                        <select name="category" id="category" class="frm-inp">
                            <option selected disabled>Select Category</option>
                            @foreach ($data as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                            <option value="other">Other</option>
                        </select><i class="fa fa-outdent frm-ico"></i>
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="frm-input" id="other" style="display: none;">
                        <input type="text" style="width: 90%;" placeholder="Add Other Category" name="categoryname" class="frm-inp"><i class="fa fa-outdent frm-ico"></i>
                    </div>

                    <div class="frm-input" style="width: 90%;"><input type="text" placeholder="Do you have Refer Code??" class="frm-inp" id="refer" name="refer"><i class="fa fa-user-plus frm-ico"></i></div>



                    <!-- /.clearfix -->
                    <button type="submit" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>

                    <!-- /.row -->
                    <!-- <a href="{{ route('otp.login') }}" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a><br> -->
                    <a href="/" class="a-link"><i class="fa fa-sign-in"></i>Back To Home</a>

                    <a href="/">
                        <div class="frm-footer">Brandbeans © <script>
                                document.write(new Date().getFullYear())
                            </script>.</div>
                    </a>
                    <!-- /.footer -->
                </div>
                <!-- .inside -->
            </form>
        </div>
    </div>
    <!-- /.frm-single -->
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

    <script>
        $(document).ready(function() {
            $('#category').on('change', function() {
                if (this.value == 'other') {
                    $("#other").show();
                } else {
                    $("#other").hide();
                }
            });
        });
    </script>

    <!-- user type hide and show code -->
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>

    <!-- <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script> -->
</body>

</html>