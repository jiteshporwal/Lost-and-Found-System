<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mandsaur university Lost and Found System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=YxlJdmfOjtYB3EAs5UG-sfQH3szh7-u-qZE_cbfx4i7aFoxi_v4C7oKTQcXoJnbvezbM3vd_FTqJOTL2K2YAgHfyPPC_MiMQhiD8qzVCeTc" charset="UTF-8"></script><script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=7k8wYO_nSHyiIn2aCrIssrzRF-cU8jD7QGYbPp4xT01bTGNVVIpjLxa4XGAK4dBao83T97vSrFRkFNbnwjAvivG1s4dPBUUn39tE-6R-HXk" charset="UTF-8"></script></head>

<body class="hold-transition login-page" style="background-color:rgb(186 193 199);">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Mandsaur university Lost and Found</b>System </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to enjoy a free mandsaur university lost and found system</p>

      <form action="db/loginVerification.php" method="post">
        <div class="input-group mb-3">
        <input type="text" id="username" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" id="password" name="password" class="form-control" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
<!-- login  form . -->
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



      <p class="mb-0">
        <a href="registrationform.php" class="text-center">Register a new membership</a>
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
