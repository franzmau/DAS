<?php
   include("../Model/Config.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $surname = mysqli_real_escape_string($db,$_POST['surname']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
      $email2= mysqli_real_escape_string($db,$_POST['psw2']); 
      

      $sql = "SELECT id FROM User WHERE email = '$email' ";

      $result = mysqli_query($db,$sql);      
      $count = mysqli_num_rows($result);
      echo "<script>alert('$count.'); </script>";
      if($count==0){


      if($mypassword==$email2){
         if(strlen($mypassword)>6){
         $sql = 'INSERT INTO  User (  `name` ,  `surname` ,  `email` ,  `password` ) 
                  VALUES (
                  "'.$name.'",  "'.$surname.'", "'.$email.'", "'.crypt($mypassword,'rl').'" )';
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      echo "<script>alert('Your user has been created.'); location.href='../index.php';</script>";



      }else{
         echo "<script>alert('Your password need to have more than 6 characters.'); location.href='../Views/login.php';</script>";

      }
   } else{
       echo "<script>alert('Your passwords did not match.'); location.href='../Views/login.php';</script>";

   }
}else {
    echo "<script>alert('The username is in used. Use another one.'); location.href='../Views/login.php';</script>";

}



      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		/*
      if($count == 1) {
			
        // session_register("myusername");
         	echo "2   ";
         $_SESSION['login_user'] = $myusername;
         $_SESSION['pid']=$row['id'];

         
         	echo "\n3";
         header("location: ../Views/welcome.php");
      }else {

         echo "<script>alert('Your password or username is incorrect!'); location.href='../index.php';</script>";
	          $error = "Your Login Name or Password is invalid";
      
      }*/
   }
?>
