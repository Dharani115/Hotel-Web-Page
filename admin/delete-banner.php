<?php
include('../includes/dbconnection.php');
$edit_id=$_GET['editid'];
$query="delete from banner where ID='$edit_id'";
$result = mysqli_query($con,$query);
           if($result){
            $msg= "item deleted  successfully.";
      header('location:manage-banner.php');
  
	 }
?>