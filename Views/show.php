<?php
  
   include('../Controller/system.php');
   $planning=$_GET["id"];
   session_start();
   
   verify($planning,$_SESSION['pid']);

?>


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
		<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});
		</script>
		<!-- //End fancyBox light-box -->	
   
   <body>


		<!----start-container---->
		<div class="header-bg" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><h1><a href="../index.php">Financial Advisor</a></h1></div>
					</div>
					<div class="col-md-8">					
	 					<div class="h_right">
	 						<div class="left">
							<ul class="menu list-unstyled">		
								<li class="active"><a href="./welcome.php" class="scroll">Return</a></li>
								  
								
								
							</ul>
						   </div>	
						   <div class="right">
							<ul class="menu list-unstyled">						                   
								<li class="login"><div class="log_box">
						    		   
						            <div class="clearfix"></div>
						          </div>	          						
	           <!-- end_login_box --></li>
							</ul>
							</div>
							 <!-- start login_box -->
								
												
							<!-- start smart_nav * -->
					        <nav class="nav">
					            <ul class="nav-list">
					                <li class="nav-item"><a href="./welcome.php">Return</a></li>
					                		
					            </ul>					            
				
					        <div class="nav-mobile"></div></nav>
					        
					        <script type="text/javascript" src="js/responsive.menu.js"></script>
							<!-- end smart_nav * -->
						</div>
						
					</div>	      
				</div>
			</div>
        </div>	

  



<div class="container">
<div class="row">
<div class="content-feature-grids" id="features">

<h3>Services </h3>
<?php service();?>
</div>
<div class="contact s6" id="support">
<h3 style="text-align: center;color:#fff; font-size:2em;">Transport</h3>
<?php transport();?>
</div>
<div class="content-feature-grids" id="faq">
<h3 >Food Supplies </h3>
<?php supplies(); ?>
</div>
</div>
<div class="contact s6" id="support">
<h3 style="text-align: center;color:#fff; font-size:2em;"> Entertainment</h3>
<?php entertainment() ;?>
</div>

<div class="content-feature-grids" >
<h3 >Taxes</h3>
<?php tax() ;?>
</div>

<div class="contact s6" id="support">
<h3 style="text-align: center;color:#fff; font-size:2em;">Clothing</h3>
<?php clothing() ;?>
</div>
<div class="content-feature-grids" >
<h3 >Incidentals</h3>
<?php incidental() ;?>
</div>
<div class="contact s6" id="support">
<h3 style="text-align: center;color:#fff; font-size:2em;"> Supplies Appliances</h3>
<?php appliances(); ?>
</div>
<div class="content-feature-grids" >
<h3 >Savings</h3>
<?php savings(); ?>
</div>


<br><br>


</div>

</body>
</head>
</html>