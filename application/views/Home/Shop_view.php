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
        .book-wrapper-card{
            background: #061325 !important;
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
                        <div class="card">
                            <div class="card-header">
                                <h6>Add Book To Shop</h6>
                            </div>
                            <div class="card-body">
                                <h5 class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning"><?php echo $book_count; ?></h5>
                                <a href="javascript:;" onclick="addbooks()" class="text-primary">Add Books</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12" style="margin-top:20px;">
                        <div class="card">
                            <div class="card-header">
                                <h6>Books (<?php echo $book_count; ?>)</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php 
                                        if(!empty($book_data))
                                        {
                                            foreach($book_data as $row)
                                            {
                                                $book_img = explode(',',$row['book_img_path'])
                                                ?>
                                                    <div class="col-md-12 col-lg-3">
                                                        <div class="card book-wrapper-card">
                                                            <div class="card-img-top"><img class="img-fluid" src="uploads/Books/<?php echo $book_img[0]; ?>" alt="Card image cap"></div>
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php echo $row['book_title'] ?></h5>
                                                                <h6>Category    :   <?php echo $row['cat_name'] ?></h6>
                                                                <button value="<?php echo $row['book_id']; ?>" class="btn btn-primary btn-md" onclick="editbook(this,<?php echo $row['book_id']; ?>)">Edit Book</button>
                                                                <button value="<?php echo $row['book_id']; ?>" class="btn btn-danger btn-md" onclick="deletebook(this,<?php echo $row['book_id']; ?>)">Delete Book</button>
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
	<div id="dynamic_data_model">
        <div class="modal fade" id="add_book_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Book Modal</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="add-book-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Title Of Book</label>
                            <input class="form-control" name="book_title" id="book_title" type="text" placeholder="book title" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Category</label>
                            <select name="book_cat" class="form-control" required>
                                <?php 
                                    if(!empty($book_cat))
                                    {
                                        ?>
                                            <option disabled selected>Select Book Category</option>
                                        <?
                                        foreach($book_cat as $row)
                                        {
                                            ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['cat_name'] ?></option>
                                            <?
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Description</label>
                            <textarea name="book_desc" id="book_desc" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Cost</label>
                            <input class="form-control" name="book_cost" id="book_cost" type="number" placeholder="book cost" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Weight</label>
                            <input class="form-control" name="book_weight" id="book_weight" type="number" placeholder="book page weight in grams" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Page Count</label>
                            <input class="form-control" name="book_page_count" id="book_page_count" type="number" placeholder="book page count" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Amazon URL</label>
                            <input class="form-control" name="book_amz_url" id="book_amz_url" type="url" placeholder="book url on amazon" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Images</label>
                            <input type="file" name="files[]" id="book_img" accept=".png,.jpg" multiple required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" id="upload-book-btn">Upload Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="edit_book_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Book Model</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="edit-book-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Title Of Book</label>
                            <input class="form-control" name="book_title" id="book_title_edit" type="text" placeholder="book title" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Category</label>
                            <select name="book_cat" class="form-control" id="book_cat_edit" required>
                                <?php 
                                    if(!empty($book_cat))
                                    {
                                        ?>
                                            <option disabled selected>Select Book Category</option>
                                        <?
                                        foreach($book_cat as $row)
                                        {
                                            ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['cat_name'] ?></option>
                                            <?
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Description</label>
                            <textarea name="book_desc" id="book_desc_edit" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Cost</label>
                            <input class="form-control" name="book_cost" id="book_cost_edit" type="number" placeholder="book cost" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Weight</label>
                            <input class="form-control" name="book_weight" id="book_weight_edit" type="number" placeholder="book page weight in grams" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Page Count</label>
                            <input class="form-control" name="book_page_count" id="book_page_count_edit" type="number" placeholder="book page count" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Amazon URL</label>
                            <input class="form-control" name="book_amz_url" id="book_amz_url_edit" type="url" placeholder="book url on amazon" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Book Images</label>
                            <input type="file" name="files[]" id="book_img" accept=".png,.jpg" multiple required>
                            <input type="hidden" name="bookid" id="bookid"/>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" id="upload-book-btn">Upload Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
	<script src="assets/js/xxshp.js"></script>
</body>

</html>
