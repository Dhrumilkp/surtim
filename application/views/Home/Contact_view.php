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
								<h6>CONTACT NUMBER</h6>
								<?php 
									if(!empty($get_contact_data))
									{
										foreach($get_contact_data as $row)
										{
											?>
												<div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" id="contact_number_count">+<?php echo $row['contact_number']; ?></div>
												<a href="javascript:;" onclick="editnumber(this)" data-current-number="<?php echo $row['contact_number']; ?>">Edit Number</a>
												<a href="javascript:;" onclick="deletenumber(this)" data-current-number="<?php echo $row['contact_number']; ?>">Delete Number</a>
											<?
										}
									}
								?>
								<div class="container" style="padding-bottom:20px;">
									<a class="font-weight-semi-bold fs--1 text-nowrap" href="javascript:;" onclick="addnewcontact()">Add New Contact Number
									</a>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-12 col-lg-12">
						<div class="mb-3 overflow-hidden card">
							<div class="bg-holder bg-card" style="background-image: url('<?php echo base_url(); ?>assets/img/corner.png');"></div>
							<div class="position-relative card-body">
								<h6>ADDRESS INFORMATION</h6>
								<?php 
									if(!empty($get_address_data))
									{
										foreach($get_address_data as $row)
										{
											?>
												<div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" id="contact_number_count"><?php echo $row['a_address']; ?></div>
											<?
										}
									}
								?>
								<div class="container" style="padding-bottom:20px;">
									<a class="font-weight-semi-bold fs--1 text-nowrap" href="javascript:;" onclick="addaddressinformation()">Update address
									</a>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-12 col-lg-12">
						<div class="mb-3 overflow-hidden card">
							<div class="bg-holder bg-card" style="background-image: url('<?php echo base_url(); ?>assets/img/corner.png');"></div>
							<div class="position-relative card-body">
								<h6>Google Map URl</h6>
								<div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" id="contact_number_count"><?php echo $get_google_map['a_gurl']; ?></div>
									<a class="font-weight-semi-bold fs--1 text-nowrap" href="javascript:;" onclick="googlemapurl()">Add Google Url
									</a>
								</div>
							</div>
                        </div>
                        <div class="mb-3 overflow-hidden card">
                            <div class="bg-holder bg-card" style="background-image: url('<?php echo base_url(); ?>assets/img/corner.png');"></div>
                            <div class="position-relative card-body">
                                <h6>Add Email Address</h6>
								<?php 
									if(!empty($get_email_data))
									{
										foreach($get_email_data as $row)
										{
											?>
												<div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" id="contact_number_count"><?php echo $row['a_email']; ?></div>
												<a href="javascript:;" onclick="editemail(this)" data-current-email="<?php echo $row['a_email']; ?>">Edit Email</a>
												<a href="javascript:;" onclick="deleteemail(this)" data-current-email="<?php echo $row['a_email']; ?>">Delete Email</a>
											<?
										}
									}
								?>
								<a href="javascript:;" onclick="addemailaddress()">Add Email Address
                            	</a>
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
	<script src="assets/js/xxcnts.js"></script>
</body>

</html>
