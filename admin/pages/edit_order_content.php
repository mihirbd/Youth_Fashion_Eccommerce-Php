
<?php
$query_result = $obj_super_admin->select_all_order_info();
$order_info = mysqli_fetch_assoc($query_result);

if (isset($_POST['btn'])) {
    $_SESSION['message']=$obj_super_admin->update_order_info($_POST);
}

?>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Order info goes Here</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2>
            <?php
            if (isset($message)) {
                echo $message;
                unset($message);
            }
            ?>
        </h2>
        <h2>
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
        </h2>
        <div class="box-content">
            <form action="" method="post">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Payment ID</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td><input type="hidden" name="order_id" value="<?php echo $order_info['order_id']; ?>"><?php echo $order_info['order_id']; ?></td>
                            <td><input type="hidden" name="payment_id" value="<?php echo $order_info['payment_id']; ?>"><?php echo $order_info['payment_id']; ?></td>
                            
                            <td class="center"><?php echo $order_info['first_name'] . ' ' . $order_info['last_name']; ?></td>
                            <td class="center"><?php echo $order_info['order_total']; ?></td>
                            <td class="center"><?php echo $order_info['order_date']; ?></td>
                            <td class="center"><input type="text" name="order_status" value="<?php echo $order_info['order_status']; ?>"></td>
                            <td class="center"><input type="text" name="payment_status" value="<?php echo $order_info['payment_status']; ?>"></td>
                            <td class="center"><input type="submit" name="btn" value="Save Order" class="btn btn-info"></td>

                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div><!--/span-->
</div><!--/row-->