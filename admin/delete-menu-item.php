<?php
include('../includes/dbconnection.php');
$edit_id=$_GET['menueditid'];
$query="delete from menu-item where ID='$edit_id'";
$result = mysqli_query($con,$query);
           if($result){
            $msg= "item deleted  successfully.";
      header('location:manage-banner.php');
  
	 }
?>