<?php
    $order_id=$_GET['id'];
    $customer_query_result=$obj_super_admin->select_customer_info_by_order_id($order_id);
    $customer_info=mysqli_fetch_assoc($customer_query_result);

    $shipping_query_result=$obj_super_admin->select_shipping_info_by_order_id($order_id);
    $shipping_info=mysqli_fetch_assoc($shipping_query_result);
    
    
    $payment_query_result=$obj_super_admin->select_payment_info_by_order_id($order_id);
    $payment_info=mysqli_fetch_assoc($payment_query_result);
    
    $product_query_result=$obj_super_admin->select_product_info_by_order_id($order_id);
    
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>invoice</title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../assets/admin_assets/img/youth fashion index.JPG" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: 00<?php echo $customer_info['order_id']; ?><br>
                                Created Date: <?php echo date("d-m-Y"); ?><br>
                                Order Date: <?php echo $payment_info['payment_date']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <b><u>Shipping Address:</u></b><br>
                                <?php echo $shipping_info['address']; ?><br>
                                <?php echo $shipping_info['district']; ?>
                            </td>
                            
                            <td>
                                <?php echo $customer_info['first_name'].' '.$customer_info['last_name']; ?><br>
                                <?php echo $customer_info['phone_number']; ?><br>
                                <?php echo $customer_info['email_address']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Check
                    
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    <?php echo $payment_info['payment_type'];?>
                </td>
                
                <td>
                   BDT:_ _ _ _ _ _ _ _ _/=
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                <td>
                    Total Price
                </td>
            </tr>
            <?php $sum=0; while ($product_info=mysqli_fetch_assoc($product_query_result)) {?>
            <tr class="item">
                <td>
                    <?php echo $product_info['product_name']; ?>
                </td>
                <td>
                    <?php
                    $pq=$product_info['product_quantity']; $pp=$product_info['product_price'];
                      echo $total=$pq*$pp;
                    ?>
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td>
                    Total:<?php echo $sum=$sum+$total;?>
                </td>
                
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>
