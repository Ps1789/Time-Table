<?php
session_start();
if(!isset($_SESSION["username"]))
{
header("location:fetch1.php");
}
?>
<html>
<head>
</head>
<body>
<center>
<h1>this is a user page</h1> <?php echo $_SESSION["username"] ?>
<a href="logout.php">Logout</a>
</center>
</body>
</html>
