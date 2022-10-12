<?php
require_once('header.php');
$edit_id=$_GET['editid'];
?>
<!--breadcrumb Section starts-->
		<section class="bread">
			<div class="bread-crumb">
				
					<h1 class="breadcrumbs-heder text-center">RESERVATION</h1>
					<ul class="breadcrumbs text-center">
						<li><a href="index.html" style="color:orange">Home</a></li>
						<li class="active">>  Reservation</li>
					</ul>
			
			</div>
		</section>
<!--breadcrumb Section ends-->
<!--table reservation-->
		<?php 
			$msg="";
			if(isset($_POST['submit']))
			{
			$ID=$_POST['page_id'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$date=$_POST['date'];
			$time=$_POST['time'];
			$people=$_POST['people'];
			$requirement=$_POST['requirement'];
			$created_on=date("Y-m-d H:i:s");
			if($ID=='')
			{		
			$query="INSERT INTO `reservation`(`name`, `Email`, `MobileNumber`, `date`, `time`, `people`, `requirement`, `created-on`)
			VALUES ('$name', '$email', '$mobile','$date','$time','$people','$requirement','$created_on')";}
			else{
				$query="UPDATE `reservation` SET `name`='$name',`Email`='$email',`MobileNumber`='$mobile',`date`='$date',`time`='$time',`people`='$people',`requirement`='$requirement',`created-on`='$created_on' where  ID='$ID";
			}
			$result = mysqli_query($con,$query);
			   if($result){
					$msg= "Table Reserved sucessfully.";
			 }
			 else {
			$msg= "Sorry, there was an error while uploading the details plz try again.";
			}	
			}
		?>
 <section class="reser" style="background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)), url('image/background2.jpg');">
 <div class="container">
			<div class="Reservtion">
			<!--<form method="post">-->
                <h2 class="table-title">Take a <span>reservation</span></h2>
                <div class="table-row">
				<form action="" class="needs-validation" novalidate method="post">
								 <?php if($msg!="")
								  {
									  echo '<div class="alert alert-danger alert-dismissible fade show">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong></strong>'.$msg.'
								  </div>';
									}
									$ret=mysqli_query($con,"SELECT * FROM `reservation`");
									$row=mysqli_fetch_array($ret);
									?> 
						<input type="hidden" name="page_id" id="page_id" value="<?php echo $row['ID'];?>"/>
                        <div class="input">
                            <i class="fa fa-user-o"></i>
                            <input type="text"  id="name" name="name" placeholder="Name" value="<?php echo $row["name"]?>"   required> 
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
                        </div> 
                   
                        <div class="input">
                            <i class="fa fa-envelope-open-o"></i>
                            <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $row["Email"]?>"   required> 
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
                        </div> 
                   
                        <div class="input">
                            <i class="fa fa-phone"></i>
                            <input type="tel" id="mobile" name="mobile" placeholder="Phone" value="<?php echo $row["MobileNumber"]?>"   required> 
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    
                        <div class="input"><i class="fa fa-calendar"></i>
                            <input type="date" id="date" name="date" placeholder="day:month:year" value="<?php echo $row["date"]?>"   required> 
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
                        </div> 
                    
                        <div class="input"><i class="fa fa-clock-o"></i>
                            <input type="time" id="time" name="time" placeholder="Time" value="<?php echo $row["time"]?>"   required> 
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
                        </div> 
                   
                        <div class="input"><i class="fas fa-user-friends"></i>
                            <input type="number" id="people" name="people" placeholder="No of peopel" value="<?php echo $row["people"]?>"  required> 
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
                        </div> 
                    
                        <div class="input">
                            <textarea name="requirement" id="requirement" row="4" placeholder="Special requirements" ><?php echo $row["requirement"]?></textarea>
                        </div>
                         
                    
                        <button type="submit" id="submit" name="submit" class="btn table-btn">Book A Table</button>
						<button type="submit" id="cancel" name="cancel" class="btn table-btn"><a href="delete-reservation.php?editid=<?php echo $row['ID'];?>" Onclick="return ConfirmDelete();" value="1" style="color:black;">Cancel Table</a></button>
				
                </form>    
                </div>
            <!--</form>-->
		</div>
	</div>
</section>
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
<?php
require_once('footer.php');
?>		