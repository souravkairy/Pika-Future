@extends('Admin_panel/master')
@section('dashboard')
@php
    $readData = DB::table('admin_user')->get();
@endphp
<div class="page-inner">
    <div class="page-title">
        <h3>All Admin</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-dark">
                    <div class="panel-heading">
                        <h4 class="panel-title">Add Admin</h4>
                    </div>
                    <div class="panel-body">
                        <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Admin</button>
                        <!-- Modal -->
                     <form id="add-row-form" action="{{url('add_admin')}}" method="POST">
                        @csrf
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Add Admin</h4>
                                    </div>
                                    <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" id="name-input" class="form-control" placeholder="User Name" name="name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="position-input" class="form-control" placeholder="Email" name="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" id="age-input" class="form-control" placeholder="Password" name="pass" required>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-4 ">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Money Order </label>
                                                        <input type="checkbox"  value="1" id="name-input" class="form-control" name="mo">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4 ">
                                                    <div class="form-group">

                                                        <label for="recipient-name" class="col-form-label">Parcel Order</label>
                                                        <input type="checkbox"  value="1" id="name-input" class="form-control" name="po">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4 ">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Air Ticket Order</label>
                                                        <input type="checkbox"  value="1" id="name-input" class="form-control" name="ato">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 ml-auto">
                                                      <div class="form-group">
                                                          <label for="recipient-name" class="col-form-label">Add New Merchant</label>
                                                          <input type="checkbox"  value="1" id="name-input" class="form-control" name="anm">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4 ml-auto">
                                                      <div class="form-group">
                                                          <label for="recipient-name" class="col-form-label">All Merchant</label>
                                                          <input type="checkbox"  value="1" id="name-input" class="form-control" name="am">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4 ml-auto">
                                                      <div class="form-group">
                                                          <label for="recipient-name" class="col-form-label">Add Admin</label>
                                                          <input type="checkbox"  value="1" id="name-input" class="form-control" name="aa">
                                                      </div>
                                                    </div>

                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-6 ml-auto">
                                                      <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Currency Rate Setting</label>
                                                          <input type="checkbox" value="1" id="name-input" class="form-control" name="crs">
                                                      </div>
                                                    </div>
                                                  </div>
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
                                        <th>Name</th>
                                        <th>Email</th>

                                        {{-- <th>Action</th> --}}
                                        <th>#</th>
                                    </tr>
                                </thead>
                                @foreach ($readData as $row)
                                <tbody>
                                    <tr>
                                        <td>{{$row->user_name}}</td>
                                        <td>{{$row->user_email}}</td>

                                        <td>
                                            <a href="{{url('deleteadmin/'.$row->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a>
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
