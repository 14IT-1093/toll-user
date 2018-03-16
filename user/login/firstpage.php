<?php include "../php/database.php"; ?>
<?php
session_name('main');
session_start();
if(isset($_SESSION['user']))
{

}
else
{
	logout();
}
function logout()
{
	  session_unset();
    session_destroy();
    header('Location: loginstarts.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(function(){ 
    $("#footer11").load("../page/footer.php");
     $("#entersidebar").load("profile.php");
    });
    </script>
    <style>
    #rm{
    	display: block;
    	color:white;
    }
    .bn{
    	background-color: green;
    }
    .bn:hover {
    	background-color:yellow;
    	color:red;
    }
    </style>
</head>
<body style="background-color:#E0E0E0;">


<header id="header11">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
          </ul>
          <div id="rm">
            
          </div>
          &nbsp;&nbsp;&nbsp;
          <div>
            <form action="logout.php">
          	<button class="bn" style="border-style: solid;border-color:grey;padding: 2px 5px 2px 5px;" name="logout">Log-Out</button></form>
          </div>
        </div>
      </nav>
</header>

<div class="w3-sidebar w3-bar-block" style="width:160px;height:300px;background-color:black;color:white;margin-left: 20px;margin-top: 5%;">
  <h3 class="w3-bar-item">Menu</h3>
  <a id="click11" onclick="f11()" href="#" class="w3-bar-item w3-button" style="text-decoration:none;">Profile</a>
  <a id="click22" href="#" onclick="f22()" class="w3-bar-item w3-button" style="text-decoration:none;">Make Payment</a>
  <a id="click33" href="#" onclick="f33()" class="w3-bar-item w3-button" style="text-decoration:none;">History</a>
</div>

<!--write side of side bar -->
<div style="margin-left:190px">

<div id="entersidebar" class="w3-container">

</div>

</div>

<!--  -->

<div id="footer11"></div>
<script>
	document.getElementById('rm').innerHTML='<?php  echo "Welcome ".$_SESSION['user']; ?>';
</script>
<script>
window.onload = f11;
</script>
<script>
function f11()
{
 document.getElementById("click11").style.backgroundColor = "lightblue";
 document.getElementById("click22").style.backgroundColor = "black";
 document.getElementById("click33").style.backgroundColor = "black";
 $(function(){ 
    $("#entersidebar").load("profile.php");
    });
}
function f22()
{
 document.getElementById("click11").style.backgroundColor = "black";
 document.getElementById("click22").style.backgroundColor = "lightblue";
 document.getElementById("click33").style.backgroundColor = "black";
 $(function(){ 
    $("#entersidebar").load("payment.php");
    });
}
function f33()
{
 document.getElementById("click11").style.backgroundColor = "black";
 document.getElementById("click22").style.backgroundColor = "black";
 document.getElementById("click33").style.backgroundColor = "lightblue";
 $(function(){ 
    $("#entersidebar").load("history.php");
    });
}
</script>
</body>
</html>