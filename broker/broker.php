<?php 

function check($length){
if($length <2){
return false;
}
return true;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
$n=$_POST['n'];
$l=$_POST['l'];
$length1=strlen($n);
echo "<script>alert('received!');</script>";
//sleep(2);
$length2=strlen($l);
if(check($length1)){
echo "<script>alert('validating!'); </script>";
//	sleep(3);
 	 if(check($length2)){
	       if(!is_numeric($n)){
			if(!is_numeric ($l)){
				 session_start();
   				$_SESSION['ID'] = 1;
				echo "<script>alert('correct!'); location.href='yei.php?name$name=$n&last=$l';</script>";
				//header("Location: ./yei.php?name=$n&last=$l");
				exit;			
			}
		}
	
	}

}

echo "<script>alert('Sorry your data is incorrect, please check it and submit it again'); location.href='./index.php';</script>";


}


?>
