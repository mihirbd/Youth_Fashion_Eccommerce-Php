<?php

$cnquery_result=$obj_super_admin->select_configaration_info();
$configaration_info=mysqli_fetch_assoc($cnquery_result);
?>

<div class="container">
    <div class="footer-top">
        <div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
            <h3>Follow Us On</h3>
            <div class="social-icons">
                <ul class="social">
                    <li><a href="<?php echo $configaration_info['facebook'];?>"><i></i></a> </li>
                    <li><a href="<?php echo $configaration_info['twitter'];?>"><i class="facebook"></i></a></li>	
                    <li><a href="<?php echo $configaration_info['google_plus'];?>"><i class="google"></i> </a></li>
                    <li><a href="<?php echo $configaration_info['linked_in'];?>"><i class="linked"></i> </a></li>						
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
            <h3>Newsletter</h3>
            <form action="#" method="post">
                <input type="text" name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = '';
                        }">
                <input type="submit" value="SUBSCRIBE">
            </form>
        </div>
        <div class="clearfix"> </div>	
    </div>	
</div>