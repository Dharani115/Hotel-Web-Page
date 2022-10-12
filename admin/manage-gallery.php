<?php
$active= 'manage-gallery';
include('header.php');
?>
<?php
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Gallery</h1>
      </div>
<div class="container my-5 form">
<div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
		  <th>#</th>
          <th>Image</th>
		  <th>Action</th>
        </tr>
      </thead>
      <tbody>
		  <?php
	  $query="select * from `gallery`";
	  $ret=mysqli_query($con,$query);
	  $cnt=1;
	  while ($row=mysqli_fetch_array($ret)) {
	  ?>
		<tr>
		<td><?php  echo $cnt;?></td>
		<td><img src="<?php echo'uploads/gallery/'.$row["gallery_image"]?>" alt="No Image Found" width="150px" height="150px"></td>
		<td><a href="edit-gallery.php?editid=<?php echo $row['ID'];?>">Edit</a>/<a href="delete-gallery.php?editid=<?php echo $row['ID'];?>" Onclick="return ConfirmDelete();" type="submit" name="actiondelete" value="1">Delete		
		</a></td>
		<?php 
		$cnt=$cnt+1;
		}
		?>
		</tr>
      </tbody>
    </table>
  </div>
</div>
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