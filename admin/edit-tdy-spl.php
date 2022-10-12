<?php
$active= 'manage-top-item';
include('header.php');
?>
<?php
$msg="";
if(isset($_POST['submit']))
	
{
	$title=$_POST['title'];
	$select=$_POST['select'];
	
	$target_dir = "uploads/today-special/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if( $_FILES["image"]["name"])
	{  
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
	}
	else{
		$image=$_POST["old_value"];
	}
	
	$query="UPDATE `tdy-spl-item` SET name='$title',select='$select',image='$image'where  ID='$edit_id'";
	$result = mysqli_query($con,$query);
    if($result){
    $msg= "Image updated  successfully.";
    }
	else{
		$msg="Sorry, unable to update plase try again..";
	}
}
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Today's Special</h1>
      </div>
	  <div class="container my-5 form">
		<form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
		<?php if($msg!="")
		  {
			  echo '<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong></strong>'.$msg.'
		  </div>';
		}
		$edit_id=$_GET['editid'];
		$ret=mysqli_query($con,"select * from `tdy-spl-item` where ID=$edit_id");
		$row=mysqli_fetch_array($ret);
		/*while ($row=mysqli_fetch_array($ret)) {*/	
		?>
		<div class="form-group">
			<label for="title">Food Item</label>
			<input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" data-rule="required" data-msg="This feild is required" value="<?php echo $row["name"]?>"> 
			<div class="validation"></div> 
			</div> 
		<div class="form-group">
			<label for="title">Select</label>
			<input type="text" class="form-control" id="select" name="select" data-rule="required" data-msg="This feild is required" value="<?php echo $row["select"]?>"> 
			<div class="validation"></div> 
			</div> 
		<div class="form-group">
			  <label for="image">Image</label>
			  <input type="file" class="form-control" id="image" onchange="return fileValidation()" placeholder="Enter top Image" name="image"/>
			<div class="validation"></div>
			</div>
			<?php
			if($row['image'])
			{
			
			?>
			<img src="<?php echo 'uploads/today-special/'.$row['image']?>" alt="not found" height="300px" width="400px"/>
			<input type="hidden" name="old_value" value="<?php echo $row["image"]?>"><br>
			<?php
			}
			?>
		 
			<div class="text-center">
			<input type="submit" name="submit" id="submit" class="btn btn-warning text-white " value="Submit"/>
		</div> 
		<p id="output"></p> 
		<div id="imagePreview"></div>
		 </form>
</div>
</main>
<?php
include('footer.php');
?>
<script type="text/javascript"> 
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