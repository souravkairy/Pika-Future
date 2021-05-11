@extends('Admin_panel/master')
@section('footer')

<div class="cd-overlay"></div>


        <!-- Javascripts -->

        <script src="{{asset('public/backEnd/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script>
            $(document).ready( function () {
            $('#example3').DataTable();
        } );
        </script>

        <script src="{{asset('public/backEnd/assets/plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/offcanvasmenueffects/js/main.js')}}"></script>

        <script src="{{asset('public/backEnd/assets/plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/3d-bold-navigation/js/main.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/jquery-counterup/jquery.counterup.min.js')}}"></script>
        {{-- <script src="{{asset('public/backEnd/assets/plugins/toastr/toastr.min.js')}}"></script> --}}

        <script src="{{asset('public/backEnd/assets/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/metrojs/MetroJs.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/js/modern.min.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/js/pages/dashboard.js')}}"></script>



        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready( function () {
    $('#example3').DataTable();
} );
</script>

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
