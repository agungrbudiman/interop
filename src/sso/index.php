<?php
  session_start();
  function logged_in() {
    return isset($_SESSION['sso_username']) ? true : false;
  }
  if (logged_in() && isset($_GET['callback_url'])) {
    require_once 'token.php';
    header('Location: ' . $_GET['callback_url'] . '?token=' . urlencode($token));
    exit();
  }
  $callback_url = isset($_GET['callback_url']) ? $_GET['callback_url'] : 'http://localhost/interop/sso';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>SSO</b></a>
    </div>
    <div class="card-body">
      <?php if (!logged_in()) { ?>
        <p class="login-box-msg">Sign in to start your session</p>
      <?php } else { ?>
        <p class="login-box-msg">Welcome, <?php echo $_SESSION['sso_username'] ?></p>
      <?php } ?>

      <form id="formlogin" action="login.php" method="post">
        <input type="text" name="callback_url" value="<?php echo $callback_url ?>" hidden>
        <div id="alertlogin" class="alert alert-danger alert-dismissible" role="alert">
          Login failed!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="input-group mb-3">
          <input id="formusername" type="text" name="username" class="form-control" placeholder="Username" <?php echo logged_in() ? 'disabled' : '' ?> >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="formpassword" type="password" name="password" class="form-control" placeholder="Password" <?php echo logged_in() ? 'disabled' : '' ?> >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php if (!logged_in()) { ?>
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            <?php } else { ?>
              <a href="logout.php"><button type="button" class="btn btn-danger btn-block">Logout</button></a>
            <?php } ?>
          </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>
</body>
</html>
