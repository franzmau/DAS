<?php
   include('../Model/Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id, name, surname  from User where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   $surname=$row['surname'];
   $id=$row['id'];
  

   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
   }

   
?>
