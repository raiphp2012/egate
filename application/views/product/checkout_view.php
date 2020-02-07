<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>egate_product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	 <meta property="og:title" content=""/>
	 <meta property="og:image" content=""/>
	 <meta property="og:url" content=""/>
	 <meta property="og:site_name" content=""/>
	 <meta property="og:description" content=""/>
	 <meta name="twitter:title" content="" />
	 <meta name="twitter:image" content="" />
	 <meta name="twitter:url" content="" />
	 <meta name="twitter:card" content="" />
	 <?php $this->load->view('common/style_view');?>	
	</head>
	<body>
		
	<div id="page">
		<!-- start header navbar -->
		 <?php 
		 $data['categories']=$categories;
		$this->load->view('common/header',$data);
		 ?>	
    	<!-- start cart banner -->
    <div class="cart_banner">
            <img src="<?php echo base_url('assets/');?>images/banner/shopping-cart.jpg" width="100%">
            <div class="cart_text">
               <h2>My Cart</h2>
            </div>
    </div>
    <!-- end of cart banner -->
    <section class="ftco-section">
            <div class="container" style="margin-top:40px;">
              <div class="row justify-content-center">
                <div class="col-md-6 ftco-animate">
                              <form action="#" class="billing-form">
                                  <h3 class="mb-4 billing-heading">Billing Details</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                          <div class="form-group">
                              <label for="firstname">Firt Name</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                      </div>
                      <div class="w-100"></div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="country">State / Country</label>
                                  <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">France</option>
                                  <option value="">Italy</option>
                                  <option value="">Philippines</option>
                                  <option value="">South Korea</option>
                                  <option value="">Hongkong</option>
                                  <option value="">Japan</option>
                                </select>
                              </div>
                              </div>
                          </div>
                          <div class="w-100"></div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="streetaddress">Street Address</label>
                            <input type="text" class="form-control" placeholder="House number and street name">
                          </div>
                          </div>
                          <div class="col-md-6">
                                <label for="streetaddress">&nbsp;</label>
                              <div class="form-group">
                            <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                          </div>
                          </div>
                          <div class="w-100"></div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="towncity">Town / City</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="postcodezip">Postcode / ZIP *</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                          </div>
                          <div class="w-100"></div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="phone">Phone</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="emailaddress">Email Address</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-md-12">
                          <div class="form-group mt-4">
                                              <div class="radio">
                                                <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
                                                <label><input type="radio" name="optradio"> Ship to different address</label>
                                              </div>
                                          </div>
                      </div>
                      </div>
                    </form><!-- END -->
                          </div>
                          <div class="col-md-6" style="padding-left:126px;">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4" style="">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <p class="d-flex">
                                          <span style="float:left;">Subtotal</span>
                                          <span>$20.60</span>
                                      </p>
                                      <p class="d-flex">
                                          <span style="float:left;">Delivery</span>
                                          <span>$0.00</span>
                                      </p>
                                      <p class="d-flex">
                                          <span style="float:left;">Discount</span>
                                          <span>$3.00</span>
                                      </p>
                                      <hr>
                                      <p class="d-flex total-price">
                                          <span style="float:left;">Total</span>
                                          <span>$17.60</span>
                                      </p>
                                      </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4" style="">
                                <h3 class="billing-heading mb-4">Payment Method</h3>
                                          <div class="form-group">
                                              <div class="col-md-12">
                                                  <div class="radio">
                                                     <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="col-md-12">
                                                  <div class="radio">
                                                     <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="col-md-12">
                                                  <div class="radio">
                                                     <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="col-md-12">
                                                  <div class="checkbox">
                                                     <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>
                                      </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
              </div>
            </div>
    </section>
    <!-- end of login form -->

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container" style="width:98%;">
		<!-- <div class="f_nav">
			<ul>
					<li class="footer-list-item"><a href="https://group.EGATE.com/">Company</a></li>
					<li class="footer-list-item"><a href="/in/footer/download-brochures">Download Brochures</a></li>
					<li class="footer-list-item"><a href="/in/footer/contact-us">Contact Us</a></li>
					
			</ul>
			<ul class="f2_nav">
					<li class="footer-list-item"><a href="/in/footer/EGATE-in-the-news">EGATE in the News</a></li>
					<li class="footer-list-item"><a href=" https://group.EGATE.com/careers">Careers</a></li>
					<li class="footer-list-item"><a href="https://www.media.EGATE.com/" rel="noopener noreferrer" target="_blank">Media/Press</a></li>
				
			</ul>
		</div> -->
     <div class="my_ftr">
			 
		 </div>
			<div class="row copyright">
				<div class="col-md-12">
						
					<!-- <p>
						<small class="block">&copy; 2019 Prahtam vision. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">Pratham Vision</a> <a href="http://blog.gessato.com/" target="_blank"></a>  <a href="http://unsplash.co/" target="_blank"></a></small>
					</p> -->
					<!-- <p>
						
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p> -->
					<!-- <div class="f_logo">
						<img src="images/logoxxxxxx_b&w.jpg " width="20%">
					</div> -->
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
									 <li><a href="Privacy_policy.html">Privacy Policy</a></li>
									 <li><a href="Refunds_Cancellations.html">Refunds & Cancellations</a></li>
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
		<!-- <div class="address">
			<div class="col-md-4 col-sm-4 col-xs-6">
				<ul>
					<li><h3>Address</h3></li>
					<ul class="fh5co-social-icons">
							<div style="padding-bottom:17px; font-size:20px;"><li><a>C-260 , sec-63, noida</a></li></div>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
		  	</ul>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-6">
				<div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.448618861381!2d77.38560831440685!3d28.616313691567036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce50681005277%3A0x8346be7c596c1159!2sPratham+Vision+P+Limited!5e0!3m2!1sen!2sus!4v1560400649988!5m2!1sen!2sus&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="95%" height="170px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe></div>
			</div>
		</div> -->
	</footer>
	<div class="c_right text-certer">
          <p>
						<small class="block">copyright &copy; 2019. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#" target="_blank"></a> <a href="http://blog.gessato.com/" target="_blank"></a>  
						<a href="http://unsplash.co/" target="_blank"></a></small>
					</p> 
	</div>
	<!-- end of footer -->

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
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
	<?php 
		$this->load->view('common/script_view');
	?>

	</body>
</html>

 
 