<!DOCTYPE HTML>
<html>
	<?php $this->load->view('common/head');?>
	<style>
			#ms{
				display:none !important;
			}
	
			#fps{
				display:none !important;
			}
		
    </style>
	<body>	
	<!-- <div class="fh5co-loader"></div> -->
	<div id="page">
	<!-- start header navbar -->

	<?php 
	$data['categories']=$categories;
	$this->load->view('common/header',$data);
	?>	
	<!-- end of header navbar -->
	<!-- <aside id="fh5co-hero" class="js-fullheight"> -->
		<!-- <div class="flexslider js-fullheight"> -->
		<!-- <ul class="slides">
			<li style="background-image: url(./assets/images/banner/home_page_b_anner_1.jpg);">
				<!-- <div class="overlay-gradient"></div> -->

			<!-- </li>
			<li style="background-image: url(./assets/images/banner/home_page_b_anner_2.jpg);">

			</li>
			<li style="background-image: url(./assets/images/banner/home_page_b_anner_1.jpg);">
				
			</li>
			<li style="background-image: url(./assets/images/banner/home_page_b_anner_2.jpg);">

			</li> -->
		<!--</ul> -->
	  	<!-- </div> -->
	<!-- </aside> -->
	<div class="ab_banner">
		<img src="<?php echo base_url('assets/images/');?>banner/home_page_b_anner_1.jpg" width="100%">
	</div>
    <!-- start Choose the projector -->
	<div id="fh5co-product">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Choose the projector that suits your lifestyle</h2>
				</div>
			</div>
			<div class="row">
					
				<?php 
				$subcategory_images=array(
					'I Series'=>'./assets/images/i_series/i9-series.jpg',
					'K Series'=>'./assets/images/i_series/k9-x-series.jpg',
					'P Series'=>'./assets/images/i_series/p531-series.jpg',
					'X Series'=>'./assets/images/i_series/x_series.jpg',
					);
				foreach ($home_subcategory_list as $subcategory) {
					//print_r($subcategory);
				?> 
				<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
					<div class="product">
						<div class="product-grid" style="background-image:url(<?php echo $subcategory_images[$subcategory->sub_cat_name];?>);">
							<a href="<?php echo base_url('home/subchildcategory');?>">
								<div class="inner" >
									<p>
										<a href="<?php echo base_url('home/subchildcategory');?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="<?php echo base_url('home/subchildcategory');?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
						    </a>
						</div>
						<div class="desc">
							<h3><a href="<?php echo base_url('home/subchildcategory');?>"><?php echo $subcategory->sub_cat_name;?></a></h3>
							<p class="price">
								<?php echo $subcategory->description; ?>
							</p>
							<a href="#"></a>
							
						</div>
						
					</div>
				</div>
				<?php } ?>
				<!-- <div class="col-md-3 col-sm-3 col-xs-6 text-center ">
					<div class="product">
						<div class="product-grid" style="background-image:url();">
							<span class="sale">Sale</span>
							<div class="inner">
								<p>
									<a href="product.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="product.html" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="K_series.html">K SERIES</a></h3>
							<p class="price">
								Scandinavian luxury, unparalleled technology, and effortless power translate to sedans that let you enjoy every mile of every journey.
							</p>
							<a href=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
					<div class="product">
						<div class="product-grid" style="background-image:url(./assets/images/i_series/p531-series.jpg);">
							<div class="inner">
								<p>
									<a href="product.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="product.html" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="p_series.html">P SERIES</a></h3>
							<p class="price">
								Scandinavian luxury, unparalleled technology, and effortless power translate to sedans that let you enjoy every mile of every journey.
							</p>
							<a href=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
					<div class="product">
						<div class="product-grid" style="background-image:url(./assets/images/i_series/x_series.jpg);">
							<div class="inner">
								<p>
									<a href="product.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="product.html" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="x_series.html">X SERIES</a></h3>
								<p class="price">
								Scandinavian luxury, unparalleled technology, and effortless power translate to sedans that let you enjoy every mile of every journey.
							</p>
							<a href=""></a>
						</div>
					</div>
				</div> -->
			</div>
			<!-- added by archit -->
			<div class="row sliding_box">

				<?php 

				$category_images=array(
					'Projectors'=>'./assets/images/i_series/speaker-Category.jpg',
					'HEADPHONES'=>'./assets/images/i_series/Headphone-Series.jpg',
					'Accessories'=>'./assets/images/i_series/acces-series.jpg',
					'SCREENS'=>'./assets/images/i_series/screen-series.jpg',
					);

				foreach ($home_category_list as $category) { 
					


					?>
				<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
					<div class="product">
						<div class="product-grid" style="background-image:url(<?php echo $category_images[$category->cate_name];?>);">
							<div class="inner">
								<p>
									<a href="<?php echo base_url('home/category');?>" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="<?php echo base_url('home/category');?>" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<!--  -->
						<div class="desc">
							<h3><a href="<?php echo base_url('home/category');?>"><?php echo $category->cate_name;?></a></h3>
							<p class="price">
								<?php echo $category->description;?>
							</p>
							<a href=""></a>
						</div>
						<!--  -->
					</div>
				</div>

				<?php  } ?>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="component-list-1-add">
						<img class="component-list-1-add-button" src="<?php echo base_url('assets/');?>images/bg-1.png" aria-label="add products serise items" alt="button-add">
						<img class="component-list-2-add-button" src="<?php echo base_url('assets/');?>images/bg-2.png" aria-label="add products serise items" alt="button-add">
					</div>
				</div>
			</div>
			<!--/ added by archit -->
			<!-- <center><div id="ft">View More</div></center> -->
			<div id="hr">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
						<div class="product">
							<div class="product-grid" style="background-image:url(./assets/images/i_series/egate-android-10.png);">
								<div class="inner">
									<p>
										<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="#" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product.html">About Projector</a></h3>
								<p class="price">
									Scandinavian luxury, unparalleled technology, and effortless power translate to sedans that let you enjoy every mile of every journey.
								</p>
								<a href=""></a>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
						<div class="product">
							<div class="product-grid" style="background-image:url(./assets/images/i_series/i9-1.png);">
								<span class="sale">Sale</span>
								<div class="inner">
									<p>
										<a href="product.html" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="product.html" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product.html">About Projector</a></h3>
								<p class="price">
									Scandinavian luxury, unparalleled technology, and effortless power translate to sedans that let you enjoy every mile of every journey.
								</p>
								<a href=""></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
						<div class="product">
							<div class="product-grid" style="background-image:url(./assets/images/i_series/i9-1_standar.png);">
								<div class="inner">
									<p>
										<a href="product.html" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="product.html" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product.html">About Projector</a></h3>
								<p class="price">
									Scandinavian luxury, unparalleled technology, and effortless power translate to sedans that let you enjoy every mile of every journey.
								</p>
								<a href=""></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 text-center ">
						<div class="product">
							<div class="product-grid" style="background-image:url(./assets/images/e_gate_pro.jpg);">
								<div class="inner">
									<p>
										<a href="product.html" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="product.html" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product.html">About Product</a></h3>
									<p class="price">
									Scandinavian luxury, unparalleled technology, and effortless power translate to sedans that let you enjoy every mile of every journey.
								</p>
								<a href=""></a>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
	<!-- start inner -->


<!-- end of inner -->
	 <!-- end Choose the projector -->
	<!-- <div id="fh5co-services" class="fh5co-bg-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-credit-card"></i>
							</span>
							<h3>Credit Card</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
							<p><a href="#" class="btn btn btn-outline">Learn More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<h3>Save Money</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
							<p><a href="#" class="btn btn btn-outline">Learn More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-paper-plane"></i>
							</span>
							<h3>Free Delivery</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
							<p><a href="#" class="btn btn btn-outline">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
	</div> -->

	<!-- start <?php echo base_url('assets/');?>images gallery style ----------------------------------->
	<div class="grid">
			<div class="container-fluid">
					<header class="text-center">
							<h1 class="world">World of EGATE  </h1>
				  	<div class="start-page-grid__text-heading">
							  <div class="container">
								  <p class="body">Our philosophy has always been to put people first. Always crafting innovation for a safer, cleaner, more enjoyable feature. That comes as naturally as breathing. That is the EGATE.</p>
								</div>
							</div>
					</header>
					<div class="row"> 
						<div class="col-md-6 col-sm-6 col-xs-12" style="padding:3px;">
						  <img src="<?php echo base_url('assets/');?>images/ezgif.com.gif" width="100%"  height="498px">
						</div>

						<div class="col-md-3 col-sm-6 col-xs-6" style="padding:5px;">
							   <img src="<?php echo base_url('assets/');?>images/world_of_egate/screen.jpg" width="100%">
								
								<div class="in" style="padding-top:5px;">
								  <img src="<?php echo base_url('assets/');?>images/world_of_egate/headphone.jpg" width="100%">
							    </div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6" style="padding:5px;">
							     <img src="<?php echo base_url('assets/');?>images/world_of_egate/tv.jpg" width="100%">
								<div class="in" style="padding-top:4.8px;">
										
									<img src="<?php echo base_url('assets/');?>images/world_of_egate/1st.jpg" width="100%">
								</div>
						</div>	
					</div>
				<br/>
			</div>
	</div>
	
	<!-- end <?php echo base_url('assets/');?>images gallery style ------------------------------------->
	<!-- start testimonials -->
	<div id="fh5co-testimonial" class="fh5co-bg-section" style="display:none;">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span></span>
					<h2>Our Testimonials</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url('assets/');?>images1/person1.jpg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url('assets/');?>images1/person2.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url('assets/');?>images/person3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- start blogs -->

	<div class="rec-blog">
		<div class="container">
				<div class="rec-blog-inner">
						<div class="blog-title">
								<span>The Blog</span>
						</div>
						<div class="row">
								<div class="col-md-4 blog-ct">
										<a href=""><img src="<?php echo base_url('assets/');?>images/rec-1.jpg" alt="" class="img-responsive"></a>
										
										<div class="blog-ct-title">
												<a href="">Sed ut perspiciatis unde omnis iste  </a>
												<span>june 12 ,2019</span>
										</div>
								</div>
								<div class="col-md-4 blog-ct">
										<a href=""><img src="<?php echo base_url('assets/');?>images/rec-3.jpg" alt="" class="img-responsive"></a>
										<div class="blog-ct-title">
												<a href="">Voluptatem accusantium doloremque</a>
												<span>june 12 ,2019</span>
										</div>
								</div>
								<div class="col-md-4 blog-ct">
										<a href=""><img src="<?php echo base_url('assets/');?>images/rec-2.jpg" alt="" class="img-responsive"></a>
										<div class="blog-ct-title">
												<a href="">Voluptatem accusantium doloremque</a>
												<span>june 12 ,2019</span>
										</div>
								</div>
						</div>
				</div>
		</div>
</div>

<!-- end of blogs -->


<!-- start brands -->
	<!-- start brands -->
	<div class="brands">
			<div class="container">
					<div class="brands-inner">
							<div class="brand-title">
									<span style="font-size:20px">WHERE TO BUY</span>
							</div>
							
							<div id="slider-home"> <!-- Slider -->
									<div id="brand-carousel" class="owl-carousel owl-theme">
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-2.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-3.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-4.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-1.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-5.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-2.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-3.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-4.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-1.png" alt="slide-1" class="img-responsive">
											</div>
											<div class="item">
													<img src="<?php echo base_url('assets/');?>images/brand-5.png" alt="slide-1" class="img-responsive">
											</div>
									</div>
							</div> <!-- Slider -->
							
					</div>
			</div>
		</div>
	<!-- end of brands -->
<!-- end of brands -->
	<!-- end of testimonials  -->
	
  <!-- start count ---------------------------------->
	<!-- <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(<?php echo base_url('assets/');?>images/img_bg_5.jpg);">
		<div class="container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-eye"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Creativity Fuel</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-shopping-cart"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Happy Clients</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-shop"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="700" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">All Products</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Hours Spent</span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end of count -------------------->

	

	<?php $this->load->view('common/footer');?>
	
	</body>
</html>

