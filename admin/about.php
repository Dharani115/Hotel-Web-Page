<style>
	.needs-validation .validation {
    color: red;
    display: none;
    margin: 4px 0 20px 0;
    font-weight: 400;
    font-size: 13px;
}
</style>


<?php
$active= 'about-us';
include('header.php');	
?>
<?php
$msg="";

if (isset($_POST['submit']))
{
	$ID=$_POST['page_id'];
	$description=$_POST['desc'];
	
	$target_dir = "uploads/about/";
	$target_file = $target_dir . basename($_FILES["abt_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if( $_FILES["abt_image"]["name"])
	{
	$check = getimagesize($_FILES["abt_image"]["tmp_name"]);
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
	if (move_uploaded_file($_FILES["abt_image"]["tmp_name"], $target_file)) {
	$gallery_image=$_FILES["abt_image"]["name"];
	} else {
    $msg= "Sorry, there was an error uploading your file.";
	}
	}
	}
	else{
		$abt_image=$_POST["old_abt_value"];
	}
	$created_on = date("Y-m-d H:i:s");
	$modified_on = date("Y-m-d H:i:s");
	
	if($ID =='')
	  {
	$query="INSERT into `about-us` (description,image, created_on,  modified_on)VALUES ('$description','$abt_image','$created_on','$modified_on')";}
	  else{
		  $query="update `about-us` set description='$description',image='$abt_image',modified_on='$modified_on' where  ID='$ID'";
 
			}
	 $result = mysqli_query($con,$query);
	  if($result){
            $msg= " Details added  successfully.";
     }
	 else{
			$msg= "Failed to upload data.";
			}
	}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">About Us</h1>
	</div>
	<div class="container">
	<form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
		<?php if($msg!="")
		  {
			  echo '<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong></strong>'.$msg.'
		  </div>';
		}
		$ret=mysqli_query($con,"select * from `about-us`");
		$row=mysqli_fetch_array($ret);
		$cnt=1;
		/*while ($row=mysqli_fetch_array($ret)) {*/	
		?>
		<input type="hidden" name="page_id" id="page_id" value="<?php echo $row['ID'];?>"/>
 
		<div class="form-group">
		<label for="desc">Description:</label>
		<textarea id="desc" class="form-control" name="desc" placeholder="Please include Description" row="4" data-rule="required" data-msg="Please include Description"><?php  echo $row['description'];?></textarea>
		<div class="validation"></div>
		</div>
		<div class="form-group">
			  <label for="image">Image</label>
			  <input type="file" class="form-control" id="abt_image" onchange="return fileValidation()" placeholder="Enter gallery Image" name="abt_image"/>
			<div class="validation"></div>
			</div>
			<?php
			if($row['image'])
			{
			
			?>
			<img src="<?php echo 'uploads/about/'.$row['image']?>" alt="not found" height="300px" width="400px"/>
			<input type="hidden" name="old_abt_value" value="<?php echo $row["image"]?>"><br>
			<?php
			}
			?>
	
	<div class="text-center">
	<input type="submit" class="btn btn-warning text-white" id="submit" name="submit" value="submit">
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
			 $('#abt_image').on('change', function() { 
  
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
                document.getElementById('abt_image'); 
              
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

