<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['id']== true){
}
else{
header('location:../index.php');
}
include_once 'includes/select.class.php';
$current_seller_id = $_SESSION['id'];
$ref_product_id = $_GET['product_ref'];

// include 'includes/select.class.php';
$conn_edit_products = new Select_class(); 
   
$select_edit = $conn_edit_products->select_edit_product($ref_product_id);

$row=mysqli_fetch_array($select_edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>pabileh | Edit products</title>
    <style>
    th{
        background:#f4536f;
        color:white;
        font-weight:600;
    }
    th,td{
        padding:10px;
        border:1px solid #eee;
        text-align:center;
        font-family:calibri;
        
    }
    </style>
</head>
<body>
<div class="page-container">
    <div class="top-header">
        <div class="logo">
            <h2>Pabileh</h2>
            </div>
            <div class="nav-login">
            <nav class="main-nav">
                <ul>
                <li><a href="logout.php" id="login">Logout</a></li> 
                </ul>
            </nav>
        </div>
    </div>
        
    <div class="add_new_product_form" style="max-width:400px;box-shadow:1px 1px 10px 2px #ccc;padding:20px;margin:80px auto;">
        <h2 style="color:#f16a81;">Edit product</h2><br> 

        <form action="functions/update_prod.func.php?prod_ref=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
        <input type="text" name="Prod_id" placeholder="Product Id" value="<?php echo $row['product_id'];?>"require/>
        <input type="text" name="Product_name" placeholder="Product Name" value="<?php echo $row['product_name'];?>" require/>
        <input type="text" name="Product_description" placeholder="Description" value="<?php echo $row['description'];?>" require/>
        <input type="number" name="Product_price" placeholder="Price" value="<?php echo $row['price'];?>" require/>
        <input type="text" name="Product_quantity" placeholder="Quantity" value="<?php echo $row['quantity'];?>" require/>
        <input type="file" name="Product_image" placeholder="Product Image" value="Product Image" require/>
        
        <input type="submit" name="update-prod-btn" value="Update Product" class="updateproduct-btn btn-add"><a href="seller.page.php" >Cancel?</a>

        </form>
    </div>
       
</div>
</body>
</html>