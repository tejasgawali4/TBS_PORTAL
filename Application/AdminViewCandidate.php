<?php
 
    include_once 'header.php';
    include_once 'AdminMenu.php';

?>
    <div class="row-fluid">
    <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>View Candidates</h1>
    </div>
    </div>
        <div class="row-fluid sortable">        
                <div class="span12">
                    <div class="box-content">
                        <table id="Candidate" class="table table-striped table-bordered bootstrap-datatable datatable">
                             <thead>
                                  <tr>
                                      <th>Id</th>
                                      <th>Firstname</th>
                                      <th>Lastname</th>
                                      <th>Address</th>
                                      <th>DOB</th>
                                      <th>gender</th>
                                      <th>contact</th>
                                      <th>email</th>
                                      <th>username</th>
                                      <th>password</th>
                                      <th>ssc percentage</th>
                                      <th>ssc passing year</th>
                                      <th>hsc percentage</th>
                                      <th>hsc passing year</th>
                                      <th>hsc stream</th>
                                      <th>diploma per</th>
                                      <th>diploma stream</th>
                                      <th>diploma passing year</th>
                                      <th>graduation per</th>
                                      <th>graduation stream</th>
                                      <th>graduation passing year</th>
                                      <th>PG per</th>
                                      <th>PG stream</th>
                                      <th>PG passing year</th>
                                      <th><a href="#">Edit</a></th>
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
            $('#Candidate').dataTable( {
                "scrollX": true,
                "scrollY": true
            } );
                   $.ajax({
                        url: '../Controllers/AdminViewCandidate.inc.php',
                        type: 'POST',
                        dataType: 'json',
                        success: function(data)
                        { 
                            if(data.length > 0)
                            {
                                var tab = $('#Candidate').DataTable();                         
                                tab.clear();
                                    
                                for (var i = 0; i < data.length; i++)
                                {                                    
                                    tab.row.add([
                                      data[i].u_id,
                                      data[i].u_fisrtname,
                                      data[i].u_lastname,
                                      data[i].u_address,
                                      data[i].u_dob,
                                      data[i].u_gender,
                                      data[i].u_contact,
                                      data[i].u_email,
                                      data[i].u_username,
                                      data[i].u_password,
                                      data[i].u_ssc_per,
                                      data[i].u_ssc_passingyear,
                                      data[i].u_hsc_per,
                                      data[i].u_hsc_passingyear,
                                      data[i].u_hsc_stream,
                                      data[i].u_diploma_per,
                                      data[i].u_diploma_stream,
                                      data[i].u_diploma_passingyear,
                                      data[i].u_graduation_per,
                                      data[i].u_graduation_stream,
                                      data[i].u_graduation_passingyear,
                                      data[i].u_postGrad_per,
                                      data[i].u_postGrad_stream,
                                      data[i].u_post_passingyear,
                                      '<button type="submit" class="btn btn-success" onclick="PageCall('+data[i].u_id+')">Edit</button>',
                                    ] ).draw(); 
                                }
                            }
                        }
                });
        });

 
        function PageCall(id)
        {
            window.location.href="./AdminEditCandidate.php?id="+ id;
              
        }
    </script>

