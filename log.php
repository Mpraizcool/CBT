<?php
session_start();
error_reporting(0);
include_once("config.php");

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['passworde'];


    // I used prepared statements to prevent SQL injection and removes the use of MD5 for password hashing. 
    // learn how to use the password_hash and password_verify functions in PHP.
    $stmt = $con->prepare("SELECT * FROM student WHERE email=? AND passworde=?");
    $stmt->bind_param("ss", $email, md5($password));
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if($user) {
        $extra = "dashboard.php";
        $_SESSION['login'] = $email;
        $_SESSION['id'] = $user['id'];
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("location:http://$host$uri/$extra");
        exit();
    } else {
        echo "<script>alert('Invalid email or Password');</script>";
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
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
    </form>
</body>
</html>
