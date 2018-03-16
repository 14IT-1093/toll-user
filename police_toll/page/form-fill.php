<!doctype html>
<html lang="en">
  <head>
    <title>Complaint-Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
  </head>
  <body style="background-color:grey">
    <?php include"../php/header.php" ?>
    <!-- sidebar-->
 <div style="padding-top:80px;" class="container-fluid">
     <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">File Complaint</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Analytics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Export</a>
            </li>
          </ul>
        </nav>
        <!-- main starts -->
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

<div style="background-color: white;padding: 15px 15px 15px 15px;border-radius: 5px 5px 5px 5px;margin-left: 20%;margin-right: 20%;box-shadow: 2px 2px 4px 2px grey">      
    <!-- collapse begins here -->
<form action="../php/put.php" method="POST" enctype="multipart/form-data" >

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vehicle-No</label>
      <input name="vehicle_no" type="text" class="form-control" id="fname" placeholder="Vehicle No..." required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">RFID-NO</label>
      <input name="rfid_no" type="text" class="form-control" id="lname" placeholder="RFID No..." required>
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Branch-Name</label>
    <input name="branch_name" type="text" class="form-control" id="email" placeholder="Branch-Name..." required>
 </div>
 <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input  name="address" type="text" class="form-control" id="inputAddress2" placeholder="Address...">
 </div>

 <div class="form-row">
 <div class="form-group">
  Upload your passport size Photograph
    <input name="photo" type="file" class="form-control-file">
 </div>&nbsp;&nbsp;
 <div class="form-group">
    Upload your Identity proof
    <input name="identity" type="file" class="form-control-file">
 </div>&nbsp;&nbsp;
 <div class="form-group">
    Upload your Vehicle paper
    <input name="vehicle" type="file" class="form-control-file">
 </div>
 </div>
 <textarea name="details">Description that covers your vehicle information,area from where it is lost,and any other details which is relevant to this complaint....</textarea>
 <input type="submit" name="submit11" value="Submit">
</form>  

</div>

 

</main>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>

</html>