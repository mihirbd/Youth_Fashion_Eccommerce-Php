<?php
//$category_id=$_GET['id'];
$query_results=$obj_app->select_published_product_by_category_id_seven();
$product_infow = mysqli_fetch_assoc($query_results);

$query_resulte=$obj_app->select_published_product_by_category_id_eight();
$product_infom = mysqli_fetch_assoc($query_resulte);


$query_resultex=$obj_app->select_ex_category_product_info_by_id();
$product_infoex= mysqli_fetch_assoc($query_resultex);

$query_result = $obj_app->select_all_product_info();
?>
<div class="content" style="font-family: Comic Sans MS;">
    <div class="container">
        <div class="content-top">
            <h2 style="color:#FA08BC; text-align: center;font-family: Comic Sans MS;"><b>Feature Item</b></h2>
            <div class="content-top1">
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="product_details.php">
                            <img class="img-responsive" src="assets/<?php echo $product_infom['product_image']; ?>" alt="" />
                        </a>
                        <h3><a href="product_details.php"><?php echo $product_infom['product_name']; ?></a></h3>
                        <div class="price">
                            <h5 class="item_price">BDT:<?php echo $product_infom['product_price']; ?></h5>
                            <a href="product_details.php?id=<?php echo $product_infom['product_id']; ?>" class="item_add">Details</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md5 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="product_details.php?id=<?php echo $product_infoex['product_id']; ?>">
                            <img class="img-responsive" style="height: 320px; width: 520px;"src="assets/<?php echo $product_infoex['product_image']; ?>" alt="" />
                        
                        </a>
                        <h4 style="font-family: Comic Sans MS; text-align: center;background-color:#FD9EE5; color:white; padding: 10px; "><b><?php echo $product_infoex['product_name']; ?></b></h4> 
                    </div>
                </div>	
                	
                <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="#">
                            <img class="img-responsive" src="assets/<?php echo $product_infow['product_image']; ?>" alt="" />
                        </a>
                        <h3><a href="#"><?php echo $product_infow['product_name']; ?></a></h3>
                        <div class="price">
                            <h5 class="item_price">BDT:<?php echo $product_infow['product_price']; ?></h5>
                            <a href="product_details.php?id=<?php echo $product_infow['product_id']; ?>" class="item_add">Details</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>	
                <div class="clearfix"> </div>
            </div>
            <h2 style="color:#FA08BC; text-align: center; font-family: Comic Sans MS;"><b>Women Fashion</b></h2>
            <div class="content-top1">
                <?php while ($product_infow = mysqli_fetch_assoc($query_results)) { ?>
                    
                    <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                        
                        <div class="col-md1 simpleCart_shelfItem">
                            <img class="img-responsive" src="assets/<?php echo $product_infow['product_image']; ?>" alt="" style="width: 150px; height: 300px;"/>
                            <h3><a href="#"><?php echo $product_infow['product_name']; ?></a></h3>
                            <div class="price">
                                <h5 class="item_price">BDT:<?php echo $product_infow['product_price']; ?></h5>
                                <a href="product_details.php?id=<?php echo $product_infow['product_id']; ?>" class="item_add">Details</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    
                <?php } ?>
                
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<br/>
<!--//content-->
<h2 style="color:#FA08BC; text-align: center;font-family: Comic Sans MS;"><b>Exclusive Offer</b></h2>
<br/>

<div class="con-tp" style="font-family: Comic Sans MS;">
    <div class="container">
        <?php while ($product_infoex= mysqli_fetch_assoc($query_resultex)) { ?>
        <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
            <a href="product_details.php?id=<?php echo $product_infoex['product_id']; ?>">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="assets/<?php echo $product_infoex['product_image']; ?>" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4 style="font-family: Comic Sans MS; text-align: center;"><?php echo $product_infoex['product_name']; ?></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>


<div class="c-btm" style="font-family: Comic Sans MS;">
    <h2 style="color:#FA08BC; text-align: center;font-family: Comic Sans MS;"><b>Men Fashion</b></h2>
    <div class="content-top1">
        <div class="container">
            <?php while ($product_infom = mysqli_fetch_assoc($query_resulte)) { ?>
                    
                    <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                        
                        <div class="col-md1 simpleCart_shelfItem">
                            <img class="img-responsive" src="assets/<?php echo $product_infom['product_image']; ?>" alt="" style="width: 150px; height: 300px;"/>
                            <h3><a href="#"><?php echo $product_infom['product_name']; ?></a></h3>
                            <div class="price">
                                <h5 class="item_price">BDT:<?php echo $product_infom['product_price']; ?></h5>
                                <a href="product_details.php?id=<?php echo $product_infom['product_id']; ?>" class="item_add">Details</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    
                <?php } ?>
            <div class="clearfix"> </div>

        </div>	
    </div>
</div>