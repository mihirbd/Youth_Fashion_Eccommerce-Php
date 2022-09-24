<?php
    if(isset($_GET['status'])){
        $slider_id=$_GET['id'];
        
        if($_GET['status']=='delete'){
            $message=$obj_super_admin->delete_slider_by_id($slider_id);
        }
    }

    $query_result=$obj_super_admin->select_slider_info();
    

?>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Slider info goes Here</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2>
            <?php
                if(isset($message)){
                    echo $message;
                    unset($message);
                }
            ?>
        </h2>
        <h2>
            <?php
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
               
            ?>
        </h2>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Slider ID</th>
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Offer</th>
                        <th>Slider Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($slider_info=mysqli_fetch_assoc($query_result)) {?>
                    <tr>
                        <td><?php echo $slider_info['slider_id'];?></td>
                        <td class="center"><?php echo $slider_info['category'];?></td>
                        <td class="center"><?php echo $slider_info['product_name'];?></td>
                        <td class="center"><?php echo $slider_info['offer'];?></td>
                        <td class="center">
                        <img class="img-responsive" src="<?php echo $slider_info['slider_image'];?>" alt="" style="width: 50px; height: 50px;"/>
                        </td>
                        <td class="center">
                            <a class="btn btn-info" href="edit_slider.php?id=<?php echo $slider_info['slider_id']; ?>" title="Edit">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="?status=delete&&id=<?php echo $slider_info['slider_id']; ?>" title="Delete" onclick="return check_delete_info();">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div><!--/row-->