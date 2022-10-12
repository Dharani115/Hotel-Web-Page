<?php
include('includes/dbconnection.php');
$edit_id=$_GET['editid'];
$query="delete  from reservation where ID='$edit_id'";
$result = mysqli_query($con,$query);
           if($result){
            $msg= "Table canceled  successfully.";
      header('location:reservation.php');
  
	 }
?>