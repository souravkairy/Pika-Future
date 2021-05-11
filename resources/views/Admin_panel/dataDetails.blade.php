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
                                        <th>Store Name</th>
                                        <td>{{$fetchData->store_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>First Name</th>
                                        <td>{{$fetchData->first_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td>{{$fetchData->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Personal Number</th>
                                        <td>{{$fetchData->p_mb_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Business Number</th>
                                        <td>{{$fetchData->b_mb_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date Of Birth</th>
                                        <td>{{$fetchData->d_of_birth}}</td>
                                    </tr>
                                    <tr>
                                        <th>Store License Number</th>
                                        <td>{{$fetchData->s_l_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$fetchData->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>PEC Mail</th>
                                        <td>{{$fetchData->pec_mail}}</td>
                                    </tr>
                                    <tr>
                                        <th>Store Address</th>
                                        <td>{{$fetchData->store_address}}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{$fetchData->city}}</td>
                                    </tr>
                                    <tr>
                                        <th>Post Code</th>
                                        <td>{{$fetchData->p_code}}</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>{{$fetchData->country}}</td>
                                    </tr>
                                    <tr>
                                        <th>Identity Card Number</th>
                                        <td>{{$fetchData->i_card_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Remaining Balance</th>
                                        <td>{{$fetchData->remaining_balance}}</td>
                                    </tr>
                                    <tr>
                                        <th>Issue_date</th>
                                        <td>{{$fetchData->issue_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$fetchData->status}}</td>
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
                <form method="post" action="{{url('rechargeMerchant')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Recharge Amount</label>
                        <input type="hidden" name="id" value="{{$fetchData->id}}">
                        <input type="number" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter Amount" name="n_r_amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Recharge</button>
                </form>
                    </div>
                </div>

                <div class="panel panel-dark">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                <label for="exampleInputPassword1">Recharge Statement</label>
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>
                                @foreach ($r_details as $row)
                                <tbody>
                                    <tr>
                                        <td>{{$row->recharge_amount}}</td>
                                        <td>{{$row->r_date}}</td>
                                    </tr>

                                </tbody>
                                @endforeach


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
