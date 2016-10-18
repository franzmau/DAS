<?php 
session_start();
if(!isset($_SESSION['ID'])){
      header("location:./index.php");
   }

$l=$_GET["name"];
$m=$_GET["last"];
echo "hi $l $m";
session_destroy();
?>
