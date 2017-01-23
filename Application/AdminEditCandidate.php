<?php

	include_once '../Controllers/dbConnect.php';

	$id=$_GET['id'];

	$sql="SELECT `u_id`,`u_fisrtname`, `u_lastname`, `u_address`, `u_dob`, `u_gender`, `u_contact`, `u_email`, `u_username`, `u_password`, `u_ssc_per`, `u_ssc_passingyear`, `u_hsc_per`, `u_hsc_passingyear`, `u_hsc_stream`, `u_diploma_per`, `u_diploma_stream`, `u_diploma_passingyear`, `u_graduation_per`, `u_graduation_stream`, `u_graduation_passingyear`, `u_postGrad_per`, `u_postGrad_stream`, `u_post_passingyear` FROM `candidate` WHERE `u_id`='$id'";

	$result=mysqli_query($con,$sql);

 	$data= mysqli_fetch_array($result,MYSQLI_ASSOC);

 		$u_id=$data['u_id'];
 	    $u_fisrtname=$data['u_fisrtname'];
		$u_lastname=$data['u_lastname'];
		$u_address=$data['u_address'];
		$u_dob=$data['u_dob'];
		$u_gender=$data['u_gender'];
		$u_contact=$data['u_contact'];
		$u_email=$data['u_email'];
		$u_username=$data['u_username'];
		$u_password=$data['u_password'];
		$u_ssc_per=$data['u_ssc_per'];
		$u_ssc_passingyear=$data['u_ssc_passingyear'];
		$u_hsc_per=$data['u_hsc_per'];
		$u_hsc_passingyear=$data['u_hsc_passingyear'];
		$u_hsc_stream=$data['u_hsc_stream'];
		$u_diploma_per=$data['u_diploma_per'];
		$u_diploma_passingyear=$data['u_diploma_passingyear'];
		$u_diploma_stream=$data['u_diploma_stream'];
		$u_graduation_per=$data['u_graduation_per'];
		$u_graduation_passingyear=$data['u_graduation_passingyear'];
		$u_graduation_stream=$data['u_graduation_stream'];
		$u_postGrad_per=$data['u_postGrad_per'];
		$u_postGrad_stream=$data['u_postGrad_stream'];
		$u_post_passingyear=$data['u_post_passingyear'];


 	include_once 'header.php';
    include_once 'AdminMenu.php';

?>

<div class="row-fluid">
        <div class="span12" onTablet="span12" onDesktop="span12" style="text-align : center;">
            <h1>Edit Candidate</h1>
        </div>
    </div>

    <form role="form" id="AdminUpdateCandidate" method="POST">
        <div class="container jumbotron">
          <div class="row">
                <div class="col-sm-12 form-group btn-danger">
                    <label >Basic Deatails</label>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">User Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $u_id?>" readonly>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">First Name</label>
                    <input type="text" class="form-control" id="u_fisrtname" name="u_fisrtname" value="<?php echo $u_fisrtname?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Last Name</label>
                    <input type="text" class="form-control" id="u_lastname" name="u_lastname" value="<?php echo $u_lastname?>">
                </div>
          </div>
          <div class="row">
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Address</label>
                    <textarea class="form-control" id="u_address"  name="u_address">
                    <?php echo $u_address?></textarea>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Date of Birth</label>
                     <input type="date" class="form-control" id="u_dob"  name="u_dob" value="<?php echo $u_dob?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail" class="radio-inline" >Gender</label>
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
                    <input type="text" class="form-control" id="u_city" name="u_city" value="Extra filed">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Mobile</label>
                    <input type="text" class="form-control" id="u_contact" name="u_contact" required="Mobile" value="<?php echo $u_contact?>">
                </div>
                <div class="col-sm-4 form-group">
                   
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" id="u_email" name="u_email" value="<?php echo $u_email?>">
                </div>
          </div>

           <div class="row">
                <div class="col-sm-4 form-group">
                   
                    <label for="inputEmail">User Name</label>
                    <input type="text" class="form-control" id="u_username" name="u_username" value="<?php echo $u_username?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Enter Password</label>
                    <input type="password" class="form-control" id="u_password" name="u_password" value="<?php echo $u_password?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Re-Enter Password</label>
                    <input type="password" class="form-control" id="u_password" name="u_password" value="<?php echo $u_password?>">
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
                    <input type="text" class="form-control" id="u_ssc_per" name="u_ssc_per"  value="<?php echo $u_ssc_per?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">SSC Passing Year</label>
                    <input type="text" class="form-control" id="u_ssc_passingyear" name="u_ssc_passingyear" value="<?php echo $u_ssc_passingyear?>">
                </div>
                
          </div>


            <!--HSC Details-->
           <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">HSC Percentage</label>
                    <input type="text" class="form-control" id="u_hsc_per" name="u_hsc_per"  value="<?php echo $u_hsc_per?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">HSC Passing Year</label>
                    <input type="text" class="form-control" id="u_hsc_passingyear" name="u_hsc_passingyear" value="<?php echo $u_hsc_passingyear?>">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="sel1">Select Stream</label>
                    <select class="form-control" id="u_hsc_stream">
                    <option><?php echo $u_hsc_stream?></option>
                    <option>Science</option>
                    <option>Commerce</option>
                </select>
                </div>
                
          </div>

            <!-- Deploma Details-->
             <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Diploma Percentage</label>
                    <input type="text" class="form-control" id="u_diploma_per" name="u_diploma_per" value="<?php echo $u_diploma_per?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Diploma Passing Year</label>
                    <input type="text" class="form-control" id="u_diploma_passingyear" name="u_diploma_passingyear" value="<?php echo $u_diploma_passingyear?>">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="inputEmail">Diploma Stream</label>
                    <input type="text" class="form-control" id="u_diploma_stream" name="u_diploma_stream" value="<?php echo $u_diploma_stream?>">
                </select>
                </div>
                
          </div>

            <!-- Graduation Details-->
            <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Graduation Percentage</label>
                    <input type="text" class="form-control" id="u_graduation_per" name="u_graduation_per" value="<?php echo $u_graduation_per?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Graduation Passing Year</label>
                    <input type="text" class="form-control" id="u_graduation_passingyear" name="u_graduation_passingyear" value="<?php echo $u_graduation_passingyear?>">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="inputEmail">Graduation Stream</label>
                    <input type="text" class="form-control" id="u_diploma_stream" name="u_diploma_stream" value="<?php echo $u_diploma_stream?>">
                </select>
                </div>
                
          </div>

             <!-- Post Graduation Details-->
           <div class="row">
                 
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Post Graduation Percentage</label>
                    <input type="text" class="form-control" id="u_postGrad_per" name="u_postGrad_per" value="<?php echo $u_postGrad_per?>">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Post Graduation Passing Year</label>
                    <input type="text" class="form-control" id="u_post_passingyear" name="u_post_passingyear" value="<?php echo $u_post_passingyear?>">
                </div>
                 <div class="col-sm-4 form-group">
                    <label for="inputEmail">Post Graduation Stream</label>
                    <input type="text" class="form-control" id="u_postGrad_stream" name="u_postGrad_stream" value="<?php echo $u_postGrad_stream?>">
                </select>
                </div>
                
          </div>

          <div class="row">
                <div class="col-sm-4 form-group">
                    <button type="submit" class="btn btn-success btn-lg">Update</button>
                </div>
                <div class="col-sm-4 form-group">
                    <input type="submit" class="btn-success btn-lg" value="Cancel" tabindex="4">
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
            $('form[name=AdminUpdateCandidate]').submit(function(e) 
            {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '../Controllers/AdminUpdateCandidate.php',
                    data: $(this).serialize(),
                    success: function(data)
                    {
                       alert(data);
                    }
                
                });
            });
        });
    
    </script>
