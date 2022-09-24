
<?php
require '../classes/application.php';
$obj_app=new Application();
$category_result=$obj_app->select_all_published_category_info();
$manufacturer_result=$obj_app->select_all_manufacturer_published_info();

$product_id=$_GET['id'];
$query_result=$obj_super_admin->select_product_info_by_id($product_id);
$product_info=mysqli_fetch_assoc($query_result);

if(isset($_POST['btn'])){
    $_SESSION['message']=$obj_super_admin->Update_product_info($_POST);
}



?>



<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.php">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Forms</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product Form</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2>
            <?php if (isset($message)) {
                echo $message;
            } ?>
        </h2>
        <div class="box-content">
            <form name="edit_product_form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name</label>
                        <div class="controls">
                            <input type="text" name="product_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" value="<?php echo $product_info['product_name'];?>">
                            <input type="hidden" name="product_id" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" value="<?php echo $product_info['product_name'];?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Category Name</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <option>--Select Category Name--</option>
                                <?php while ($category_info=mysqli_fetch_assoc($category_result)) {?>
                                <option value="1"><?php echo $category_info['category_name'];?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Manufacturer Name</label>
                        <div class="controls">
                            <select id="selectError3" name="manufacturer_id">
                                <option>--Select Manufacturer Name--</option>
                                <?php while ($manufacturer_info=mysqli_fetch_assoc($manufacturer_result)) {?>
                                <option value="1"><?php echo $manufacturer_info['manufacturer_name'];?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead" >Product Price</label>
                        <div class="controls">
                            <input type="number" name="product_price" value="<?php echo $product_info['product_price'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead" >Stock Quantity</label>
                        <div class="controls">
                            <input type="number" name="stock_quantity" value="<?php echo $product_info['stock_quantity'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead" >Product SKU</label>
                        <div class="controls">
                            <input type="number" name="product_sku" value="<?php echo $product_info['product_sku'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2" value="">Product Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_short_description" id="textarea2" rows="3"><?php echo $product_info['product_short_description'];?></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2" value="">Product Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"><?php echo $product_info['product_long_description'];?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead" >Product Image</label>
                        <div class="controls">
                            <input type="file" name="product_image" value="<?php echo $product_info['product_image'];?>"  class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status" >
                                <option>--Select Publication Status--</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Update Product</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script>
    document.forms['edit_product_form'].elements['publication_status'].value='<?php echo $product_info['publication_status'];?>';
</script>