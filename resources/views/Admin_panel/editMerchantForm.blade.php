@extends('Admin_panel/master')
@section('dashboard')
    <div class="page-inner">
        <div class="page-title">
            <h3>Edit Merchant Information</h3>

        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="panel panel-dark">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Please Input Valid Data</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{url('updateMerchantdata')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Store Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Store Name" name="store_name" value="{{$readData->store_name}}">
                                    <input type="hidden" name="id" value="{{$readData->id}}">
                                    <input type="hidden" name="m_username" value="{{$readData->m_username}}">
                                    <input type="hidden" name="m_password" value="{{$readData->m_password}}">
                                    <input type="hidden" name="remaining_balance" value="{{$readData->remaining_balance}}">
                                    <input type="hidden" name="total_balance" value="{{$readData->total_balance}}">
                                    <input type="hidden" name="status" value="{{$readData->status}}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Owner's First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your First Name" value="{{$readData->first_name}}" name="first_name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Owner's Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Last Name" value="{{$readData->last_name}}" name="last_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Personal Mobile Number</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Your Personal Number" value="{{$readData->p_mb_number}}" name="p_mb_number" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Business Mobile Number</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Your Business Number" value="{{$readData->b_mb_number}}" name="b_mb_number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Date Of Birth</label>
                                            <input type="date" class="form-control" value="{{$readData->d_of_birth}}" placeholder="Date Of Birth" name="d_of_birth" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Store License Number</label>
                                            <input type="text" class="form-control" value="{{$readData->s_l_number}}" placeholder="License Number" name="s_l_number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" class="form-control" value="{{$readData->email}}" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">PEC Mail</label>
                                            <input type="text" class="form-control" value="{{$readData->pec_mail}}" placeholder="PEC Mail" name="pec_mail" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Store Address</label>
                                    <input type="text" class="form-control" value="{{$readData->store_address}}" id="exampleInputPassword1"
                                        placeholder="Store Address" name="store_address" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="text" class="form-control" value="{{$readData->city}}" placeholder="City" name="city" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleInputEmail1">Post Code</label>
                                            <input type="text" class="form-control" value="{{$readData->p_code}}" placeholder="Post Code" name="p_code" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleInputEmail1">Country</label>
                                            <select class="form-control" value="{{$readData->country}}" name="country" required>
                                                <option value="Italy">Italy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Identity Card Number</label>
                                    <input type="text" class="form-control"id="exampleInputPassword1"
                                        placeholder="Identity Card Number" value="{{$readData->i_card_number}}" name="i_card_number" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Referred By</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Enter name of person who Referred" value="{{$readData->reff_name}}" name="reff_name" required>
                                </div> --}}
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Referred By</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                           value="{{$readData->reff_name}}" name="reff_name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Charge</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                            value="{{$readData->charge}}" name="charge" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
