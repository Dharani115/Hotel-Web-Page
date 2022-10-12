
<?php
$active= 'testinomial';
include('header.php');
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Testinomial</h1>
      </div>
		<div class="container">
		 <table class="table table-bordered">
      <thead>
        <tr>
		  <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
		  <th>Image</th>
		  <th>Message</th>
		  <th>Action</th>
        </tr>
      </thead>
      <tbody>
		  <?php
	  $query="select * from tesinomial";
	  $ret=mysqli_query($con,$query);
	  $cnt=1;
	  while ($row=mysqli_fetch_array($ret)) {
	  ?>
		<tr>
		<td><?php  echo $cnt;?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row["email"]?>"</td>
		<td><?php echo $row["address"]?>"</td>
		<td><img src="<?php echo'uploads/review/'.$row["image"]?>" alt="No Image Found" width="150px" height="150px"></td>
		<td><?php echo $row["message"]?></td>
        <td><a href="delete-testinomial.php?editid=<?php echo $row['ID'];?>" Onclick="return ConfirmDelete();" type="submit" name="actiondelete" value="1">Delete</a></td>	
		<?php 
		$cnt=$cnt+1;
		}
		?>
		</tr>
      </tbody>
    </table>
</div>
</main>
<?php
include('footer.php');	
?>
<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script> 