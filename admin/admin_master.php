<?php
ob_start();
session_start();
$user_id=$_SESSION['user_id'];
if($user_id==Null){
    header('Location:index.php');
}


require '../classes/super_admin.php';
$obj_super_admin=new Super_admin();

if(isset($_GET['status'])){
    if($_GET['status']=='logout'){
        $obj_super_admin->logout();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="../assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/admin_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="../assets/admin_assets/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="../assets/admin_assets/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- start: Favicon -->
        <link rel="shortcut icon" href="../assets/admin_assets/../assets/admin_assets/img/favicon.ico">
        <!-- end: Favicon -->
        <script>
            function check_delete_info(){
                var check=confirm ('are you Sure to delete this?');
                if(check){
                    return true;
                }else{
                    return false;
                }
            }
        
        </script>

    </head>

    <body>
        
        <!-- start: Header -->
        <?php include './include/header.php'; ?>
        
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <?php include './include/admin_sidebar.php'; ?>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>
                <div id="content" class="span10">
                <!-- start: Content -->
                <?php
                if(isset($admin_pages)){
                    switch($admin_pages){
                        case 'category':
                            include './pages/category_content.php';
                            break;
                        case 'm_category':
                            include './pages/m_category_content.php';
                            break;
                        case 'edit_category':
                            include './pages/edit_category_content.php';
                            break;
                        case 'manufacturer':
                            include './pages/manufacturer_content.php';
                            break;
                        case 'manage_manufacturer':
                            include './pages/manage_manufacturer_content.php';
                            break;
                        case 'edit_manufacturer':
                            include './pages/edit_manufacturer_content.php';
                            break;
                        case 'add_product':
                            include './pages/add_product_content.php';
                            break;
                        case 'manage_product':
                            include './pages/manage_product_content.php';
                            break;
                        case 'edit_product':
                            include './pages/edit_product_content.php';
                            break;
                        case 'manage_order':
                            include './pages/manage_order_content.php';
                            break;
                        case 'view_order':
                            include './pages/view_order_content.php';
                            break;
                        case 'view_invoice':
                            include './pages/view_invoice_content.php';
                            break;
                        case 'edit_order':
                            include './pages/edit_order_content.php';
                            break;
                        case 'message':
                            include './pages/message_content.php';
                            break;
                        case 'other':
                            include './pages/other_content.php';
                            break;
                        case 'manage_other':
                            include './pages/manage_other_content.php';
                            break;
                        case 'add_slider':
                            include './pages/add_slider_content.php';
                            break;
                        case 'manage_slider':
                            include './pages/manage_slider_content.php';
                            break;
                        case 'edit_slider':
                            include './pages/edit_slider_content.php';
                            break;
                        
                    }
                    
                }else {
                    include './pages/home_content.php';
                }
                
                ?>
                <!--/.fluid-container-->
                </div>
                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>
        <?php include './include/footer.php';?>
        <!-- start: JavaScript-->

        <script src="../assets/admin_assets/js/jquery-1.9.1.min.js"></script>
        <script src="../assets/admin_assets/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="../assets/admin_assets/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.ui.touch-punch.js"></script>

        <script src="../assets/admin_assets/js/modernizr.js"></script>

        <script src="../assets/admin_assets/js/bootstrap.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.cookie.js"></script>

        <script src='../assets/admin_assets/js/fullcalendar.min.js'></script>

        <script src='../assets/admin_assets/js/jquery.dataTables.min.js'></script>

        <script src="../assets/admin_assets/js/excanvas.js"></script>
        <script src="../assets/admin_assets/js/jquery.flot.js"></script>
        <script src="../assets/admin_assets/js/jquery.flot.pie.js"></script>
        <script src="../assets/admin_assets/js/jquery.flot.stack.js"></script>
        <script src="../assets/admin_assets/js/jquery.flot.resize.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.chosen.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.uniform.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.cleditor.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.noty.js"></script>

        <script src="../assets/admin_assets/js/jquery.elfinder.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.raty.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.iphone.toggle.js"></script>

        <script src="../assets/admin_assets/js/jquery.uploadify-3.1.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.gritter.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.imagesloaded.js"></script>

        <script src="../assets/admin_assets/js/jquery.masonry.min.js"></script>

        <script src="../assets/admin_assets/js/jquery.knob.modified.js"></script>

        <script src="../assets/admin_assets/js/jquery.sparkline.min.js"></script>

        <script src="../assets/admin_assets/js/counter.js"></script>

        <script src="../assets/admin_assets/js/retina.js"></script>

        <script src="../assets/admin_assets/js/custom.js"></script>
        <!-- end: JavaScript-->

    </body>
</html>
