<?php
include('../includes/dbconnection.php');
$edit_id=$_GET['editid'];
$query="delete from gallery where ID='$edit_id'";
$result = mysqli_query($con,$query);
           if($result){
            $msg= "image deleted  successfully.";
      header('location:manage-gallery.php');
  
	 }
?>