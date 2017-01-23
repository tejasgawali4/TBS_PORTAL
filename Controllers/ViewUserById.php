<?php

require_once("dbConnect.php");

$u_id=$_GET['u_id'];

$sql="SELECT `u_id`, `u_firstname`, `u_lastname`, `u_email`, `u_password`, `u_dob`, `u_gender`, `u_address`, `u_city`, `u_mobile`, `status` FROM `users` WHERE `u_id`='$u_id'";

$res= mysqli_query($con,$sql);

$result =array();

while ($row = mysqli_fetch_array($res)) 
{
	array_push($result,array('u_id'=>$row[0],
		'u_firstname'=>$row[1],
		'u_lastname'=>$row[2],
		'u_email'=>$row[3],
		'u_password'=>$row[4],
		'u_dob'=>$row[5],
		'u_gender'=>$row[6],
		'u_address'=>$row[7],
		'u_city'=>$row[8],
		'u_mobile'=>$row[9],
		'status'=>$row[10]));

	echo json_encode(array("result"=>$result));

	mysqli_close($con);
}



?>