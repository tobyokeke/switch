@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Settings
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Settings</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Change Setting</h3>

                            <b class="pull-right" style="font-size: 16px;">Current Rate : {{$rate}}</b>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('settings')}}" method="post">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rate (Kwh)</label>
                                    <input type="number" class="form-control" name="rate" step="0.01" id="rate" placeholder="Enter rate">
                                    <small>Rate is the unit cost of energy consumption</small>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->



                </div>

            </div>
        </section>
    </div>


@endsection
