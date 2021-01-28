<?php
include '../includes/create.class.php';
$conn_update_products =new Create_class();

if(isset($_POST['update-prod-btn'])){

    $product_ref = $_GET['prod_ref'];
    $product_id=mysqli_real_escape_string($conn_update_products->connection,$_POST['Prod_id']);
    $product_name=mysqli_real_escape_string($conn_update_products->connection,$_POST['Product_name']);
    $product_description=mysqli_real_escape_string($conn_update_products->connection,$_POST['Product_description']);
    $product_price=mysqli_real_escape_string($conn_update_products->connection,$_POST['Product_price']);
    $product_quantity=mysqli_real_escape_string($conn_update_products->connection,$_POST['Product_quantity']);
    
    $product_image=$_FILES['Product_image']['name'];
    
    $product_img_folder ="product_images/".$product_image;//target na folder 
    $product_img =$product_image;

    $product_image_temp = $_FILES['Product_image']['tmp_name'];

    move_uploaded_file($product_image_temp, "../product_images/$product_img");

    $update_product = $conn_update_products->update_seller_product($product_id,$product_name,$product_description,$product_price,$product_quantity,$product_img_folder,$product_ref);
    if($update_product){

        header('location:../seller.page.php');

    }
    else{
        header('location:../index.php');

    } 

    }


?>