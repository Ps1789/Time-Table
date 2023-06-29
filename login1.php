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

$sql="select * from usersm1 where usename='".$username."' AND password='".$password."'";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_array($result);


?>
