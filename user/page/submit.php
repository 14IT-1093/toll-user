<?php include("../php/database.php");
 function GetImageExtension($imagetype)
 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
 }

 if(isset($_POST['submitting']))
 {
    
   $email=$_POST['email'];
   $password=$_POST['password'];
   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $dob=$_POST['dd'];
   $vehicle=$_POST['vehicle-no'];
   $rfid=$_POST['rfid-no'];
   $vehicle_category=$_POST['vehicle-category'];
   $vehicle_model=$_POST['vehicle-model'];
   $vehicle_color=$_POST['vehicle-color'];
   $vehicle_company=$_POST['vehicle-company'];
   $vehicle_type=$_POST['vehicle-type'];
    $file_name=$_FILES["imgx"]["name"];
    $temp_name=$_FILES["imgx"]["tmp_name"];
    $imgtype=$_FILES["imgx"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=date("d-m-Y")."-".time()."-".rand(10000000,99999999).$ext;
    $target_path = "../images/".$imagename;
    if(move_uploaded_file($temp_name, $target_path)) 
    {
    $query_upload1="INSERT into vehicle VALUES('$vehicle','$vehicle_type','$vehicle_category','$vehicle_company','$vehicle_model','$vehicle_color','$target_path','$rfid')";
    $query_upload2="INSERT into user VALUES('$email','$password','$name','$phone','$dob','$vehicle','')";
    $query_upload3="INSERT into central (email,rfid_no,vehicle_no,vehicle_category,balance,stolen)VALUES('$email','$rfid','$vehicle','$vehicle_category',0,0)";
    if(!mysqli_query($connect,$query_upload1) )
    {
     exit("Invalid vehicle data");
    }
    if(!mysqli_query($connect,$query_upload2) )
    {
     exit("your email or vehicle no is already used");
    }
    if(!mysqli_query($connect,$query_upload3) )
    {
     exit("your email or vehicle no is already used");
    }
    }
    else
    {
      exit("Error While uploading image on the server");
    }
    

 }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form status</title>
    <head>
    <title>User Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(function(){
    $("#header11").load("../login/login_header.php"); 
    $("#footer11").load("footer.php");
    });
    </script>
</head>
</head>
<body>
<div id="header11"></div>
<br><br><br>
<div>
<div style="padding-left: 130px;padding-right: 130px;padding-top: 25px;padding-bottom: 25px;" >
 <div class="alert alert-warning" role="alert" style="padding-left: 130px;padding-right: 130px;padding-top: 25px;padding-bottom: 25px;text-align: center;">
  Successfully Submitted File.....
  <br><br>
  Redirecting to Login Page......
</div>
</div>
</div>

<script>
setTimeout(function() {
  window.location.href ="http://localhost/user/";
}, 4000);
</script>
<div id="footer11"></div>
</body>
</html>

