<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<div id="login-form" class="login-form">
    <form method="post" action="functions/login2.func.php" >
    <span class="close-btn-login" >X</span><br>
    <h2 style="color:#ff8096;">Sign-In</h2>

        <input type="text" name="c_username" placeholder="Username"/>
        <input type="password" name="c_password" placeholder="Password"/>
        <input type="submit" name="login-customer" value="Sign-In" class="login-btn"><a href="#" id="seller-login">Login seller?</a>

        </form>
</div>
</body>
</html>