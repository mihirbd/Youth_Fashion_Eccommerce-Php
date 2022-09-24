<?php
$product_id = $_GET['id'];
$query_result = $obj_app->select_product_info_by_id($product_id);
$product_info = mysqli_fetch_assoc($query_result);

$category_id=$product_info['category_id'];
$query_result=$obj_app->select_category_product_info_by_id($category_id);

$cquery_result=$obj_app->select_all_published_category_info(); // for category item
$query_resultp=$obj_app->select_recent_published_product();//for recent product item

if (isset($_POST['btn'])) {
   $query_result = $obj_app->add_product_to_cart($_POST);
}
?>


<div class="breadcrumbs">
   <div class="container">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
         <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
         <li class="active">Product Details</li>
      </ol>
   </div>
</div>
<div class="single">

   <div class="container" style="font-family: Comic Sans MS;">
      <div class="col-md-9">
         <div class="col-md-5 grid">		
            <div class="flexslider">
               <ul class="slides">
                  <li data-thumb="assets/<?php echo $product_info['product_image']; ?>">
                     <div class="thumb-image"> <img height="400" width="150" src="assets/<?php echo $product_info['product_image']; ?>" data-imagezoom="true" class="img-responsive"> </div>
                  </li>
                  <li data-thumb="assets/<?php echo $product_info['product_image']; ?>">
                     <div class="thumb-image"> <img src="assets/<?php echo $product_info['product_image']; ?>" data-imagezoom="true" class="img-responsive"> </div>
                  </li>
                  <li data-thumb="assets/<?php echo $product_info['product_image']; ?>">
                     <div class="thumb-image"> <img src="assets/<?php echo $product_info['product_image']; ?>" data-imagezoom="true" class="img-responsive"> </div>
                  </li>
               </ul>
            </div>
         </div>	
         <div class="col-md-7 single-top-in">
            <div class="single-para simpleCart_shelfItem">
               <h2><?php echo $product_info['product_name']; ?></h2>
               <p><b>Product ID:</b>1000<?php echo $product_info['product_id']; ?></p>
               <p><?php echo $product_info['product_short_description']; ?></p>
               <h3 style="color:#FA03BB; font-family: Comic Sans MS;">Product Description:</h3><p> <?php echo $product_info['product_long_description']; ?></p>
               <label  class="add-to item_price" style="font-family: Comic Sans MS;">BDT:<?php echo $product_info['product_price']; ?></label>

               <div class="available">

                  <ul>
                     <p><b>Available Options : <b/></p>
                     <li>Size: <select>
                           <option>Large</option>
                           <option>Medium</option>
                           <option>small</option>
                           <option>Large</option>
                           <option>small</option>
                        </select></li>

                  </ul>
                  <div class="star-on">
                     <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                     </ul>

                     <div class="review">
                        <a href="#"> 3 reviews </a>/Good
                        <a href="#"></a>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
               <div>
                  <form action="" method="post">
                     <label>Quantity:</label>
                     <input type="text" name="product_quantity" size="3" value="">
                     <input type="hidden" name="product_id" size="3" value="<?php echo $product_info['product_id']; ?>">
                     <button type="submit" class="btn btn-fefault cart" name="btn" style="color:#FA11BF;">
                        <i class="fa fa-shopping-cart"></i>
                        Add to Cart
                     </button>
                  </form>
               </div>


            </div>
         </div>
          <div class="clearfix"> </div>
          <hr/>
          <h2 style="color:#FA03BB; text-align: center;font-family: Comic Sans MS; "><b>Related Product</b></h2>
         <div class="clearfix"> </div>
         <div class="content-top1">
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

            <div class="clearfix"> </div>
         </div>		
      </div>
      <!----->
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
            <h3 class="cate">Best Sellers</h3>
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

<script src="assets/front_end_essets/js/jquery.min.js"></script>
<script src="assets/front_end_essets/js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="assets/front_end_essets/js/memenu.js"></script>
<script>$(document).ready(function () {
               $(".memenu").memenu();
            });</script>
<script src="assets/front_end_essets/js/simpleCart.min.js"></script>
<!--initiate accordion-->

<!-- FlexSlider -->
<script defer src="assets/front_end_essets/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="assets/front_end_essets/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
            $(window).load(function () {
               $('.flexslider').flexslider({
                  animation: "slide",
                  controlNav: "thumbnails"
               });
            });
</script>
<!---pop-up-box---->
<link href="assets/front_end_essets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="assets/front_end_essets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!---//pop-up-box---->
<script>
            $(document).ready(function () {
               $('.popup-with-zoom-anim').magnificPopup({
                  type: 'inline',
                  fixedContentPos: false,
                  fixedBgPos: true,
                  overflowY: 'auto',
                  closeBtnInside: true,
                  preloader: false,
                  midClick: true,
                  removalDelay: 300,
                  mainClass: 'my-mfp-zoom-in'
               });

            });
</script>