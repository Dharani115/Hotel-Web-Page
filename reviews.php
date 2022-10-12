<style>
	.needs-validation .validation {
    color: red;
    display: none;
    margin: 4px 0 20px 0;
    font-weight: 400;
    font-size: 13px;
}
/* revew page*/
.review-section{
	color: #f8f9fa;
	padding-top:6%;
}
.revieww
{
	margin-bottom:20px;
	border-right:2px solid white;
	border-radius:30px;
}
.revieww img{
	border-radius:50px;
	width:70px;
	height:70px
}
.revieww h5{
	color:#94e8d5;
}
.revieww small{
	color:#e9ec1d
}
.revieww p{
	font-family: Times New Roman;
	color:white;
}
.testinomiall input{
color: #f8f9fa;
margin-bottom:12px;
  background-color: #9a353900;
    border: none;
    border-bottom: 2px solid #e40924;
	width:50%;
}
.form-controll{
	color: #f8f9fa;
	background-color: #9a353900;
    border: none;
    border-bottom: 2px solid #e40924;;
}
.btnn:not(:disabled):not(.disabled) {
	cursor: pointer;
	background-color: #000000;
    border-color: #bf1e1e;
}
@media (max-width:548px){
	.testinomiall input{
		width:80%;
	}
	.testinomiall textarea{
		width:80%;
	}

}	
</style>
<?php
require_once('header.php');
?>
<?php
$msg="";
if(isset($_POST['submit']))
{
	$target_dir = "admin/uploads/review/";
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
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$created_on=date("Y-m-d H:i:s");
	$query="INSERT into `tesinomial` (name, address,email,image,message, created_on)
	VALUES ('$name','$address', '$email', '$image','$message','$created_on')";
	$result = mysqli_query($con,$query);
           if($result){
            $msg= "Review added  successfully.";
     }
	else{
		 $msg= "error on adding your review";
	}
	
}
?>
<!--breadcrumb Section starts-->
		<section class="bread">
			<div class="bread-crumb">		
					<h1 class="breadcrumbs-heder text-center">Review</h1>
					<ul class="breadcrumbs text-center">
						<li><a href="index.php"  style="color:orange">Home</a></li>
						<li class="active">>  review</li>
					</ul>
			</div>
		</section>
		<!--breadcrumb Section ends-->
	<section style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('image/background3.png'); background-repeat:no-repeat;background-size:cover;">
	<center class="review-section">
	<h1 class="index-title">Write A Review</h1>
		<form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
		<?php
			if($msg!="")
			{
			echo '<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong></strong>'.$msg.'
			</div>';
			}
		?>
			<div  class=" testinomiall">
			<input type="text" class="form-controll" name="name"  style="width:50%" id="name" placeholder="* Name" required data-rule="required" data-msg="Please include name" /><br>
			<div class="validation"></div>
			</div>
			<div  class=" testinomiall">
			<input type="mail" class="form-controll" name="address" style="width:50%" id="address" placeholder="* Adrress"required data-rule="required" data-msg="Please include address" /><br>
			<div class="validation"></div>			
			</div>
			<div  class=" testinomiall">
			<input type="mail" class="form-controll" name="email" style="width:50%" id="email" placeholder="* Email"required data-rule="required" data-msg="Please include email"/ ><br>
			<div class="validation"></div>			
			</div>
			<div  class=" testinomiall">
			<input type="file" class="form-controll" id="image" style="width:50%" name="image" placeholder="input Image"  onchange="return fileValidation()" required data-rule="required" data-msg="Please include image" />
			<div class="validation"></div>
			</div>			
			<div  class=" testinomiall">			
			<textarea class="form-controll" rows="3" style="width:50%" placeholder="* Write your review here..." name="message" id="message" required data-rule="required" data-msg="Please include message" /></textarea><br>
			<div class="validation"></div>
			</div>
			<div>
			<p><button name="submit" id="submit" style="width:200px; margin-bottom:10px;" class="btnn btn btn-info">Submit</button></p>
			</div>
			<p id="output"></p> 
			<div id="imagePreview"></div>
		</form>
	</center>
	<hr color="white">				
           

		<!--review section-->
	  <div class="ml-4 mt-5">
		<div class=""><h1 class="text-center text-warning head index-title">Review's</h1>
          <div class="row col-12 ">
		  <?php
			$ret=mysqli_query($con,"SELECT * FROM `tesinomial`");
			while ($row=mysqli_fetch_array($ret))
    		{
			?>
            <div class="col-md-6 col-lg-4 py-2 revieww">
			  <img src="<?php echo'admin/uploads/review/'.$row["image"]?>">
			  <h5><b><?php echo $row["name"] ?></b></h5>
				<small><i><?php echo $row["address"] ?></i></small>
                <p><?php echo $row["message"] ?></p>
			</div>
			<?php } ?>	
          </div>
	  </div>
	  </div>
	  </section>
						
<?php
require_once('footer.php');
?>
<script type="text/javascript"> 
			 $('#image').on('change', function() { 
  
            const size =  
               (this.files[0].size / 1024 / 1024/).toFixed(4); 
  
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