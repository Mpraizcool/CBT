<?php
session_start();
error_reporting(0);
include_once("config.php");
if(isset($_POST['submit']))
{
$bret=mysqli_query($con,"SELECT * FROM student WHERE email='".$_POST['email']."' and passworde='".md5($_POST['passworde'])."'");
$num=mysqli_fetch_array($bret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// For stroing log if user login successfull
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{ echo "<script>alert('Invalid email or Password');</script>";
}
}
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" href="style.css"/>
</head>
<body>

        <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="email" placeholder="Email" autofocus="true"/>
            <input type="password" class="login-input" name="passworde" placeholder="Password"/>
            <input type="submit"value="Login" name="submit" class="login-button"/>
            <p class="link"><a href="registration.php">New Registration</a></p>
</form>

</body>
</html>
    