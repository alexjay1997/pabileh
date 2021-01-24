<?php
include 'dbh.inc.php';
 class Create_class extends Database{

    public function __construct(){

        $this->db_connect();
    }

    public function add_new_customerUser($fname,$lname,$address,$birthday,$email,$phone,$username, $encrypt_password){

        $query ="INSERT INTO tbl_customers(fname,lname,address,birthday,email,phone,username,pword) values ('$fname','$lname','$address','$birthday','$email','$phone','$username','$encrypt_password')";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }

    public function add_new_sellerUser($fname,$lname,$address,$birthday,$email,$phone,$username, $encrypt_password){

        $query ="INSERT INTO tbl_user_seller(fname,lname,address,birthday,email,phone,username,password) values ('$fname','$lname','$address','$birthday','$email','$phone','$username','$encrypt_password')";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }


    public function add_new_product($seller_id,$product_id,$product_name,$product_description,$product_price,$product_quantity, $product_img_folder){

            $query="INSERT into tbl_products(product_id,seller_id,product_name,description,price,quantity,product_image)values ('$product_id','$seller_id','$product_name','$product_description','$product_price','$product_quantity',' $product_img_folder')";
            $result=mysqli_query($this->connection,$query);
            return $result;
    }
 }


?>