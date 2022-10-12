<?php
require_once('header.php');

?>
	<!--breadcrumb Section starts-->
		<section class="bread">
			<div class="bread-crumb">		
					<h1 class="breadcrumbs-heder text-center">MENU</h1>
					<ul class="breadcrumbs text-center">
						<li><a href="index.html"  style="color:orange">Home</a></li>
						<li class="active">>  Menu</li>
					</ul>
			</div>
		</section>
		<!--breadcrumb Section ends-->
	<!--item list-->
	<div class="containerrr container-fluid py-5" style="background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)), url('image/menu1.jpg')" >
	  <div data-aos="fade-top"
		 data-aos-easing="ease-out-cubic"
		 data-aos-duration="2000">
	   <h1 class="text-center menu-title"><b>Come and enjoy the taste of our hotel</b></h1></div>
	   <!--<div class="my-5">-->
		<div class="container">
		
		<div class="row">
			<?php
			$ret=mysqli_query($con,"SELECT * FROM `menu`");
			while ($row=mysqli_fetch_array($ret))
    		{
			?>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-5">
				<div class="menu-item">
					<div class="menu-image">
					      <div><img src="<?php echo'admin/uploads/menu/'.$row["menu_image"]?>"  alt="Not Found"/></div>
					</div>
					<div>
						<p class="menu-head"><?php echo $row["menu_name"] ?></p>
						<div>
							<a href="editid=<?php  echo $row['ID'];?>" data-target="#mymodel<?php echo $row["ID"]?>" class="menu-a btn"  data-toggle="modal" >View More</a>
						</div>
					</div>
					 
				</div>
				</div>	
			
			<div class="modal fade show" id="mymodel<?php echo $row["ID"]?>" role="dialog">
			
					<div class="modal-dialog modal-lg">
					<div class="modal-contentt">
					<button style="color:white" type="button" class="close" data-dismiss="modal">&times;</button>
					<h1 style="color:white; padding-left:5px; text-align:center;padding-bottom:20px;"><?php echo $row["menu_name"] ?></h1>
					
					<div class="col-md-11" data-aos="zoom-out-down">
					<div class="table-responsive">
						<table class="menu-table-bordered pt-5">
						  <thead style="border-bottom:2px solid white; background:rgba(255,0,0,0.5)" >
							<tr>
							  <th>Item Name</th>
							  <th class="text-right">Cost </th>
							  <th style="float:right; padding-right:20px;">Order</th>
							</tr>
							
						  </thead>
								<?php
								$edit_id=$row['ID'];
								$result=mysqli_query($con,"SELECT ID,item_name,cost FROM `menu-item` where `select`='$edit_id'");
								while($row=mysqli_fetch_array($result)){
								?>
								<tr>
								<form action="" class="needs-validation" novalidate method="post">
								
								<td name="item_name" id="item_name"><?php echo $row["item_name"] ?></td>
								<td name="cost" id="cost" class="text-right"><?php echo $row["cost"] ?>.00 Rs</td>
								<td><a href="?editid=<?php  echo $row['ID'];?>" class="menu-btn fa fa-shopping-cart" aria-hidden="true" name="submit" id="submit">Add To Cart</a></td>
								</form>
								</tr>
								<?php } ?>	
						</table>
					</div>
					</div>
					<div class="modal-footerr">
					<button style="color:white" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
					</div>	
					<?php } ?>	
		</div>
		</div>
		</div>
		
		</section>
	<!--menu items-->
	
			
						
<?php
require_once('footer.php');
?>
