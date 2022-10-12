<?php
$active= 'reservation';
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
			  <th>Name</th>
			  <th>Email</th>
			  <th>Mobile Number</th>
			  <th>Date</th>
			  <th>Time</th>
			  <th>People</th>
			  <th>Requirements</th>
			</tr>
		  </thead>
		   <tbody>
	  <?php
		$ret=mysqli_query($con,"SELECT * FROM `reservation`");
		$cnt=1;
		while ($row=mysqli_fetch_array($ret)) {
		?>
		<tr>
		<td><?php echo $cnt;?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['Email'];?></td>
		<td><?php echo $row['MobileNumber'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['time'];?></td>
		<td><?php echo $row['people'];?></td>
		<td><?php echo $row['requirement'];?></td>
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
