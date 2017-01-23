<?php

require_once('dbConnect.php');


$sql = "SELECT `p_id`,`p_heading` FROM `posts` WHERE `p_status`='1'";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('p_id'=>$row[0],'p_heading'=>$row[1]));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);

?>