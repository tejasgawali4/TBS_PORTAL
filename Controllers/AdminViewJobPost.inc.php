<?php

include_once 'dbConnect.php';

		//$PartnerId= $_SESSION['contact_id'];
		$sql="SELECT `p_id`, `p_companyName`, `p_note`, `p_deadline`, `p_companyProfile`, `p_companyCode`, `p_jobDescription`, `p_otherSkills`, `p_responsibility`, `p_skillsRequired`, `p_percentageCriteria`, `p_salaryRange`, `p_interviewProcess`, `p_jobLocation`, `p_testLocation` FROM `job_post` ORDER BY `p_id`";
		$result = mysqli_query($con, $sql);

		$index = 0;
		$data = array();
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
			$data[$index] = $row;
			$index++;
		}

		echo json_encode($data);

?>