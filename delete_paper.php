<?php
extract($_GET);

	require 'db.php';
		$delete= "Delete from ieee_content where id='$id'";

		echo $delete."<br>";	
		$fire_query= mysqli_query($con,$delete);
		//print_r($update_query_teacher);
		if($fire_query)
		{
			echo '<script language="javascript">';
			echo 'alert("Succesfully Delete")';
			header("Location: view_paper.php");
			echo '</script>';
		}
		else
		{
			echo "error";
		}

?> 