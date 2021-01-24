<?php
session_start();
if(isset($_SESSION['user_id']) && $_SESSION['user_id']== true){



}
else{

header('location:index.php');
}
include 'includes/select.class.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>pabileh | shop</title>
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
    <input type="submit" name="reg-btn" value="Sign-Up" class="reg-btn">
  
    </form>
    </div>

    <div id="login-form" class="login-form">
    <form action="functions/login.func.php" method="post">
    <span class="close-btn-login" >X</span><br>
    <h2 style="color:#ff8096;">Sign-In</h2>

        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <input type="submit" name="login-btn" value="Sign-In" class="login-btn">

        </form>
</div>
   
</div>


<script>
$(document).ready(function(){
    $("#sign-up-form").hide();
  $("#sign-up").click(function(){
    $("#sign-up-form").show(500);
  });
});

$(document).ready(function(){
    $("#login-form").hide();
  $("#login").click(function(){
    $("#login-form").show(500);
  });
});
$(document).ready(function(){
 
  $(".close-btn").click(function(){
    $("#sign-up-form").hide(500);
  
  });
});

$(document).ready(function(){
 
 $(".close-btn-login").click(function(){
   $("#login-form").hide(500);
  
 });
});
</script>
</body>
</html>