<!----->
<nav class="navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1> <a class="navbar-brand" href="<?php echo site_url('HRController')?>">Rads-Forms</a></h1>
    </div>
    <div class=" border-bottom">


        <!-- Brand and toggle get grouped for better mobile display -->


        <div class="clearfix">

        </div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">


                    <li>
                        <a href="<?php echo site_url('HRController')?>" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i> <span class="nav-label">HR</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('FinanceController')?>" class=" hvr-bounce-to-right"><i class="fa fa-calculator  nav_icon"></i> <span class="nav-label">Finance</span> </a>
                    </li>


                    <li>
                        <a href="<?php echo site_url('LogoutController')?>"class=" hvr-bounce-to-right"><i class="fa fa-sign-out  nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>


                </ul>
            </div>
        </div>
</nav>