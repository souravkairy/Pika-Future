@yield('header')
<main class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                        <a href="index.html" class="logo-name text-lg text-center">Modern</a>
                        <p class="text-center m-t-md">Enter your e-mail address below to reset your password</p>
                        <form class="m-t-md">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            <a href="login.html" class="btn btn-default btn-block m-t-md">Back</a>
                        </form>
                        <p class="text-center m-t-xs text-sm">2015 &copy; Modern by Steelcoders.</p>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
</main><!-- Page Content -->


@yield('footer')
