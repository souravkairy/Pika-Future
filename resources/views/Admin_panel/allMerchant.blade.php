@extends('Admin_panel/master')
@section('dashboard')
@php
    $readData = DB::table('merchant')->get();
@endphp
<div class="page-inner">
    <div class="page-title">
        <h3>All Merchant</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-dark">
                    <div class="panel-heading">
                        <h4 class="panel-title">Add Merchant</h4>
                    </div>
                    <div class="panel-body">
                        {{-- <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Row</button> --}}
                        <!-- Modal -->
                     <form id="add-row-form" action="javascript:void(0);">
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" id="name-input" class="form-control" placeholder="Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="position-input" class="form-control" placeholder="Position" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" id="age-input" class="form-control" placeholder="Age" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="date-input" class="form-control date-picker" placeholder="Start Date" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" id="salary-input" class="form-control" placeholder="Salary" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </form>
                        <div class="table-responsive">
                            <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>Store Name</th>
                                        <th>Owner Name</th>
                                        <th>Mobile Number</th>
                                        <th>Store Address</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                @foreach ($readData as $row)
                                <tbody>
                                    <tr>
                                        <td>{{$row->store_name}}</td>
                                        <td>{{$row->first_name}}</td>
                                        <td>{{$row->b_mb_number}}</td>
                                        <td>{{$row->store_address}}</td>
                                        <td>{{$row->remaining_balance}}</td>
                                        <td>
                                            <?php
                                                if ($row->status == 1) {
                                            ?>
                                            <span class="label label-info">Active</span>
                                            <?php } elseif($row->status == 0){ ?>
                                                <span class="label label-primary">InActive</span>
                                            <?php }else{ ?>
                                                    <span class="label label-danger">De-Active</span>
                                            <?php } ?>
                                        </td>
                                        <td>

                                        <?php
                                            if ($row->status == 1) {
                                        ?>
                                        <a href="{{url('deactiveMerchant/'.$row->id)}}" class="btn btn-danger">InActive</a>

                                        <?php }else{ ?>
                                            <a href="{{url('activeMerchant/'.$row->id)}}" class="btn btn-success">Active</a>
                                        <?php } ?>
                                            {{-- <a href="{{url('activeMerchant/'.$row->id)}}" class="btn btn-success">Active</a> --}}
                                            <a href="{{url('dataDetails/'.$row->id)}}" class="btn btn-primary"><i class="icon-eye"></i></a>
                                            <a href="{{url('editMerchantInfo/'.$row->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('deleteMerchant/'.$row->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a>
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
        <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
    </div>
</div><!-- Page Inner -->


@endsection
