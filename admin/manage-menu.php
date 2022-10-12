<?php
$active= 'manage-menu';
include('header.php');
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Banner</h1>
      </div>
	  <div class="container">
	  <div class="table-responsive">
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Food Heading</th>
			  <th>Image</th>
			  <th>Action</th>
			</tr>
		  </thead>
		   <tbody>
	  <?php
		$ret=mysqli_query($con,"SELECT * FROM `menu`");
		$cnt=1;
		while ($row=mysqli_fetch_array($ret)) {
		?>
		<tr>
		<td><?php echo $cnt;?></td>
		<td><?php echo $row['menu_name'];?></td>
		<td><img src="<?php echo 'uploads/menu/'.$row['menu_image']; ?>" alt="No image found" width="150" height="150"/></td>
	
		<td><a href="menu-list.php?editid=<?php  echo $row['ID'];?>">View Menu Item</a></td>
		</tr>
		  <?php 
		$cnt=$cnt+1;
		}
		?>
		</tbody>
		</table>
	</div>
  </div>
    </main>
 <?php
include('footer.php');
?>