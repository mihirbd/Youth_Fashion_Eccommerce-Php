<?php
$category_id = $_GET['id'];
$query_result = $obj_app->select_published_product_by_id($category_id);
?>


<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Women</li>
        </ol>
    </div>
</div>
<!--content-->
<div class="products">
    <div class="container">
        <h2>Women</h2>
        <div class="col-md-9">
            <?php while ($product_info = mysqli_fetch_assoc($query_result)) { ?>
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                   <div class="col-md1 simpleCart_shelfItem">
                       <img class="img-responsive" src="assets/<?php echo $product_info['product_image']; ?>" alt="" style="width: 150px; height: 300px;"/>
                       <h3><a href="#"><?php echo $product_info['product_name']; ?></a></h3>
                       <div class="price">
                           <h5 class="item_price">BDT:<?php echo $product_info['product_price']; ?></h5>
                           <a href="products_content.php" class="item_add">Details</a>
                           <div class="clearfix"> </div>
                       </div>
                   </div>
               </div>       
            <?php } ?>
            
        </div>
        <div class="col-md-3 product-bottom">
            <!--categories-->
            <div class=" rsidebar span_1_of_left">
                <h3 class="cate">Categories</h3>
                <ul class="menu-drop">
                    <li class="item1"><a href="#">Men </a></li>
                    <li class="item2"><a href="#">Women </a></li>
                    <li class="item3"><a href="#">Kids</a></li>
                    <li class="item4"><a href="#">Accessories</a></li>
                    <li class="item4"><a href="#">Shoes</a></li>
                </ul>
            </div>
            <!--initiate accordion--> 
            <div class="product-bottom">
                <h3 class="cate">Best Sellers</h3>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.php"><img class="img-responsive " src="assets/front_end_essets/images/pr.jpg" alt=""></a>	
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>	
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.php"><img class="img-responsive " src="assets/front_end_essets/images/pr1.jpg" alt=""></a>	
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>	
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.php"><img class="img-responsive " src="assets/front_end_essets/images/pr2.jpg" alt=""></a>	
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>	
                    <div class="clearfix"> </div>
                </div>	
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.php"><img class="img-responsive " src="assets/front_end_essets/images/pr3.jpg" alt=""></a>	
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>	
                    <div class="clearfix"> </div>
                </div>		
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