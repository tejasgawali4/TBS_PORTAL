<?php
 
    include_once 'header.php';
    include_once 'UserMenu.php';
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
                                      <th><b>View Post</b></th>
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
                responsive: true,              
                "scrollX": true,
                "scrollY": true,
               
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
                                      '<button type="submit" class="btn btn-success" onclick="PageCall('+data[i].p_id+')">View Post</button>',
                                    ] ).draw();
                                }

                            }

                        }

                });

            });


              function PageCall(id)
              {
                  window.location.href="UserViewPerticularPost.php?jid="+ id;
              }


        /*          var tab = $('#post1').DataTable();
                     
                    $('#post1 tbody').on('click', 'tr', function () 
                    {

                          var data = tab.row( this ).data();
                          var j_id = data[0];
                          alert(j_id);

                       window.location.href = "UserViewPerticularPost.php?id?id"+ j_id;
                          alert(data); 

                          $.post('./UserViewPerticularPost.php', {id: j_id});
                       var r = confirm("Do you want to Apply..!");
                          if (r == true) 
                          {
                                $.post({ 
                                    type: 'POST',
                                    cache: false,
                                    url: 'UserViewPerticularPost.php',
                                    data: {id: j_id},
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

                    } );*/

    </script>


