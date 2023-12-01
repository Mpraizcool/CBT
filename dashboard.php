<?php
session_start();
//error_reporting(0);
include('config.php');
include('checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link rel="stylesheet"href="style.css">
        <style>
a:link, a:visited {
  background-color: black;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: grey;
}
</style>
</head>
<body>
    <div class="form">
        <p>Hey,<?php echo $_SESSION['login']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="new.php">Write exam</a></p>
        <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>