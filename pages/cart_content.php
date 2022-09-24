<?php
if(isset($_POST['btn'])){
   $message=$obj_app->update_cart_product_by_temp_cart_id($_POST); 
}
if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $temp_cart_id=$_GET['id'];
        $message=$obj_app->delete_cart_product_by_temp_cart_id($temp_cart_id);
    }
}

$session_id=session_id();
$query_result=$obj_app->select_cart_product_by_session_id($session_id);

?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Cart</li>
        </ol>
    </div>
</div>
<!---->

<div class="container" style="font-family: Comic Sans MS;" >
    <div class="check-out">
        <h2 style="font-family: Comic Sans MS;" >Cart Product</h2>
        <h4 style="color:red; text-align: center;"><?php if(isset($message)){echo $message;unset($message);}?></h4>
        <h4 style="color:red; text-align: center;"><?php if(isset($massage)){echo $massage;unset($massage);}?></h4>
        <table class="table table-condensed">
            
            <tr>
                <th>Product Item</th>
                <th>Quantity</th>		
                <th>Prices</th>
                <th>Delivery details</th>
                <th>Sub total</th>
            </tr>
            
            <?php $sum=0; while ($cart_product=mysqli_fetch_assoc($query_result)) { ?>
            
            <tr>
               <td class="ring-in"><a href="product_details.php" class="at-in"><img src="assets/<?php echo $cart_product['product_image']; ?>" class="img-responsive" alt=""></a>
                    <div class="sed">
                        <h5><?php echo $cart_product['product_name']; ?></h5>
                        <p><b>Product NO:</b>1000<?php echo $cart_product['product_id']; ?></p>
                    </div>
                    <div class="clearfix"> </div></td>
               <td>
                   <form action="" method="post">
                       <div>
                           <input type="text" size="2" name="product_quantity" value="<?php echo $cart_product['product_quantity']; ?>">
                           <input type="hidden" size="2" name="temp_cart_id" value="<?php echo $cart_product['temp_cart_id']; ?>">
                           <button type="submit" name="btn" class="" title="Update">
                               <span class="glyphicon glyphicon-upload"></span>
                           </button>
                           
                       </div>
                   </form>
                   
               
               </td>		
                <td>BDT:<?php echo $cart_product['product_price']; ?></td>
                <td>FREE SHIPPING</td>
                <td>BDT:
                <?php 
                $sub_total=$cart_product['product_price']*$cart_product['product_quantity'];
                echo $sub_total;
                ?>
                
                </td>
                <td class="cart_delete">
                    <a class="btn btn-danger" href="?status=delete&&id=<?php echo $cart_product['temp_cart_id']; ?>" title="Delete" onclick="">
                       <i class="halflings-icon white trash">X</i> 
                    </a>
                </td>
            </tr>
            
            <?php $sum=$sum+$sub_total; }?>
        </table>
        <hr style="color:#FA03BB;"/>
        
        <div class="clearfix"> </div>
        <table class="table table-condensed" style="width: 50%; float: right;">
            <tr class="success">
                <th>Sub Total</th>
                <th>BDT: <?php echo $sum;?></th>
            </tr>
            <tr class="danger">
                <th>Total Vat</th>
                <th>BDT: <?php
                $vat=($sum*15)/100;
                echo $vat;
                ?></th>
            </tr>
            <tr class="info">
                <th>Grand Total</th>
                <th>BDT: <?php $grand_total=$vat+$sum;
                $_SESSION['order_total']=$grand_total;
                echo $grand_total;?></th>
            </tr>
        </table>
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="well" style="margin-top: 80px;">
                        <?php
                        $customer_id=  isset($_SESSION['customer_id']);
                        $shipping_id=  isset($_SESSION['shipping_id']);
                        if($customer_id !=NULL && $shipping_id !=NULL){
                        ?>
                        <a href="shipping.php" class="btn btn-primary pull-right">Payment</a>
                        <?php }  else if($customer_id !=NULL && $shipping_id ==NULL){?>
                            <a href="shipping.php" class="btn btn-primary pull-right">Shipping</a>
                        <?php } else {?>
                            <a href="checkout.php" class="btn btn-primary pull-right">Checkout</a>
                        <?php };?>
                        <a href="index.php" class="btn btn-success">Continue Shopping</a>
                    </div>  
            </div>   
        </div>  
    </div>
</div>







