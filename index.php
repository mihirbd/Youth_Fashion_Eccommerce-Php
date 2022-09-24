<?php
ob_start();
session_start();
require './classes/application.php';
$obj_app = new Application();

require './classes/super_admin.php';
$obj_super_admin = new Super_admin();
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Youth Fashion | Home</title>
        <link href="assets/front_end_essets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/front_end_essets/js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="assets/front_end_essets/css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <!-- start menu -->
        <script src="assets/front_end_essets/js/bootstrap.min.js"></script>
        <script src="assets/front_end_essets/js/simpleCart.min.js"></script>
        <script src="assets/front_end_essets/js/main.js" type="text/javascript"></script>
        <!-- slide -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: false,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <!-- animation-effect -->
        <link href="assets/front_end_essets/css/animate.min.css" rel="stylesheet"> 
        <script src="assets/front_end_essets/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- //animation-effect -->
    </head>
    <body>
        <!--header-->
        <div class="header">
            <?php include './include/header_top.php'; ?>
            <?php include './include/header_bottom.php'; ?>
        </div>

        <!--content-->
        <?php
        if (isset($pages)) {
            switch ($pages) {
                case'category':
                    include './pages/category_content.php';
                    break;
                case'women':
                    include './pages/women_content.php';
                    break;
                case'men':
                    include './pages/men_content.php';
                    break;
                case'products':
                    include './pages/products_content.php';
                    break;
                case'login':
                    include './pages/login_content.php';
                    break;
                case'contact':
                    include './pages/contact_content.php';
                    break;
                case'single':
                    include './pages/single_content.php';
                    break;
                case 'checkout':
                    include './pages/checkout_content.php';
                    break;
                case 'product_details':
                    include './pages/product_details_content.php';
                    break;
                case 'cart':
                    include './pages/cart_content.php';
                    break;
                case 'shipping':
                    include './pages/shipping_content.php';
                    break;
                case 'payment':
                    include './pages/payment_content.php';
                    break;
                case 'customer_home':
                    include './pages/customer_home_content.php';
                    break;
            }
        } else {

            include './include/banner.php';
            include './include/main_content.php';
        }
        ?>
        <!--content-->
        <!--footer-->
        <div class="footer">
            <?php include './include/footer_top.php'; ?>
            <?php include './include/footer_bottom.php'; ?>
        </div>
        <!--footer-->
    </body>
</html>