<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome</title>
		<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="../js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<link href="../css/theme.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="../js/jquery.min.js"></script>		
        <!--start slider -->
	    <link rel="stylesheet" href="../css/fwslider.css" media="all">
		<script src="../js/jquery-ui.min.js"></script>
		<script src="../js/css3-mediaqueries.js"></script>
		<script src="../js/fwslider.js"></script>
	<!--end slider -->
	       <!--  jquery plguin -->
		<script src="../js/login.js"></script>		
		<script src="../js/modernizr.custom.js"></script>
		

	    <!--scroll-->
 		<script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!--//scroll-->
	<!-- Add fancyBox light-box -->
	<link rel="stylesheet" type="text/css" href="../css/magnific-popup1.css">
		
		<!-- //End fancyBox light-box -->	
</head>   
   <body>
   	<div style='text-align: center;'>  
       <form id="loginForm"  action = "../Controller/suscribe.php" method = "post" class="col-md-offset-4" style='text-align: center; float: inherit !important;'>	
        <fieldset style='text-align: center;'>
		  <fieldset style='text-align: center;'>
		  	<input type="text"   name="name" id="email" value="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
		  	<input type="text"   name="surname" id="email" value="surname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'surname';}">
		  	<input type="text"   name="email" id="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
		  	<label>password</label><input type="password" onfocus="this.value = '';"   name="psw" id="email"  value="password">
		  	<label>Repeat password</label><input type="password"  onfocus="this.value = '';"  name="psw2" class="textbox"  value="repeat password">



            
         </fieldset>
            <input type="submit" value="submit">
		</fieldset>
		</form>
	</div>
   </body>

</html>