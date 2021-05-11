@php
$merchant_id = Session::get('id');
@endphp
@extends('Merchant_panel/master')
@section('dashboard')
    <div class="page-inner">
        <div class="page-title">
            <h3>Send Percel Form</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-1">
                </div>
                <form method="post" action="{{ url('savePercelinfo') }}">
                    @csrf
                    <div class="col-md-5">
                        <div class="panel panel-dark">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Sender Information</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <input type="hidden" name="m_id" value="{{ $merchant_id }}">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" placeholder="Name"
                                        name="s_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Mobile Number"
                                        name="s_m_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address"
                                        name="s_email_address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">House Number</label>
                                    <input type="text" class="form-control" placeholder="House Number"
                                        name="s_house_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Post Code</label>
                                    <input type="text" class="form-control" placeholder="Post Code" name="s_post_code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text" class="form-control" placeholder="City"
                                        name="s_city">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <select name="s_country" class="form-control">
                                        <option value="italy">Italy</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pick Up date</label>
                                    <input type="date" class="form-control" placeholder="Pick Up Date"
                                        name="s_p_up_delivery">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pick Up Time</label>
                                    <input type="time" class="form-control" placeholder="Pick Up Time"
                                        name="s_p_up_time">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-dark">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Receiver Information</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" placeholder=" Name"
                                        name="r_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Mobile Number"
                                        name="r_m_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" placeholder="Email"
                                        name="r_email_address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">House Number</label>
                                    <input type="text" class="form-control" placeholder="House Number"
                                        name="r_house_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Post Code</label>
                                    <input type="text" class="form-control" placeholder="Post Code"
                                        name="r_post_code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text" class="form-control" placeholder="City"
                                        name="r_city">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <select name="r_country" class="form-control">
                                        <option value="bangladesh">Bangladesh</option>
                                    </select>

                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Delivery Date</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name"
                                        name="r_d_of_delivery">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Delivery Time</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name"
                                        name="r_d_of_time">
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">comment</label>
                                    <textarea name="comment" id="" cols="30" rows="5" class="form-control"></textarea>

                                </div>
                                <div class="form-group">
                                <button style="width: 100%;" type="submit" class="btn btn-success">Submit</button>
                                </div>
                </form>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
    </div>
    </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">2021 &copy; Vicenza Service .</p>
    </div>
    </div><!-- Page Inner -->

@endsection
