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
								<h6>TOTAL CATEGORY</h6>
								<ul class="mt-2 mb-2" style="list-style:none;">
									<?php 
										if(!empty($category_data))
										{
											$index = 0;
											foreach($category_data as $row)
											{
												?>
													<li data-id="<?php echo $row['id'] ?>"><?php echo $row['cat_name']; ?></li>
													<a href="javascript:;" onclick="editcat(this)" data-id="<?php echo $row['id'] ?>">edit category</a>
													<a href="javascript:;" onclick="deletecat(this)" data-id="<?php echo $row['id'] ?>">delete category</a>
													<?php 
														if($index !== 0)
														{
															?>
																<a href="javascript:;" onclick="changeorderup(this)" data-id="<?php echo $row['id'] ?>">Up</a>
															<?
														}
														if($index+1 != $category_count)
														{
															?>
																<a href="javascript:;" onclick="changeorderdown(this)" data-id="<?php echo $row['id'] ?>">Down</a>
															<?
														}
													?>
												<?
												$index++;
											}
											
										}
									?>
								</ul>
								<div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" id="total_category_count"><?php echo $category_count; ?></div>
									<a class="font-weight-semi-bold fs--1 text-nowrap" href="javascript:;" onclick="addnewcategory()">Add New Category
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-12">
						<div class="mb-3 overflow-hidden card">
							<div class="bg-holder bg-card" style="background-image: url(&quot;data:image/png;base64,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&quot;);"></div>
							<div class="position-relative card-body">
								<h6>Header Slider Image</h6>
								<div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" id="total_category_count"><?php echo $get_slider_count; ?></div>
									<div>
									<?php 
										if(!empty($get_slider_data))
										{
											$index = 0;
											foreach($get_slider_data as $row)
											{

												?>
													<img src="uploads/sliders/<?php echo $row['sliders_path']; ?>" id="cover_slider_1" class="mr-5" style="width:100%; height:auto; margin-top:5px;border-radius:5px;"/>
													<a href="javascript:;" onclick="updateimg(this)" data-id="<?php echo $index; ?>" data-img-old="<?php echo $row['sliders_path']; ?>">Edit</a>
													<form id="home_slider_form<?php echo $index; ?>" enctype="multipart/form-data">
														<input type="file" name="files" accept=".jpg" class="form-control d-none" id="home_slider<?php echo $index; ?>">
													</form>
													<a href="javascript:;" onclick="deleteimg(this)" data-id="<?php echo $index; ?>" data-img-old="<?php echo $row['sliders_path']; ?>">Delete</a>
												<?
												$index++;
											}
										}
									?>
									</div>
									<a class="font-weight-semi-bold fs--1 text-nowrap" href="javascript:;" onclick="updateslider()">Add Header Sliders
									</a>
								</div>
							</div>
						</div>
					</div>
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
