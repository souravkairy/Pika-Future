
@extends('Merchant_panel/master')
@section('dashboard')

@php
$i = 1;
    $id = Session::get('id');
    $date = date('y-m-d');
    $fetchData = DB::table('airticket')->where('m_id',$id)->where('order_date',$date)->get();

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

                                        <th>From</th>
                                        <th>To</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                @foreach ($fetchData as $row)
                                <tbody>
                                    <tr>

                                        <td>{{$row->d_from}}</td>
                                        <td>{{$row->d_to}}</td>
                                        <td>{{$row->m_number}}</td>
                                        <td>{{$row->email}}</td>
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

                                            <a href="#" class="btn btn-warning"><i class="icon-eye"></i></a>
                                            {{-- {{url('airOrderdetails/'.$row->id)}} --}}
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
