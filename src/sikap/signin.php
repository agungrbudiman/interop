<!DOCTYPE html>
<html lang="en">
<head>
    <?php
		ob_start();
		require_once(__DIR__.'/lib/lib-plugins.php');
		//require_once 'lib/lib-plugins.php';
		$output = ob_get_flush(); // ob_get_clean() if you want to suppress the output

		// if(empty($output)) {
		// 	echo 'Nothing interesting here!';
		// } else {
		// 	echo 'Something interesting here !';
		// }		
	?>
	
</head>
<body>
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel">
            <div class="inner-panel"></div>
        </div>
        <div class="new-login-box">
            <div class="white-box">
                <?php
                    if (isset($_GET['id'])) {
                        $msg = $_GET['id'];
                        if ($msg == 'warning') {
                            echo "<div class='alert alert-primary'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                Welcome! Please sign in first.
                              </div>";
                        }
                        elseif ($msg == 'failed') {
                            echo "<div class='alert alert-danger'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                Username or password that you entered is incorrect. Please input again!
                              </div>";
                        }
                        elseif ($msg == 'success') {
                            echo "<div class='alert alert-success'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                You have successfully signed out.
                              </div>";
                        }                     
                    }
                ?>
                <br>
                <h3 class="box-title m-b-0">Sistem Informasi Kehadiran Pegawai</h3>
                <form class="form-horizontal new-lg-form" id="loginform" method="post" action="signin-check">
                    <div class="form-group m-t-20">
                        <div class="col-xs-12">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" required="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="forgot" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit" name="signin">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
