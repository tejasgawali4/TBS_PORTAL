<?php
 
		include_once '../Controllers/dbConnect.php';

		$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$u_fisrtname=filter_input(INPUT_POST, 'u_fisrtname', FILTER_SANITIZE_STRING);
		$u_lastname=filter_input(INPUT_POST, 'u_lastname', FILTER_SANITIZE_STRING);
		$u_address=filter_input(INPUT_POST, 'u_address', FILTER_SANITIZE_STRING);
		$u_dob=filter_input(INPUT_POST, 'u_dob', FILTER_SANITIZE_STRING);
		$u_contact=filter_input(INPUT_POST, 'u_contact', FILTER_SANITIZE_STRING);
		$u_email=filter_input(INPUT_POST, 'u_email', FILTER_SANITIZE_STRING);
		$u_username=filter_input(INPUT_POST, 'u_username', FILTER_SANITIZE_STRING);
		$u_password=filter_input(INPUT_POST, 'u_password', FILTER_SANITIZE_STRING);
		$u_ssc_per=filter_input(INPUT_POST, 'u_ssc_per', FILTER_SANITIZE_STRING);
		$u_ssc_passingyear=filter_input(INPUT_POST, 'u_ssc_passingyear', FILTER_SANITIZE_STRING);
		$u_hsc_per=filter_input(INPUT_POST, 'u_hsc_per', FILTER_SANITIZE_STRING);
		$u_hsc_passingyear=filter_input(INPUT_POST, 'u_hsc_passingyear', FILTER_SANITIZE_STRING);
		$u_hsc_stream=filter_input(INPUT_POST, 'u_hsc_stream', FILTER_SANITIZE_STRING);
		$u_diploma_per=filter_input(INPUT_POST, 'u_diploma_per', FILTER_SANITIZE_STRING);
		$u_diploma_passingyear=filter_input(INPUT_POST, 'u_diploma_passingyear', FILTER_SANITIZE_STRING);
		$u_diploma_stream=filter_input(INPUT_POST, 'u_diploma_stream', FILTER_SANITIZE_STRING);
		$u_graduation_per=filter_input(INPUT_POST, 'u_graduation_per', FILTER_SANITIZE_STRING);
		$u_graduation_passingyear=filter_input(INPUT_POST, 'u_graduation_passingyear', FILTER_SANITIZE_STRING);
		$u_graduation_stream=filter_input(INPUT_POST, 'u_graduation_stream', FILTER_SANITIZE_STRING);
		$u_postGrad_per=filter_input(INPUT_POST, 'u_postGrad_per', FILTER_SANITIZE_STRING);
		$u_postGrad_stream=filter_input(INPUT_POST, 'u_postGrad_stream', FILTER_SANITIZE_STRING);
		$u_post_passingyear=filter_input(INPUT_POST, 'u_post_passingyear', FILTER_SANITIZE_STRING);

 
		$sql="UPDATE `candidate` SET `u_fisrtname`='$u_fisrtname', `u_lastname`='$u_lastname',`u_address`='$u_address',`u_dob`='$u_dob', `u_gender`='null',`u_contact`='$u_contact',`u_email`='$u_email', `u_username`='$u_username',`u_password`='$u_password',`u_ssc_per`='$u_ssc_per', `u_ssc_passingyear`='$u_ssc_passingyear',`u_hsc_per`='$u_hsc_per', `u_hsc_passingyear`='$u_hsc_passingyear',`u_hsc_stream`='$u_hsc_stream', `u_diploma_per`='$u_diploma_per',`u_diploma_stream`='$u_diploma_stream', `u_diploma_passingyear`='$u_diploma_passingyear',`u_graduation_per`='$u_graduation_per', `u_graduation_stream`='$u_graduation_stream',`u_graduation_passingyear`='$u_graduation_passingyear', `u_postGrad_per`='$u_postGrad_per',`u_postGrad_stream`='$u_postGrad_stream', `u_post_passingyear`='$u_post_passingyear' WHERE `u_id`='$id'";


		if(mysqli_query($con,$sql))
		{
			echo 'Post Updated Successfully';
		}
		else
		{
			header('Location: ../Application/error.php');
    		exit();
		}
?>



