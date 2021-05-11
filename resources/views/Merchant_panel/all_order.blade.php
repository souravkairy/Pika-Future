
@extends('Merchant_panel/master')
@section('dashboard')

@php
    $id = Session::get('id');
    $date = date('y-m-d');
    $fetchData = DB::table('money_order')->where('m_id',$id)->get();
    $crg = DB::table('merchant')->where('id',$id)->first();

@endphp

<div class="page-inner">
    <div class="page-title">
        <h3>Todays Statement </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-dark">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile Number</th>
                                        <th>Sending Amount</th>
                                        <th>Charge</th>
                                        <th>Order date</th>
                                        <th>Action</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                @foreach ($fetchData as $row)
                                <tbody>
                                    <tr>
                                        <td>{{$row->c_first_name}}</td>
                                        <td>{{$row->c_email}}</td>
                                        <td>{{$row->c_mobile_number}}</td>
                                        <td>{{$row->sending_amount}}€</td>
                                        <td>{{$crg->charge}}€</td>
                                        <td>{{$row->order_date}}</td>
                                        <td>
                                            <?php
                                                if ($row->status == 1) {
                                           ?>
                                            <span class="label label-info">Pending</span>
                                            <?php } elseif($row->status == 2){ ?>
                                                <span class="label label-primary">Success</span>
                                                <?php }else{ ?>
                                                    <span class="label label-danger">Deleted</span>
                                                    <?php } ?>
                                        </td>
                                        <td>
                                            <a href="{{url('transectionDetails/'.$row->id)}}" class="btn btn-primary"><i class="icon-eye"></i></a>
                                        </td>
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
        <p class="no-s">2021 &copy; Vicenza Service</p>
    </div>
</div><!-- Page Inner -->


@endsection
