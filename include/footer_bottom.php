<?php
$cquery_result=$obj_app->select_all_published_category_info(); // for category item
$query_result=$obj_app->select_all_manufacturer_published_info();

$cnquery_result=$obj_super_admin->select_configaration_info();//for configuration
$configaration_info=mysqli_fetch_assoc($cnquery_result);

?>

<div class="footer-bottom" style="font-family: Comic Sans MS;">
    <div class="container">
        <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
            <h6>Categories</h6>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php while ($category_info=mysqli_fetch_assoc($cquery_result)){ ?>
                    <li><a href="category.php?id=<?php echo $category_info['category_id'];?>"><?php echo $category_info['category_name'];?> </a></li>
                <?php } ?>

            </ul>
        </div>
        <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
            <h6>Feature Projects</h6>
            <ul>
                <li><a href="#">Dignissim purus</a></li>
                <li><a href="#">Curabitur sapien</a></li>
                <li><a href="#">Tempus pretium</a></li>
                <li><a href="#">Dignissim neque</a></li>
                <li><a href="#">Ornared id aliquet</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
            <h6>Top Manufacturer</h6>
            <ul>
                <?php while ($manufacturer_info=  mysqli_fetch_assoc($query_result)) {?>
                <li><a href="products.php"><?php echo $manufacturer_info['manufacturer_name']; ?></a></li>
                <?php }?>

            </ul>
        </div>
        <div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
            <h6>Our Address</h6>
            <ul>
                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : <?php echo $configaration_info['address'];?></li>
                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="<?php echo $configaration_info['email'];?>"><?php echo $configaration_info['email'];?></a></li>
                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : <?php echo $configaration_info['phone'];?></li>
                <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>Mobile : <?php echo $configaration_info['mobile'];?></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><?php echo $configaration_info['copyright'];?>| Developt By <a href="http://facebook.com/mstarequlislam" target="_blank">Tarequl Islam Mihir</a> </p>
    </div>
</div>