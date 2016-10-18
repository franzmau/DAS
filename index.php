<!DOCTYPE HTML>
<html>
	<head>
		<title>Financial Advisor</title>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<link href="css/theme.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/jquery.min.js"></script>		
        <!--start slider -->
	    <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
	<!--end slider -->
	       <!--  jquery plguin -->
		<script src="js/login.js"></script>		
		<script src="js/modernizr.custom.js"></script>
		<script>
				function message() {
				    alert("Send an email to a01202413@gmail.com to recover your password");
				}
			</script>

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
	<link rel="stylesheet" type="text/css" href="css/magnific-popup1.css">
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
	</head>
	<body>
		   <!-- start magnific-->
    	<div id="small-dialog1" class="mfp-hide">
			<div class="pop_up">
			 	
  			</div>
		</div>
		<!-- end magnific-->

		<!----start-container---->
		<div class="header-bg" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><h1><a href="index.html">Financial Advisor</a></h1></div>
					</div>
					<div class="col-md-8">					
	 					<div class="h_right">
	 						<div class="left">
							<ul class="menu list-unstyled">		
								<li class="active"><a href="#home" class="scroll">Home</a></li>
								<li><a href="#features" class="scroll">Features</a></li>

								<li><a href="#faq" class="scroll">Faq</a></li>
								<li><a href="#support" class="scroll">Support</a></li>
								
							</ul>
						   </div>	
						   <div class="right">
							<ul class="menu list-unstyled">						                   
								<li class="login"><div class="log_box">
						    		   <div id="loginContainer">
						                  	<a href="#" id="loginButton" class=""><span>LOGIN</span></a>               
							                <div id="loginBox" style="display: none;">                
							                    <form id="loginForm"  action = "./Controller/Controller.php" method = "post">	
							                        <fieldset id="body">
							                            <fieldset>
												
							                            	<input type="text"   name="name" id="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
							                                <input type="password" name="password" class="textbox" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
							                            </fieldset>
							                            <input type="submit" value="submit">
							                            <label for="checkbox" onclick="message()"><i><a >Lost Password ?</a></i></label>
											
							                        </fieldset>
							                    </form>
							                </div>
						              </div>
						            <div class="clearfix"></div>
						          </div>	          						
	           <!-- end_login_box --></li>
							</ul>
							</div>
							 <!-- start login_box -->
								
												
							<!-- start smart_nav * -->
					        <nav class="nav">
					            <ul class="nav-list">
					                <li class="nav-item"><a href="#home">Home</a></li>
					                <li class="nav-item"><a href="#features" class="scroll">Features</a></li>
					            
					                <li class="nav-item"><a href="#faq" class="scroll">Faq</a></li>
					                <li class="nav-item"><a href="#support" class="scroll">Support</a></li>				               
					                <div class="clearfix"></div>		
					            </ul>					            
				
					        <div class="nav-mobile"></div></nav>
					        
					        <script type="text/javascript" src="js/responsive.menu.js"></script>
							<!-- end smart_nav * -->
						</div>
						
					</div>	      
				</div>
			</div>
        </div>	
       <!----start-images-slider---->
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/banner1.jpg" alt=""/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title  this are the one that are at the images.-->
		                        <h4 class="title">Have healthy finance!</h4>	                      
		                       <h4 class="title"> Don't spend too much.</h4>
		                        <!-- /Text description -->
		                        <div class="slide-btns description">	                      
		                        </div>	
		                    

								   <!-- start magnific-->
							    	<div id="small-dialog1" class="mfp-hide">
										
									</div>
									<!-- end magnific-->
	 
		                              																																                         	                       		     							
		                        <div class="buttons">
		                        	<button class="btn btn-2 btn-2b"  onclick="location.href = './Views/login.php';">Start using now!</button>
		                        	<button class="btn1 btn-2 btn-2b" href="#features" class="scroll">Features you get</button>
		                        	<div class="clearfix"></div>
		                        </div>
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <div class="slide">
		                <img src="images/banner1.jpg" alt=""/>
		               <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title">Save and Invest your money.</h4>	                      
		                       <h4 class="title">It is profitable.</h4>
		                        <!-- /Text description -->
		                        <div class="slide-btns description">	                      
		                        </div>
		                         
								   <!-- start magnific-->
							    	<div id="small-dialog1" class="mfp-hide">
										<div class="pop_up">
										 	
							  			</div>
									</div>
									<!-- end magnific-->
		                        <div class="buttons">
		                        	<button class="btn btn-2 btn-2b"  onclick="location.href = './Views/login.php';">Start using now!</button>
		                        	<button class="btn1 btn-2 btn-2b" href="#features" class="scroll">Features you get</button>
		                        	<div class="clearfix"></div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--/slide -->
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
		    <!--/slider -->
		</div>	
	

<div class="container">
<div class="row">
		<div class="content-feature-grids" id="features">
						<h3> Features</h3>
						<p>Saving money can help you when you are having bad times.  </p>
				<div class="col-md-6">
					<div class="feature-grid">
						<div class="feature-grid-left icon1">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>User friendly.</h2>
							<p>This is very easy to use. You only need to know how much do you earn and your fixed expenses. If you don't know the system will tell you which can be your fixed expenses.  </p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon2">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>All in a simple table.</h2>
							<p>When you ask the system for your personal financial plan, it will show it a simple table easy to understand. Also you can edit the table if you commited a mistake and wants to update the financial plan information.</p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon3">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Record your expenses. </h2>
							<p>This web page  can tell you how much you need to spend in your daily life, and keep the record of them in case you want to see them . Also it can keep how mucho earned and how much you earn now. So you can know how to improve saving your money.  </p>
						</div>
						<div class="clearfix"></div>		
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature-grid">
						<div class="feature-grid-left icon4">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Tips</h2>
							<p>The system will give you some financial tips in order to keep your finances clean and don't spend more money than you earn. 
							</p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon5">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Time is money</h2>
							<p>If you are not saving your money now for your retirement, you are probably going to have financial problem when you became older. Put money to work now so you don't have to work for money later. </p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon6">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Investing</h2>
							<p>The system will tell you when it is the correct to time to start investing. The system will ask you some questions and will linked you to the correct place where you can start investing your money in order to have more yield. (more $$$) </p>
						</div>
						<div class="clearfix"></div>		
					</div>
				</div>
					<div class="clearfix"></div>		
				</div>
	</div>
</div>



<div class="container">
<div class="row">
		<div class="content-feature-grids" id="faq">
						<h3 class="faq"> Faq</h3>
						<p></p>
				<div class="col-md-6">
				   <div class="faq-grid">									
							<h5>1. I don't know anything about finance. Can I use it? </h5>
							<p>A. Yes.The system will help you if you don't know anything about personal finance planning. </p>								
					</div>
					<div class="faq-grid">									
							<h5>2. The system will manage taxes?</h5>
							<p>A. No, mexican tax departement is a mess. So you would need the help of an accountant.</p>								
					</div>
					<div class="faq-grid">									
							<h5>3. My information will be public?</h5>
							<p>A. No, your personal information it's only yours and no one can see it , except for you. </p>								
					</div>
					<div class="faq-grid">									
							<h5>4. How much does it cost ?</h5>
							<p>A. This is a school project, so it will be free. </p>								
					</div>
					<div class="faq-grid">									
							<h5>5. When did the system will be available?</h5>
							<p>A. It will be available before October 24th, with all the features mentioned above.  </p>								
					</div>
				</div>
				<div class="col-md-6">
				   <div class="faq-grid">									
							<h5>6. The system will invest for me?</h5>
							<p>A. No, the system will recommend you were to invest your money, (Stocks, bondes, cetes) according to the answer you have it the system and can reccomend you in which place you can invest your money. </p>								
					</div>
					<div class="faq-grid">									
							<h5>7. What is the difference between investing and saving?</h5>
							<p>A. Saving has lower risk and lower yield  than investing.(almost all the financial institution in mexico don't pay you if you want to save your money) According to the answer you have the system can tell where to invest or save your money.</p>								
					</div>
					<div class="faq-grid">									
							<h5>7. What is a Fixed Cost?</h5>
							<p>A. Fixed Cost is something that you are going to pay no matter what happend or if you use it or not., for example paying for your kid's private school, if you have a mortage, TV,  or a car that you are still paying. Light, water is not a fixed cost. </p>						
					</div>
					<div class="faq-grid">									
													
					</div>
					<div class="faq-grid">									
							
												
					</div>
				</div>
					<div class="clearfix"></div>		
				</div>
	</div>
</div>
<div class="contact s6" id="support">
<div class="container">
<div class="row">
 	<div class="col-md-6">			
 		<div class="contact-left">		
 		     <h3>CONTACT ME</h3>
 		     <p class="style">If you want to learn more about this financial advisor please send me a message. Just put your email and your name, I will be more than happy to help you. </p>
			<div class="get-intouch-left-address">
		 		  	    <p>Francisco Mauricio </p>
						<p>Villanueva Martinez.</p>
						<p>Itesm Campus Queretaro</p>					
						<p class="style1">Email: <a href="mailto:a01202413@gmail.com"> a01202413@gmail.com</a> </p>
						<p class="style2">Phone: +52 1 (442) 210-3847</p>
					</div>
 		</div>	
 	</div>
 	<div class="col-md-6">
 		<div class="contact-right">		
 		    <div class="form">				
				  			<form method="post" action = "./Controller/sender.php"">
							    	<input type="text" name="fname" class="textbox" value=" Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							    	<input type="text" name="email" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
										<div class="clearfix"></div>	
								    <div>
								    	<textarea value="Message:" name="mssg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Message';}">Message</textarea>
								    </div>
								<div class="span4">
							    	<a href="#">
							    		<i><input type="submit" value="CONTACT ME"></i>
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

<!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>

