<?php
include('../includes/dbconnection.php');
$edit_id=$_GET['editid'];
$query="delete from servise where ID='$edit_id'";
$result = mysqli_query($con,$query);
           if($result){
            $msg= "service Details deleted  successfully.";
      header('location:manage-service.php');
  
	 }
?>