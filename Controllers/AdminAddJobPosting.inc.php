<?php

include_once '../Controllers/dbConnect.php';

/*

		$sql="INSERT INTO `job_post` (`p_id`, `p_companyName`, `p_note`, `p_deadline`, `p_companyProfile`, `p_companyCode`, `p_jobDescription`, `p_skillsRequire`, `p_otherSkills`, `p_responsibility`, `p_skillsRequired`, `p_percentageCriteria`, `p_salaryRange`, `p_interviewProcess`, `p_jobLocation`, `p_testLocation`, `status`) VALUES (NULL, 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', '0')";
*/


		$status =0;
		$p_id=filter_input(INPUT_POST, 'p_id', FILTER_SANITIZE_STRING);
		$p_companyName=filter_input(INPUT_POST, 'p_companyName', FILTER_SANITIZE_STRING);
		$p_note=filter_input(INPUT_POST, 'p_note', FILTER_SANITIZE_STRING);
		$p_deadline=filter_input(INPUT_POST, 'p_deadline', FILTER_SANITIZE_STRING);
		$p_companyProfile=filter_input(INPUT_POST, 'p_companyProfile', FILTER_SANITIZE_STRING);
		$p_companyCode=filter_input(INPUT_POST, 'p_companyCode', FILTER_SANITIZE_STRING);
		$p_jobDescription=filter_input(INPUT_POST, 'p_jobDescription', FILTER_SANITIZE_STRING);

		$p_otherSkills=filter_input(INPUT_POST, 'p_otherSkills', FILTER_SANITIZE_STRING);
		$p_responsibility=filter_input(INPUT_POST, 'p_responsibility', FILTER_SANITIZE_STRING);
		$p_skillsRequired=filter_input(INPUT_POST, 'p_skillsRequired', FILTER_SANITIZE_STRING);
		$p_percentageCriteria=filter_input(INPUT_POST, 'p_percentageCriteria', FILTER_SANITIZE_STRING);
		$p_salaryRange=filter_input(INPUT_POST, 'p_salaryRange', FILTER_SANITIZE_STRING);
		$p_interviewProcess=filter_input(INPUT_POST, 'p_interviewProcess', FILTER_SANITIZE_STRING);
		$p_jobLocation=filter_input(INPUT_POST, 'p_jobLocation', FILTER_SANITIZE_STRING);
		$p_testLocation=filter_input(INPUT_POST, 'p_testLocation', FILTER_SANITIZE_STRING);
		$status=filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

/*

		$sql="INSERT INTO `job_post` (`p_id`, `p_companyName`, `p_note`, `p_deadline`, `p_companyProfile`, `p_companyCode`, `p_jobDescription`, `p_skillsRequire`, `p_otherSkills`, `p_responsibility`, `p_skillsRequired`, `p_percentageCriteria`, `p_salaryRange`, `p_interviewProcess`, `p_jobLocation`, `p_testLocation`, `status`) VALUES (NULL, 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', '0')";
*/

		//$PartnerId= $_SESSION['contact_id'];
		$sql="INSERT INTO `job_post` (`p_companyName`, `p_note`, `p_deadline`, `p_companyProfile`, `p_companyCode`, `p_jobDescription`, `p_otherSkills`, `p_responsibility`, `p_skillsRequired`, `p_percentageCriteria`, `p_salaryRange`, `p_interviewProcess`, `p_jobLocation`, `p_testLocation`, `status`) VALUES ('$p_companyName', '$p_note', '$p_deadline', '$p_companyProfile', '$p_companyCode', '$p_jobDescription', '$p_otherSkills', '$p_responsibility', '$p_skillsRequired', '$p_percentageCriteria', '$p_salaryRange', '$p_interviewProcess', '$p_jobLocation', '$p_testLocation', '$status')";
		
		//Importing our db connection script
		
		//Executing query to database 
		if(mysqli_query($con,$sql))
		{
			echo 'Post Added Successfully';
		}
		else
		{
			header('Location: ../Application/error.php');
    		exit();
		}
?>


