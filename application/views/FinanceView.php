<!DOCTYPE html>
<html lang="en">

<head>
<?php
include "head.php";
?>
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <?php include "navigation.php";?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Forms Dashboard</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('HRController')?>">Forms</a></li>
                        <li class="active">Finance Forms</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--row -->
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <a href="#">
                            <h3 class="box-title">FA - 12 : Inter Fund Transfer Form<</h3> </a>
                        <a href="#">
                            View Form </a>

                        <div id="sparkline9" class="minus-mar"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <a href="#">
                            <h3 class="box-title">FA - 17 : Cash withdrawal Form</h3> </a>
                        <a href="#">
                            View Form </a>

                        <div id="sparkline9" class="minus-mar"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <a href="#">
                            <h3 class="box-title">FA - 18 : Cheque Book Register</h3> </a>
                        <a href="#">
                            View Form </a>

                        <div id="sparkline9" class="minus-mar"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->


            <!-- .right-sidebar -->
            <?php include "right-sidebar.php";?>
            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Rads-AHKRC. All rights reserved. </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
    <?php include "scripts-links.php";?>
</body>

</html>