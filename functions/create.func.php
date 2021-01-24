<?php
include_once "../includes/create.class.php";
include_once "../includes/select.class.php";

$conn_add_new_Customer = new Create_class();

if(isset($_POST['reg-btn'])){
    $conn = new Create_class();

    $fname=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['firstname']);
    $lname=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['lastname']);
    $address=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['address']);
    $birthday=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['birthday']);
    $email=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['email']);
    $phone=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['phone']);
    $username=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['username']);
    $password=mysqli_real_escape_string($conn_add_new_Customer->connection,$_POST['password']);
    $encrypt_password=md5($password);

//check first if already exist

$conn_check = new Select_class();

$check = $conn_check->check_user($username);

if($check->num_rows >0){

    echo "username already taken";
}
else{

    $conn_create_new_user = $conn_add_new_Customer->add_new_customerUser($fname,$lname,$address,$birthday,$email,$phone,$username, $encrypt_password);
    if($conn_create_new_user){
        header('location:../index.php');
    }
    else{
        echo "error";
    }
}
}

//add new seller 

$conn_add_new_Seller = new Create_class();

if(isset($_POST['reg-btn-seller'])){
    

    $fname=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['firstname']);
    $lname=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['lastname']);
    $address=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['address']);
    $birthday=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['birthday']);
    $email=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['email']);
    $phone=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['phone']);
    $username=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['username']);
    $password=mysqli_real_escape_string($conn_add_new_Seller->connection,$_POST['password']);
    $encrypt_password=md5($password);

//check first if already exist

$conn_check_seller = new Select_class();

$check_seller = $conn_check_seller->check_userSeller($username);

if($check_seller->num_rows >0){

    echo "username already taken";
}
else{

    $conn_create_new_seller = $conn_add_new_Seller->add_new_sellerUser($fname,$lname,$address,$birthday,$email,$phone,$username, $encrypt_password);
    if($conn_create_new_seller){
        header('location:../index.php');
    }
    else{
        echo "error";
    }
}

}


//add new products

//add new seller 

$conn_add_new_products = new Create_class();

if(isset($_POST['add-product-btn'])){
    
    $seller_id = $_GET['seller_id'];
    $product_id=mysqli_real_escape_string($conn_add_new_products->connection,$_POST['Prod_id']);
    $product_name=mysqli_real_escape_string($conn_add_new_products->connection,$_POST['Product_name']);
    $product_description=mysqli_real_escape_string($conn_add_new_products->connection,$_POST['Product_description']);
    $product_price=mysqli_real_escape_string($conn_add_new_products->connection,$_POST['Product_price']);
    $product_quantity=mysqli_real_escape_string($conn_add_new_products->connection,$_POST['Product_quantity']);
    
    $product_image=$_FILES['Product_image']['name'];
    
    $product_img_folder ="product_images/".$product_image;//target na folder 
    $product_img =$product_image;

$product_image_temp = $_FILES['Product_image']['tmp_name'];

move_uploaded_file($product_image_temp, "../product_images/$product_img");







    $add_new_product = $conn_add_new_products->add_new_product($seller_id,$product_id,$product_name,$product_description,$product_price,$product_quantity,$product_img_folder);
if($add_new_product){

    header('location:../seller.page.php');

}
else{
    header('location:../index.php');

}
}


?>