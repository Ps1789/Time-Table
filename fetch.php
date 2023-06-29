<html>

<head>

//css

<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php
session_start();
echo $_SESSION['username'];
$a=$_SESSION['username'];
$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("smart", $con);

 

$result = mysql_query("SELECT * FROM form1 where username='".$a."' ");

 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>username</th>

<th>Mobile</th>

<th>email</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Id'] . "</td>";

  echo "<td>" . $row['username'] . "</td>";

  echo "<td>" . $row['Mobile'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);

?>

</body>

</html>
