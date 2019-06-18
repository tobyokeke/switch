@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inputs
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
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Inputs</h3>

                            <div class="box-tools">

                                {{--<ul class="pagination pagination-sm no-margin pull-right">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">&laquo;</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">1</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">2</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">3</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">&raquo;</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table">

                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Name</th>
                                    <th>Consumption (KWh)</th>
                                    <th>Created At</th>
                                    <th></th>
                                </tr>

                            @foreach($inputs as $input)
                                <tr>
                                    <td>{{$input->iid}}</td>
                                    <td>{{$input->name}}</td>
                                    <td>{{$input->consumption}}</td>
                                    <td>{{$input->created_at->toDayDateTimeString()}}</td>
                                    <td>
                                        <a href="{{url('input/' . $input->iid)}}">View</a>
                                    </td>
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
