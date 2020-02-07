<nav class="fh5co-nav" role="navigation">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-xs-2">
				<div id="fh5co-logo"><a href="<?php echo base_url();?>">
					<img src="<?php echo base_url('assets/');?>images/logo.png" >
				</a></div>
			</div>
			<div class="col-md-8 col-xs-5 col-sm-8 menu-1">
				<ul>
					<li class="">

						<div class="dropdown">
							<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn" data-target="#" href="#">
								About <span class="caret"></span>
							</a>
							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="<?php echo base_url('home/about');?>">About Us</a></li>
								<li><a href="<?php echo base_url('home/who_is_who');?>">Who Is Who</a></li>


							</ul>
						</div>
					</li>
					<li class="">

						<div class="dropdown">
							<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn" data-target="#" href="#">
								Product <span class="caret"></span>
							</a>
							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<?php 

								foreach ($categories as $category) {

									?>
									<li class="dropdown-submenu">
										<a tabindex="-1" href="<?php echo base_url('home/category');?>"><?php echo $category['category']->cate_name;?></a>

										<ul class="dropdown-menu">
											<?php foreach ($category['subcategories'] as $subcategory) {

												?>
												<li class="dropdown-submenu">

													<a href="<?php echo base_url('home/subcategory');?>"><?php echo $subcategory['sucat']->sub_cat_name; ?> &nbsp;</a>
													<ul class="dropdown-menu sub_cat">
														<?php foreach ($subcategory['child'] as $subcategory_child) {

															?>	
															<li><a href="<?php echo base_url('home/subchildcategory');?>"><?php echo $subcategory_child->sub_child_name; ?></a></li>
															<?php   } ?>		

														</ul>
														
													</li>


													

													<?php } ?>
												</ul>
												
											</li>
											<?php		
										}
										?>

									</ul>
								</div>
							</li>
							<li class="">
								<a id="dLabel" role="button"  class="btn btn"  href="<?php echo base_url('home/elearning');?>">
									eLearning <span class=""></span>
								</a>
							</li>
							
							<!-- <li class="has-dropdown"><a href="#">GALLERY</a></li> -->
							<li class="">
								
								<div class="dropdown">
									<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn" data-target="#" href="#">
										Buying Guide <span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
										<li><a href="<?php echo base_url('home/advantage');?>">Advantage Egate</a></li>
										<li><a href=" <?php echo base_url('home/technology');?>">Technology</a></li>
										<li><a href=" <?php echo base_url('home/knowledge');?>">Knowledge Center</a></li><br>
										<li><a href="<?php echo base_url('home/faq');?>">FAQ</a></li>	
									</ul>
								</div>
							</li>
							<li class="">
								
								<div class="dropdown">
									<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn" data-target="#" href="#">
										Support <span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
										<li><a href="<?php echo base_url('home/service_form');?>">Service form</a></li>





									</ul>
								</div>
							</li>
							<li class="">


								<a id="dLabel" role="button" class="btn btn"  href="<?php echo base_url('home/career');?>">
									Career <span class=""></span>
								</a>

								
							</li>
							<li >


								<a id="dLabel" role="button" class="btn btn" href="<?php echo base_url('home/contact');?>">
									Contact Us <span class=""></span>
								</a>

								
							</li>
							<li >


								<a id="dLabel" role="button" class="btn btn" href="<?php echo base_url('home/login');?> ">
									login <span class=""></span>
								</a>

								
							</li>	

						</ul>
					</div>
					
					

				</div>

			</div>
		</nav>