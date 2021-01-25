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
    <style>
        iframe{
            width:100% !important;
            height:500px !important;
        }
    </style>
</head>

<body>
    <div class="site-wrapper" id="top">
        <?php $this->load->view('navbar_view'); ?>
    </div>
    <section class="mb--30">   
        <?php 
            echo $get_google_map['a_gurl'];
        ?>
    </section>
    <?php $this->load->view('footer'); ?>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="theme/js/plugins.js"></script>
    <script src="theme/js/ajax-mail.js"></script>
    <script src="theme/js/custom.js"></script>
</body>
</html>