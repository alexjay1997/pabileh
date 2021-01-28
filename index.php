<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>pabileh</title>
</head>
<body>
    <div class="page-container">
    <div class="top-header">
        <div class="logo">
            <h2 style="margin-left:30px;">Pabileh</h2>
        </div>
        <div class="search">
            <form action="" style="width:100%;">
            <input type="text" name="search-product" id="search_text"> <input type="submit" value="Search" class="search-btn" >
            
           
            </form>
        </div>
        <div class="nav-login">
            <nav class="main-nav">
                <ul>
                <li><a href="#login-form" id="login">Sign-In</a></li> / <li><a href="#sign-up-form" id="sign-up">Sign-Up</a></li>
                </ul>
            </nav>
        </div>
</div>
  <section class="kv">


  </section>
  
  
  <br>
  <section class="daily-Items" style="padding:30px;border:px solid blue;max-width:100%;">
  <h2 style="color:#f16a81;text-align:center;font-size:32px;">Daily Discover</h2>
  <br>
   
    
  <?php
   include 'includes/select.class.php';
   $conn_select_all_products = new Select_class(); 
    $conn_get_products= $conn_select_all_products->select_all_products();

    

  ?>
<div class="container" style="padding:0px ;display:flex;flex-wrap:wrap;max-width:1048px;margin:0 auto;border:px solid green;">

 <?php
  while($row=mysqli_fetch_array($conn_get_products)){

   
    echo '<div style="box-shadow:1px 1px 10px 2px #eee;padding:12px;max-width:199px;height:auto;text-align:center; box-sizing:border-box;flex:0 1 250px;text-overflow: ellipsis;align-items: flex-start;margin:5px;font-family:calibri;">';
    echo '<div class="prod_image_container" style="max-width:100%;height:160px;border:px solid red;"><img src="'.$row['product_image'].'"  style="width:100%;height:100%;"></div><br>';
    echo '<h2 style="color:#f16a81;font-size:20px;font-family:calibri,sans-serif;">'.$row['product_name'].'</h2>'.'<br>'.$row['description'].'<br><label style="font-style:italic;color:#686767;">Price '.$row['price'].'</label></div>';
 
  }
  ?>


  </div>
  </section>
  

    <div id="sign-up-form" class="sign-up-form">

    <form action="functions/create.func.php" method="post">
    <span class="close-btn" >X</span><br>
        <h2 style="color:#ff8096;">Sign-Up</h2>   
    
    <input type="text" name="firstname" placeholder="Firstname"/>
    <input type="text" name="lastname" placeholder="Lastname"/>
    <input type="text" name="address" placeholder="Address"/>
    <input type="date" name="birthday" placeholder="Birthday" />
    <input type="email" name="email" placeholder="Email Address"/>
    <input type="number" name="phone" placeholder="Phone"/>
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" name="reg-btn" value="Sign-Up" class="reg-btn">   <a href="#" id="sign-up-seller">Seller?</a>
  
    </form>
 
    </div>

    <div id="sign-up-form-seller" class="sign-up-form">

<form action="functions/create.func.php" method="post">
<span class="close-btn-seller" >X</span><br>
    <h2 style="color:#ff8096;">Sign-Up-Seller</h2>   

<input type="text" name="firstname" placeholder="Firstname"/>
<input type="text" name="lastname" placeholder="Lastname"/>
<input type="text" name="address" placeholder="Address"/>
<input type="date" name="birthday" placeholder="Birthday" />
<input type="email" name="email" placeholder="Email Address"/>
<input type="number" name="phone" placeholder="Phone"/>
<input type="text" name="username" placeholder="Username"/>
<input type="password" name="password" placeholder="Password"/>
<input type="submit" name="reg-btn-seller" value="Sign-Up" class="reg-btn">   <a href="#" id="sign-up-customer">Customer?</a>

</form>

</div>

    <div id="login-form" class="login-form">
    <form method="POST" action="functions/login.func.php">
    <span class="close-btn-login" >X</span><br>
    <h2 style="color:#ff8096;">Sign-In</h2>

        <input type="text" name="c_username" placeholder="Username"/>
        <input type="password" name="c_password" placeholder="Password"/>
        <input type="submit" name="login-btn" value="Sign-In" class="login-btn"><a href="#" id="seller-login">Login seller?</a>

        </form>
</div>

<div id="login-seller" class="login-form-seller">
    <form action="functions/login.func.php" method="post">
    <span class="close-btn-login-seller" >X</span><br>
    <h2 style="color:#ff8096;">Sign-In Seller</h2>

        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <input type="submit" name="login-seller" value="Sign-In" class="login-btn"><a href="#" id="login-customer">Customer?</a>

        </form>
</div>
</div> 

<footer style="padding:20px;color:#eee;font-family:calibri;text-align:center;font-size:14px;background:#f7677e;position:relative;top:0%;bottom:0%;max-width:100%;">
        <span>&copy 2021 Pabileh. All Rights Reserved</span>
    </footer>
</div>


<script>
$(document).ready(function(){
    $("#sign-up-form").hide();
  $("#sign-up").click(function(){
    $("#sign-up-form").show(500);
  });
});

$(document).ready(function(){
    $("#sign-up-form-seller").hide();
  $("#sign-up-seller").click(function(){
    $("#sign-up-form").hide();
    $("#sign-up-form-seller").show(500);
  });
});


$(document).ready(function(){
    $("#login-form").hide();
  $("#login").click(function(){
    $("#login-form").show(500);
  });
});

$(document).ready(function(){

  $("#login-customer").click(function(){
    $("#login-form").show(500);
    $("#login-seller").hide(500);
  });
});

$(document).ready(function(){
    $("#login-seller").hide();
  $("#seller-login").click(function(){
    $("#login-form").hide();
    $("#login-seller").show(500);
  });
});

$(document).ready(function(){
 
  $(".close-btn").click(function(){
    $("#sign-up-form").hide(500);
  
  });
});

$(document).ready(function(){
 
 $(".close-btn-seller").click(function(){
   $("#sign-up-form-seller").hide(500);
 
 });
});

$(document).ready(function(){
 
 $(".close-btn-login").click(function(){
   $("#login-form").hide(500);
  
 });
});

$(document).ready(function(){
 
 $(".close-btn-login-seller").click(function(){
   $("#login-seller").hide(500);
  
 });
});

$("#sign-up-customer").click(function(){
    $("#sign-up-form").show(500);
    $("#sign-up-form-seller").hide(500);
  });
</script>
</body>
</html>