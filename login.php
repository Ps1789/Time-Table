<?php
$host="localhost";
$user="root";
$password="";
$db="multi_login";
session_start();
$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from usersm4 where usename='".$username."' AND password='".$password."'";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_array($result);


if($row["usertype"]=="user")
{
$_SESSION["username"]=$username;
header("location:fetch1.php");
}
else if($row["usertype"]=="admin")
{
$_SESSION["username"]=$username;
header("location:admin.php");
}
else
{
echo "username and password incorrect";

}
}
?>



<html>
<head>
</head>
<center>

<form action="#" method="POST">

<div>
          <label>Usename</label>
          <input type="text" name="username" required>
</div>
<div>
        <label>password</label>
        <input type="password"  name="password"  required>
</div>
<div>
          <input type="submit" value="login">
</div>




</center>




</form>


</html>
