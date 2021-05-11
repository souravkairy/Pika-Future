@php
$merchant_id = Session::get('id');
@endphp
@extends('Merchant_panel/master')
@section('dashboard')
    <div class="page-inner">
        <div class="page-title">
            <h3>Air Ticket Booking Form</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-2">
                </div>
                <form method="post" action="{{ url('airTicketData') }}">
                    @csrf
                    <div class="col-md-8">
                        <div class="panel panel-dark">
                            <div class="panel-body">
                                <div class="form-group">
                                    <input type="hidden" name="m_id" value="{{ $merchant_id }}">
                                    <label for="exampleInputEmail1">Form</label>
                                    <input type="text" class="form-control" placeholder="Airport Name"
                                        name="d_from">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">To</label>
                                    <input type="text" class="form-control" placeholder="Airport Name"
                                        name="d_to">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trip Type</label>
                                    <select name="trip_type" class="form-control">
                                        <option value="">Select Trip Type</option>
                                        <option value="1">One Way</option>
                                        <option value="2">Round Trip</option>
                                    </select>

                                </div>
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Departing</label>
                                    <input type="date" class="form-control" placeholder="Enter Your Departing Date"
                                        name="departing_date">
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Returning</label>
                                    <input type="date" class="form-control" placeholder="Enter Your Returning Date"
                                        name="returning_date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Number Of Adult</label>
                                    <input type="text" class="form-control" placeholder="Number Of Adult"
                                        name="no_of_adult">
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputEmail1">No Of Child</label>
                                    <input type="text" class="form-control" placeholder="No Of Child"
                                        name="no_of_child">
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputEmail1">No Of Infant</label>
                                    <input type="text" class="form-control" placeholder="No Of Infant"
                                        name="no_of_infant">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Seat Type</label>
                                    <select name="seat_type" class="form-control">
                                        <option value="1">Economy</option>
                                        <option value="2">Premium Economy</option>
                                        <option value="3">Business</option>
                                        <option value="4">First Class</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" placeholder="Name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" placeholder="Email"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Mobile Number"
                                        name="m_number">
                                </div>
                                <div class="form-group">
                                    <button style="width: 100%;" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
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
