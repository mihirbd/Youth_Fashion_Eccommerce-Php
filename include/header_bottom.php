<?php 
    $cquery_result=$obj_app->select_all_published_category_info();

?>


<div class="container">
    <div class="head-top">
        <div class="n-avigation">

            <nav class="navbar nav_bottom" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div> 
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav nav_1">
                        <li><a href="index.php">Home</a></li>
                         <?php while ($category_info=mysqli_fetch_assoc($cquery_result)){ ?>
                        
                        <li class="last"><a href="category.php?id=<?php echo $category_info['category_id'];?>"><?php echo $category_info['category_name'];?></a></li>
                        
                         <?php } ?>
                        
<!--                        <li><a href="products.php">Products</a></li>-->
                        
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
        </div>


        <div class="clearfix"> </div>
        <!---pop-up-box---->   
        <link href="assets/front_end_essets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <script src="assets/front_end_essets/js/jquery.magnific-popup.js" type="text/javascript"></script>
        <!---//pop-up-box---->
        <div id="small-dialog" class="mfp-hide">
            <div class="search-top">
                <div class="login">
                    <form action="#" method="post">
                        <input type="submit" value="">
                        <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = '';
                                }">		

                    </form>
                </div>
                <p>	Shopping</p>
            </div>				
        </div>
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
        <!---->		
    </div>
</div>