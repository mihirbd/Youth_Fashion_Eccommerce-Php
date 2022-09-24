<?php
$category_id=$_GET['id'];
$query_result=$obj_app->select_published_product_by_category_id($category_id);

$cquery_result=$obj_app->select_all_published_category_info();

$query_resultp=$obj_app->select_recent_published_product();

?>


<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active"></li>
        </ol>
    </div>
</div>
<!--content-->
<div class="products" style="font-family: Comic Sans MS;">
    <div class="container">
        
        <div class="col-md-9">  
            <?php while ($category_product=mysqli_fetch_assoc($query_result)) {?>
            <div class="col-md-4 col-md4">
                
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="#">
                            <img class="img-responsive" src="assets/<?php echo $category_product['product_image']; ?>" alt="" />
                        </a>
                        <h3><a href="#"><?php echo $category_product['product_name']; ?></a></h3>
                        <div class="price">
                            <h5 class="item_price">BDT:<?php echo $category_product['product_price']; ?></h5>
                            <a href="product_details.php?id=<?php echo $category_product['product_id']; ?>" class="item_add">Details</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                
            </div>	
            <?php }?>
        	
        </div>
        <div class="col-md-3 product-bottom">
            <!--categories-->
            <div class=" rsidebar span_1_of_left">
                <h3 class="cate">Categories</h3>
                <ul class="menu-drop">
                    <?php while ($category_info=mysqli_fetch_assoc($cquery_result)){ ?>
                    <li class="item1"><a href="category.php?id=<?php echo $category_info['category_id'];?>"><?php echo $category_info['category_name'];?> </a></li>
                    <?php } ?>
                </ul>
            </div>
            
            <!--seller-->
            <div class="product-bottom">
                <h3 class="cate">Recent Item</h3>
                <?php while ($recent_product=mysqli_fetch_assoc($query_resultp)){?>
                
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="#"><img class="img-responsive " src="assets/<?php echo $recent_product['product_image']; ?>" alt=""></a>	
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="product_details.php?id=<?php echo $recent_product['product_id']; ?>" ><?php echo $recent_product['product_name']; ?></a></h6>
                        <span class=" price-in1">BDT:<?php echo $recent_product['product_price']; ?></span>
                    </div>	
                    <div class="clearfix"> </div>
                </div>
                <?php }?>	
            </div>

            <!--//seller-->
            <!--tag-->
            <div class="tag">	
                <h3 class="cate">Tags</h3>
                <div class="tags">
                    <ul>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>					
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//content-->