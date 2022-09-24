<?php
    if(isset($_POST['btn'])) {
        $obj_app->customer_registration_info($_POST);
    }

    
?>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Account</li>
        </ol>
    </div>
</div>
<div class="account">
    <div class="container">
        <h2>Account</h2>
        <div class="col-lg-6">
            <div class="well">
                <h3 class="text-center text-success">Registration Point Here.</h3>
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
                            <input type="submit" name="btn" class="btn btn-seccess btn-block" value="Registration"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="well">
            <div class="account_grid">
                <div class="col-md-6 login-right">
                    <h3 style="text-align: center;">Login</h3>
                    <form action="" method="post">

                        <span>Email Address</span>
                        <input type="text" name="email_address"> 

                        <span>Password</span>
                        <input type="password" name="password"> 
                        <div class="word-in">
                            <a class="forgot" href="#">Forgot Your Password?</a>
                            <input type="submit" name="btn" value="Login">
                        </div>
                    </form>
                </div>	
                <div class="col-md-6 login-left">
                    <h4>NEW CUSTOMERS</h4>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
