<?php
   $query_result=$obj_super_admin->select_slider_info();
   $slider_info=mysqli_fetch_assoc($query_result);
?>
<div class="banner">
    <div class="matter-banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <img src="assets/<?php echo $slider_info['slider_image'];?>" alt="">
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2><?php echo $slider_info['category'];?></h2>
                            <h3 style="color: #5E334F;"><?php echo $slider_info['product_name'];?></h3>
                            <h4><?php echo $slider_info['offer'];?></h4>
                            <p>Exclusive</p>
                        </div>
                    </li>
                    <li>
                        <img src="assets/front_end_essets/images/3.jpg" alt=""> 
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>					
                    </li>
                    <li>
                        <img src="assets/front_end_essets/images/2.jpg" alt="">
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>
                    </li>	
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<!-- slide -->
<script src="assets/front_end_essets/js/responsiveslides.min.js"></script>
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