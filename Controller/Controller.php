<?php
   include("../Model/Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $mypassword = crypt($mypassword,'rl');

      $sql = "SELECT id FROM User WHERE email = '$myusername' and password = '$mypassword'";
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
			
        // session_register("myusername");
         	echo "2   ";
         $_SESSION['login_user'] = $myusername;
         $_SESSION['pid']=$row['id'];

         
         	echo "\n3";
         header("location: ../Views/welcome.php");
      }else {

         echo "<script>alert('Your password or username is incorrect! $mypassword '); location.href='../index.php';</script>";
	          $error = "Your Login Name or Password is invalid";
      
      }
   }
?>
