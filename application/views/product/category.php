<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EGATE.pro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	<?php $this->load->view('common/style_view');?>

</head>
<body>
	
	<!-- <div class="fh5co-loader"></div> -->
	
	<div id="page">
		<?php 
		$data['categories']=$categories;
		$this->load->view('common/header',$data);
		?>	
		<div class="ab_banner">
			<img src="<?php echo base_url('assets/images/'.$details->category_image);?>" width="100%">
			<div class="ab_text">
				<h1 style=""><?php echo $details->cate_name; ?></h1>
				
			</div>
		</div>

		<div id="fh5co-product">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span></span>
						<h2><?php echo $details->cate_name; ?>.</h2>
						<p><?php echo $details->description; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(<?php echo base_url('assets');?>/images/i_series/egate-android-10.png);">
								<div class="inner">
									<p>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="<?php echo base_url('home/subcategory');?>">C 510 Boombox</a></h3>
								<span class="price">INR. 10,000</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(<?php echo base_url('assets');?>/images/i_series/i9-1.png);">
								<span class="sale">Sale</span>
								<div class="inner">
									<p>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>	
							</div>
							<div class="desc">
								<h3><a href="<?php echo base_url('home/subcategory');?>">U 411</a></h3>
								<span class="price">INR. 10,000</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(<?php echo base_url('assets');?>/images/i_series/i9-1_standar.png);">
								<div class="inner">
									<p>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="<?php echo base_url('home/subcategory');?>">U 426</a></h3>
								<span class="price">INR. 10,000</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(<?php echo base_url('assets');?>/images/e_gate_pro.jpg);">
								<div class="inner">
									<p>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="<?php echo base_url('home/subcategory');?>">U 402</a></h3>
								<span class="price">INR. 10,000</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(<?php echo base_url('assets');?>/images/e_gate_pro.jpg);">
								<div class="inner">
									<p>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="<?php echo base_url('home/subcategory');?>">B 300</a></h3>
								<span class="price">INR. 10,000</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(<?php echo base_url('assets');?>/images/e_gate_pro.jpg);">
								<div class="inner">
									<p>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="<?php echo base_url('home/subcategory');?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="<?php echo base_url('home/subcategory');?>">B 303</a></h3>
								<span class="price">INR. 10,000</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="fh5co-started">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Newsletter</h2>
						<p>Just stay tune for our latest Product. Now you can subscribe</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<form class="form-inline">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-default btn-block">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- start footer -->
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

			</footer>
			<div class="c_right text-certer">
				<p>
					<small class="block">copyright &copy; 2019. All Rights Reserved.</small> 
					<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank"></a> <a href="http://blog.gessato.com/" target="_blank"></a>  <a href="http://unsplash.co/" target="_blank"></a></small>
				</p> 
			</div>
			<!-- end of footer -->

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

		</body>
		</html>

