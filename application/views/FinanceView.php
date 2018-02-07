
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Finance Forms</title>
    <?php
    $this->load->view('head');
    ?>
</head>
<body>
<div id="wrapper">

<!----->
    <?php
    $this->load->view('nav_bar');
    ?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="<?php echo site_url('HRController')?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Finance</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="container">
            <!---Div for forms title-->
            <div class="gallery">

                <div class="col-md">
                    <div class="text-gallery">
                        <a href="#"> <h6>FA - 12 : Inter Fund Transfer Form</h6> </a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="text-gallery">
                        <a href="#"><h6> FA - 17 : Cash withdrawal Form</h6></a>
                    </div>
                </div>
                <div class="col-md">

                    <div class="text-gallery">
                        <a href="#"><h6> FA - 18 : Cheque Book Register</h6></a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--End --div for forms title-->


            <div class="clearfix"> </div>
		</div>
		<!----->

		<!--//content-->


	 
		<!---->
          <div class="copy container-fluid">
            <p> &copy; 2018 AHKRC. All Rights Reserved  </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"> </script>
</body>
</html>

