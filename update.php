<?php
	$booid=$_POST["bookid"];
	$newprize=$_POST["Up"];
	$con=mysqli_connect("localhost","root");
	mysqli_select_db($con,"books_info");
	$q= "UPDATE bookdetails SET Price='$newprize' WHERE `Bookid`=$booid";
	$flag=mysqli_query($con,$q);
	if($flag)
	{
		echo "<script>alert('Data Updated Successfully')</script>";
	}
	else
	{
		
		echo "<script>alert('Sorry data is not update')</script>";
	}
	mysqli_close($con);


?>