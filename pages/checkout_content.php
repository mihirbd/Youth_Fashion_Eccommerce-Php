<script>
    var xmlhttp=new XMLHttpRequest();
    
    function ajax_email_check(given_email, objID) {
        //alert(objID);
        var server_page='email_check.php?email='+given_email;
        xmlhttp.open('GET', server_page);
        xmlhttp.onreadystatechange = function () {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(objID).innerHTML=xmlhttp.responseText;
                if(xmlhttp.responseText == 'Email already exists') {
                    document.getElementById('reg_btn').disabled=true;
                } else {
                    document.getElementById('reg_btn').disabled=false;
                }
            }
        }
        xmlhttp.send(null);
    }
</script>


<?php
if (isset($_POST['btn'])) {
    $obj_app->save_customer_info($_POST);
}
?>


<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Register</li>
        </ol>
    </div>
</div>

<section style="font-family: Comic Sans MS;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="well text-info text-center">
                                <h3>You have to login in this system to complete your valuable order. If you are not registered please registered now ..</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="well">
                                <h3 style="color: #FA11BF; text-align: center;">Registration Point Here.</h3>
                                <hr/>
                                <form role="form" class="form-horizontal" action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">First Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Email Address</label>
                                        <div class="col-lg-9">
                                            <input type="email" name="email_address" class="form-control" onblur="ajax_email_check(this.value, 'res'); ">  <span id="res"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" name="address" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Phone Number</label>
                                        <div class="col-lg-9">
                                            <input type="number" name="phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">District Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="district" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <input style="background-color: #FA11BF;" type="submit" id="reg_btn" name="btn" class="btn-block" value="Registration"> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="well">
                                <h3 style="color: #FA11BF;"class="text-center">Login Point Here.</h3>
                                <hr/>
                                <form role="form" class="form-horizontal" action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Email Address</label>
                                        <div class="col-lg-9">
                                            <input type="email" name="email_address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <input style="background-color: #FA11BF;" type="submit" name="btn" class=" btn-block" value="Login"> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
