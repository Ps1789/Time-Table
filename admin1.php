<?php
session_start();
if(!isset($_SESSION["username"]))
{
header("location:login.php");
}
?>
<html>
<head>
</head>
<body>
<center>
<h1>this is a admin page</h1> <?php echo $_SESSION["username"] ?>
<a href="logout.php">Logout</a>
</center>
</body>
</html>
