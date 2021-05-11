@extends('Admin_panel/master')
@section('sidebar')


<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">

        <ul class="menu accordion-menu">
            <li class="active"><a href="{{url('merchant_dashboard')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>

            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-euro"></span><p>Send Money</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('sendMoney')}}">Send Money</a></li>
                    <li><a href="{{url('todaysTransections')}}">Today's Statement</a></li>
                    <li><a href="{{url('allTransections')}}">All Statement</a></li>
                </ul>
            </li>
            {{-- <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>Send Percel</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('percelDelivery')}}">Send Percel</a></li>
                    <li><a href="{{url('tPercelDelivery')}}">Today's Statement</a></li>
                    <li><a href="{{url('aPercelDelivery')}}">All Statement</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-plane"></span><p>Air Ticket Service</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('airTicketForm')}}">Air Ticker Booking</a></li>
                    <li><a href="{{url('tairTicket')}}">Today's Statement</a></li>
                    <li><a href="{{url('aairTicket')}}">All Statement</a></li>
                </ul>
            </li> --}}

        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
@endsection
