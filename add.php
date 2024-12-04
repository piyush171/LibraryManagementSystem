

		<?php
			$con=mysqli_connect("localhost","root");
			if(!$con)
				echo "Connection failed";
			else
				echo "Connection done";
			mysqli_select_db($con,"test");	
			mysqli_close($con);		
		?>