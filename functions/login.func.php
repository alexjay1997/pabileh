<?php
include_once "../includes/select.class.php";
$conn_login_user = new Select_class();
if(isset($_POST['login-btn'])){
session_start();
$conn_login_user = new Select_class();
$username= mysqli_real_escape_string($conn_login_user->connection,$_POST['c_username']);
$password= $_POST['c_password'];
$encrypt_password= md5($password);

$select_user= $conn_login_user->select_loginCustomer($username,$encrypt_password);

if(mysqli_num_rows($select_user)>0){
 


$row=mysqli_fetch_array($select_user);

$_SESSION['user_id']=$row['user_id'];

header('location:../shop.php');
}
else{
    echo "failed to login user not found!";

}


}
$conn_login_seller = new Select_class();
if(isset($_POST['login-seller'])){
    session_start();
    $conn_login_seller = new Select_class();
    $username=mysqli_real_escape_string($conn_login_seller->connection,$_POST['username']);
    $password= $_POST['password'];
    $encrypt_password= md5 ($password);
    
    $conn_select_seller=$conn_login_seller->select_seller_login($username,$encrypt_password);
    
    if(mysqli_num_rows($conn_select_seller)==0){
    
        echo "failed to login user not found!";
    }
    else{
    $row=mysqli_fetch_array($conn_select_seller);
    
    $_SESSION['id']=$row['seller_id'];
    
    header('location:../seller.page.php');
    
    }
    
    
    }


?>