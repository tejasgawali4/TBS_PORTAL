<?php
 
    include_once 'header.php';
    include_once 'UserMenu.php';

?>
    <div class="row-fluid">
    <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>View Applied Jobs</h1>
    </div>
    </div>
        <div class="row-fluid sortable">        
                <div class="span12">
                    <div class="box-content">
                        <table id="Applied" class="table table-striped table-bordered bootstrap-datatable datatable">
                             <thead>
                                  <tr>
                                      <th>id</th>
                                      <th>Name</th>
                                      <th>Company Name</th>
                                      <th><a href="#">Cancel</a></th>
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
                   $.ajax({
                        url: '../Controllers/UserViewAppliedJobs.inc.php',
                        type: 'POST',
                        dataType: 'json',
                        success: function(data)
                        { 
                            if(data.length > 0)
                            {
                                var tab = $('#Applied').DataTable();                         
                                tab.clear();
                                    
                                for (var i = 0; i < data.length; i++)
                                {                                    
                                    tab.row.add([
                                      data[i].jobCanId,
                                      data[i].u_fisrtname,
                                      data[i].p_companyName,
                                      '<button type="submit" class="btn btn-success" onclick="PageCall('+data[i].jobCanId+')">Cancel</button>',
                                    ] ).draw();
                                }
                            }
                        }
                });
        });

              function PageCall(id)
              {
                  window.location.href="../Controllers/UserCancelJobApply.inc.php?jid="+ id;
              }
    </script>

