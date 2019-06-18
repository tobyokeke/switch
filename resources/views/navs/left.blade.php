<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

                <img src="{{url('img/icon.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>System Online</a>
            </div>
        </div>


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="{{url('home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              {{--<small class="label pull-right bg-green">new</small>--}}
            </span>
                </a>
            </li>

            <li><a href="{{url('inputs')}}"><i class="fa fa-lightbulb-o"></i> <span>Inputs</span></a></li>
            <li><a href="{{url('settings')}}"><i class="fa fa-cog "></i> <span>Settings</span></a></li>
            <li><a href="{{url('profile')}}"><i class="fa fa-user "></i> <span>Profile</span></a></li>
            <li><a href="{{url('logout')}}"><i class="fa fa-sign-out text-red"></i> <span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
