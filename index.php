<?php 
  require_once('classes/User.php');
  $user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MalariaDiagnosis | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="./dist/css/loginpage.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="index.php" class='heading1'><b>Malaria </b>Diagnosis</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?php 
        if (isset($_POST['login'])) {
           $r = $user->login($_POST['username'], $_POST['password']);
          if ($r != -1) {
            if ($_SESSION['access_level'] ==0) {
              header('Location: dashboard.php');              
            }elseif ($_SESSION['access_level'] ==1) {
              header('Location: admin.php');                            
            }
          }
          echo "<div class='alert alert-danger'>
            Invalid login details
          </div>";
        }else{
          // echo "else";
        }
      ?>
      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="username" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <p class="text-right pull-right">
        <a href="register.php" class="text-center">New user? Register here.</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
