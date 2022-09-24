<?php

class Admin {
    protected $db_connect;
    //$this->db_connect
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
    
    public function admin_pannel_login($data){
       $username=$data['username'];
       $password= md5($data['password']);
       
       $sql="SELECT * FROM tbl_admin_ligin WHERE username='$username' AND password='$password'";
       
       if(mysqli_query($this->db_connect,$sql)){
           $query_result=mysqli_query($this->db_connect,$sql);
           $admin_info=mysqli_fetch_assoc($query_result);
           
           if($admin_info){
               session_start();
               $_SESSION['username']=$admin_info['username'];
               $_SESSION['user_id']=$admin_info['user_id'];
               
               header('Location:admin_master.php');
               
           }  else {
               $massage='plese inpuT valid email address and password';
               return $massage;
           }
           
        }else{
            die('query problem'.mysqli_error($this->db_connect));
        }
    }   
    public function admin_reg($data){
        $sql="INSERT INTO tbl_admin_ligin(username,password) VALUES ('$data[username]','$data[password]')";
         
        if(mysqli_query($db_connect,$sql)){
            $massage='query exicute';
        }else{
            die('query problem'.mysqli_error($db_connect));
        }
    }
}
