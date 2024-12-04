<?php

$bookid=$_POST["bookid"];
$title=$_POST["Title"];
$price=$_POST["Price"];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"books_info");

$q="INSERT INTO bookdetails(Bookid,Title,Price) VALUES ($bookid,'$title','$price')";
mysqli_query($con,$q);

echo "your data has been entered ";

?>
