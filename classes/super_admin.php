<?php

class Super_admin {
    private $db_connect;
    public function __construct() {
        $host_name= 'localhost';
        $user_name='root';
        $password='';
        $db_name="db_youth_fashion";
        $this->db_connect=mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$this->db_connect){
            die('connection failed'.  mysqli_error($this->db_connect));
        }
    }
    
    public function save_category_info($data){
        $sql="INSERT INTO tbl_category(category_name,category_description,publication_status) 
				VALUES('$data[category_name]','$data[category_description]','$data[publication_status]') ";
        if(mysqli_query($this->db_connect, $sql)){
            $massage='Wao category save successfully';
            return $massage;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
        
    }
    
    public function select_all_category_info(){
        $sql="SELECT *FROM tbl_category";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result= mysqli_query($this->db_connect, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    

    public function unpublished_category_by_id($category_id){
        $sql="UPDATE tbl_category SET publication_status=0 WHERE category_id='$category_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='waoo category Unpublished seccessfully';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
        
        
    }
    
    public function published_category_by_id($category_id){
        
        $sql="UPDATE tbl_category SET publication_status=1 WHERE category_id='$category_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='waoo category published seccessfully';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
        
    }

    public function select_category_info_by_id($category_id) {
        
        $sql="SELECT *FROM tbl_category WHERE category_id='$category_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result= mysqli_query($this->db_connect, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
 
    }
    
    public function update_category_info($data){
        $sql="UPDATE tbl_category SET category_name='$data[category_name]', category_description='$data[category_description]', publication_status='$data[publication_status]' WHERE category_id='$data[category_id]'";
        if(mysqli_query($this->db_connect, $sql)){
            
            $_SESSION['message']='Category Info Update Successfully';
            header('Location:m_category.php');
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
        
    }
    
    public function delete_category_by_id($category_id){
        $sql="DELETE FROM tbl_category WHERE category_id='$category_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='Category Info Delete Successfully';
            return $message;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function save_manufacturer_info($data){
        $sql="INSERT INTO tbl_manufacturer(manufacturer_name, manufacturer_description, publication_status) VALUES('$data[manufacturer_name]','$data[manufacturer_description]','$data[publication_status]') ";
        if(mysqli_query($this->db_connect, $sql)){
            $message='Wao manufacturer info save successfully';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function select_all_manufacturer_info(){
        $sql="SELECT *FROM tbl_manufacturer";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result= mysqli_query($this->db_connect, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function unpublished_manufacturer_by_id($manufacturer_id){
        $sql="UPDATE tbl_manufacturer SET publication_status=0 WHERE manufacturer_id='$manufacturer_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='manufacturer info Unpublished seccessfully';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    public function published_manufacturer_by_id($manufacturer_id){
        $sql="UPDATE tbl_manufacturer SET publication_status=1 WHERE manufacturer_id='$manufacturer_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='waoo category published seccessfully';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function select_manufacturer_info_by_id($manufacturer_id){
        $sql="SELECT *FROM tbl_manufacturer WHERE manufacturer_id='$manufacturer_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result= mysqli_query($this->db_connect, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }

    public function update_manufacturer_info($data){
        $sql="UPDATE tbl_manufacturer SET manufacturer_name='$data[manufacturer_name]', manufacturer_description='$data[manufacturer_description]', publication_status='$data[publication_status]' WHERE manufacturer_id='$data[manufacturer_id]'";
        if(mysqli_query($this->db_connect, $sql)){
            
            $_SESSION['message']='manufacturer info update successfully';
            header('Location:manage_manufacturer.php');
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function delete_manufacturer_by_id($manufacturer_id){
        $sql="DELETE FROM tbl_manufacturer WHERE manufacturer_id='$manufacturer_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='manufacturer info delete seccessfully';
            return $message;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    public function save_product_info($data){
        
        $directory = '../assets/admin_assets/product_images/';
        $target_file = $directory . $_FILES['product_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['product_image']['size'];
        $image = getimagesize($_FILES['product_image']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {
                echo 'This image already exists';
                exit();
            } else {
                if ($file_size > 5242880) {
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die('File type is not valid');
                    } else {
                        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
                        
                        $sql = "INSERT INTO tbl_product (product_name, category_id, manufacturer_id, product_price, stock_quantity, product_sku, product_short_description, product_long_description, product_image, publication_status) VALUES ('$data[product_name]', '$data[category_id]', '$data[manufacturer_id]', '$data[product_price]', '$data[stock_quantity]', '$data[product_sku]', '$data[product_short_description]', '$data[product_long_description]', '$target_file', '$data[publication_status]')";
                        if(mysqli_query($this->db_connect, $sql)) {
                            $message="Product information create successfully";
                            return $message;
                        } else {
                            die('Query problem'.  mysqli_error($this->db_connect) );   
                        }
                    }
                }
            }
        } else {
            echo 'You must upload a valid image to create new product in this system.';
            exit();
        }
        //$sql="INSERT INTO tbl_product(product_name,category_id,manufacturer_id,product_prices,tock_quantity,product_sku,product_short_description,product_long_description,product_image,publication_status) VALUES('$data[product_name]','$data[category_id]','$data[manufacturer_id]','$data[product_prices]','$data[tock_quantity]','$data[product_sku]','$data[product_short_description]','$data[product_long_description]','$data[product_image]','$data[publication_status]')";
    }

    public function select_all_product_info(){
        $sql="SELECT *FROM tbl_product";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result= mysqli_query($this->db_connect, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
        
    }
    
    public function unpublished_product_by_id($product_id){
        $sql="UPDATE tbl_product SET publication_status=0 WHERE product_id='$product_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='product info Unpublished seccessfully';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    public function published_product_by_id($product_id){
        $sql="UPDATE tbl_product SET publication_status=1 WHERE product_id='$product_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='waoo product published seccessfully';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    public function select_product_info_by_id($product_id){
        $sql="SELECT *FROM tbl_product WHERE  product_id='$product_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result= mysqli_query($this->db_connect, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function Update_product_info($data){
        $sql="UPDATE tbl_product SET product_name='$data[product_name]',category_id='$data[category_id]',manufacturer_id='$data[manufacturer_id]',product_price='$data[product_price]',stock_quantity='$data[stock_quantity]',product_sku='$data[product_sku]', product_short_description='$data[product_short_description]',product_long_description='$data[product_long_description]',product_image='$data[product_image]', publication_status='$data[publication_status]' WHERE product_id='$data[product_id]'";
        if(mysqli_query($this->db_connect, $sql)){
            $_SESSION['message']='product info update successfully';
            header('Location:manage_product.php');
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }


    

    public function delete_product_by_id($product_id){
        $sql="DELETE FROM tbl_product WHERE product_id='$product_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='product info delete seccessfully';
            return $message;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    

    public function select_all_order_info(){
       $sql = "SELECT o.*, c.first_name, c.last_name, p.payment_status, p.payment_id FROM tbl_order as o, tbl_customer as c, tbl_payment as p WHERE o.customer_id=c.customer_id AND o.order_id=p.order_id ORDER BY o.order_id=p.order_id DESC LIMIT 6 ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        } 
    }
    public function delete_order_by_id($order_id){
        $sql="DELETE FROM tbl_order WHERE order_id='$order_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='order info delete seccessfully';
            return $message;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function select_customer_info_by_order_id($order_id) {
        $sql = "SELECT o.order_id, c.* FROM tbl_order as o, tbl_customer as c WHERE o.customer_id=c.customer_id AND o.order_id='$order_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }
    public function select_shipping_info_by_order_id($order_id) {
        $sql = "SELECT o.order_id, s.* FROM tbl_order as o, tbl_shipping as s WHERE o.shipping_id=s.shipping_id AND o.order_id='$order_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }
    public function select_payment_info_by_order_id($order_id) {
        $sql = "SELECT o.order_id, p.* FROM tbl_order as o, tbl_payment as p WHERE o.order_id=p.order_id AND o.order_id='$order_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }
    public function select_product_info_by_order_id($order_id) {
        $sql = "SELECT o.order_id, od.* FROM tbl_order as o, tbl_order_details as od WHERE o.order_id=od.order_id AND o.order_id='$order_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }
//    public function update_order_info($data){
//        
//       $sql="UPDATE tbl_order o INNER JOIN tbl_payment p ON o.order_id=p.payment_id SET o.order_status='$data[order_status]', p.payment_status='$data[payment_status]'";
//        if(mysqli_query($this->db_connect, $sql)){
//            
//            $_SESSION['message']='Your Order info update successfully';
//            header('Location:manage_order.php');
//        }  else {
//            die('Query Problem'.mysqli_error($this->db_connect));
//        } 
//    }
    
    public function update_order_info($data){
        
       $sql="UPDATE tbl_order, tbl_payment SET order_status='$data[order_status]', payment_status='$data[payment_status]' WHERE payment_id='$data[payment_id]'";
        if(mysqli_query($this->db_connect, $sql)){
            
            $_SESSION['message']='Your Order info update successfully';
            header('Location:manage_order.php');
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        } 
    }
    
    public function select_all_contact_info(){
        $sql="SELECT *FROM tbl_contact ORDER BY contact_id DESC LIMIT 6";
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;  
        }else {
            die('Query problem'.mysqli_error($this->db_connect));   
        } 
    }
    
    public function save_configaration_info($data){
        $sql="INSERT INTO tbl_other(facebook,twitter,google_plus,linked_in,address,email,phone,mobile,copyright) VALUES('$data[facebook]','$data[twitter]','$data[google_plus]','$data[linked_in]','$data[address]','$data[email]','$data[phone]','$data[mobile]','$data[copyright]') ";
        if(mysqli_query($this->db_connect, $sql)){
            $massage='Wao Configaration save successfully';
            return $massage;
        }else{
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function select_configaration_info(){
      $sql="SELECT *FROM tbl_other";
        if(mysqli_query($this->db_connect, $sql)) {
           $cnquery_result=mysqli_query($this->db_connect, $sql);
            return $cnquery_result;  
        }else {
            die('Query problem'.mysqli_error($this->db_connect));   
        }   
    }
    public function update_configaration_info($data){
        $sql="UPDATE tbl_other SET facebook='$data[facebook]', twitter='$data[twitter]', google_plus='$data[google_plus]', linked_in='$data[linked_in]', address ='$data[address]', email='$data[email]', phone='$data[phone]', mobile='$data[mobile]',copyright='$data[copyright]' WHERE other_id='$data[other_id]'"; 
        if(mysqli_query($this->db_connect, $sql)){
            
            $message='configaration info update successfully';
            return $message;
            header('Location:manage_other.php');
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function save_slider_info($data){
        $directory = '../assets/admin_assets/slider_image/';
        $target_file = $directory . $_FILES['slider_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['slider_image']['size'];
        $image = getimagesize($_FILES['slider_image']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {
                echo 'This image already exists';
                exit();
            } else {
                if ($file_size > 5242880) {
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die('File type is not valid');
                    } else {
                        move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);
                        
                        $sql = "INSERT INTO tbl_slider (category, product_name, offer, slider_image) VALUES ('$data[category]', '$data[product_name]', '$data[offer]','$target_file')";
                        if(mysqli_query($this->db_connect, $sql)) {
                            $message="Slider Add successfully";
                            return $message;
                        } else {
                            die('Query problem'.  mysqli_error($this->db_connect) );   
                        }
                    }
                }
            }
        } else {
            echo 'You must upload a valid image to create new product in this system.';
            exit();
        }
    }
    
    public function select_slider_info(){
        $sql="SELECT *FROM tbl_slider ORDER BY slider_id DESC LIMIT 1";
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;  
        }else {
            die('Query problem'.mysqli_error($this->db_connect));   
        }  
    }
    public function update_slider_info($data){
        $directory = '../assets/admin_assets/slider_image/';
        $target_file = $directory . $_FILES['slider_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['slider_image']['size'];
        $image = getimagesize($_FILES['slider_image']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {
                echo 'This image already exists';
                exit();
            } else {
                if ($file_size > 5242880) {
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die('File type is not valid');
                    } else {
                        move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);
                        
                        $sql = "UPDATE tbl_slider SET category='$data[category]', product_name='$data[product_name]', offer='$data[offer]', slider_image='$target_file' WHERE slider_id='$data[slider_id]'";
                        if(mysqli_query($this->db_connect, $sql)) {
                            $message="Slider Update successfully";
                            return $message;
                        } else {
                            die('Query problem'.  mysqli_error($this->db_connect) );   
                        }
                    }
                }
            }
        } else {
            echo 'You must upload a valid image to create new product in this system.';
            exit();
        }
    }   
    
    public function delete_slider_by_id($slider_id){
        $sql="DELETE FROM tbl_slider WHERE slider_id='$slider_id'";
        if(mysqli_query($this->db_connect, $sql)){
            $message='slider info delete seccessfully';
            return $message;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
	
    











    public function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['user_id']);
        
        header('Location:index.php');
    }
    
    
    
}
