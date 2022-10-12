<?php
require_once('header.php');

?>
<!--breadcrumb Section starts-->
		<section class="bread">
			<div class="bread-crumb">
				
					<h1 class="breadcrumbs-heder text-center">GALLERY</h1>
					<ul class="breadcrumbs text-center">
						<li><a href="index.html" style="color:orange">Home</a></li>
						<li class="active">>  Gallery</li>
					</ul>
			
			</div>
		</section>
		<!--breadcrumb Section ends-->
		<!--image section-->
		<div class="gallery-img pl-3 py-5">
		<div class="container">
		<div class="row"> 
		<?php
		$ret=mysqli_query($con,"SELECT * FROM `gallery`");
		while ($row=mysqli_fetch_array($ret)){
		?>
		  <div class="column">
			<img src="<?php echo'admin/uploads/gallery/'.$row["gallery_image"]?>" style="width:100%;">
		  </div>
		<?php
		}
		?>	
		</div>
		</div>	
		</div>
		
<?php
require_once('footer.php');
?>		
		
