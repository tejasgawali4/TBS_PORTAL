<?php
require_once('dbConnect.php');

$u_id=$_POST['u_id'];
$status=$_POST['status'];

if (!($u_id == NULL))
 {

	$sql = "UPDATE `users` SET `status`='$status' WHERE `u_id`='$u_id' ";

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