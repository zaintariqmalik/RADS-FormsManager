<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 2/19/2018
 * Time: 12:59 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include "head.php";?>
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <div class="form-horizontal form-material">
                <?php echo form_open('LoginController/checkLogin'); ?>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <div class="user-thumb text-center"> <img alt="thumbnail" class="img-circle" width="100" src="<?php echo base_url(); ?>plugins/images/users/user.png">
                            <h3>Login</h3> </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email" name="email"> </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password"> </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
</section>
<?php include "scripts-links.php"?>
</body>

</html>
