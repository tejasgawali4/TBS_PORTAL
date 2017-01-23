<?php
require_once('dbConnect.php');

$p_id=$_POST['p_id'];
$status=$_POST['p_status'];

if (!($p_id == NULL))
 {

	$sql = "UPDATE `posts` SET `p_status`='$status' WHERE `p_id`='$p_id'";

	if(mysqli_query($con,$sql))
	{
			$str="success";
			$response["success"]=$str;
			echo json_encode($response);
            mysqli_close($con);
	}
	else
	{
			$str="error";
			$response["success"]=$str;
			echo json_encode($response);
            mysqli_close($con);
	}

}
?>