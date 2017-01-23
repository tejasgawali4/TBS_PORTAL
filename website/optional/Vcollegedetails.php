<!DOCTYPE html>
<html>
<head>
    <title>TechDrop</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<header>
<form role="form" name="addCollege" id="addCollge" method="POST">
    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar">Add Colleges</span>
              <span class="icon-bar">Add Clgstream</span>
              <span class="icon-bar">Add Cutoff</span>
            </button>
            <a class="navbar-brand" href="index.html">Study Bharat</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="Vcollegedetails.html">Add Colleges</a></li>
              <li><a href="Vclgstream.html">Add ClgStream</a></li>
              <li><a href="Vcutoff.html">Add CutOff</a></li>
<!--             <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul> -->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</header>
<form>
    <div class="container jumbotron">
          <div class="row">
                <div class="col-sm-12 form-group btn-danger">
                    <label >Add College Details</label>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">College Id</label>
                    <input type="text" class="form-control" id="collgeId" placeholder="Auto Enter college Id" readonly>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">College Name</label>
                    <input type="text" class="form-control" id="collegeName" placeholder="Enter college Name">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Address</label>
                    <input type="text" class="form-control" id="Address" placeholder="Enter Address">
                </div>
          </div>
          <div class="row">
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Pincode</label>
                    <input type="text" class="form-control" id="Pincode" placeholder="Enter Pincode">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">District</label>
                    <select tabindex="9" class="form-control input-lg" name="ProductCategory1">
                    <?php include_once '../utility/city.php'; ?>
                    </select>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Telephone</label>
                    <input type="text" class="form-control" id="Telephone" placeholder="Enter Telephone">
                </div>
          </div>
          <div class="row">
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="Email" placeholder="Enter Email">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="inputEmail">Website</label>
                    <input type="text" class="form-control" id="Website" placeholder="Enter Website URL">
                </div>
                <div class="col-sm-4 form-group">
                    
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
</body>
</html>