@extends('Admin_panel/master')
@section('dashboard')
    <div class="page-inner">
        <div class="page-title">
            <h3>Transection Details</h3>

        </div>
        <div id="main-wrapper">
            <div class="row">

                <div class="col-md-7">
                    <div class="panel panel-dark">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Sender Information</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <th>First Name</th>
                                            <td>{{$fetchData->c_first_name }}</td>
                                        </tr> --}}
                                        {{-- <tr>
                                            <th>Last Name</th>
                                            <td>{{$fetchData->c_last_name }}</td>
                                        </tr> --}}
                                        {{-- <tr>
                                            <th>Valid Document Name</th>
                                            <td>{{$fetchData->c_document_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Valid Document Number</th>
                                            <td>{{$fetchData->c_document_number }}</td>
                                        </tr> --}}
                                        {{-- <tr>
                                            <th>Customer's Email</th>
                                            <td>{{$fetchData->c_email }}</td>
                                        </tr> --}}
                                        <tr>
                                            <th>Customer's Mobile Number</th>
                                            <td>{{$fetchData->c_mobile_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Amount(EURO)</th>
                                            <td>{{$fetchData->sending_amount}}€</td>
                                        </tr>
                                        <tr>
                                            <th>Charge(EURO)</th>
                                            <td>{{$fetchData->charge}}€</td>
                                        </tr>
                                        <tr>
                                            <th>Total(EURO)</th>
                                            <td>{{$fetchData->sending_amount + $fetchData->charge}}€</td>
                                        </tr>
                                        <tr>
                                            <th>Amount In Taka</th>
                                            <td>{{$fetchData->finaltaka}}৳</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                            <div class="table-responsive">
                                <table class="display table" style="width: 100%; cellspacing: 0;">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Information</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- <tr>
                                            <th>First Name</th>
                                            <td>{{$fetchData->r_first_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td>{{$fetchData->r_last_name }}</td>
                                        </tr> --}}
                                        <tr>
                                            <th>Mobile/Bkash Number</th>
                                            <td>{{$fetchData->r_phoneNumber }}</td>
                                        </tr>
                                        <?php
                                        if($fetchData->payment_system == 1 ) {
                                        ?>
                                        <tr>
                                            <th>Payment System</th>
                                            <td>Bkash</td>
                                        </tr>
                                        <?php } else{ ?>
                                            <tr>
                                                <th>Payment System</th>
                                                <td>Home Delivery</td>
                                            </tr>
                                        <?php } ?>



                                    </tbody>
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
