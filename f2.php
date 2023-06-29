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

<center>

<h3><B><u><i><font color="red"> THE TIMING OF THE LECTURES IS GIVEN BELOW:</font></i></u></b></h3>

<br>

<table border="1">

<tr>

<th>LECTURES</th>

<td>LECTURE 1</td>

<td>LECTURE 2</td>

<td>LECTURE 3</td>

<td>LECTURE 4</td>

<td>LECTURE 5</td>

</tr>

<tr>

<th>TIME</th>

<td>9 TO 9:50 AM</td>

<td>9:50 TO 10:40 AM</td>

<td>10:40 TO 11:30 AM</td>

<td>11:50 TO 12:40 PM</td>

<td>12:40 TO 1:30 PM</td>

</tr>

</table>

</center>

<br><br>

<?php

session_start();

echo "<h3>";

echo "<center>";

echo  $_SESSION['username'];

echo "</center>";

echo "</h3>";

echo "<br>";

$a=$_SESSION['username'];

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }


mysql_select_db("smart", $con);




$result = mysql_query("SELECT * FROM form10 where NAME='".$a."' ");

echo "<center>";

echo "<table border='1'>

<tr>

<th>ID</th>

<th>NAME</th>

<th>DAYS</th>

<th>LECTURE 1</th>

<th>LECTURE 2</th>

<th>LECTURE 3</th>

<th>LECTURE 4</th>

<th>LECTURE 5</th>

</tr>";

while($row = mysql_fetch_array($result))

  {



  echo "<tr>";

echo "<td>" . $row['ID'] . "</td>";

  echo "<td>" . $row['NAME'] . "</td>";

  echo "<td>" . $row['DAYS'] . "</td>";

  echo "<td>" . $row['LECTURE 1'] . "</td>";

  echo "<td>" . $row['LECTURE 2'] . "</td>";

  echo "<td>" . $row['LECTURE 3'] . "</td>";

  echo "<td>" . $row['LECTURE 4'] . "</td>";

  echo "<td>" . $row['LECTURE5'] . "</td>";

  echo "</tr>";

  }

 

echo "</table>";

echo "</center>";

 

mysql_close($con);

?>

</body>

</html>
