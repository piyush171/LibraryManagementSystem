<?php
	$id=$_POST["bookid"];
	$con=mysqli_connect("localhost","root");
	mysqli_select_db($con,"books_info");
	$q="delete from bookdetails where Bookid=$id";
	mysqli_query($con,$q);

	echo "your data has been deleted succesfully"	
?>