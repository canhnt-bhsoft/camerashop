<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('public/login_src/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/login_src/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-90 p-b-30">
                <form class="login100-form validate-form" action="{{URL::to('/user-login-checkout')}}" method="POST">
                    @csrf
                    <span class="login100-form-title p-b-40">
                        Đăng nhập
                    </span>
                    @if(session()->has('message'))
                        <a href="javascript:window.location.reload();"><div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div></a>
                    @elseif(session()->has('errmsg'))
                        <a href="javascript:window.location.reload();"><div class="alert alert-danger">
                            {{ session()->get('errmsg') }}
                        </div></a>
                    @endif
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Chưa nhập email">
                        <input class="input100" type="email" name="email_account" placeholder="Nhập email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Chưa nhập mật khẩu">
                        <span class="btn-show-pass">
                            <i class="fa fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password_account" placeholder="Mật khẩu">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Đăng nhập
                        </button>
                    </div>
                    <div class="text-center"><a href="{{url('/')}}">Về trang chủ</a></div>
                    
                    {{-- <div style="margin-top: 20px">
                        <a href="#" class="btn-login-with bg1 m-b-10">
                            <i class="fa fa-facebook-official"></i>
                            Đăng nhập bằng Facebook
                        </a>
                    </div> --}}
                    <div class="flex-col-c p-t-224">
                        <span class="txt2 p-b-10">
                            Chưa có tài khoản?
                        </span>

                        <a href="{{url('signup-checkout')}}" class="txt3 bo1 hov1">
                            Đăng kí ngay
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    
<!--===============================================================================================-->
    <script src="{{asset('public/login_src/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login_src/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login_src/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('public/login_src/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login_src/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login_src/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('public/login_src/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login_src/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('public/login_src/js/main.js')}}"></script>

</body>
</html>