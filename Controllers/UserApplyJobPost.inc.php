<?php

	session_start();
	include_once 'dbConnect.php';

		$uid=$_SESSION['u_id'];
	    $jid=$_POST['jid'];

		if(isset($_POST['jid']))
		{

				$sql1="SELECT `fku_id`, `fkp_id` FROM `jobcandidate` WHERE `fku_id`='$uid' AND `fkp_id`='$jid'";
				$result=mysqli_query($con,$sql1);
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					   	$userId1 = $row['fku_id'];
   						$postId = $row['fkp_id'];
				}
   						if($uid==$userId1 && $jid==$postId)
   						{
   							echo "User already applied for this job..";
   						}
   						else
   						{
   							$sql="INSERT INTO `jobcandidate`(`fku_id`, `fkp_id`) VALUES ('$uid','$jid')";

							if(mysqli_query($con,$sql))
							{
								echo "successfully applied..";
							}
							else
							{
								header('Location: ../Application/error.php');
					    		exit();
							}

   						}
				
				
		}
		else
		{
				echo "error";
		}



?>