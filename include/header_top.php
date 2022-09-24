<?php
if(isset($_GET['status'])){
    if($_GET['status']=='logout'){
        $obj_app->customer_logout();
    }
}

?>


<div class="header-top">
    <div class="container">
        <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
            <h1><a href="index.php">Youth <span>Fashion</span></a></h1>	
        </div>
        <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
            <div class="cart box_1">
                <a href="cart.php">
                    <h3> <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="assets/front_end_essets/images/cart.png" alt=""/></h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

            </div>
        </div>
        <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
            <i class="glyphicon glyphicon-log-in"></i>
            <?php $customer_id=  isset($_SESSION['customer_id']);
            if($customer_id) {?>
            
            <a href="?status=logout" style="text-decoration: none; color: black;"> Logout</a>
            <?php } else {?>
                <a href="login.php" style="text-decoration: none; color: black;"> Login</a>
            <?php }?>
            <div class="clearfix"> </div>
            <p><?phpisset($_SESSION['customer_name'];) ?></p>
        </div>
        
        <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">		
            Search <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>