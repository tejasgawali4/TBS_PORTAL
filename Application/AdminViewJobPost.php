<?php
 
    include_once 'header.php';
    include_once 'AdminMenu.php';
?>

    <div class="row-fluid">
        <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>View Jobs</h1>
        </div>
    </div>
        <div class="row-fluid sortable">        
                <div class="span12">
                    <div class="box-content"> 
                        <table id="post1" class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                  <tr>
                                      <th>Job Id</th>
                                      <th>Company Name</th>
                                      <th>Note</th>
                                      <th>Deadline</th>
                                      <th>Profile</th>
                                      <th>Code</th>
                                      <th>Job Discription</th>
                                      <th>Other Skills</th>
                                      <th>responsibility</th>
                                      <th>skill Required</th>
                                      <th>Criteria</th>
                                      <th>Salary</th>
                                      <th>Interview Process</th>
                                      <th>Job Discription</th>
                                      <th>Location</th>
                                      <th><a href="#">Delete</a></th>
                                  </tr>
                            </thead> 
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>  
        </div>
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
            $('#post1').dataTable( {
              "scrollX": true,
              "scrollY": true
            } );
            $.ajax({
                        url: '../Controllers/AdminViewJobPost.inc.php',
                        type: 'POST',
                        dataType: 'json',
                        success: function(data)
                        {  
                            if(data.length > 0)
                            {
                                var tab = $('#post1').DataTable();
                                tab.clear();
                                for (var i = 0; i < data.length; i++)
                                {                                   
                                      tab.row.add([
                                      data[i].p_id,
                                      data[i].p_companyName,
                                      data[i].p_note,
                                      data[i].p_deadline,
                                      data[i].p_companyProfile,
                                      data[i].p_companyCode,
                                      data[i].p_jobDescription,
                                      data[i].p_otherSkills,
                                      data[i].p_responsibility,
                                      data[i].p_skillsRequired,
                                      data[i].p_percentageCriteria,
                                      data[i].p_salaryRange,
                                      data[i].p_interviewProcess,
                                      data[i].p_jobLocation,
                                      data[i].p_testLocation,
                                      '<button type="submit" class="btn btn-success" onclick="PageCall('+data[i].p_id+')">Edit</button>',
                                    ] ).draw();
                                }
                            }
                        }
                });
        });

 
        function PageCall(id)
        {
            window.location.href="./AdminEditJobPost.php?id="+ id;
              
        }
    </script>
    

