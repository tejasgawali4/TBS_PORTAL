<?php
 
require_once('dbConnect.php');

$sql = "SELECT `u_id`,`u_firstname`,`u_lastname` FROM `users` WHERE `status`='0'";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('u_id'=>$row[0],'u_firstname'=>$row[1],'u_lastname'=>$row[2]));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);

?>