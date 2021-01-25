<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo $_SESSION['csrf'] ?>">
	<!-- ===============================================-->
	<!--    Document Title-->
	<!-- ===============================================-->
	<title>Admin Dashboard</title>

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<link rel="shortcut icon" type="image/x-icon" href="theme/image/favicon.png">
	<link rel="manifest" href="assets/img/favicons/manifest.json">
	<meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
	<meta name="theme-color" content="#ffffff">

	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<script src="assets/js/config.navbar-vertical.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
	<link href="assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">
	<link href="assets/lib/leaflet/leaflet.css" rel="stylesheet">
	<link href="assets/lib/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
	<link href="assets/lib/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="assets/css/theme-dark.min.css" rel="stylesheet">
    <style>
        iframe{
            width:100% !important;
        }
    </style>
</head>

<body>
	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">

		<div class="container" data-layout="container">
			<?php 
				$this->load->view('Navbar/Navbar_view');
			?>
			<div class="content">
				<div classs="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="mb-3 overflow-hidden card">
							<div class="bg-holder bg-card" style="background-image: url('<?php echo base_url(); ?>assets/img/corner.png');"></div>
							<div class="position-relative card-body">
								<h6>About Publication Header Slider</h6>
                                <div>
                                    <?php 
                                        if(!empty($get_about_header_slider))
                                        {
											$index = 0;
                                            foreach($get_about_header_slider as $row)
                                            {
                                                ?>
													<img src="uploads/About/<?php echo $row['sliders_path']; ?>" id="cover_slider_1" class="mr-5" style="width:100%; height:auto; margin-top:5px;border-radius:5px;"/>
													<a href="javascript:;" onclick="updateimgabout(this)" data-id="<?php echo $index; ?>" data-img-old="<?php echo $row['sliders_path']; ?>">Edit</a>
													<form id="about_slider_form<?php echo $index; ?>" enctype="multipart/form-data">
														<input type="file" name="files" accept=".jpg" class="form-control d-none" id="about_slider<?php echo $index; ?>">
													</form>
													<a href="javascript:;" onclick="deleteimgabout(this)" data-id="<?php echo $index; ?>" data-img-old="<?php echo $row['sliders_path']; ?>">Delete</a>
                                                <?
                                            }
                                        }
                                    ?>
                                </div>
								<div class="container" style="padding-bottom:20px;">
									<a class="font-weight-semi-bold fs--1 text-nowrap" href="javascript:;" onclick="addnewsliderimageabout()">Add About Header Slider
									</a>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="mb-3 overflow-hidden card">
							<div class="bg-holder bg-card" style="background-image: url('<?php echo base_url(); ?>assets/img/corner.png');"></div>
							<div class="position-relative card-body">
								<h6>Subtitle & Description</h6>
                                <form id="subtitle_form">
                                    <div class="" style="margin-top:2rem;margin-bottom:2rem;">
                                        <label>Subtitle</label>
                                        <input type="text" name="sub_about" class="form-control" placeholder="Your subtitle" value="<?php echo $get_about_text_data['subtitle']; ?>" required/>
                                    </div>
                                    <div class="" style="margin-top:2rem;margin-bottom:2rem;">
                                        <label>About Publication</label>
                                        <textarea class="form-control" name="about_pub" id="" cols="30" rows="10"><?php echo $get_about_text_data['description']; ?></textarea>
                                    </div>
                                    <div class="" style="margin-top:2rem;margin-bottom:2rem;">
                                        <button type="submit" class="btn btn-primary btn-block" id="update_about_us">
                                            Update
                                        </button>
                                    </div>
                                </form>
							</div>
						</div>
                    </div>
                    <div class="container">
                        <footer>
                            <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">Dynamic Dashboards By Workoscope Inc, DE<span
                                            class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2020 &copy; <a
                                            href="https://themewagon.com">Workoscope Inc SME Initiative</a></p>
                                </div>
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">v2.8.0</p>
                                </div>
                            </div>
                        </footer>
                    </div>
				</div>
			</div>
		</div>
	</main>
	<div id="dynamic_data_model"></div>
	<script src="theme/js/const.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/lib/@fortawesome/all.min.js"></script>
	<script src="assets/lib/stickyfilljs/stickyfill.min.js"></script>
	<script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
	<script src="assets/lib/is_js/is.min.js"></script>
	<script src="assets/lib/lodash/lodash.min.js"></script>
	<script src="assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7CPoppins:100,200,300,400,500,600,700,800,900&display=swap"
		rel="stylesheet">
	<script src="assets/lib/chart.js/Chart.min.js"></script>
	<script src="assets/lib/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
	<script src="assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
	<script src="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
	<script src="assets/lib/leaflet/leaflet.js"></script>
	<script src="assets/lib/leaflet.markercluster/leaflet.markercluster.js"></script>
	<script src="assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
	<script src="assets/js/theme.min.js"></script>
	<script src="theme/js/validate.js"></script>
	<script src="assets/js/xxhmjs.js"></script>
</body>

</html>
