@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <!-- Edit profile -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Profile</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('profile')}}" method="post">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{auth()->user()->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{auth()->user()->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="{{auth()->user()->phone}}">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- end edit profile -->

                    <!-- Edit profile -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Change Password</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('change-password')}}" method="post">
                            @csrf

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Current Password</label>
                                    <input type="password" class="form-control" name="oldPassword" placeholder="Enter current password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter new password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm New Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter new password">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- end edit profile -->



                </div>

            </div>
        </section>
    </div>


@endsection
