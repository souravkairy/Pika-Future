@php
$m_id = Session::get('id');

$r_stat = DB::table('recharge_statement')->where('m_id',$m_id)->get();
$all_stat = DB::table('merchant')->where('id',$m_id)->first();
$date = date('y-m-d');
$todays_order = DB::table('money_order')->where('m_id',$m_id)->where('order_date',$date)->get();
$total_order = DB::table('money_order')->where('m_id',$m_id)->get();
$i = 1;

$rate = DB::table('euro_rate')->first();

@endphp

@extends('Admin_panel/master')
@section('dashboard')

<div class="page-inner">

    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-dark">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">{{$all_stat->remaining_balance}}€</p>
                            <span class="info-box-title">Remaining Balance</span>
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
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-dark">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter"><?php echo sizeof($todays_order)?></p>
                            <span class="info-box-title">Today's Order </span>
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-dark">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">{{$all_stat->total_balance}}€</p>
                            <span class="info-box-title">Total Recharge</span>
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
            </div>
        </div><!-- Row -->
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="panel panel-dark">
                    <div class="panel-heading">
                        <h4 class="panel-title">Recharge Statement</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive project-stats">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Amount</th>
                                       <th>Date & Time</th>
                                       <th>Status</th>

                                   </tr>
                               </thead>
                               @foreach ($r_stat as $row)
                               <tbody>
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$row->recharge_amount}}</td>
                                    <td>{{$row->r_date}}</td>
                                    <td><span class="label label-info">Done</span></td>
                                </tr>
                            </tbody>@php
                                $i++;
                            @endphp
                               @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-dark">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Today's Rate</label>

                            <h4>1 Euro = {{ $rate->euroTotaka }} Taka BDT </h4>
{{--
                            <h2>
                                {{ session::get('amm') }} TAKA =
                                {{ session::get('final') }} EURO
                                <?php
                                Session::forget('amm');
                                Session::forget('final');
                                ?>
                            </h2> --}}
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Enter Your Amoount In TAKA </label>
                            <input type="hidden" class="form-control" name="takaRate" value="{{ $rate->euroTotaka }}">
                            <input type="text" class="form-control" name="taka">
                        </div>
                        <div class="form-group">
                            <button style="width: 100%;" type="submit" class="btn btn-success">Calculate</button>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
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
