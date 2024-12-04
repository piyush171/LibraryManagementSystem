<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"books_info");

$q= "select * from bookdetails";
$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);
for($i=0;$i<$num;$i++)
{
	$row =mysqli_fetch_array($result);
	echo "<table border=1>";
	echo "<tr><td>".$row["Bookid"]." </td><td> ".$row["Title"]." </td><td> ".$row["Price"]."</td><td></tr>";
	echo "</table>";
}
?>