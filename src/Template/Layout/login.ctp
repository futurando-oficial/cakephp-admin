<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <?php echo $this->element('CakePagesTemplate.SEO'); ?>
        <?php
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');

        echo $this->Html->css([
            'CakePagesTemplate./plugins/pace/pace-theme-flash.css',
            'CakePagesTemplate./plugins/bootstrap/css/bootstrap.min.css',
            'CakePagesTemplate./plugins/font-awesome/css/font-awesome.css',
            'CakePagesTemplate./plugins/jquery-scrollbar/jquery.scrollbar.css',
            'CakePagesTemplate./plugins/select2/css/select2.min.css',
            'CakePagesTemplate./plugins/switchery/css/switchery.min.css',
            'CakePagesTemplate.pages-icons.css',
            'CakePagesTemplate.pages.min.css'
        ]);

        echo $this->fetch('css');
        ?>
        <script type="text/javascript">
            window.onload = function () {
                // fix for windows 8
                if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                    document.head.innerHTML += '<?= $this->Html->css("CakePagesTemplate.windows.chrome.fix.css"); ?>'
            }
        </script>
    </head>
    <body class="fixed-header ">
        <div class="login-wrapper ">
            <!-- START Login Background Pic Wrapper-->
            <div class="bg-pic">
                <!-- START Background Pic-->
                <img src="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
                <!-- END Background Pic-->
                <!-- START Background Caption-->
                <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                    <h2 class="semi-bold text-white">
                        Pages make it easy to enjoy what matters the most in the life</h2>
                    <p class="small">
                        images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise © 2013-2014 REVOX.
                    </p>
                </div>
                <!-- END Background Caption-->
            </div>
            <!-- END Login Background Pic Wrapper-->
            <!-- START Login Right Container-->
            <div class="login-container bg-white">
                <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                    <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    <p class="p-t-35">Sign into your pages account</p>
                    <!-- START Login Form -->
                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->fetch('content'); ?>
                    <!--END Login Form-->
                    <div class="pull-bottom sm-pull-bottom">
                        <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                            <div class="col-sm-3 col-md-2 no-padding">
                                <img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
                            </div>
                            <div class="col-sm-9 no-padding m-t-10">
                                <p>
                                    <small>
                                        Create a pages account. If you have a facebook account, log into it for this
                                        process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Login Right Container-->
        </div>
        <?php
        echo $this->Html->script([
            'CakePagesTemplate./plugins/pace/pace.min.js',
            'CakePagesTemplate./plugins/jquery/jquery-1.11.1.min.js',
            'CakePagesTemplate./plugins/modernizr.custom.js',
            'CakePagesTemplate./plugins/jquery-ui/jquery-ui.min.js',
            'CakePagesTemplate./plugins/tether/js/tether.min.js',
            'CakePagesTemplate./plugins/bootstrap/js/bootstrap.min.js',
            'CakePagesTemplate./plugins/jquery/jquery-easy.js',
            'CakePagesTemplate./plugins/jquery-unveil/jquery.unveil.min.js',
            'CakePagesTemplate./plugins/jquery-ios-list/jquery.ioslist.min.js',
            'CakePagesTemplate./plugins/jquery-actual/jquery.actual.min.js',
            'CakePagesTemplate./plugins/jquery-scrollbar/jquery.scrollbar.min.js',
            'CakePagesTemplate./plugins/select2/js/select2.full.min.js',
            'CakePagesTemplate./plugins/classie/classie.js',
            'CakePagesTemplate./plugins/switchery/js/switchery.min.js',
            'CakePagesTemplate./plugins/jquery-validation/js/jquery.validate.min.js',
            'CakePagesTemplate.pages.min.js'
        ]);
        echo $this->fetch('script');
        ?>
        <script>
            $(function () {
                $('#form-login').validate()
            });
        </script>
    </body>
</html>