<?php

	include_once '../Controllers/dbConnect.php';

	$id=$_GET['id'];

 	$sql="SELECT `p_id`, `p_companyName`, `p_note`, `p_deadline`, `p_companyProfile`, `p_companyCode`, `p_jobDescription`, `p_otherSkills`, `p_responsibility`, `p_skillsRequired`, `p_percentageCriteria`, `p_salaryRange`, `p_interviewProcess`, `p_jobLocation`, `p_testLocation` FROM `job_post` WHERE `p_id`='$id'";

 	$result=mysqli_query($con,$sql);

 	$data= mysqli_fetch_array($result,MYSQLI_ASSOC);
 
 	$p_id=$data['p_id'];
 	$p_companyName=$data['p_companyName'];
 	$p_note=$data['p_note'];
 	$p_deadline=$data['p_deadline'];
 	$p_companyProfile=$data['p_companyProfile'];
 	$p_companyCode=$data['p_companyCode'];
 	$p_jobDescription=$data['p_jobDescription'];
 	$p_otherSkills=$data['p_otherSkills'];
 	$p_responsibility=$data['p_responsibility'];
 	$p_skillsRequired=$data['p_skillsRequired'];
 	$p_percentageCriteria=$data['p_percentageCriteria'];
 	$p_salaryRange=$data['p_salaryRange'];
 	$p_interviewProcess=$data['p_interviewProcess'];
 	$p_jobLocation=$data['p_jobLocation'];
 	$p_testLocation=$data['p_testLocation'];

    include_once 'header.php';
    include_once 'AdminMenu.php';

?>

<div class="row-fluid">
        <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>Edit Job Details</h1>
        </div>
    </div>
<form role="form" name="AdminUpdateJobpost" method="POST">
<div class="container jumbotron">

    <div class="col-sm-12  form-group btn-danger">
                    <label >Company Deatails</label>
                </div>
                <input type="hidden" name="id" id="id" value="<?php echo $p_id?>">
                 <div class="form-group">
                    <label for="inputEmail">Company Code</label>
                    <input type="text" class="form-control" id="p_companyCode" name="p_companyCode" value="<?php echo $p_companyCode?>">
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Company Name</label>
                    <input type="text" class="form-control" id="p_companyName" name="p_companyName" value="<?php echo $p_companyName?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Company Note</label>
                    <textarea class="form-control" id="p_note" name="p_note"><?php echo $p_note?>"</textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Company Profile</label>
                    <textarea class="form-control" id="p_companyProfile" name="p_companyProfile"><?php echo $p_companyProfile?></textarea>
                </div>
            <div class="col-sm-12 form-group btn-danger">
                    <label >Job Deatails</label>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Deadline to Apply for job</label>
                     <input type="date" class="form-control" id="p_deadline"  name="p_deadline" value="<?php echo $p_deadline?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Job Description</label>
                    <textarea class="form-control" id="p_jobDescription" name="p_jobDescription"><?php echo $p_jobDescription?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Skills Required</label>
                    <textarea class="form-control" id="p_skillsRequired" name="p_skillsRequired"><?php echo $p_skillsRequired?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Other Skills</label>
                    <textarea class="form-control" id="p_otherSkills" name="p_otherSkills"><?php echo $p_otherSkills?></textarea>
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Responsibilities</label>
                    <textarea class="form-control" id="p_responsibility" name="p_responsibility"><?php echo $p_responsibility?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Percentage Criteria</label>
                    <input type="text" class="form-control" id="p_percentageCriteria" name="p_percentageCriteria" value="<?php echo $p_percentageCriteria?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Salary Range</label>
                    <input type="text" class="form-control" id="p_salaryRange" name="p_salaryRange" value="<?php echo $p_salaryRange?>">
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Interview Procedure</label>
                    <textarea class="form-control" id="p_interviewProcess" name="p_interviewProcess"><?php echo $p_interviewProcess?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Job Location</label>
                    <input type="text" class="form-control" id="p_jobLocation" name="p_jobLocation" value="<?php echo $p_jobLocation?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Test Location</label>
                    <input type="text" class="form-control" id="p_testLocation" name="p_testLocation" value="<?php echo $p_testLocation?>">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Update</button>  

                    <button type="submit" class="btn btn-success btn-lg">Cancel</button>   
                </div>
          </div>
    </form>
        </div><!--/.fluid-container-->
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
    <div class="clearfix"></div>

<?php
	include_once('footer.php');
?> 

    <script>
        $(document).ready(function()
        {   
            $('form[name=AdminUpdateJobpost]').submit(function(e) 
            {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '../Controllers/AdminUpdateJobpost.php',
                    data: $(this).serialize(),
                    success: function(data)
                    {
                       alert(data);
                    }
                
                });
            });
        });
    
    </script>
