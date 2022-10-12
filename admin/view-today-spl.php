<?php
$active= 'menu-list';
include('header.php');
$edit_id=$_GET['editid'];
?>
<?php
$msg="";
if (isset($_POST['submit']))
{

	$target_dir = "uploads/today-special/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	  
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	if($check !== false) {
    $msg= "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
	} else {
    $msg= "File is not an image.";
    $uploadOk = 0;
	}
  // Check if file already exists
	if (file_exists($target_file)) {
	$msg= "Sorry, file already exists.";
	$uploadOk = 0;
	}

	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	$msg= "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
	$image=$_FILES["image"]["name"];
	} else {
    $msg= "Sorry, there was an error uploading your file.";
	}
	}

	$ID=$_POST['page_id'];
	$name=$_POST['name'];
	$select=$_POST['ids'];
	$created_on = date("Y-m-d H:i:s");
	$query="INSERT INTO `tdy-spl-item`(`name`,`image`, `select`, `created_on`)
	VALUES ('$name', '$image','$select', '$created_on')";
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
        <h1 class="h2">Add And Manage Today's Special </h1>
      </div>
	  <div class="table-responsive">
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Food Name</th>
			  <th>Image</th>
			  <th>select</th>
			  <th>Action</th>
			</tr>
		  </thead>
		   <tbody>
	  <?php	
		$edit_id=$_GET['editid'];
		$ret=mysqli_query($con,"SELECT * FROM `tdy-spl-item`  WHERE `select`='$edit_id'");
		$cnt=1;
		while ($row=mysqli_fetch_array($ret)) {
		?>
		<tr>
		<td><?php echo $cnt;?></td>
		<td><?php echo $row['name'];?></td>
		<td><img src="<?php echo'uploads/today-special/'.$row["image"]?>" alt="No Image Found" width="150px" height="150px"></td>
		<td><?php echo $row['select'];?></td>
		<td><a href="edit-tdy-spl.php?editid=<?php echo $row['ID'];?>">Edit</a>/<a href="delete-spl-item.php?\editid=<?php echo $row['ID'];?>" Onclick="return ConfirmDelete();" type="submit" value="1">Delete	</a></td>
		</tr>
		<?php 
		$cnt=$cnt+1;
		}
		?>
		</tbody>
		</table>
	  </div>
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
      <input type="text" class="form-control" id="name" placeholder="Enter Title" name="name" data-rule="required" data-msg="This feild is required" >
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" placeholder="Enter project Image"  onchange="return fileValidation()" name="image" data-rule="required" data-msg="Please include project image">
    <div class="validation"></div>
	</div>	
	<div class="form-group">
      <label for="icon">Select</label>
      <select name="ids" id="ids"  placeholder="Enter The Cost"  data-rule="required" data-msg="Please include Icon">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		</select>
    <div class="validation"></div>
	</div>	
	<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-warning text-white " value="Submit"/>
</div>
<p id="output"></p> 
    <div id="imagePreview"></div>
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
<script>
			 $('#image').on('change', function() { 
  
            const size =  
               (this.files[0].size / 1024 / 1024).toFixed(4); 
  
            if (size >4 || size < 0) { 
                alert("File must be between the size of 0-5 MB"); 
            } else { 
                $("#output").html('<b>' + 
                   'This file size is: ' + size + " MB" + '</b>'); 
            }
        });
		 function fileValidation() { 
            var fileInput =  
                document.getElementById('image'); 
              
            var filePath = fileInput.value; 
          
            // Allowing file type 
            var allowedExtensions =  
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                alert('Invalid file type'); 
                fileInput.value = ''; 
                return false; 
            }  
            else  
            { 
                // Image preview 
                if (fileInput.files && fileInput.files[0]) { 
                    var reader = new FileReader(); 
                    reader.onload = function(e) { 
                        document.getElementById( 
                            'imagePreview').innerHTML =  
                            '<img src="' + e.target.result 
                            + '" width="450" height="400"/>'; 
                    }; 
                      
                    reader.readAsDataURL(fileInput.files[0]); 
                } 
            } 
        } 

</script> 