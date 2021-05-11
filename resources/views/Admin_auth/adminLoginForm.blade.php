@yield('header')
<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    
                    <div class="col-md-3 center">
                        @if ($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color: black">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                            
                      @endif
                    
                        <div class="login-box">
                            <img class="center" style="width: 180px" src="{{asset('public/backEnd/assets/images/logowp.png')}}" alt="">
                            <p class="text-center m-t-md">Please login into your account.</p>
                            <form class="m-t-md" action="{{url('check_admin')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User Name" name="user_name" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                            </form>
                            <a href="{{url('forgotPass')}}" class="display-block text-center m-t-md text-m">Forgot Password?</a>
                            <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                            <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
                          
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
@yield('footer')