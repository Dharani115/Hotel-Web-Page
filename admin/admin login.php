<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
$msg="";
if(isset($_POST['login']))
{
$admin_name=$_POST['adminname'];
$password=md5($_POST['pwd']);
$query="select * from registration where  AdminName='$admin_name' && Password='$password' ";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if($row>0)
{
  $_SESSION['admin_id']=$row['ID'];
  $_SESSION['admin_name']=$row['AdminName'];
   $msg="<p class='valid' style='color:green'>Valid user</p>";	
	header('location:dashboard.php');   
}
else{
	$msg='<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong> Invalid User
  </div>';

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Login.css">
  <link rel="stylesheet" href="css/Responsive.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="login-page">
	   <div class="login-page-title text-center">
	   <img src="../image/vrindavan2.png" alt="image not found"/>
		<h3 class="text-center text">Login here</h3>
		</div>
	<form action="" class="needs-validation" method="post" novalidate>
	<?php if($msg!="")
	{
	  echo $msg;
	}
	?>
   <div class="form-group">
	<i class="fa fa-user" aria-hidden="true"></i>
      <label for="adminname">Admin name:</label><br>
      <input class="style fixed" type="text" class="form-control" id="adminname" placeholder="Enter username" name="adminname" value="Dharani kumar" readonly required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	
    <div class="form-group">
		<i class="fa fa-lock" aria-hidden="true"></i>
      <label for="pwd">Password :</label><br>
      <input class="style" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
	<div class="text-center">
    <input name="login" type="submit" class="btn btn-warning text-white "/>
	</div> 
 </form>
	  <a href="register.php" class="registeer"> Click Here to Register</a>
	  <a href="../index.php" class="home"> Go Back To Home Page</a>
	 </div>
	</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html> 