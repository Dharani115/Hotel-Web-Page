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
require_once('header.php');

?>
<!--breadcrumb Section starts-->
		<section class="bread">
			<div class="bread-crumb">
				
					<h1 class="breadcrumbs-heder text-center">CONTACT</h1>
					<ul class="breadcrumbs text-center">
						<li><a href="index.html" style="color:orange">Home</a></li>
						<li class="active">>  Contact</li>
					</ul>
			
			</div>
		</section>
<!--breadcrumb Section ends-->
<!--contact section-->
<section class="pd-9" style=" box-shadow:15px 10px 10px 15px white;">
<div class="contact-us"style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('image/contactbg.jpg');">
	<?php
	$ret=mysqli_query($con,"SELECT * FROM `contact`");
	$row=mysqli_fetch_array($ret);
	?>
	<div class="contact-map">
		<p><i>Find Our Location</i></p>
		<h1>Map & Directions</h1>
		<iframe width="100%" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" <?php echo $row["map"] ?>>
		</iframe>
	</div>
	<div class="container">
	<div class="row">
		<div class="contact-info">
			<p>Contact <br>Us</p>
				<h5><b><span><i class="fa fa-phone-volume"></i></span> : <a href="tel:+91<?php echo $row["MobileNumber"] ?>">+91<?php echo $row["MobileNumber"] ?></a></b></h5>
				<h5><b><span><i class="fas fa-envelope"></i></span> : <a href="email:<?php echo $row["Email"] ?>"><?php echo $row["Email"] ?></a></b></h5>
				<h5><b><span><i class="fas fa-globe"></i></span> : <a href="www.https://vrindavannest.com">Vrindavan Nest.com</a></b></h5>
				<li>
				<a href="<?php echo $row["facebook"] ?>"><b><i class="fa fa-facebook"></i></b></a>
				</li>
				<br>
				<li>
				<a href="<?php echo $row["instagram"] ?>"><b><i class="fa fa-instagram"></i></b></a>
				</li>
				<br>
				<li>
				<a href="<?php echo $row["twitter"] ?>"><b><i class="fa fa-twitter"></i></b></a>
				</li>
			
		</div>
		<?php $msg="";
			if(isset($_POST['submit']))
			{
			$name=$_POST['name'];
			$mobilenumber=$_POST['mobilenumber'];
			$email=$_POST['email'];
			$question=$_POST['question'];
			$created_on=date("Y-m-d H:i:s");
			$modified_on=date("Y-m-d H:i:s");
			$query="INSERT INTO `enquiry`(`name`, `MobileNumber`, `Email`, `question`, `created_on`, `modified_on`)
			VALUES ('$name', '$mobilenumber', '$email','$question',  '$created_on', '$modified_on')";
		 
			$result = mysqli_query($con,$query);
			   if($result){
					$msg= "conatct Details added  successfully.";
			 }
			 else {
			$msg= "Sorry, there was an error while uploading the details.";
			}	
			}
			?>
		<div class="contact-form">
			<h1 class="contact-form-title"><i>Have a Question ?</i></h1>
			<h2><i>Sent Us A Mail</i></h2>
			<div class="col-md-11">	
			<form action="" class="needs-validation" novalidate method="post">
				<?php if($msg!="")
					{
					echo '<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong></strong>'.$msg.'
					</div>';
					}
				?>
			<div class="form-group">
			<input type="text" class="form-control" name="name" id="name" placeholder="* Name" required /><br>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			<input type="tel" class="form-control" name="mobilenumber" id="mobilenumber" placeholder="* Phone Number" required /><br>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			<input type="mail" class="form-control" name="email" id="email" placeholder="* Email Id" required /><br>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			<textarea class="form-control" rows="3" placeholder="* Write your question here..." name="question" id="question" required ></textarea><br>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			<label><input type="checkbox" required /> I agree that my submitted data is being collected and stored.</label>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill.</div>
			</div>
				<div>
				<p><button style="width:200px; margin-bottom:10px;" class="btn btn-info" name="submit" id="submit">Submit</button></p>
				</div>
			</form>
			</div>	
		</div>
	</div>
	</div >
</div>	
</section>
<?php
require_once('footer.php');
?>