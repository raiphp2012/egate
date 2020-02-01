<!DOCTYPE HTML>
<html>
	<?php $this->load->view('common/head');?>
	<body>
	<div id="page">
		<!-- start header navbar -->
		<?php $this->load->view('common/header');?>	
    <!-- start login form -->
	<div class="login_page">
		<div class="login-box">
			<div class="lb-header">
				<a href="#" class="active" id="login-box-link">Login</a>
				<a href="#" id="signup-box-link">Sign Up</a>
			</div>
			<form class="email-login sign_in" style="padding-top:50px;" action="<?php echo base_url('');?>" method="post">
				<div class="u-form-group">
				<input type="email" placeholder="Email"/>
				</div>
				<div class="u-form-group">
				<input type="password" placeholder="Password"/>
				</div>
				<div class="u-form-group">
				<button>Log in</button>
				</div>
				<div class="u-form-group">
				   <a href="#" class="forgot-password">Forgot password?</a>
				</div>
			</form>
			<form class="email-signup">
                <div class="my_login">
					<input type="text" id="name" placeholder="name" required>
					<input type="email" id="name" placeholder="email" required>
					<input type="password" id="name" placeholder="password" required>
					<input type="text" id="name" placeholder="phone" required>
					<input type="text" id="name" placeholder="Address" required>
					<select id="name" required>
						<option value="MALE">State</option>
						<option value="MALE">Uttar pradesh</option>
						<option value="FEMALE">Delhi</option>	
						<option value="FEMALE">Haryana</option>
					</select>
					<select id="name" required>
							<option value="MALE">City</option>
							<option value="MALE">Amroha</option>
							<option value="FEMALE">Moradabad</option>	
							<option value="FEMALE">merut</option>
					</select>
					<input type="text" id="name" placeholder="Pin">
					<input type="date" id="name" placeholder="Birthday">
					<select id="name" >
						<option value="MALE">Gender</option>
						<option value="MALE">Male</option>
						<option value="FEMALE">Female</option>	
					</select><br>
					<button id="sign_up">Sign Up</button>
				</div>
			</form>
		</div>
	</div>
    <!-- end of login form -->

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container" style="width:98%;">
     <div class="my_ftr">
			 
		 </div>
			<div class="row copyright">
				<div class="col-md-12">
					<div class="col-md-2 col-sm-12 col-xs-12 footr">
						<div class="f-over">
									 <ul>
										<li><h3>About us</h3></li>
										<li><a href="#">Home</a></li>
										<li><a href="#">About US</a></li>
										<li><a href="#">contact US</a></li>
										<li><a href="#">Gallery</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Career</a></li>
									 </ul>
						</div>
			    </div>       

				   <div class="col-md-2 col-sm-12 col-xs-12 footr">
             <div class="f-over">
                    <ul>
											<li><h3>Quick Link</h3></li>
											<li><a href="#">News</a></li>
											<li><a href="#">E-Learning</a></li>
											<li><a href="#">News Arrivals</a></li>
											<li><a href="#">Employee Login</a></li>
											<li><a href="#">Become A Partner</a></li>
											<li><a href="#">Press Reless</a></li>
										</ul>
										
									
             </div>
        </div>
        
				<div class="col-md-2 col-sm-12 col-xs-12 footr">
					<div class="f-over">
								 <ul>
									 <li><h3>Quick Link</h3></li>
									 <li><a href="#">My Account</a></li>
									 <li><a href="#">Order Tracking</a></li>
									 <li><a href="#">Wishlist</a></li>
									 <li><a href="#">Privacy Policy</a></li>
									 <li><a href="#">Refunds & Cancellations</a></li>
									 <li><a href="T&C.html">Terms & Conditions</a></li>
								 </ul>
								 
							 
					</div>
		 </div>

		 <div class="col-md-3 col-sm-12 col-xs-12 footr">
		 	<div class="f-over">
		 		<ul>
		 			<li><h3>Contact Us</h3></li>

		 			<p>
		 				Sec9, Vasundhara 
		 				Ghaziabad, UP
		 			</p>
		 			<p>Emial-
		 				<a href="">info@egate.pro</a>
		 			</p>

		 			<p>Phone-
		 				<a href="">0120 4120225</a>
		 			</p>
		 			<ul class="fh5co-social-icons">
		 				<li><a href="#"><i class="icon-twitter"></i></a></li>
		 				<li><a href="#"><i class="icon-facebook"></i></a></li>
		 				<li><a href="#"><i class="icon-linkedin"></i></a></li>
		 				<li><a href="#"><i class="icon-dribbble"></i></a></li>
		 			</ul>
		 		</ul>
		 	</div>
		 </div>
     <div class="col-md-3 col-sm-12 col-xs-12 footr">
     	<div class="f-over">
     		<ul>
     			<li class=""><h3>	Your Inbox Deserves Better!</h3></li>
     			<li><a><span class="hand"></span>Get Occasional Updates & Fantastic Discount Offers</a></li>
     			<li>
     				<form>
     					<input type="email" name="email" id="eml" placeholder="Email">
     				</form>
     			</li>
     			<li>
     				<form>
     					<input type="button" name="btn" id="btn"  value="subscribe">
     				</form>
     			</li>
     		</ul>



     	</div>
     </div>
			</div>
	
		</div>
		
	</footer>
	<div class="c_right text-certer">
		<p>
			<small class="block">copyright &copy; 2019. All Rights Reserved.</small> 
			<small class="block">Designed by <a href="#" target="_blank"></a> <a href="http://blog.gessato.com/" target="_blank"></a>  <a href="http://unsplash.co/" target="_blank"></a></small>
		</p> 
	</div>
	<!-- end of footer -->
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<!-- jQuery -->
	<script src="<?php echo base_url('assets');?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets');?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets');?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets');?>/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url('assets');?>/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo base_url('assets');?>/js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url('assets');?>/js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url('assets');?>/js/main.js"></script>
		<script>
		$(".email-signup").hide();
			$("#signup-box-link").click(function(){
			  $(".email-login").fadeOut(100);
			  $(".email-signup").delay(100).fadeIn(100);
			  $("#login-box-link").removeClass("active");
			  $("#signup-box-link").addClass("active");
			});
			$("#login-box-link").click(function(){
			  $(".email-login").delay(100).fadeIn(100);;
			  $(".email-signup").fadeOut(100);
			  $("#login-box-link").addClass("active");
			  $("#signup-box-link").removeClass("active");
			});
	</script>

	</body>
</html>

