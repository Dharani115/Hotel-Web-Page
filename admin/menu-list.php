<?php
$active= 'menu-list';
include('header.php');
$edit_id=$_GET['editid'];
?>
<?php
$msg="";
if (isset($_POST['submit']))
{
	$ID=$_POST['page_id'];
	$title=$_POST['title'];
	$cost=$_POST['cost'];
	$select=$_POST['ids'];
	$created_on = date("Y-m-d H:i:s");
	$modified_on = date("Y-m-d H:i:s");
	if ($ID ==''){
	$query="INSERT INTO `menu-item`(`item_name`, `cost`, `select`, `created_on`, `modified_on`)
	VALUES ('$title', '$cost','$select',  '$created_on', '$modified_on')";}
	else{
		$query="UPDATE `menu-item` SET item_name='$title',cost='$cost'select='$select',modified_on='$modified_on' where ID='$ID'";
	}
	  $result = mysqli_query($con,$query);
	  if($result){
            $msg= "Item added  successfully.";
     }
	 else{
			       $msg= "Sorry, there was an error while uploading the details.";
			}
}	
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add And Manage Menu </h1>
      </div>
	
 <?php
$edit_id=$_GET['editid'];
$ret=mysqli_query($con,"SELECT * FROM `menu-item` WHERE `select`='$edit_id'");
$row=mysqli_fetch_array($ret);
while ($row=mysqli_fetch_array($ret)) {	
?>
	  <div class="table-responsive">
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Food Name</th>
			  <th>Cost</th>
			  <th>select</th>
			  <th>Action</th>
			</tr>
		  </thead>
		   <tbody>
	  <?php
		$ret=mysqli_query($con,"SELECT * FROM `menu-item`  WHERE `select`='$edit_id'");
		$cnt=1;
		while ($row=mysqli_fetch_array($ret)) {
		?>
		<tr>
		<td><?php echo $cnt;?></td>
		<td><?php echo $row['item_name'];?></td>
		<td><?php echo $row['cost'];?>.00 Rs</td>
		<td><?php echo $row['select'];?></td>
		<td><a href="edit-menu-list.php?menueditid=<?php echo $row['ID'];?>">Edit</a>/<a href="delete-menu-list.php?menueditid=<?php echo $row['ID'];?>" Onclick="return ConfirmDelete();" type="submit" name="actiondelete" value="1">Delete		
		</a></td>
		</tr>
		  <?php 
		$cnt=$cnt+1;
		}
		?>
		</tbody>
		</table>
	  </div>
	<?php 
	}
	?>
	<form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
	<?php if($msg!="")
	  {
		  echo '<div class="alert alert-danger alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong></strong>'.$msg.'
	  </div>';
	}
	?>
	<input type="hidden" name="page_id" id="page_id"/>
	<div class="form-group">
      <label for="title">Item Name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" data-rule="required" data-msg="This feild is required" >
    <div class="validation"></div>
	</div> 
	<div class="form-group">
      <label for="icon">Cost</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter Cost" name="cost" data-rule="required" data-msg="Please include Cost">
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="icon">Select</label>
      <select name="ids" id="ids"  placeholder="Enter The Cost"  data-rule="required" data-msg="Please include Icon">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		  <option>6</option>
		  <option>7</option>
		  <option>8</option>
		  <option>9</option>
		  <option>10</option>
		  <option>11</option>
		  <option>12</option>
		  <option>13</option>
		  <option>14</option>
		  <option>15</option>
		  <option>16</option>
		  <option>17</option>
		  <option>18</option>
		  <option>19</option>
		  <option>20</option>
		  <option>21</option>
		  <option>22</option>
		  <option>23</option>
		  <option>24</option>
		  <option>25</option>
		  <option>26</option>
		</select>
    <div class="validation"></div>
	</div>	
	<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-warning text-white " value="Submit"/>
</div>
 </form>
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