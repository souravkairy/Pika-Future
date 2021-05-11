@extends('Admin_panel/master')
@section('dashboard')

@php
    $data = DB::table('euro_rate')->first();
@endphp
    <div class="page-inner">
        <div class="page-title">
            <h3>Currency Rate Setting</h3>

        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <div class="panel panel-dark">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Please Input Valid Data</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{url('euroTotaka')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Currency Rate (Euro To Taka)</label>
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                    <input type="text" class="form-control" value="{{$data->euroTotaka}}" id="exampleInputPassword1"
                                        placeholder="Euro to Taka Rate" name="euroTotaka" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-dark">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Please Input Valid Data</h4>
                        </div>
                        <div class="panel-body">

                                <h2>Euro to Taka Rate (Per Euro)</h2>
                                <h3>1 Euro To {{$data->euroTotaka}} Taka</h3>
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
