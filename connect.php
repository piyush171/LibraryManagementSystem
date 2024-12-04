<?php
	$l=$_POST["language"];
	echo $l;
	$n=mysqli_connect("localhost","root");
	if($n)
	{
		echo "You have connected";
	}

?>