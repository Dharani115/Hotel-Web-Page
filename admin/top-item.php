
<?php
$active= 'top-item';
include('header.php');
?>
<?php
$msg="";
if(isset($_POST['submit']))
{
	$ID=$_POST['page_id'];
	$title=$_POST['title'];
	
	$target_dir = "uploads/top-item/";
	$target_file = $target_dir . basename($_FILES["top_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	  
	$check = getimagesize($_FILES["top_image"]["tmp_name"]);
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
	if (move_uploaded_file($_FILES["top_image"]["tmp_name"], $target_file)) {
	$top_image=$_FILES["top_image"]["name"];
	} else {
    $msg= "Sorry, there was an error uploading your file.";
	}
	}
	
	
	$created_on=date("Y-m-d H:i:s");
	$modified_on=date("Y-m-d H:i:s");	
	$query="INSERT INTO `top-item`(`title`, `top_image`, `created_on`, `modified_on`)
	VALUES ('$title','$top_image','$created_on', '$modified_on')";
	$result = mysqli_query($con,$query);
           if($result){
            $msg= "Image added successfully.";
     }
	 else{
		 $msg="Sorry, unable to update please try again.";
	 }

	
}
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Details for Top Food</h1>
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
	?>
	<div class="form-group">
      <label for="title">Food Name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" data-rule="required" data-msg="This feild is required" >
    <div class="validation"></div>
	</div> 
	<div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="top_image" placeholder="Enter project Image"  onchange="return fileValidation()" name="top_image" data-rule="required" data-msg="Please include project image">
    <div class="validation"></div>
	</div>	
	<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-warning text-white " value="Submit"/>
	<p id="output"></p> 
    <div id="imagePreview"></div>
	</div> 
	</form>
	</div>
  </main>
<?php
include('footer.php');
?>
<script type="text/javascript"> 
			 $('#top_image').on('change', function() { 
  
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
                document.getElementById('top_image'); 
              
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