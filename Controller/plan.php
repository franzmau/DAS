
<?php
   include('./session.php');
      
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    

      $income = mysqli_real_escape_string($db,$_POST['income']);
      $expense = mysqli_real_escape_string($db,$_POST['expense']);
       if($income>$expense){
       $numero=$_POST["check"];
         $count = count($numero);



      $first="`id_user`, `income`, `date`, `costs` ";
      $values="'$id','$income',now(),'$expense'";
      if($count>0){
          //echo "$count ja \n";
         for ($i = 0; $i < $count; $i++) {
        $first=$first.",`$numero[$i]` ";
        $values=$values.", 1";
         }

      }



     $sql = "INSERT INTO Report ( ".$first."    ) VALUES (".$values.")";

     if( mysqli_query($db,$sql)){
      $a=mysqli_insert_id($db);
      
     header("location: ../Views/show.php?id=$a");
     }
   
      
     
   }else{
   // echo "<script>alert('Sorry your Income is lower than your expense, I can't do anything with that'); location.href='../Views/welcome.php';</script>";
   echo "<script>alert('Sorry your Income is lower than your expense, I can \'t do anything with that'); location.href='../Views/welcome.php';</script>";
   }

     
   }
?>