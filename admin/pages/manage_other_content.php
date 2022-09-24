<?php 
$cnquery_result=$obj_super_admin->select_configaration_info();
$configaration_info=mysqli_fetch_assoc($cnquery_result);
if(isset($_POST['btn'])){
        $message=$obj_super_admin->update_configaration_info($_POST);
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
        <a href="#">Other</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Other Configuration</h2>
            
        </div>
        <h2><?php if(isset($message)){echo $message;} ?></h2>
        <div class="box-content">
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="box-header" data-original-title>
                        <h2><i></i><span class="break"></span>Add Social Link</h2>
            
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead" >Facebook</label>
                        <div class="controls">
                            <input type="text" name="facebook" value="<?php echo $configaration_info['facebook']?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <input type="hidden" name="other_id" value="<?php echo $configaration_info['other_id']?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Twitter</label>
                        <div class="controls">
                            <input type="text" name="twitter" value="<?php echo $configaration_info['twitter']?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Google Plus</label>
                        <div class="controls">
                            <input type="text" name="google_plus" value="<?php echo $configaration_info['google_plus']?>"class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Linked In</label>
                        <div class="controls">
                            <input type="text" name="linked_in" value="<?php echo $configaration_info['linked_in']?>"class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <br/>
                    <div class="box-header" data-original-title>
                        <h2><i></i><span class="break"></span>Add Address</h2>
            
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Address</label>
                        <div class="controls">
                            <input type="text" name="address" value="<?php echo $configaration_info['address']?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Email</label>
                        <div class="controls">
                            <input type="text" name="email" value="<?php echo $configaration_info['email']?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Phone</label>
                        <div class="controls">
                            <input type="text" name="phone" value="<?php echo $configaration_info['phone']?>"class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Mobile</label>
                        <div class="controls">
                            <input type="text" name="mobile" value="<?php echo $configaration_info['mobile']?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="box-header" data-original-title>
                        <h2><i></i><span class="break"></span>Add Copyright</h2>
            
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Copyright</label>
                        <div class="controls">
                            <input type="text" name="copyright" value="<?php echo $configaration_info['copyright']?>"class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Update Configuration</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->