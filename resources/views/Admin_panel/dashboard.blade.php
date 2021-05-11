@extends('Admin_panel/master')
@section('dashboard')
@php

    $date = date('y-m-d');
    $total_merchant = DB::table('merchant')->get();
    $todays_order = DB::table('money_order')->where('order_date',$date)->get();
    $total_order = DB::table('money_order')->get();
@endphp
<div class="page-inner">
    <div class="page-title">
        <h3>Admin Dashboard</h3>
        {{-- <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div> --}}
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-4 col-md-8">
                <div class="panel info-box panel-dark">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter"><?php echo sizeof($total_merchant)?></p>
                            <span class="info-box-title">Total Merchant</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="icon-users"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="panel info-box panel-dark">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter"><?php echo sizeof($todays_order)?></p>
                            <span class="info-box-title">Todays Order</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="icon-eye"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="panel info-box panel-dark">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p><span class="counter"><?php echo sizeof($total_order)?></span></p>
                            <span class="info-box-title">Total Order</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="icon-basket"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-dark">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">47,500</p><span>$</span>
                            <span class="info-box-title">New emails recieved</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div><!-- Row -->
        {{-- <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="panel panel-dark">
                    <div class="panel-heading">
                        <h4 class="panel-title">Project Stats</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive project-stats">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Project</th>
                                       <th>Status</th>
                                       <th>Manager</th>
                                       <th>Progress</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <th scope="row">452</th>
                                       <td>Mailbox Template</td>
                                       <td><span class="label label-info">Pending</span></td>
                                       <td>David Green</td>
                                       <td>
                                       <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">327</th>
                                       <td>Wordpress Theme</td>
                                       <td><span class="label label-primary">In Progress</span></td>
                                       <td>Sandra Smith</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">226</th>
                                       <td>Modern Admin Template</td>
                                       <td><span class="label label-success">Finished</span></td>
                                       <td>Chritopher Palmer</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">178</th>
                                       <td>eCommerce template</td>
                                       <td><span class="label label-danger">Canceled</span></td>
                                       <td>Amily Lee</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <th scope="row">157</th>
                                       <td>Website PSD</td>
                                       <td><span class="label label-info">Testing</span></td>
                                       <td>Nick Doe</td>
                                       <td>
                                           <div class="progress progress-sm">
                                               <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                               </div>
                                           </div>
                                       </td>
                                   </tr>

                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-dark" style="height: 100%;">
                    <div class="panel-heading">
                        <h4 class="panel-title">Server Load</h4>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Expand/Collapse" class="panel-collapse"><i class="icon-arrow-down"></i></a>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="server-load">
                            <div class="server-stat">
                                <span>Total Usage</span>
                                <p>67GB</p>
                            </div>
                            <div class="server-stat">
                                <span>Total Space</span>
                                <p>320GB</p>
                            </div>
                            <div class="server-stat">
                                <span>CPU</span>
                                <p>57%</p>
                            </div>
                        </div>
                        <div id="flotchart2"></div>
                    </div>
                </div>
            </div>

        </div> --}}
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">2021 &copy; Vicenza Service</p>
    </div>
</div><!-- Page Inner -->
</main><!-- Page Content -->
<nav class="cd-nav-container" id="cd-nav">
<header>
    <h3>Navigation</h3>
    <a href="#0" class="cd-close-nav">Close</a>
</header>
<ul class="cd-nav list-unstyled">
    <li class="cd-selected" data-menu="index">
        <a href="javsacript:void(0);">
            <span>
                <i class="glyphicon glyphicon-home"></i>
            </span>
            <p>Dashboard</p>
        </a>
    </li>
    <li data-menu="profile">
        <a href="javsacript:void(0);">
            <span>
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <p>Profile</p>
        </a>
    </li>
    <li data-menu="inbox">
        <a href="javsacript:void(0);">
            <span>
                <i class="glyphicon glyphicon-envelope"></i>
            </span>
            <p>Mailbox</p>
        </a>
    </li>
    <li data-menu="#">
        <a href="javsacript:void(0);">
            <span>
                <i class="glyphicon glyphicon-tasks"></i>
            </span>
            <p>Tasks</p>
        </a>
    </li>
    <li data-menu="#">
        <a href="javsacript:void(0);">
            <span>
                <i class="glyphicon glyphicon-cog"></i>
            </span>
            <p>Settings</p>
        </a>
    </li>
    <li data-menu="calendar">
        <a href="javsacript:void(0);">
            <span>
                <i class="glyphicon glyphicon-calendar"></i>
            </span>
            <p>Calendar</p>
        </a>
    </li>
</ul>
</nav>
@endsection
