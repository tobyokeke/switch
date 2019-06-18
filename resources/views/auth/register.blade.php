<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Register  | SWITCH</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('bower_components/Ionicons/css/ionicons.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .error{
            color:darkred;
            text-align: center;
        }

        .btn-primary{
            background-color:#b6d44e !important;
            border:none;
        }
        .login-page{
            background-color: black;
        }
    </style>
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <a href="{{url('index2.html')}}">
            <img src="{{url('img/logo.png')}}">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Register an account</p>

        <form action="{{url('register')}}" method="post">

            @csrf


            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name')}}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if($errors->has('name'))
                    <span class="error col-md-12">{{$errors->first('name')}}</span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{old('phone')}}">
                <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                @if($errors->has('phone'))
                    <span class="error col-md-12">{{$errors->first('phone')}}</span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if($errors->has('email'))
                    <span class="error col-md-12">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if($errors->has('password'))
                    <span class="error col-md-12">{{$errors->first('password')}}</span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="{{url('login')}}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-sign-in"></i>
                Sign In</a>
        </div>
        <!-- /.social-auth-links -->

        {{--<a href="#">I forgot my password</a><br>--}}


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{url('')}}">
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>




</body>
</html>
