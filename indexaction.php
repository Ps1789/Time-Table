<?php
$id=$_GET["id"];
$user=$_GET["txtSno"];
$nam=$_GET["txtSname"];
$cor=$_GET["txtCourse"];
$btn=$_GET["btnsubmit"];
$sever="127.0.0.1";
$username="root";
$password="";
$connect_mysql= mysql_connect($server,$username,$password);

$mysql_db=mysql_select_db("multi_login");

if($btn=="INSERT")
{
	
	$qry=mysql_query("INSERT INTO usersm8(username,password,usertype)VALUES('$user','$nam','$cor')");

	if ($qry>0)
	{
		echo "Record Saved";
		echo "<table border='0'>";
    	echo "<tr><td> username </td> <td>".$user."</td></tr>";
    	echo "<tr><td> password </td> <td>".$nam."</td></tr>";
    	echo "<tr><td> usertype </td> <td>".$cor."</td></tr>";
    	echo "</table>";
	
	}
	else
	{
		echo "Record Not Seved";
	}
}
else if($btn=="UPDATE")
{
	$qry=mysql_query("UPDATE usersm8 SET username='$user',password='$nam',usertype='$cor' where id='$id'");
	if ($qry>0)
	{
		echo "Record Updated";
		echo "<table border='0'>";
    	echo "<tr><td> Sudent No </td> <td>".$no."</td></tr>";
    	echo "<tr><td> Student Name </td> <td>".$nam."</td></tr>";
    	echo "<tr><td> Course </td> <td>".$cor."</td></tr>";
    	echo "</table>";
		
	}
	else
	{
	echo "Record Not Updated";
	}
}
else if($btn=="DELETE")
{
	$qry=mysql_query("DELETE FROM usersm8 WHERE id='$id'");
	if($qry>0)
	{
		echo "Record Deleted";
	}
	else
	{
	echo "Record Not Deletd";
	}
}
else 
{
	echo "Record Not Exist";
	
}
?>
indexAction.php
Displaying indexAction.php.
