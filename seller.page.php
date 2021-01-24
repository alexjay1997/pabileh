<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['id']== true){
}
else{
header('location:../index.php');
}
//include 'includes/select.class.php';
$current_seller_id = $_SESSION['id'];
?>
<?php
   include 'includes/select.class.php';
   $conn_select_all_products = new Select_class(); 
    $conn_get_products= $conn_select_all_products->select_seller_products($current_seller_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>pabileh | Seller</title>
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
            <h2>Pabili</h2>
            </div>
            <div class="nav-login">
            <nav class="main-nav">
                <ul>
                <li><a href="logout.php" id="login">Logout</a></li> 
                </ul>
            </nav>
        </div>
    </div>
        
    <div class="add_new_product_form" style="width:400px;box-shadow:1px 1px 10px 2px #ccc;padding:20px;margin:80px auto;">
        <h2>Add new product</h2> 
        <form action="functions/create.func.php?seller_id=<?php echo $_SESSION['id'];?>" method="post" enctype="multipart/form-data">
        <input type="text" name="Prod_id" placeholder="Product ID" require/>
        <input type="text" name="Product_name" placeholder="Product Name" require/>
        <input type="text" name="Product_description" placeholder="Description" require/>
        <input type="number" name="Product_price" placeholder="Price" require/>
        <input type="text" name="Product_quantity" placeholder="Quantity" require/>
        <input type="file" name="Product_image" placeholder="Product Image" value="Product Image" require/>
        
        <input type="submit" name="add-product-btn" value="Add Product" class="addproduct-btn btn-add"><a href="seller.page.php" >Cancel?</a>

        </form>
    </div><h2 style="text-align:center;color:#f16a81;">My Products</h2>
    <table style="border-collapse:collapse;margin:40px auto;max-width:80%;box-shadow:1px 1px 10px 2px #eee;">
        <tr>
            <th>Product Id</th>
            <th>Product image</th>
            <th>Product name</th>
            <th>Product description</th>
            <th>Product price</th>
            <th>Product quantity</th>
           
        </tr>
        <?php
    while($row=mysqli_fetch_array($conn_get_products)){

       
    
    ?>
        <tr>
            <td><?php echo $row['product_id'];?></td>
            <td><img style="max-width:100px;"src="<?php echo $row['product_image'];?>" alt="<?php echo $row['product_image'];?>"></td>
            <td><?php echo $row['product_name'];?></td>
            <td><?php echo $row['description'];?></td>
            <td>Php <?php echo $row['price'];?></td>
            <td><?php echo $row['quantity'];?></td>
        </tr>
    <?php
    }
    ?>
    </table>


</div>