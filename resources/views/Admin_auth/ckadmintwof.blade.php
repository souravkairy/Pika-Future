@php
    $twofauth  =  Session::get('twofauth');
    $user_name  =  Session::get('user_name');
    $user_password  =  Session::get('user_password');
    $id  =  Session::get('id');
@endphp
@yield('header')


<main class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                        <a href="index.html" class="logo-name text-lg text-center">HK Point</a>
                        <p class="text-center m-t-md">Enter 6 Digit Code which one send in your registered email id</p>
                        <form class="m-t-md" method="POST" action="{{url('ckatwofauth')}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="twofauth" value="{{$twofauth}}">
                                <input type="hidden" name="user_name" value="{{$user_name}}">
                                <input type="hidden" name="user_password" value="{{$user_password}}">
                                <input type="hidden" name="id" value="{{$id}}">
                                <input type="text" class="form-control" placeholder="6 Digit Code" required name="cktwofauth">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            <a href="login.html" class="btn btn-default btn-block m-t-md">Back</a>
                        </form>
                        <p class="text-center m-t-xs text-sm">2021 &copy; by HK-POINT.</p>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
</main><!-- Page Content -->


@yield('footer')
