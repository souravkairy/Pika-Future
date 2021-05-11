@extends('Admin_panel/master')
@section('header')

<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title>Vicenza | Admin Dashboard </title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="{{asset('public/backEnd/assets/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
        <link href="{{asset('public/backEnd/assets/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
        <link href="{{asset('public/backEnd/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/backEnd/assets/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet" type="text/css"/>
        {{-- <link href="{{asset('public/backEnd/assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>	 --}}

        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="{{asset('public/backEnd/assets/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/backEnd/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>




        <script src="{{asset('public/backEnd/assets/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{asset('public/backEnd/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->

    </head>


            @endsection
