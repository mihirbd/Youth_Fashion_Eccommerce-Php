<?php
$query_result=$obj_app->select_all_product_info();
?>


<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Products</li>
        </ol>
    </div>
</div>
<!--content-->
<div class="products">
    <div class="container">
        <h2>Products</h2>
        <div class="col-md-9">
            <?php while ($product_info=mysqli_fetch_assoc($query_result)) {?>
            <div class="col-md-4 col-md4">
                
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.php">
                            <img class="img-responsive" src="assets/<?php echo $product_info['product_image']; ?>" alt="" />
                        </a>
                        <h3><a href="single.php"><?php echo $product_info['product_name']; ?></a></h3>
                        <div class="price">
                            <h5 class="item_price">BDT:<?php echo $product_info['product_price']; ?></h5>
                            <a href="product_details.php?id=<?php echo $product_info['product_id']; ?>" class="item_add">Product Details</a>
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
                    <li class="item1"><a href="#">Men </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.php">Automatic Fails </a></li>
                        </ul>
                    </li>
                    <li class="item2"><a href="#">Women </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.php">Automatic Fails </a></li>
                        </ul>
                    </li>
                    <li class="item3"><a href="#">Kids</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.php">Automatic Fails</a></li>
                        </ul>
                    </li>
                    <li class="item4"><a href="#">Accessories</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.php">Automatic Fails</a></li>
                        </ul>
                    </li>

                    <li class="item4"><a href="#">Shoes</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="product.php">Cute Kittens </a></li>
                            <li class="subitem2"><a href="product.php">Strange Stuff </a></li>
                            <li class="subitem3"><a href="product.php">Automatic Fails </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function () {
                    var menu_ul = $('.menu-drop > li > ul'),
                            menu_a = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function (e) {
                        e.preventDefault();
                        if (!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true, true).slideUp('normal');
                        }
                    });

                });
            </script>
            <!--//menu-->
            <!--seller-->
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