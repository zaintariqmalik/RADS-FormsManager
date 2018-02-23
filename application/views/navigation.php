<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part"><a class="logo" href="<?php echo site_url('HRController')?>"><b><img src="<?php echo base_url(); ?>plugins/images/radslogo.png" alt="home" /></b><span class="hidden-xs"><strong>Rads</strong> Forms</span></a></div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url(); ?>plugins/images/users/d1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Employee</b> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="<?php echo site_url('LogoutController')?>"><i class="fa fa-power-off"></i>  Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">

            </li>
            <li> <a href="<?php echo site_url('HRController')?>" class="waves-effect"><i class="fa fa-users p-r-10"></i> <span class="hide-menu">HR</span></a> </li>
            <li> <a href="<?php echo site_url('AdminController')?>" class="waves-effect"><i data-icon="P" class="ti-user"></i> <span class="hide-menu">Admin</span></a> </li>
            <li> <a href="<?php echo site_url('FinanceController')?>" class="waves-effect"><i data-icon="P" class="fa fa-calculator "></i> <span class="hide-menu">Finance</span></a> </li>
            <li><a href="<?php echo site_url('LogoutController')?>" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->
<!-- Page Content -->