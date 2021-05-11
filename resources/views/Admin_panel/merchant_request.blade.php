@extends('Admin_panel/master')
@section('dashboard')
    <div class="page-inner">
        <div class="page-title">
            <h3>Add Merchant Form</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Add Merchant Form</li>
                </ol>
            </div>
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
                            <form method="post" action="{{url('addMerchantRequest')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Store Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Store Name" name="store_name">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Owner's First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your First Name" name="first_name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Owner's Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Last Name" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Personal Mobile Number</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Your Personal Number" name="p_mb_number">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Business Mobile Number</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Your Business Number" name="b_mb_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Date Of Birth</label>
                                            <input type="date" class="form-control" placeholder="Date Of Birth" name="d_of_birth">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Store License Number</label>
                                            <input type="text" class="form-control" placeholder="License Number" name="s_l_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">PEC Mail</label>
                                            <input type="text" class="form-control" placeholder="PEC Mail" name="pec_mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Store Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Store Address" name="store_address">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="text" class="form-control" placeholder="City" name="city">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleInputEmail1">Post Code</label>
                                            <input type="text" class="form-control" placeholder="Post Code" name="p_code">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleInputEmail1">Country</label>
                                            <select class="form-control" name="country">
                                                <option value="Italy">Italy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Identity Card Number</label>
                                    <input type="text" class="form-control"id="exampleInputPassword1"
                                        placeholder="Identity Card Number" name="i_card_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Referred By</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Enter name of person who Referred" name="reff_name">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="exampleInputEmail1">Merchant Username</label>
                                            <input type="text" class="form-control" placeholder="Merchant Username" name="m_username">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input type="text" class="form-control" placeholder="Password" name="m_password">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Issue date</label>
                                            <input type="date" class="form-control" placeholder="Issue date" name="issue_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Are you agree with all terms and conditions..
                                    </label>
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
