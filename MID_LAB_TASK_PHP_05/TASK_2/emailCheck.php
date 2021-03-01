<?php
	
	//print_r($_GET);
	print_r($_POST);
	
	if(isset($_POST['submit']))
	{

		$email = $_POST['email'];
		

		if($email == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
?> 