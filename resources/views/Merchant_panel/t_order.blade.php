
@extends('Merchant_panel/master')
@section('dashboard')

@php
    $id = Session::get('id');
    $date = date('y-m-d');
    $fetchData = DB::table('money_order')->where('m_id',$id)->where('order_date',$date)->get();
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
                                        <th>Mobile Number(Sender)</th>
                                        <th>Bkash Number(Receiver)</th>
                                        <th>Sending Amount(EURO)</th>
                                        <th>Charge(EURO)</th>
                                        <th>Total(EURO)</th>
                                        <th>Sending Amount(TAKA)</th>
                                        <th>Order date</th>
                                        <th>Action</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                @foreach ($fetchData as $row)
                                <tbody>
                                    <tr>
                                        <td>{{$row->c_mobile_number}}</td>
                                        <td>{{$row->r_phoneNumber}}</td>
                                        <td>{{$row->sending_amount}} EURO(€)</td>
                                        <td>{{$crg->charge}} EURO(€)</td>
                                        <td>{{$row->sending_amount + $crg->charge}} EURO(€)</td>
                                        <td>{{$row->finaltaka}} TAKA</td>
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
