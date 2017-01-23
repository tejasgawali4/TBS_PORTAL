<?php
		session_start();
		include_once 'dbConnect.php';

		$uid=$_SESSION['u_id'];

		//$PartnerId= $_SESSION['contact_id'];
		$sql="Select tbs_job_portal.jobcandidate.jobCanId ,tbs_job_portal.candidate.u_fisrtname, tbs_job_portal.job_post.p_companyName From tbs_job_portal.candidate Inner Join tbs_job_portal.jobcandidate On tbs_job_portal.jobcandidate.fku_id = tbs_job_portal.candidate.u_id Inner Join tbs_job_portal.job_post On tbs_job_portal.jobcandidate.fkp_id = tbs_job_portal.job_post.p_id WHERE tbs_job_portal.candidate.u_id='$uid' ORDER BY `u_id`";

		$result = mysqli_query($con, $sql);

		$index = 0;
		$data = array();
		
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
			$data[$index] = $row;
			$index++;
		}

		echo json_encode($data);

?>


