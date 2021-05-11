@extends('Merchant_panel/master')
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

                <div class="col-md-6">
                    <div class="panel panel-dark">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Sender Information</h4>
                        </div>
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
                                            <th>Name</th>
                                            <td>{{$fetchData->s_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile Number</th>
                                            <td>{{$fetchData->s_m_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email Address</th>
                                            <td>{{$fetchData->s_email_address }}</td>
                                        </tr>
                                        <tr>
                                            <th>House Number</th>
                                            <td>{{$fetchData->s_house_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Post Code</th>
                                            <td>{{$fetchData->s_post_code }}</td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>{{$fetchData->s_city }}</td>
                                        </tr>
                                        <tr>
                                            <th>Country</th>
                                            <td>{{$fetchData->s_country }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pick Up Date</th>
                                            <td>{{$fetchData->s_p_up_delivery }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pick Up Time</th>
                                            <td>{{$fetchData->s_p_up_time }}</td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-dark">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Receiver Information</h4>
                        </div>
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
                                            <th>Name</th>
                                            <td>{{$fetchData->r_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile Number</th>
                                            <td>{{$fetchData->r_m_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email Address</th>
                                            <td>{{$fetchData->r_email_address }}</td>
                                        </tr>
                                        <tr>
                                            <th>House Number</th>
                                            <td>{{$fetchData->r_house_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Post Code</th>
                                            <td>{{$fetchData->r_post_code }}</td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>{{$fetchData->r_city }}</td>
                                        </tr>
                                        <tr>
                                            <th>Country</th>
                                            <td>{{$fetchData->r_country }}</td>
                                        </tr>
                                        <tr>
                                            <th>Comment</th>
                                            <td>{{$fetchData->comment }}</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->

        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2021 &copy; Vicenza Service.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
