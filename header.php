<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include('includes/dbconnection.php');
?>
<html>
	<head>
	<!-- meta tag section-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- meta tag section end-->
	<title>Vrindavan Nest</title>
	<!-- css styleing link-->
	<!--bootstrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>  	
	<link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Beth Ellen' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/responsive.css">   
	<!-- css styleing link end-->
	</head>
	<body>
	<div class="container">
	<div class="social navbar-expand-md fixed-top">
				<ul class="list-inline">
				<?php
				$ret=mysqli_query($con,"SELECT * FROM `contact`");			
				while ($row=mysqli_fetch_array($ret)){
				?>
				<li class="list-inline-item">
				<a href="<?php echo $row["facebook"] ?>"><i class="fa fa-facebook"></i></a>
				</li>
				<li class="list-inline-item">
				<a href="<?php echo $row["instagram"] ?>"><i class="fa fa-instagram"></i></a>
				</li>
				<li class="list-inline-item">
				<a href="<?php echo $row["twitter"] ?>"><i class="fa fa-twitter"></i></a>
				</li>
				<li class="list-inline-item">
				<a href="https://api.whatsapp.com/send?phone=<?php echo $row["MobileNumber"] ?>"><i class="fa fa-whatsapp"></i></a>
				</li>
				<div class="contact">
				<li class="list-inline-item"><p><span><i class="fa fa-phone-volume"></i></span> :<a href="tel:+91 1234567789">+91 <?php echo $row["MobileNumber"] ?></a></p></li>
				<li class="list-inline-item"><p><span><i class="fas fa-envelope"></i></span> :<a href="email:example@gmail.com"><?php echo $row["Email"] ?></a></p></li>
				</div>
				<?php } ?>
		</ul>
	</div>
	</div>
	<!--header section-->
	<header>
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top transparent">
            <a class="navbar-brand" href="index.html"><img src="image/vrindavan2.png" alt="imade not found" width="250px" height="100px"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="image/menubar.png" width="40" height="30"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
               <ul class="navbar-nav ment-list-format">
                  <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
                     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item <?= ($activePage == 'about') ? 'active':''; ?>">
                     <a class="nav-link" href="about.php">About</a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'menu') ? 'active':''; ?>">
                     <a class="nav-link" href="menu.php">Menu</a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'gallery') ? 'active':''; ?>">
                     <a class="nav-link" href="gallery.php">Gallery</a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'contact') ? 'active':''; ?>">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
				   <li class="nav-item <?= ($activePage == 'reservation') ? 'active':''; ?>">
                     <a class="nav-link" href="reservation.php">Reservation</a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'register') ? 'active':''; ?>">
                     <a class="nav-link" href="admin/register.php">Login</a>
                  </li>
               </ul>
            </div>
			<div class="button">
			   <button type="button" class="fa fa-shopping-cart" aria-hidden="true"><a href=""></a></button>
			</div>
			
         </nav>
	</header>
