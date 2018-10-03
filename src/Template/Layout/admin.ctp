<?php $this->Html->docType();?>
  <html>

  <head>
    <?php echo $this->Html->charset(); ?>
      <title>
        <?php echo $this->fetch('title');?>
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <?php echo  $this->elment('CakePagesTemplate.SEO');?>
        <?php
echo $this->Html->meta('icon');

echo $this->fetch('meta');

echo $this->Html->css([
'/plugins/pace/pace-theme-flash.css',
'/plugins/bootstrap/css/bootstrap.min.css',
'/plugins/font-awesome/css/font-awesome.css',
'/plugins/jquery-scrollbar/jquery.scrollbar.css',
'/plugins/select2/css/select2.min.css',
'/plugins/switchery/css/switchery.min.css',
'pages-icons.css',
'pages.min.css'
]);

echo $this->fetch('css');
?>
  </head>

  <body class="fixed-header menu-pin">
    <!-- BEGIN SIDEBAR -->
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">

      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link hidden-sm-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <?php echo $this->element('navigation'); ?>
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
      <!-- START PAGE HEADER WRAPPER -->
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <?php echo $this->element('usermenu');?>
      </div>
      <!-- END HEADER -->
      <!-- END PAGE HEADER WRAPPER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <?php echo $this->element('breadcrumb');?>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <?php echo $this->Flash->render();?>
              <?php echo $this->fetch('content');?>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START FOOTER -->
        <?php echo $this->element('footer');?>
          <!-- END FOOTER -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <?php
echo $this->Html->script([
'/plugins/pace/pace.min.js',
'/plugins/jquery/jquery-1.11.1.min.js',
'/plugins/modernizr.custom.js',
'/plugins/jquery-ui/jquery-ui.min.js',
'/plugins/tether/js/tether.min.js',
'/plugins/bootstrap/js/bootstrap.min.js',
'/plugins/jquery/jquery-easy.js',
'/plugins/jquery-unveil/jquery.unveil.min.js',
'/plugins/jquery-bez/jquery.bez.min.js',
'/plugins/jquery-ios-list/jquery.ioslist.min.js',
'/plugins/imagesloaded/imagesloaded.pkgd.min.js',
'/plugins/jquery-actual/jquery.actual.min.js',
'/plugins/jquery-scrollbar/jquery.scrollbar.min.js',
'pages.mim.js',
'scripts.js'
]);
echo $this->fetch('script');
?>
  </body>

  </html>