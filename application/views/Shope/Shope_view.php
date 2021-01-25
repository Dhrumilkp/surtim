<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Surtimix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>theme/css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>theme/css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>theme/image/favicon.png">
	<meta name="description" content="Surtimix">
</head>

<body>
    <div class="site-wrapper" id="top">
        <?php $this->load->view('navbar_view'); ?>
        <section class="section-padding">
            <h2 class="sr-only">Home Tab Slider Section</h2>
            <div class="container">
                <?php 
                    if(empty($book_data))
                    {
                        ?>
                            <div class="w-100 text-center">
                                <img src="<?php echo base_url(); ?>assets/img/404.png"/>
                                <h4>Opps cant find any product!</h4>
                            </div>
                        <?
                    }
                    else
                    {
                        ?>
                            <div class="sb-custom-tab">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                                        <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                            data-slick-setting='{
                                                "autoplay": true,
                                                "autoplaySpeed": 8000,
                                                "slidesToShow": 5,
                                                "rows":2,
                                                "dots":true
                                            }' data-slick-responsive='[
                                                {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                                {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                            ]'>
                                            <?php 
                                                if(!empty($book_data))
                                                {
                                                    foreach($book_data as $row)
                                                    {
                                                        $book_img = explode(',',$row['book_img_path'])
                                                        ?>
                                                            <div class="single-slide" style="padding: 10px;">
                                                                <div class="product-card">
                                                                    <div class="product-card--body">
                                                                        <div class="card-image">
                                                                            <img src="<?php echo base_url(); ?>uploads/Books/<?php echo $book_img[0]; ?>" alt="" style="border-radius:20px;">
                                                                        </div>
                                                                        <div class="price-block">
                                                                            <h3>
                                                                                <a href="<?php echo base_url(); ?>shop/book/<?php echo $row['book_id']; ?>"><?php echo $row['book_title']; ?></a>
                                                                            </h3>
                                                                            <span class="price">₹<?php echo $row['book_cost']; ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?
                    }
                ?>
               
            </div>
        </section>
    </div>
    <!--=================================
    Footer Area
    ===================================== -->
    <?php $this->load->view('footer'); ?>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="<?php echo base_url(); ?>theme/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>theme/js/ajax-mail.js"></script>
    <script src="<?php echo base_url(); ?>theme/js/custom.js"></script>
</body>
</html>