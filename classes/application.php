<?php

class Application {
   
    private $db_connect;
    public function __construct() {
        $host_name= 'localhost';
        $user_name='root';
        $password='';
        $db_name="db_youth_fashion";
        $this->db_connect=mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$this->db_connect){
            die('connection faild'.  mysqli_error($this->db_connect));
        }
    }
    
    public function select_all_published_category_info(){
        $sql="SELECT *FROM tbl_category WHERE publication_status=1";
        if(mysqli_query($this->db_connect,$sql)){
            $cquery_result=mysqli_query($this->db_connect, $sql);
            return $cquery_result;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    public function select_all_manufacturer_published_info(){
        $sql="SELECT *FROM tbl_manufacturer WHERE publication_status=1";
        if(mysqli_query($this->db_connect,$sql)){
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    public function select_all_product_info(){
        $sql="SELECT *FROM tbl_product WHERE publication_status=1";
        if(mysqli_query($this->db_connect,$sql)){
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function select_published_product_by_category_id($category_id){
        $sql="SELECT * FROM tbl_product WHERE category_id='$category_id' AND publication_status=1 ";
        if(mysqli_query($this->db_connect,$sql)){
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
        
    }
    
    public function select_product_info_by_id($product_id){
        $sql="SELECT * FROM tbl_product WHERE product_id='$product_id'";
        if(mysqli_query($this->db_connect,$sql)){
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    
    public function select_published_product_by_category_id_seven(){
        $sql="SELECT * FROM tbl_product WHERE category_id=7 ORDER BY product_id DESC LIMIT 5";
        if(mysqli_query($this->db_connect,$sql)){
            $query_results=mysqli_query($this->db_connect, $sql);
            return $query_results;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    public function select_published_product_by_category_id_eight(){
        $sql="SELECT * FROM tbl_product WHERE category_id=8 ORDER BY product_id DESC LIMIT 5";
        if(mysqli_query($this->db_connect,$sql)){
            $query_resulte=mysqli_query($this->db_connect, $sql);
            return $query_resulte;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }
    //this is recent product item
    public function select_recent_published_product(){
        $sql="SELECT *FROM tbl_product WHERE publication_status=1 ORDER BY product_id DESC LIMIT 5";
        if(mysqli_query($this->db_connect,$sql)){
            $query_resultp=mysqli_query($this->db_connect, $sql);
            return $query_resultp;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        }
    }

        public function add_product_to_cart($data){
        $product_id=$data['product_id'];
        $product_quantity=$data['product_quantity'];
        $sql="SELECT product_name, product_price, product_image FROM tbl_product WHERE product_id='$product_id' ";
        $query_result=mysqli_query($this->db_connect, $sql);
        $product_info=mysqli_fetch_assoc($query_result);
        session_start();
        $session_id=session_id();
        $sql="INSERT INTO tbl_temp_cart (session_id, product_id, product_name, product_price, product_quantity, product_image) VALUES ('$session_id', '$product_id', '$product_info[product_name]', '$product_info[product_price]', '$product_quantity', '$product_info[product_image]')";
        mysqli_query($this->db_connect, $sql);
        header('Location: cart.php');
    }
    
    public function select_cart_product_by_session_id($session_id){
        $sql="SELECT * FROM tbl_temp_cart WHERE session_id='$session_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function update_cart_product_by_temp_cart_id($data){
        $sql="UPDATE tbl_temp_cart SET product_quantity= '$data[product_quantity]' WHERE temp_cart_id='$data[temp_cart_id]' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $message='Your cart product Quantity update successfully';
           return $message;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function delete_cart_product_by_temp_cart_id($temp_cart_id){
        $sql="DELETE FROM tbl_temp_cart WHERE temp_cart_id='$temp_cart_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $massage='Your cart product Delete successfully';
           return $massage;
        }else {
            die('Query problem'.mysqli_error($this->db_connect) );   
        }
    }
    public function select_category_product_info_by_id($category_id){
       $sql="SELECT * FROM tbl_product WHERE category_id='$category_id' AND publication_status=1 ORDER BY product_id DESC LIMIT 3 ";
        if(mysqli_query($this->db_connect,$sql)){
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        } 
    }
    public function select_ex_category_product_info_by_id(){
       $sql="SELECT * FROM tbl_product WHERE category_id=13 AND publication_status=1 ORDER BY product_id DESC LIMIT 7 ";
        if(mysqli_query($this->db_connect,$sql)){
            $query_resultex=mysqli_query($this->db_connect, $sql);
            return $query_resultex;
        }  else {
            die('Query Problem'.mysqli_error($this->db_connect));
        } 
    }
    
    public function save_customer_info($data){
        $password=md5($data['password']);
        $sql="INSERT INTO tbl_customer (first_name, last_name, email_address, password, address, phone_number, district) VALUES ('$data[first_name]', '$data[last_name]','$data[email_address]','$password','$data[address]','$data[phone_number]','$data[district]')";
        if(mysqli_query($this->db_connect, $sql)) {
            $customer_id=mysqli_insert_id($this->db_connect);
            session_start();
            $_SESSION['customer_id']=$customer_id;
            $_SESSION['customer_name']=$data['first_name'].' '.$data['last_name'];
           
            header('Location: shipping.php');
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    
    public function select_customer_info_by_id($customer_id){
        $sql="SELECT * FROM tbl_customer WHERE customer_id='$customer_id' ";
        if(mysqli_query($this->db_connect, $sql)) {
           $query_result=mysqli_query($this->db_connect, $sql);
           return $query_result;
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function save_shipping_info($data) {
        $sql="INSERT INTO tbl_shipping (full_name, email, address, phone_number, district) VALUES ('$data[full_name]','$data[email_address]', '$data[address]','$data[phone_number]','$data[district]')";
        if(mysqli_query($this->db_connect, $sql)) {
            $shipping_id=mysqli_insert_id($this->db_connect);
            session_start();
            $_SESSION['shipping_id']=$shipping_id;
           
            header('Location: payment.php');
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    
    public function save_order_info($data) {
        $payment_type=$data['payment_type'];
        if($payment_type == 'cash_on_delivary') {
            $customer_id=$_SESSION['customer_id'];
            $shipping_id=$_SESSION['shipping_id'];
            $order_total=$_SESSION['order_total'];
            $sql="INSERT INTO tbl_order (customer_id, shipping_id, order_total) VALUES ('$customer_id', '$shipping_id', '$order_total')";
            if( mysqli_query($this->db_connect, $sql) ) {
                $order_id=mysqli_insert_id($this->db_connect);
                $sql="INSERT INTO tbl_payment (order_id, payment_type) VALUES ('$order_id', '$payment_type')";
                if(mysqli_query($this->db_connect, $sql)) {
                    session_start();
                    $session_id=session_id();
                    $sql="SELECT * FROM tbl_temp_cart WHERE session_id='$session_id' ";
                    $query_result=mysqli_query($this->db_connect, $sql);
                    while ($product_info=mysqli_fetch_assoc($query_result)) {
                        $sql="INSERT INTO tbl_order_details (order_id, product_id, product_name, product_price, product_quantity, product_image) VALUES ('$order_id','$product_info[product_id]', '$product_info[product_name]', '$product_info[product_price]', '$product_info[product_quantity]', '$product_info[product_image]')";
                        mysqli_query($this->db_connect, $sql);
                    }
                    $sql="DELETE FROM tbl_temp_cart WHERE session_id='$session_id' ";
                    mysqli_query($this->db_connect, $sql);
                    
                    header('Location: customer_home.php');
                }else {
                    die('Query problem'.  mysqli_error($this->db_connect) );
                }
            } else {
                die('Query problem'.  mysqli_error($this->db_connect) );
            }
        }
    }
    public function customer_registration_info($data) {
        $password=md5($data['password']);
        $sql="INSERT INTO tbl_customer (first_name, last_name, email_address, password, address, phone_number, district) VALUES ('$data[first_name]', '$data[last_name]','$data[email_address]','$password','$data[address]','$data[phone_number]','$data[district]')";
        if(mysqli_query($this->db_connect, $sql)) {
            $customer_id=mysqli_insert_id($this->db_connect);
            session_start();
            $_SESSION['customer_id']=$customer_id;
            $_SESSION['customer_name']=$data['first_name'].' '.$data['last_name'];
           
            header('Location: index.php');
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    public function customer_email_check($email_address) {
        $sql="SELECT email_address FROM tbl_customer WHERE email_address='$email_address' ";
        if(mysqli_query($this->db_connect, $sql)) {
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;       
        }else {
            die('Query problem'.  mysqli_error($this->db_connect) );   
        }
    }
    
    public function send_contact_message($data){
        $sql="INSERT INTO tbl_contact(name,email,phone,message) VALUES('$data[name]','$data[email]','$data[phone]','$data[message]')";
        if(mysqli_query($this->db_connect, $sql)) {
            $message='Your Message Send Successfully';
            return $message;
        }else {
            die('Query problem'.mysqli_error($this->db_connect));   
        } 
    }
    
    
    
    
    
    
    
    
    public function customer_logout(){
        unset($_SESSION['customer_id']);
        unset($_SESSION['customer_name']);
        header('Location:index.php');
    }
    
    
    
    
 
    
    
    
    
    
    
}
