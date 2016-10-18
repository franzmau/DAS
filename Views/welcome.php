<?php
   include('../Controller/session.php');
  include ('../Controller/print_table.php')
?>

<!DOCTYPE HTML>
<html>
	<head>
			<style>
			table {
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100% !important;
			}

			td, th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
			}

			tr:nth-child(even) {
			    background-color: #dddddd;
			}
			

			</style>
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
								<li class="active"><a href="../Controller/Logout.php" class="scroll">Log out</a></li>
								
								
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
					                <li class="nav-item"><a href="../Controller/Logout.php">Log Out</a></li>
					                		
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
						<h3> Welcome <?php echo "$login_session $surname"; ?></h3>
						<p>Thank you for using this financial advisor. </p>
				<div class="col-md-12">
					<div class="feature-grid" style="width:100%;" >
						<?php show_table($id); ?>
				</div>
					<div class="clearfix"></div>		
				</div>
	</div>
</div>
</div>



<div class="contact s6" id="support">
<div class="container">
<div class="row">
 	<div class="col-md-6">			
 		<div class="contact-left">		
 		     <h3>Create a new plan</h3>
 		     <p class="style">  </p>
			<div class="get-intouch-left-address">
		 		  	    <p>So remember the more accurate your income and expenses are. You will have a better advisoring.</p><br>
						<p>Input your income, pesos is recommended. Don't put any special character neither this "$" nor a comma","</p>
						<p>Input your fixed expenses, If you don't know what is a fixed expense please check our  FAQ questions</p>					
					


					</div>
 		</div>	
 	</div>
 	<div class="col-md-4">
 		<div class="contact-right">		
 		    <div class="form">				
				  			<form method="post" action="../Controller/plan.php">
							    	<label style="color: #fff;">Monthly Income </label><input type="text" class="textbox" onkeypress="return isNumberKey(event)"  name="income" value="Example 42000" maxlength="7" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Example 42000';}"><br><br>
							    	<label style="color: #fff;" >Monthly Expenses</label>
							    	<input type="text" name="expense" class="textbox" onkeypress="return isNumberKey(event)"  value=" Example 1500 " maxlength="7" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Example 1500';}">
										<div class="clearfix"></div>	
								    <div><br><label style="color: #fff;">I include on my monthly expenses </label><br>
								    	<input  type="checkbox" id="one" name="check[]" value="mortage"> 
								    	<label style="color: #fff;" for="one">Mortage or rent</label><br>
 										<input type="checkbox" id="two" name="check[]" value="private"> 
										<label style="color: #fff;" for="two">Private School</label><br>
										<input type="checkbox" id="three" name="check[]" value="tv">
										<label style="color: #fff;" for="three">T.V. or Netflix</label><br>
										<input type="checkbox" id="four" name="check[]" value="internet"> 
										<label style="color: #fff;" for="four">Internet and cell phone</label><br>
										<input  type="checkbox" id="five" name="check[]" value="membership">
										<label style="color: #fff;" for="five">Membership of a club </label><br><br>
								    </div>
								<div class="span4">
							    	<a href="#">
							    		<i><input type="submit" value="SEND INFORMATION"></i>
							    		<div class="clearfix"></div>	
							    	</a>
							    </div>								
							</form>
						</div>
 		    	 </div>	
 	    	</div>	
 			<div class="clearfix"></div>	
 		</div>	
	</div>
</div>





   </body>
   
</html>
