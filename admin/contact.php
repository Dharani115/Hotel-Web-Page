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
$active= 'contact';
include('header.php');
?>
<?php
$msg="";

//unlink('uploads/mini-testimonial-1.jpg');
if(isset($_POST['submit']))
{
	$ID=$_POST['page_id'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$facebook=$_POST['facebook'];
	$twitter=$_POST['twitter'];
	$instagram=$_POST['instagram'];
	$map=$_POST['map'];
	$created_date = date("Y-m-d H:i:s");
	$modified_date = date("Y-m-d H:i:s");
	
	 if($ID=='')
	  {
	  $query="INSERT into `contact` (MobileNumber, Email, facebook,  twitter, instagram, map, created_on, modified_on)
			VALUES ('$mobile','$email', '$facebook', '$twitter','$instagarm','$map','$created_date','$modified_date')";
	  }
	  else{
		  $query="update `contact` set MobileNumber='$mobile' ,Email='$email' ,facebook='$facebook' ,twitter='$twitter' ,instagram='$instagram', map='$map' ,modified_on='$modified_date' where  ID='$ID'";
 
			}
			$result = mysqli_query($con,$query);
            if($result){
				$msg= "You are registered successfully.";
			}
			else{
			       $msg= "Failed to upload data.";
			}
	}
?>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Contact Us</h1>
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
	$ret=mysqli_query($con,"select * from  contact");
	$row=mysqli_fetch_array($ret);
	$cnt=1;
	/*while ($row=mysqli_fetch_array($ret)) {*/	
 ?>
 <input type="hidden" name="page_id" id="page_id" value="<?php echo $row['ID'];?>"/>
 <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" data-rule="mobile" data-msg="Please include valid mobile number" value="<?php  echo $row['MobileNumber'];?>">
    <div class="validation"></div>
	</div>
<div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" data-rule="email" data-msg="Please include valid email" value="<?php  echo $row['Email'];?>">
    <div class="validation"></div>
	</div> 
<div class="form-group">
      <label for="facebook">Facebook Link</label>
      <input type="text" class="form-control" id="facebook" placeholder="Enter facebook link" name="facebook" data-rule="required" data-msg="Please include valid facebook link" value="<?php  echo $row['facebook'];?>">
    <div class="validation"></div>
	</div>
<div class="form-group">
      <label for="twitter">Twitter Link</label>
      <input type="text" class="form-control" id="twitter" placeholder="Enter twitter link" name="twitter" data-rule="required" data-msg="Please include valid twitter link" value="<?php  echo $row['twitter'];?>">
    <div class="validation"></div>
	</div>	
<div class="form-group">
      <label for="instagram">Instagram Link</label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter instagarm link" name="instagram" data-rule="required" data-msg="Please include valid instagram link"   value="<?php  echo $row['instagram'];?>"/>
    <div class="validation"></div>
	</div>
<div class="form-group">
      <label for="map">Map</label>
	  <textarea id="map" class="form-control" name="map" placeholder="include the map address" row="4" data-rule="required" data-msg="Please include valid map address"><?php  echo $row['map'];?></textarea>
    <div class="validation"></div>
	</div>
	<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-warning text-white " value="Submit"/>
</div> 
 </form>
</div>
 </main>
<?php
include('footer.php');	
?>