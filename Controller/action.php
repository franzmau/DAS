<?php
include("../Model/Config.php");
//this the controller for the tables. 
if (isset($_POST['view']) ) {
  
   $a=$_POST['id'];
  header("location:../Views/show.php?id=$a");


}
if(isset($_POST['delete']) ) {
	 $a=$_POST['id'];
	$sql = "DELETE FROM `Report` WHERE `id`= '$a'";

    $result = mysqli_query($db,$sql);

    echo "<script>alert('The record has been deleted.'); location.href='../Views/welcome.php';</script>";

	
	


	}



?>