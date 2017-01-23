<?php

       include('../Controllers/dbConnect.php');

       $jid=$_GET['jid'];

       $sql = "SELECT `p_id`, `p_companyName`, `p_note`, `p_deadline`, `p_companyProfile`, `p_companyCode`, `p_jobDescription`, `p_otherSkills`, `p_responsibility`, `p_skillsRequired`, `p_percentageCriteria`, `p_salaryRange`, `p_interviewProcess`, `p_jobLocation`, `p_testLocation` FROM `job_post` WHERE `p_id`='$jid'";

      $result = mysqli_query($con, $sql);
      
      $data = mysqli_fetch_array($result);

      $jid=$data['p_id'];
      $p_companyCode=$data['p_companyCode'];
      $p_companyName=$data['p_companyName'];
      $p_note=$data['p_note'];
      $p_companyProfile=$data['p_companyProfile'];
      $p_deadline=$data['p_deadline'];
      $p_jobDescription=$data['p_jobDescription'];
  	  $p_skillsRequired=$data['p_skillsRequired'];
  	  $p_otherSkills=$data['p_otherSkills'];
  	  $p_responsibility=$data['p_responsibility'];
  	  $p_percentageCriteria=$data['p_percentageCriteria'];
  	  $p_salaryRange=$data['p_salaryRange'];
  	  $p_interviewProcess=$data['p_interviewProcess'];
  	  $p_jobLocation=$data['p_jobLocation'];
  	  $p_testLocation=$data['p_testLocation'];


 	include_once 'header.php';
  include_once 'UserMenu.php';
?>

<div class="row-fluid">
        <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>Apply For JOB</h1>
        </div>
    </div>
<form role="form" name="UserViewJobPostDetails" method="POST">
<div class="container jumbotron">

    <div class="col-sm-12  form-group btn-danger">
                    <label >Company Deatails</label>
                </div>

                <input type="hidden" name="j_id" id="j_id" value="<?php echo $jid?>"/>

                 <div class="form-group">
                    <label for="inputEmail">Company Code</label>
                    <input type="text" class="form-control" name="p_companyCode" value="<?php echo $p_companyCode?>" readonly/>
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Company Name</label>
                    <input type="text" class="form-control" name="p_companyName" value="<?php echo $p_companyName?>" readonly/>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Company Note</label>
                    <textarea class="form-control" name="p_note" readonly><?php echo $p_note?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Company Profile</label>
                    <textarea class="form-control" name="p_companyProfile" readonly><?php echo $p_companyProfile?></textarea>
                </div>
            <div class="col-sm-12 form-group btn-danger">
                    <label >Job Deatails</label>
                </div>  
                <div class="form-group">
                    <label for="inputEmail">Deadline to Apply for job</label>
                     <input type="date" class="form-control" name="p_deadline" value="<?php echo $p_deadline?>" readonly/>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Job Description</label>
                    <textarea class="form-control" name="p_jobDescription" readonly><?php echo $p_jobDescription?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Skills Required</label>
                    <textarea class="form-control" name="p_skillsRequire" readonly><?php echo $p_skillsRequired?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Other Skills</label>
                    <textarea class="form-control" name="p_otherSkills" readonly><?php echo $p_otherSkills?></textarea>
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Responsibilities</label>
                    <textarea class="form-control" name="p_responsibility" readonly><?php echo $p_responsibility?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Percentage Criteria</label>
                    <input type="text" class="form-control" name="p_percentageCriteria" value="<?php echo $p_percentageCriteria?>" readonly/>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Salary Range</label>
                    <input type="text" class="form-control" name="p_salaryRange" value="<?php echo $p_salaryRange?>" readonly/>
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Interview Procedure</label>
                    <textarea class="form-control" name="p_interviewProcess" readonl><?php echo $p_interviewProcess?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Job Location</label>
                    <input type="text" class="form-control" name="p_jobLocation" value="<?php echo $p_jobLocation?>" readonly/>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Test Location</label>
                    <input type="text" class="form-control" name="p_testLocation" value="<?php echo $p_testLocation?>" readonly/>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md">Apply</button>  

                    <a href="userMain.php"><button type="submit" class="btn btn-primary btn-md">Cancel</button></a>   
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

            $('form[name=UserViewJobPostDetails]').submit(function(e) 
            {
            			
            			var id = $('#j_id').val();
            			alert(id);

            			  var r = confirm("Do you want to Apply..!");
                          if (r == true) 
                          {
                          		e.preventDefault();
				                $.ajax({
				                    type: 'POST',
				                    cache: false,
				                    url: '../Controllers/UserApplyJobPost.inc.php',
				                    data: {jid: id},
				                    success: function(data)
				                    {
				                       alert(data);
				                    }
				                
				                });

                          } 
                          else 
                          {
                              alert("You have canceled the Request..!");
                          }

            });

        });
    
    </script>