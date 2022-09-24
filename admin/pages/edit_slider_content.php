<?php
    $query_result=$obj_super_admin->select_slider_info();
    $slider_info=mysqli_fetch_assoc($query_result);
    
    
    if(isset($_POST['btn'])){
        $message=$obj_super_admin->update_slider_info($_POST);
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
        <a href="#">Slider</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Slider</h2>
            
        </div>
        <h2><?php if(isset($message)){echo $message;} ?></h2>
        <div class="box-content">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="box-header" data-original-title>
                        <h2><i></i><span class="break"></span>Edit Slider Content</h2>
            
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category</label>
                        <div class="controls">
                            <input type="text" name="category" value="<?php echo $slider_info['category'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <input type="hidden" name="slider_id" value="<?php echo $slider_info['slider_id'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name</label>
                        <div class="controls">
                            <input type="text" name="product_name" value="<?php echo $slider_info['product_name'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Add Offer</label>
                        <div class="controls">
                            <input type="text" name="offer" value="<?php echo $slider_info['offer'];?>"class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Slider Image</label>
                        <div class="controls">
                            <input type="file" name="slider_image" value="<?php echo $slider_info['slider_image'];?>"class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Save Slider</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->