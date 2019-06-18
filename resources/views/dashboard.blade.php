@extends('layouts.app')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('file:///Users/mac/Desktop/url%20changer.html#')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$rate}}</h3>

                            <p>Current Rate (Kwh)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-bulb"></i>
                        </div>
                        <a href="{{url('file:///Users/mac/Desktop/url%20changer.html#')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                @foreach($inputs as $input)
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->

                    <div class="small-box " style="background-color: black; color:white;">
                        <div class="inner">
                            <span>CURRENT STATE </span>

                            @if($input->status == 'on')
                            <span class="btn btn-flat btn-success">On</span>
                            @else
                                <span class="btn btn-flat btn-danger">Off</span>
                            @endif

                            <p><b>
                                    {{$input->name}}
                                </b>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{url('input/' . $input->iid)}}" class="small-box-footer">Manage <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div>
                @endforeach

                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{count($users)}}</h3>

                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{url('profile')}}" class="small-box-footer">My Profile<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Logs</h3>

                            <div class="box-tools">

                                {{$logs->links()}}
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table">

                                <tr>
                                    <th>Input</th>
                                    <th>Status</th>
                                    <th>Command Sent By</th>
                                    <th>Command Sent At</th>
                                    <th></th>
                                </tr>

                                @foreach($logs as $log)
                                    <tr>
                                        <td>{{$log->Input->name}}</td>
                                        <td>
                                            @if($log->status == 'on')
                                                <span class="btn btn-flat btn-success">On</span>
                                            @else
                                                <span class="btn btn-flat btn-danger">Off</span>
                                            @endif

                                        </td>
                                        <td>{{$log->User->name}}</td>
                                        <td>{{$log->created_at->toDayDateTimeString()}}</td>
                                    </tr>
                                @endforeach


                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
