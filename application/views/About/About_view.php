<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Surtimix</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="theme/css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="theme/css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="theme/image/favicon.png">
	<meta name="description" content="Surtimix">
</head>

<body>
	<div class="site-wrapper" id="top">
		<?php $this->load->view('navbar_view'); ?>
		<!--=================================
        Hero Area
        ===================================== -->
		<section class="hero-area hero-slider-1">
			<div class="sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "fade": true,
                "autoplaySpeed": 3000,
                "speed": 3000,
                "slidesToShow": 1,
                "dots":true
            }'>
			<?php 
            	if(!empty($get_about_header_slider))
                {
                	foreach($get_about_header_slider as $row)
                    {
                        ?>
							<div class="single-slide" style="background:url('uploads/About/<?php echo $row['sliders_path']; ?>'); height:500px;background-size:cover;">
							</div>
						<?
                    }
                }
            ?>
			</div>
		</section>
		<section class="mb--30" style="padding-top:20px;padding-bottom:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
						<h1>About Our Publication</h1>
						<p><i><strong><?php echo $get_about_text_data['subtitle']; ?></strong></i></p>
					</div>
					<div class="col-md-12 col-lg-12">
						<p style="font-size:large;text-align: justify;justify-content: space-evenly;">
							<?php echo $get_about_text_data['description']; ?>
						</p>
					</div>
                </div>
            </div>
        </section>
	</div>
	<?php $this->load->view('footer'); ?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="theme/js/plugins.js"></script>
	<script src="theme/js/ajax-mail.js"></script>
	<script src="theme/js/custom.js"></script>
</body>

</html>
