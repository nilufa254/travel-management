<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

if ( isLoggedIn() ) { 
    header('Location: ' . SITE_URL . 'admin/dashboard.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo SITE_TITLE; ?> | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Travel</b>Fellow</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        <?php if( isset($_SESSION['error']['loginError']) ) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['error']['loginError']; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>

      <form action="<?php echo SITE_URL . 'inc/loginController.php' ;?>" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control<?php echo ! empty( $_SESSION['error']['emailError']) ? ' is-invalid' : ''; ?>" id="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
            <?php if( ! empty( $_SESSION['error']['emailError'] ) ) { ?>
                <span id="emailHelp" class="error invalid-feedback">
                <?php echo $_SESSION['error']['emailError']; ?>
                </span>
            <?php } ?>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control<?php echo ! empty( $_SESSION['error']['passwordError']) ? ' is-invalid' : ''; ?>" id="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?php if( ! empty( $_SESSION['error']['passwordError'] ) ) { ?>
                <span id="passwordHelp" class="error invalid-feedback">
                <?php echo $_SESSION['error']['passwordError']; ?>
                </span>
          <?php } ?>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php 
        $_SESSION = [];

        session_destroy();
    ?>

<!-- jQuery -->
<script src="<?php echo SITE_URL; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo SITE_URL; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SITE_URL; ?>dist/js/adminlte.min.js"></script>
</body>
</html>
