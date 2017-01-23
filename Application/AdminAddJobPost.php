<?php
    include_once 'header.php';
    include_once 'AdminMenu.php';

?>

<div class="row-fluid">
        <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>Add Job Details</h1>
        </div>
    </div>
<form role="form" name="AdminAddJobPosting" method="POST">
<div class="container jumbotron">

    <div class="col-sm-12  form-group btn-danger">
                    <label >Company Deatails</label>
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Company Code</label>
                    <input type="text" class="form-control" id="p_companyCode" name="p_companyCode" placeholder="Company Code">
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Company Name</label>
                    <input type="text" class="form-control" id="p_companyName" name="p_companyName" placeholder="Add Company Name">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Company Note</label>
                    <textarea class="form-control" id="p_note" name="p_note" placeholder="Some Note About Company"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Company Profile</label>
                    <textarea class="form-control" id="p_companyProfile" name="p_companyProfile" placeholder="Some Note About Company"></textarea>
                </div>
            <div class="col-sm-12 form-group btn-danger">
                    <label >Job Deatails</label>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Deadline to Apply for job</label>
                     <input type="date" class="form-control" id="p_deadline"  name="p_deadline">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Job Description</label>
                    <textarea class="form-control" id="p_jobDescription" name="p_jobDescription" placeholder="Job Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Skills Required</label>
                    <textarea class="form-control" id="p_skillsRequired" name="p_skillsRequired" placeholder="Required Skills"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Other Skills</label>
                    <textarea class="form-control" id="p_otherSkills" name="p_otherSkills" placeholder="Required Skills"></textarea>
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Responsibilities</label>
                    <textarea class="form-control" id="p_responsibility" name="p_responsibility" placeholder="Required Skills"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Percentage Criteria</label>
                    <input type="text" class="form-control" id="p_percentageCriteria" name="p_percentageCriteria" placeholder="Criteria">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Salary Range</label>
                    <input type="text" class="form-control" id="p_salaryRange" name="p_salaryRange" placeholder="Salary Range">
                </div>
                 <div class="form-group">
                    <label for="inputEmail">Interview Procedure</label>
                    <textarea class="form-control" id="p_interviewProcess" name="p_interviewProcess" placeholder="Interview Procedure"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Job Location</label>
                    <input type="text" class="form-control" id="p_jobLocation" name="p_jobLocation" placeholder="Location Of Job">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Test Location</label>
                    <input type="text" class="form-control" id="p_testLocation" name="p_testLocation" placeholder="Location Of Test">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md">Add</button>  

                    <button type="submit" class="btn btn-primary btn-md">View</button>   
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
            $('form[name=AdminAddJobPosting]').submit(function(e) 
            {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '../Controllers/AdminAddJobPosting.inc.php',
                    data: $(this).serialize(),
                    success: function(data)
                    {
                       alert(data);
                    }
                
                });
            });
        });
    
    </script>