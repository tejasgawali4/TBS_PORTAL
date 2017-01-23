<?php
 
 include_once('dbConnect.php');
$error_msg = "";
$status =0;
$userid=0;

	$status=1;
	$userid=1;
	$Heading=filter_input(INPUT_POST, 'heading', FILTER_SANITIZE_STRING);
	$Content=filter_input(INPUT_POST, 'Content', FILTER_SANITIZE_STRING);

		$sql = "INSERT INTO `posts` (`p_heading`, `p_content`, `p_status`, `u_id`) VALUES ('$Heading', '$Content', '$status', '$userid');";
		
		//Importing our db connection script
		
		//Executing query to database 
		if(mysqli_query($con,$sql))
		{
			echo 'Post Added Successfully';
		}
		else
		{
			header('Location: ../Application/error.php');
    		exit();
		}

?>
