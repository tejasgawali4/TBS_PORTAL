<?php

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$emailid = $_POST['username'];
		$password = $_POST['password'];
		$dob = NUll;
		$gender = NULL;
		$address = $_POST['address'];
		$city = $_POST['city'];
		$mobile = $_POST['mobile'];

		$status = 0;
		$userid = 1;

INSERT INTO `candidate` (`u_id`, `u_fisrtname`, `u_lastname`, `u_address`, `u_dob`, `u_gender`, `u_contact`, `u_password`, `u_ssc_per`, `u_ssc_passingyear`, `u_hsc_per`, `u_hsc_passingyear`, `u_hsc_stream`, `u_diploma_per`, `u_diploma_stream`, `u_diploma_passingyear`, `u_graduation_per`, `u_graduation_stream`, `u_graduation_passingyear`, `u_postGrad_per`, `u_postGrad_stream`, `u_post_passingyear`) VALUES (NULL, 'tejas', 'gawali', 'pimpri', '12/06/1992', 'Male', '8888876264', 'admin', '60', '2011', '60', '2014', 'science', '', '', '', '60', 'BCA', '2014', '60', 'MCA', '2016'), (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');


		//Creating an sql query
		$sql = "INSERT INTO `users` (`u_firstname`, `u_lastname`, `u_email`, `u_password`, `u_dob`, `u_gender`, `u_address`, `u_city`, `u_mobile`) VALUES ('$firstname', '$lastname', '$emailid', '$password', '$dob', '$gender', '$address', '$city', '$mobile')";
		
		//Importing our db connection script
		require_once('dbConnect.php');
		
		//Executing query to database
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
		
		//Closing the database 
		mysqli_close($con);
	
?>