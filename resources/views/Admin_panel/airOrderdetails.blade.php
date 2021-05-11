@extends('Admin_panel/master')
@section('dashboard')
    <div class="page-inner">
        <div class="page-title">
            <h3>Merchant Details</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">All Merchant</a></li>
                    <li class="active">Details</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">

                <div class="col-md-8">
                    <div class="panel panel-dark">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Depreature From</th>
                                            <td>{{ $fetchData->d_from }}</td>
                                        </tr>
                                        <tr>
                                            <th>Depreature To</th>
                                            <td>{{ $fetchData->d_to }}</td>
                                        </tr>
                                        <tr>
                                            <th>passengers(No Of Adult)</th>
                                            <td>{{ $fetchData->no_of_adult }}</td>
                                        </tr>
                                        <tr>
                                            <th>passengers(No Of Child)</th>
                                            <td>{{ $fetchData->no_of_child }}</td>
                                        </tr>
                                        <tr>
                                            <th>passengers(No Of Infant)</th>
                                            <td>{{ $fetchData->no_of_infant }}</td>
                                        </tr>
                                        <tr>
                                            <th>Seat Type</th>
                                            <td>{{ $fetchData->seat_type }}</td>
                                        </tr>
                                        <?php if ($fetchData->trip_type == 1) { ?>
                                        <tr>
                                            <th>Trip Type</th>
                                            <td>One Way</td>
                                        </tr>
                                        <?php } else { ?>
                                        <tr>
                                            <th>Trip Type</th>
                                            <td>One Way</td>
                                        </tr>
                                        <?php } ?>

                                        <tr>
                                            <th>Departing Date</th>
                                            <td>{{ $fetchData->departing_date }}</td>
                                        </tr>
                                        <?php if ($fetchData->trip_type == 2) { ?>
                                        <tr>
                                            <th>Returning Date</th>
                                            <td>{{ $fetchData->returning_date }}</td>
                                        </tr>
                                        <?php } else {} ?>
                                        <tr>
                                            <th>passengers Name</th>
                                            <td>{{ $fetchData->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile Number</th>
                                            <td>{{ $fetchData->m_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $fetchData->email }}</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel panel-dark">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <label for="exampleInputPassword1">Recharge Statement</label>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Information</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>Store Name</th>
                                            <td>{{ $m_info->store_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Store Mobile Number</th>
                                            <td>{{ $m_info->b_mb_number }}</td>
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
