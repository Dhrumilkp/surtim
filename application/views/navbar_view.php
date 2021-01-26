<div class="site-header d-none d-lg-block">
	<div class="header-middle pt--10 pb--10">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<a href="<?php echo base_url(); ?>" class="site-brand">
						<img src="<?php echo base_url(); ?>theme/image/logo.png" alt="">
					</a>
				</div>
				<div class="col-lg-6">
					<div class="main-navigation flex-lg-right">
						<ul class="main-menu menu-right ">
							<li class="menu-item has-children">
								<a href="<?php echo base_url(); ?>">Home</a>
							</li>
							<!-- Shop -->
							<li class="menu-item has-children mega-menu">
								<a href="<?php echo base_url(); ?>about">About Us</a>
							</li>
							<!-- Pages -->
							<li class="menu-item has-children">
								<a href="<?php echo base_url(); ?>shopping">Shop</a>
							</li>
							<li class="menu-item">
								<a href="<?php echo base_url(); ?>contact">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom pb--10">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<nav class="category-nav">
						<div>
							<a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
								product categories</a>
							<ul class="category-menu">
								<?php 
                                    if(!empty($category_data))
                                    {
                                        foreach($category_data as $row)
                                        {
                                            ?>
												<li class="cat-item">
													<a href="<?php echo base_url(); ?>shop/cat/<?php echo $row['id']; ?>"><?php echo $row['cat_name']; ?></a>
												</li>
											<?
                                        }
                                    }
                                ?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="site-mobile-menu">
	<header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
		<div class="container">
			<div class="row align-items-sm-end align-items-center">
				<div class="col-md-4 col-7">
					<a href="<?php echo base_url(); ?>" class="site-brand">
						<img src="<?php echo base_url(); ?>theme/image/logo.png" alt="" style="max-width: 70%;">
					</a>
				</div>
				<div class="col-md-5 order-3 order-md-2">
					<nav class="category-nav   ">
						<div>
							<a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
								categories</a>
							<ul class="category-menu">
								<?php 
                                	if(!empty($category_data))
                                    {
                                        foreach($category_data as $row)
                                        {
                                            ?>
												<li class="cat-item">
													<a
														href="<?php echo base_url(); ?>shop/cat/<?php echo $row['id']; ?>"><?php echo $row['cat_name']; ?></a>
												</li>
											<?
                                        }
                                    }
                                ?>
							</ul>
						</div>
					</nav>
				</div>
				<div class="col-md-3 col-5  order-md-3 text-right">
					<div class="mobile-header-btns header-top-widget">
						<ul class="header-links">
							<li class="sin-link">
								<a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
										class="ion-navicon"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--Off Canvas Navigation Start-->
	<aside class="off-canvas-wrapper">
		<div class="btn-close-off-canvas">
			<i class="ion-android-close"></i>
		</div>
		<div class="off-canvas-inner">
			<!-- mobile menu start -->
			<div class="mobile-navigation">
				<!-- mobile menu navigation start -->
				<nav class="off-canvas-nav">
					<ul class="mobile-menu main-mobile-menu">
						<li class="menu-item has-children">
							<a href="<?php echo base_url(); ?>">Home</a>
						</li>
						<!-- Shop -->
						<li class="menu-item has-children mega-menu">
							<a href="<?php echo base_url(); ?>about">About Us</a>
						</li>
						<!-- Pages -->
						<li class="menu-item has-children">
							<a href="<?php echo base_url(); ?>shopping">Shop</a>
						</li>
						<li class="menu-item">
							<a href="<?php echo base_url(); ?>contact">Contact</a>
						</li>
					</ul>
				</nav>
				<!-- mobile menu navigation end -->
			</div>
			<!-- mobile menu end -->
			<div class="off-canvas-bottom">
				<div class="contact-list mb--10">
					<a href="#" class="sin-contact"><i class="fas fa-mobile-alt"></i><?php echo $get_contact_data['contact_number'];?></a>
					<a href="#" class="sin-contact"><i class="fas fa-envelope"></i><?php echo $get_email_data['a_email']; ?></a>
				</div>
				<!-- <div class="off-canvas-social">
					<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
					<a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
					<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
					<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
				</div> -->
			</div>
		</div>
	</aside>
	<!--Off Canvas Navigation End-->
</div>
