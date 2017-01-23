<?php

		include_once 'dbConnect.php';

		//$PartnerId= $_SESSION['contact_id'];
		$sql="SELECT `u_id`,`u_fisrtname`, `u_lastname`, `u_address`, `u_dob`, `u_gender`, `u_contact`, `u_email`, `u_username`, `u_password`, `u_ssc_per`, `u_ssc_passingyear`, `u_hsc_per`, `u_hsc_passingyear`, `u_hsc_stream`, `u_diploma_per`, `u_diploma_stream`, `u_diploma_passingyear`, `u_graduation_per`, `u_graduation_stream`, `u_graduation_passingyear`, `u_postGrad_per`, `u_postGrad_stream`, `u_post_passingyear` FROM `candidate` ORDER BY `u_id`";

		$result = mysqli_query($con, $sql);

/*		while($row = mysqli_fetch_array($res)){
		array_push($result,
		array('u_id'=>$row[0],'u_firstname'=>$row[1],'u_lastname'=>$row[2],'u_email'=>$row[3],'u_password'=>$row[4],'u_dob'=>$row[5],'u_gender'=>$row[6],'u_address'=>$row[7],'u_city'=>$row[8],'u_mobile'=>$row[9]));
		}
		 
		echo json_encode(array("result"=>$result));
		 
		mysqli_close($con);
*/
		
		$index = 0;
		$data = array();
		
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
			$data[$index] = $row;
			$index++;
		}

		echo json_encode($data);

?>


