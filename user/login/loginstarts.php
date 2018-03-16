<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(function(){
    $("#header11").load("login_header.php"); 
    $("#footer11").load("../page/footer.php");
    });
    </script>
    <style>


input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
#to{
	display:block;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

<body style="background-color: 	#D3D3D3;">
<div id="header11"></div>
<br><br><br>
<?php
include "../php/database.php";
if(isset($_POST['submit']))
{
 $email=$_POST['email'];
 $password=$_POST['psw'];
 $query="SELECT password from user WHERE email='$email'";
 $op=mysqli_query($connect,$query);
 $row=mysqli_fetch_assoc($op);
    if($password!=$row['password'] || $email='' || $password='')
    {
    	echo "
       
        <div id='to' style='padding-left:30%;padding-right: 30%;padding-top:20px;'>
        <div class='alert alert-warning' role='alert' style='padding-left: 130px;padding-right: 130px;text-align: center;''>
            Invalid Login Credentials..........
        </div>
        </div>
        ";
    }
    else
    {
     	session_name('main');
        session_start();
        $_SESSION['user']=$_POST['email'];
        header('Location: firstpage.php');
           
     }
}

?>
<!--login form -->
<form method="POST" action="">
<div style="padding-left:25%;padding-right: 25%;padding-top: 1%;padding-bottom: 1%;">
<div style="padding-left:25%;padding-right: 25%;background-color: white;border-style: solid;">
  <div class="imgcontainer">
    <img src="avatar.jpg" alt="Avatar" class="avatar" width="40px" height="100px">
  </div>

  <div class="container">
    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit"  name="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
    
  <br><br>
</div>
</div>
</form>








<div id="footer11"></div>
<br><br>

<br>
<script type="text/javascript">
setTimeout(function() {
  document.getElementById("to").style.display='none';
}, 1000);	
</script>

</body>
</html>