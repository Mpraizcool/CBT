<?php
session_start();
include('config.php');
$_SESSION['login']=="";
session_unset();
?>
<script language="javascript">
document.location="login.php";
</script>
