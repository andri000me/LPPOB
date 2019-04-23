<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/fontastic.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/style.red.css" id="theme-stylesheet">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/custom.css">
    
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <form class="form-validate" action="" method="POST">
            <div class="row">
            
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>PLN adalah kita.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate">
                    <div class="form-group">
                      <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="pass" type="password" name="pass" required data-msg="Please enter your password" class="input-material">
                      <label for="pass" class="label-material">Password</label>
                    </div><button class="login btn btn-primary" >Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="#">Bukan Saya</a>
         
        </p>
      </div>
    </div>
    
    <script src=" <?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/popper.js/umd/popper.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/js/front.js"></script>
  </body>
</html>