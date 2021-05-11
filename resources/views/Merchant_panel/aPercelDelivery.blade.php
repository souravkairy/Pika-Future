
@extends('Merchant_panel/master')
@section('dashboard')

@php
$i = 1;
    $id = Session::get('id');

    $fetchData = DB::table('parcel_delivery')->where('m_id',$id)->get();

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
                                        <th>#</th>

                                        <th>Sender Name</th>
                                        <th>Sender Mobile Number</th>
                                        <th>Sender Email</th>
                                        <th>order_date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($fetchData as $row)
                                <tbody>
                                    <tr>
                                        <td>{{$i}}</td>

                                        <td>{{$row->s_name}}</td>
                                        <td>{{$row->s_m_number}}</td>
                                        <td>{{$row->s_email_address}}</td>
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
                                            <a href="{{url('pOrderDetails/'.$row->id)}}" class="btn btn-primary"><i class="icon-eye"></i></a>
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
        <p class="no-s">2021 &copy; Vicenza Service</p>
    </div>
</div><!-- Page Inner -->


@endsection
