<?php
require_once('header.php');

?>

<!--breadcrumb Section starts-->
		<section class="bread">
			<div class="bread-crumb">
				
					<h1 class="breadcrumbs-heder text-center">ABOUT</h1>
					<ul class="breadcrumbs text-center">
						<li><a href="index.html" style="color:orange">Home</a></li>
						<li class="active">>  About</li>
					</ul>
			
			</div>
		</section>
<!--breadcrumb Section ends-->
<!--about us -->
<section class="aboutus">
<div class="container">
<h2 class="about-title"> About Vrindavana Nest</h2>
<div class="row">
<?php
$ret=mysqli_query($con,"SELECT * FROM `about-us` where ID=4");
$row=mysqli_fetch_array($ret);
?>
	<div class="col-lg-4 col-md-4 col-sm-12 about-image">
	<img src="<?php echo 'admin/uploads/about/'.$row["image"] ?>" alt="not foun" width="100%" height="250px"/>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
	<p class="about-cont"><?php echo $row["description"] ?><br>
	</p>
	</div>
</div>
</div>
</section>

<?php
require_once('footer.php');
?>