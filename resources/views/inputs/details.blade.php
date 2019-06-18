@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('notification')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Input #{{$input->iid}} - {{$input->name}}
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">
                        <i class="fa fa-dashboard"></i>
                        Home
                    </a>
                </li>
                <li class="active">Inputs</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">

                            CURRENT INPUT STATE -
                            @if($input->status == 'on')
                            <button class="btn btn-lg btn-success">{{strtoupper($input->status)}} </button>

                                <br>
                                <br>
                                <br>

                                CONTROL - <a href="{{url('toggle-input/' . $input->iid)}}" class="btn btn-danger">Turn Off</a>

                            @endif

                            @if($input->status == 'off')
                            <button class="btn btn-lg btn-danger">{{strtoupper($input->status)}} </button>

                            <br>
                            <br>
                            <br>

                                CONTROL - <a href="{{url('toggle-input/' . $input->iid)}}" class="btn btn-success">Turn On</a>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <!-- form start -->
                            <form role="form" action="{{url('inputs')}}" method="post">
                                @csrf

                                <input type="hidden" name="iid" value="{{$input->iid}}">

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="Enter name" value="{{$input->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Consumption</label>
                                        <input type="number" class="form-control" name="consumption" id="name"
                                               placeholder="Enter consumption" value="{{$input->consumption}}">
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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
                                    <th style="width: 10px">ID</th>
                                    <th>Status</th>
                                    <th>Command Sent By</th>
                                    <th>Command Sent At</th>
                                    <th></th>
                                </tr>

                                @foreach($logs as $log)
                                    <tr>
                                        <td>{{$log->lid}}</td>
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
        </section>
    </div>


@endsection
