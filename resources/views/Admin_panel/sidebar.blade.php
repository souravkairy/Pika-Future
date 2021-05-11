@extends('Admin_panel/master')
@section('sidebar')

<body class="page-header-fixed">
    <div class="overlay"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
        <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
        <div class="slimscroll">
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar2.png')}}" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar3.png')}}" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar4.png')}}" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar5.png')}}" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar2.png')}}" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar3.png')}}" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar4.png')}}" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="{{asset('public/backEnd/assets/images/avatar5.png')}}" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
        </div>
    </nav>
    {{-- <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
        <div class="slimscroll chat">
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="{{asset('public/backEnd/assets/images/avatar2.png')}}" alt="">
                </div>
                <div class="chat-message">
                    Hi There!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Hi! How are you?
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="{{asset('public/backEnd/assets/images/avatar2.png')}}" alt="">
                </div>
                <div class="chat-message">
                    Fine! do you like my project?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Yes, It's clean and creative, good job!
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="{{asset('public/backEnd/assets/images/avatar2.png')}}" alt="">
                </div>
                <div class="chat-message">
                    Thanks, I tried!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Good luck with your sales!
                </div>
            </div>
        </div>
        <div class="chat-write">
            <form class="form-horizontal" action="javascript:void(0);">
                <input type="text" class="form-control" placeholder="Say something">
            </form>
        </div>
    </nav> --}}
    <div class="menu-wrap">
        <nav class="profile-menu">
            <div class="profile"><img src="{{asset('public/backEnd/assets/images/profile-menu-image.png')}}" width="60" alt="David Green"/><span>David Green</span></div>
            <div class="profile-menu-list">
                <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="index.html" class="logo-text"><span>HK POINT</span></a>
                </div><!-- Logo Box -->
                {{-- <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div> --}}
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </li>
                            <li>
                                <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <i class="fa fa-cogs"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Header
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Sidebar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Horizontal bar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Toggle Sidebar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Compact Menu
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Hover Menu
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Boxed Layout
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            {{-- <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-danger pull-right">4</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 4 new  messages !</p></li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="{{asset('public/backEnd/assets/images/avatar2.png')}}" alt=""></div>
                                                    <p class="msg-name">Sandra Smith</p>
                                                    <p class="msg-text">Hey ! I'm working on your project</p>
                                                    <p class="msg-time">3 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="{{asset('public/backEnd/assets/images/avatar4.png')}}" alt=""></div>
                                                    <p class="msg-name">Amily Lee</p>
                                                    <p class="msg-text">Hi David !</p>
                                                    <p class="msg-time">8 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="{{asset('public/backEnd/assets/images/avatar3.png')}}" alt=""></div>
                                                    <p class="msg-name">Christopher Palmer</p>
                                                    <p class="msg-text">See you soon !</p>
                                                    <p class="msg-time">56 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="{{asset('public/backEnd/assets/images/avatar5.png')}}" alt=""></div>
                                                    <p class="msg-name">Nick Doe</p>
                                                    <p class="msg-text">Nice to meet you</p>
                                                    <p class="msg-time">2 hours ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="{{asset('public/backEnd/assets/images/avatar2.png')}}" alt=""></div>
                                                    <p class="msg-name">Sandra Smith</p>
                                                    <p class="msg-text">Hey ! I'm working on your project</p>
                                                    <p class="msg-time">5 hours ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="{{asset('public/backEnd/assets/images/avatar4.png')}}" alt=""></div>
                                                    <p class="msg-name">Amily Lee</p>
                                                    <p class="msg-text">Hi David !</p>
                                                    <p class="msg-time">9 hours ago</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                    <li class="dropdown-menu-list slimscroll tasks">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                    <p class="task-details">New user registered.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                    <p class="task-details">Database error.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                    <p class="task-details">Reached 24k likes</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                </ul>
                            </li> --}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <span class="user-name">{{Session::get('user_name')}}<i class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="{{asset('public/backEnd/assets/images/avatar1.png')}}" width="40" height="40" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="{{url('Log-Out')}}"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="{{url('Log-Out')}}" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li> --}}

                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
  <?php
        $id = Session::get('id');
        $match = DB::table('admin_user')->where('id',$id)->first();
    ?>
<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">

        <ul class="menu accordion-menu">
            <li class="active"><a href="{{url('dashboard')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
        <?php if ($match->mo == 1) { ?>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-euro"></span><p>Money Order</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('moneyOrder')}}">Today's Order</a></li>
                    <li><a href="{{url('allMoneyOrder')}}">All Order</a></li>
                </ul>
            </li>
        <?php }else{
        } ?>
        <?php if ($match->po == 1) { ?>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>Parcel Order</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('parcelOrder')}}">Today's Order</a></li>
                    <li><a href="{{url('allParcelOrder')}}">All Order</a></li>
                </ul>
            </li>
        <?php }else{
        } ?>
        <?php if ($match->ato == 1) { ?>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-plane"></span><p>Air Ticket Order</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{url('airTickerOrder')}}">Today's Order</a></li>
                    <li><a href="{{url('allAirTickerOrder')}}">All Order</a></li>
                </ul>
            </li>
        <?php }else{
        } ?>
        <?php if ($match->anm == 1) { ?>
            <li><a href="{{url('Add-Merchant')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Add New Merchant</p></a></li>
        <?php }else{
        } ?>
        <?php if ($match->am == 1) { ?>
            <li><a href="{{url('All-Merchant')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>All-Merchant</p></a></li>
        <?php }else{
        } ?>
        <?php if ($match->aa == 1) { ?>
            <li><a href="{{url('Add-Admin')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Add Admin</p></a></li>
        <?php }else{
        } ?>
        <?php if ($match->crs == 1) { ?>
            <li><a href="{{url('rateSetting')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-euro"></span><p>Currency Rate Setting</p></a></li>
        <?php }else{
        } ?>






            {{-- <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>Mailbox</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="inbox-alt.html">Inbox Alt</a></li>
                    <li><a href="message-view.html">View Message</a></li>
                    <li><a href="message-view-alt.html">View Message Alt</a></li>
                    <li><a href="compose.html">Compose</a></li>
                    <li><a href="compose-alt.html">Compose Alt</a></li>
                </ul>
            </li> --}}

            <!--
           <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-briefcase"></span><p>UI Kits</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="ui-alerts.html">Alerts</a></li>
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-icons.html">Icons</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-notifications.html">Notifications</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>
                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                    <li><a href="ui-modals.html">Modals</a></li>
                    <li><a href="ui-panels.html">Panels</a></li>
                    <li><a href="ui-progress.html">Progress Bars</a></li>
                    <li><a href="ui-sliders.html">Sliders</a></li>
                    <li><a href="ui-nestable.html">Nestable</a></li>
                    <li><a href="ui-tree-view.html">Tree View</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Forms</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="form-elements.html">Form Elements</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-upload.html">File Upload</a></li>
                    <li><a href="form-image-crop.html">Image Crop</a></li>
                    <li><a href="form-image-zoom.html">Image Zoom</a></li>
                    <li><a href="form-select2.html">Select2</a></li>
                    <li><a href="form-x-editable.html">X-editable</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-stats"></span><p>Charts</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                    <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                    <li><a href="charts-morris.html">Morris</a></li>
                    <li><a href="charts-flotchart.html">Flotchart</a></li>
                    <li><a href="charts-chartjs.html">Chart.js</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-log-in"></span><p>Login</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="login.html">Login Form</a></li>
                    <li><a href="login-alt.html">Login Alt</a></li>
                    <li><a href="register.html">Register Form</a></li>
                    <li><a href="register-alt.html">Register Alt</a></li>
                    <li><a href="forgot.html">Forgot Password</a></li>
                    <li><a href="lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-map-marker"></span><p>Maps</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="maps-google.html">Google Maps</a></li>
                    <li><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-gift"></span><p>Extra</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="500.html">500 Page</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="todo.html">Todo</a></li>
                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="search.html">Search Results</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-flash"></span><p>Levels</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Level 3.1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Level 2.2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Level 1.2</a></li>
                </ul>
            </li> -->
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
@endsection
