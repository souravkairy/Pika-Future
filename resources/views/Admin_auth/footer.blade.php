@extends('Admin_auth/adminLoginForm')
@section('footer')


        <!-- Javascripts -->
        <script src="{{asset('public/backEnd/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/js/modern.min.js')}}"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
                var type="{{Session::get('alert-type','info')}}"
        
                switch(type){
                    case 'info':
                         toastr.info("{{ Session::get('message') }}");
                         break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                     case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>
        
    </body>
</html>
@endsection