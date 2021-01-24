<?php
include_once 'dbh.inc.php';
 class Select_class extends Database{

    public function __construct(){

        $this->db_connect();
    }

   
    public function select_loginCustomer($username,$encrypt_password){

        $query ="SELECT * from tbl_customers where username='$username' && pword='$encrypt_password' ";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }
    
    //check if user customer already exist

    public function check_user($username){

        $query ="Select * from tbl_customer where username='$username'";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }
    public function select_seller_login($username,$encrypt_password){

        $query ="SELECT * from tbl_user_seller WHERE username='$username' && password='$encrypt_password' ";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }

      //check if user seller already exist

      public function check_userSeller($username){

        $query ="Select * from tbl_user_seller where username='$username'";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }

    //select all products

    public function select_all_products(){

        $query ="Select * from tbl_products";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }

    
    public function select_seller_products($current_seller_id){

        $query ="Select * from tbl_products where seller_id ='$current_seller_id'";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }
    




 }


?>