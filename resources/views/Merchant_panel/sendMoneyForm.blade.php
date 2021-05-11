@php
$merchant_id = Session::get('id');
$crg = DB::table('merchant')
    ->where('id', $merchant_id)
    ->first();
$rate = DB::table('euro_rate')->first();
@endphp
@extends('Merchant_panel/master')
@section('dashboard')
    <div class="page-inner">
        <div class="page-title">
            <h3>Information Form</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-1">
                </div>
                <form method="post" action="{{ url('sendMoneyinfo') }}">
                    @csrf
                    <div class="col-md-5">
                        <div class="panel panel-dark">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Sender Information</h4>
                            </div>
                            <div class="panel-body">
                                {{-- <div class="form-group">
                                    <input type="hidden" name="m_id" value="{{ $merchant_id }}">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your First Name"
                                        name="c_first_name">
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name"
                                        name="c_last_name">
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Any Valid Document Name</label>
                                    <input type="text" class="form-control" placeholder="Passport,Id Card etc"
                                        name="c_document_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Document Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Your valid Document Number"
                                        name="c_document_number">
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Email" name="c_email">
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile Number</label>
                                    <input type="hidden" name="m_id" value="{{ $merchant_id }}">
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number"
                                        name="c_mobile_number" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Amount (EURO)</label>
                                    <input type="text" class="form-control" placeholder="Enter sending Amount"
                                        name="sending_amount" id="euro" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Amount (TAKA)</label>
                                    <input type="text" class="form-control" placeholder="Enter sending Amount"
                                        id="taka">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Charge</label>
                                    <input type="hidden" id="crg" value="{{$crg->charge}}" name="charge">
                                    <select class="form-control">
                                        <option id="crg">{{ $crg->charge }}€</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Total </label>
                                    <input type="text" class="form-control" id="total" readonly>
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
                                {{-- <div class="form-group">
                                    <input type="hidden" name="m_id" value="{{ $merchant_id }}">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your First Name"
                                        name="r_first_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name"
                                        name="r_last_name">
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number(Bkash Number)</label>

                                    <input type="hidden" id="rate" class="form-control" name="takaRate"
                                        value="{{ $rate->euroTotaka }}">

                                    <input type="text" class="form-control" placeholder="Bkash Number" name="r_phoneNumber" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Payment System</label>
                                    <select name="payment_system" class="form-control" required>
                                        <option value="">Select Payment System</option>
                                        <option value="1">Mobile Wallet (Bkash)</option>
                                        <option value="2">Cash In Hand Delivery (Home Delivery)</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <button style="width: 100%;" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                            <div class="panel-body">
                              <img style="width: 241px;" src="{{asset('public/backEnd/assets/bkash.jpg')}}" alt="">

                            </div>
                        </div>
                    </div>
                </form>
            </div>

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
