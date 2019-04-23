<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/fontastic.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/style.red.css" id="theme-stylesheet">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <header class="header">
        <nav class="navbar">
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header">
                <a href="#" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item"><a href="<?php echo base_url('index.php/login/logout')?>" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
       
        <nav class="side-navbar">
          
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url('assets/img/avatar-1.jpg')?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $_SESSION['user']['username']; ?></h1>
              <p><?php echo $_SESSION['user']['level']; ?></p>
            </div>
          </div>
          <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="<?php echo base_url('index.php/admin/')?>"> <i class="icon-home"></i>Home </a></li>
            <li><a href="<?php echo base_url('index.php/pelanggan/')?>"> <i class="icon-grid"></i>Data Pelanggan</a></li>
            <li><a href="<?php echo base_url('index.php/penggunaan/')?>"> <i class="fa fa-credit-card"></i>Penggunaan</a></li>
            <li><a href="<?php echo base_url('index.php/tarif/')?>"> <i class="fa fa-terminal"></i>Entri Tarif</a></li>
            <li><a href="<?php echo base_url('index.php/tagihan')?>"> <i class="fa fa-terminal"></i>Tagihan</a></li>
            <li><a href="<?php echo base_url('index.php/bayar')?>"> <i class="fa fa-terminal"></i>Pembayaran</a></li>
            <li><a href="<?php echo base_url('index.php/laporanpdf')?>"> <i class="fa fa-flag"></i>Laporan</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
                            </div>
                            <div class="content">
                              <?php echo $content;?>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </section>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src=" <?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/popper.js/umd/popper.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/js/front.js"></script>
    <script src=" <?php echo base_url();?>assets/admin/js/charts-home.js"></script>
    <!-- Main File-->
  </body>
</html>