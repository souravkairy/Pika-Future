@extends('Admin_panel/master')
@section('dashboard')
@php
    // $fetchData = DB::table('airticket')->get();

    // $m_id =  $fetchData->m_id;
$i = 1;
    $readData = DB::table('money_order')
              ->join('merchant','money_order.m_id', 'merchant.id')
              ->select('merchant.store_name','money_order.*')
              ->get();
@endphp
<div class="page-inner">
    <div class="page-title">
        <h3>All Order</h3>
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
                                        <th>#</th>
                                        <th>Store Name</th>
                                        <th>Sender Name</th>
                                        <th>Sender Mobile Number</th>
                                        <th>Amount</th>
                                        <th>order_date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($readData as $row)
                                <tbody>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$row->store_name}}</td>
                                        <td>{{$row->c_first_name}}</td>
                                        <td>{{$row->c_mobile_number}}</td>
                                        <td>{{$row->sending_amount}}</td>
                                        <td>{{$row->order_date}}</td>
                                        <td>
                                            <?php
                                                if ($row->status == 1) {
                                            ?>
                                            <span class="label label-info">pending</span>
                                            <?php } elseif($row->status == 2){ ?>
                                                <span class="label label-primary">Accepted</span>
                                            <?php }else{ ?>
                                                    <span class="label label-danger">De-Active</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                        <?php
                                            if ($row->status == 1) {
                                        ?>
                                        <a href="{{url('acceptmoneyOrder/'.$row->id)}}" class="btn btn-success">Accept</a>

                                        <?php }elseif($row->status == 2){ ?>
                                            <a href="#" class="btn btn-primary">Accepted</a>
                                        <?php } ?>
                                            {{-- <a href="{{url('activeMerchant/'.$row->id)}}" class="btn btn-success">Active</a> --}}
                                            <a href="{{url('moneyOrderdetails/'.$row->id)}}" class="btn btn-warning"><i class="icon-eye"></i></a>
                                            {{-- <a href="{{url('deleteMerchant/'.$row->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a> --}}
                                        </td>
                                    </tr>
                                </tbody>
                                @php
                                    $i++;
                                @endphp
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
