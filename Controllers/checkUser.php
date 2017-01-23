<?php

		require_once('dbConnect.php');

		session_start();

		$username =$_POST['username'];
		$password =$_POST['password'];
		$status = 0;

		$sql="SELECT `u_id`,`u_username`,`u_password`,`u_fisrtname`,`status` FROM `candidate` WHERE `u_username`='$username' AND `u_password`='$password'";

		$res = mysqli_query($con,$sql);

		while($row = mysqli_fetch_array($res)) 
		{
			print_r($row);
			$u_id=$row['u_id'];
			$result1=$row['u_username'];
			$result2=$row['u_password'];
			$result3=$row['u_fisrtname'];
			$status= $row['status']; 

			$_SESSION['u_id']=$u_id;
			$_SESSION['username']=$result1;
			$_SESSION['u_fisrtname']=$result3;
			$_SESSION['status']=$status;
		}

		if($username == $result1 && $password == $result2) 
            {     
            		if($status=="2")
            		{
            			$admin="admin";
						$response["success"]=$admin;
						echo json_encode($response);

						$_SESSION['username']="admin";
						$_SESSION['password']=$result1;
							
					    header('Location: ../Application/AdminMain.php');
						exit();
						
            		}
            		else if($status=="1")
            		{
            			$user="user";
						$response["success"]=$user;
            			echo json_encode($response);
            			
						$_SESSION['status'] = 1;
						$_SESSION['username']=$result1;
							
					    header('Location: ../Application/UserMain.php');
						exit();

            		}
            		else
            		{
						header('Location: ../website/index.php');
            			mysqli_close($response); 
            		}
			}
			else
            {
            		$str="invalid user";
				    $response["success"]=$str;
					echo json_encode($response);
            		mysqli_close($con);
            								
            		$_SESSION['status'] = 1;
					header('Location: ../website/index.php');
					exit();
            }
?>


