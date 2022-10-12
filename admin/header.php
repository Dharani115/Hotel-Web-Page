<?php
session_start();
error_reporting(0);
include("../includes/dbconnection.php");

if (strlen($_SESSION['admin_id']==0)) {
  header('location:logout.php');
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Vrindavan Nest - Admin Dashbord</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
	<link rel="stylesheet" href="css/Dashboard.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow dashboard-back">
	<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="../image/vrindavan2.png" alt="image not found" width="200px" height="100px"/></a>
	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="welcome-msg">
	<h6>Welcome <?php
	session_start();
	echo $_SESSION['admin_name'];
	?> </h6>
	</div>
  <ul class="navbar-nav px-3">
    <li class="signout">
     <i class="fas fa-sign-out-alt"></i><a href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="sidebar-sticky mt-5">
        <ul class="nav flex-column">
          <li class="nav-item ">
            <a class="nav-link <?php if($active=='dashbord'){echo 'active';}else{echo'noactive';}?>" href="dashboard.php">
              <i class="fas fa-home"></i>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link <?php if($active=='banner'){echo 'active';}else{echo'noactive';}?>" href="banner.php">
             <i class="fas fa-file-image"></i>
              Banners
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-banner'){echo 'active';}else{echo'noactive';}?>" href="manage-banner.php">
             <i class="fas fa-file-image"></i>
              Manage-Banner
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='gallery'){echo 'active';}else{echo'noactive';}?>" href="gallery.php">
              <i class="fas fa-images"></i>
              Gallery
            </a>
          </li>
		   <li class="nav-item" >
            <a class="nav-link <?php if($active=='manage-gallery'){echo 'active';}else{echo'noactive';}?>" href="manage-gallery.php">
              <i class="fas fa-images"></i>
             Manage-Gallery
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($active=='about'){echo 'active';}else{echo'noactive';}?>" href="about.php">
             <i class="fas fa-user-shield"></i>
              About us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($active=='contact'){echo 'active';}else{echo'noactive';}?>" href="contact.php">
             <i class="fas fa-id-card"></i>
              Contact
            </a>
          </li> 
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='enquiry'){echo 'active';}else{echo'noactive';}?>" href="enquiry.php">
              <i class="fas fa-balance-scale"></i>
              Enquiry
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='reservation'){echo 'active';}else{echo'noactive';}?>" href="reservation.php">
             <i class="fas fa-table"></i>
              Reservation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($active=='menu'){echo 'active';}else{echo'noactive';}?>" href="menu.php">
              <i class="fas fa-hamburger"></i>
              Menu
            </a>
          </li> 
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-menu'){echo 'active';}else{echo'noactive';}?>" href="manage-menu.php">
              <i class="fas fa-hamburger"></i>
              Manage-Menu
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link <?php if($active=='add-service'){echo 'active';}else{echo'noactive';}?>" href="add-service.php">
              <i class="fab fa-servicestack"></i>             
            Services 
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-service'){echo 'active';}else{echo'noactive';}?>" href="manage-service.php">
             <i class="fab fa-servicestack"></i>              
              Manage-Services
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link <?php if($active=='testinomial'){echo 'active';}else{echo'noactive';}?>" href="testinomial.php">
              <i class="fas fa-search"></i>            
              Testinomial
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='top-item'){echo 'active';}else{echo'noactive';}?>" href="top-item.php">
              <i class="fas fa-hamburger"></i>             
              Top-Items
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-top-item'){echo 'active';}else{echo'noactive';}?>" href="manage-top-item.php">
             <i class="fas fa-hamburger"></i>              
              Manage-Top-Items
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='today'){echo 'active';}else{echo'noactive';}?>" href="todays-special.php">
             <i class="fas fa-hamburger"></i>              
              Todays-Special
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-today'){echo 'active';}else{echo'noactive';}?>" href="manage-todays-special.php">
             <i class="fas fa-hamburger"></i>       
              Manage-Todays-Special
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="fas fa-sign-out-alt"></i>
              Log-out
            </a>
          </li>
        </ul>	
      </div>
    </nav>
</body>
</html>