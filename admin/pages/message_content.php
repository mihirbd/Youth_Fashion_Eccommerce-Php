<?php
$query_result = $obj_super_admin->select_all_contact_info();
?>

<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
<?php while ($contact_info = mysqli_fetch_assoc($query_result)) { ?>
            <tr>
            <div class="box-header" data-original-title>
                <h2><i></i><span class="break"></span><b>Name:</b> <?php echo $contact_info['name']; ?></h2>
                <h2><i></i><span class="break"></span><b>Email:</b> <?php echo $contact_info['email']; ?></h2>
                <h2><i></i><span class="break"></span><b>Phone:</b> <?php echo $contact_info['phone']; ?></h2>
            </div>

            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                        <div class="box-content" ><b>Message:</b></div>
                        <td colspan="4"><?php echo $contact_info['message']; ?></td>

            </tr>
            <tr>
                <td class="center" colspan="1">
                    <a class="btn btn-overlay" href="view_order.php?id=<?php //echo $order_info['order_id'];  ?>" title="view Order">
                        <i class="halflings-icon white info"></i>  
                    </a>

                    <a class="btn btn-danger" href="?status=delete&&id=<?php //echo $order_info['order_id'];  ?>" title="Delete" onclick="return check_delete_info();">
                        <i class="halflings-icon white trash"></i> 
                    </a>
                </td>
            </tr>
        </table>
    </td>
    </tr>
<?php } ?>
</table>            
</div>
