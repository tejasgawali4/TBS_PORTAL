<?php
    include_once 'header.php';
    include_once 'UserMenu.php';
?>

<div class="row-fluid">
        <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>User Refer Friend</h1>
        </div>
    </div>

    <form role="form" method="POST">
        <div class="container jumbotron">
          <div class="row">
                <div class="col-sm-12 form-group btn-danger">
                    <label >Basic Deatails</label>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">User Id</label>
                    <input type="text" class="form-control" id="u_id" name="u_id" placeholder="Auto Enter college Id" readonly>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">First Name</label>
                    <input type="text" class="form-control" id="u_fisrtname" name="u_fisrtname" placeholder="Enter FirstName">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Last Name</label>
                    <input type="text" class="form-control" id="u_lastname" name="u_lastname" placeholder="Enter LastName">
                </div>
          </div>
          <div class="row">
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Address</label>
                    <textarea class="form-control" id="u_address"  name="u_address" placeholder="Enter Address">
                    </textarea>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Date of Birth</label>
                     <input type="date" class="form-control" id="u_dob"  name="u_dob">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail" class="radio-inline">Gender</label>
                    <table>
                            <tr>
                                <th>
                                     <input type="radio" name="gender" value="male" checked> Male<br>
                                </th>
                                <th>
                                      <input type="radio" name="gender" value="female"> Female<br>                                   
                                </th>
                            </tr>
                    </table>
                </div>
          </div>
          

          <div class="row">
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">City</label>
                    <input type="text" class="form-control" id="u_city" name="u_city" placeholder="Enter City">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Mobile</label>
                    <input type="text" class="form-control" id="u_contact" name="u_contact" placeholder="Enter Mobile" required="Mobile">
                </div>
                <div class="col-sm-4 form-group">
                   
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" id="u_email" name="u_email" placeholder="Enter FirstName">
                </div>
          </div>

           <div class="row">
                <div class="col-sm-4 form-group">
                   
                    <label for="inputEmail">User Name</label>
                    <input type="text" class="form-control" id="u_username" name="u_username" placeholder="Enter FirstName">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Enter Password</label>
                    <input type="password" class="form-control" id="u_password" name="u_password" placeholder="Enter Password">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Re-Enter Password</label>
                    <input type="password" class="form-control" id="u_password" name="u_password" placeholder="Enter Mobile">
                </div>
                
          </div>

<!-- Academic Details-->
            <div class="row">
                <div class="col-sm-12 form-group btn-danger">
                    <label>Academic Deatails</label>
                </div>
                <!-- SSC  Details-->
              
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">SSC Percentage</label>
                    <input type="text" class="form-control" id="u_ssc_per" name="u_ssc_per" placeholder="Enter SSC percentage">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">SSC Passing Year</label>
                    <input type="text" class="form-control" id="u_ssc_passingyear" name="u_ssc_passingyear" placeholder="Enter SSC Paasing Year">
                </div>
                
          </div>


            <!--HSC Details-->
           <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">HSC Percentage</label>
                    <input type="text" class="form-control" id="u_hsc_per" name="u_hsc_per" placeholder="Enter HSC percentage">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">HSC Passing Year</label>
                    <input type="text" class="form-control" id="u_hsc_passingyear" name="u_hsc_passingyear" placeholder="Enter HSC Paasing Year">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="sel1">Select Stream</label>
                    <select class="form-control" id="u_hsc_stream">
                    <option>Select Stream</option>
                    <option>Science</option>
                    <option>Commerce</option>
                    
                </select>
                </div>
                
          </div>

            <!-- Deploma Details-->
             <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Diploma Percentage</label>
                    <input type="text" class="form-control" id="u_diploma_per" name="u_diploma_per" placeholder="Enter Diploma percentage">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Diploma Passing Year</label>
                    <input type="text" class="form-control" id="u_diploma_passingyear" name="u_diploma_passingyear" placeholder="Enter Diploma Paasing Year">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="inputEmail">Diploma Stream</label>
                    <input type="text" class="form-control" id="u_diploma_stream" name="u_diploma_stream" placeholder="Enter Diploma Stream">
                </select>
                </div>
                
          </div>

            <!-- Graduation Details-->
            <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Graduation Percentage</label>
                    <input type="text" class="form-control" id="u_graduation_per" name="u_graduation_per" placeholder="Enter graduation percentage">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Graduation Passing Year</label>
                    <input type="text" class="form-control" id="u_graduation_passingyear" name="u_graduation_passingyear" placeholder="Enter graduation Paasing Year">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="inputEmail">Graduation Stream</label>
                    <input type="text" class="form-control" id="u_diploma_stream" name="u_diploma_stream" placeholder="Enter Graduation Stream">
                </select>
                </div>
                
          </div>

             <!-- Post Graduation Details-->
           <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Post Graduation Percentage</label>
                    <input type="text" class="form-control" id="u_postGrad_per" name="u_postGrad_per" placeholder="Enter Post graduation percentage">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Post Graduation Passing Year</label>
                    <input type="text" class="form-control" id="u_post_passingyear" name="u_post_passingyear" placeholder="Enter Post graduation Paasing Year">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="inputEmail">Post Graduation Stream</label>
                    <input type="text" class="form-control" id="u_postGrad_stream" name="u_postGrad_stream" placeholder="Enter Post Graduation Stream">
                </select>
                </div>
                
          </div>

          <div class="row">
                <div class="col-sm-4 form-group">
                    <input type="submit" class="btn-success" value="Save" tabindex="4">
                </div>
                <div class="col-sm-4 form-group">
                    <input type="submit" class="btn-success" value="View" tabindex="4">
                </div>
                <div class="col-sm-4 form-group">
 
                </div>
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
            $('form[name=AdminAddJobPosting]').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '../Controllers/addPost.php',
                    data: $(this).serialize(),
                    success: function(data){
                        alert(data);
                        $('#AdminAddJobPosting')[0].reset();
                    }
                });
            });
        });
    
    </script>