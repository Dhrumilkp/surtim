<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aakar Publications - Sculpturing life</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>theme/css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>theme/css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>theme/image/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" />
	<meta name="description" content="Aakar Publications - Sculpturing life">
	<style>
		@media only screen and (max-width: 600px) {
			.largebtn-mobile {
				width:100% !important;
			}
		}
	</style>
</head>

<body>
	<div class="site-wrapper" id="top">
		<?php $this->load->view('navbar_view'); ?>
	</div>
	<main style="margin-top:50px;">
		<div class="container">
			<div class="row  mb--60">
				<div class="col-lg-5 mb--30">
					<div class="book-img-slider">
						<?php 
							$book_img = explode(",",$get_book_data['book_img_path']);
							foreach($book_img as $row)
							{
								?>
									<div>
										<img src="<?php echo base_url(); ?>uploads/Books/<?php echo $row; ?>" alt="">
									</div>
								<?
							}
						?>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="product-details-info pl-lg--30 ">
						
						<p class="tag-block">Book Category	: <?php echo $get_book_data['cat_name']; ?></p>
						<h3 class="product-title"><?php echo $get_book_data['book_title']; ?></h3>
						<ul class="list-unstyled">
							<li>Brands: <a href="<?php echo base_url(); ?>" class="list-value font-weight-bold"> Aakar Publication</a></li>
							<li>Availability: <span class="list-value"> In Stock</span></li>
							<li>Author name: <span class="list-value"> Suresh Prajapati</span></li>
							<li>Book weight: <span class="list-value"> <?php echo $get_book_data['book_weight']; ?> grams</span></li>
							<li>Book Page Count: <span class="list-value"> <?php echo $get_book_data['book_page_count']; ?></span></li>
						</ul>
						<div class="price-block">
							<span class="price-new">₹<?php echo $get_book_data['book_cost']; ?></span>
						</div>
						<article class="product-details-article">
							<h4 class="sr-only">Product Summary</h4>
							<p><?php echo $get_book_data['book_desc']; ?></p>
						</article>
						<div class="add-to-cart-row">
							<div class="add-cart-btn">
								<a href="<?php echo $get_book_data['book_amz_url']; ?>" class="btn btn-outlined--primary largebtn-mobile"><span class="plus-icon"><img src="<?php echo base_url(); ?>assets/img/amazon.svg" width="20" height="20"/></span>Buy From Amazon</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php $this->load->view('footer'); ?>
	<!-- <script src="<?php echo base_url(); ?>theme/js/plugins.js"></script> -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>theme/js/ajax-mail.js"></script>
	<!-- <script src="<?php echo base_url(); ?>theme/js/custom.js"></script> -->
	<script>
		$(document).ready(function(){
			$('.book-img-slider').slick({
				dots: true,
				infinite: true,
				autoplay:true,
				autoplaySpeed:2000,
				slidesToShow: 1,
				adaptiveHeight: true
			});
		});
	</script>
	<script>
		$('.category-trigger').click(function(){
			$('.category-nav').toggleClass('show');
		});

	</script>
</body>

</html>
