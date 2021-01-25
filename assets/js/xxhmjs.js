function addnewcategory() {
	var addnewcatmodel = '<div class="modal" id="addnew_cat_model" tabindex="-1">' +
		'<div class="modal-dialog">' +
		'<div class="modal-content">' +
		'<div class="modal-header">' +
		'<h5 class="modal-title">Add Book Category</h5>' +
		'<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
		'</div>' +
		'<div class="modal-body">' +
		'<form id="add-book-cat">' +
		'<input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter category name" style="text-transform: capitalize;" required>' +
		'<div class="mt-2">' +
		'<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="create_btn">Create</button>' +
		'</div>' +
		'</form>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';
	$('#dynamic_data_model').html(addnewcatmodel);
	$('#addnew_cat_model').modal('show');
	$('#add-book-cat').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit', '#add-book-cat', function (e) {
	e.preventDefault();
	if ($(this).valid()) {
		var spinner = '<div class="spinner-border text-primary" role="status">' +
			'</div>';
		$('#create_btn').html(spinner);
		$('#create_btn').prop('disabled', true);
		var formData = new FormData($(this)[0]);
		$.ajax({
			type: "POST",
			url: "" + url + "createcat",
			data: formData,
			dataType: "json",
			processData: false,
			contentType: false,
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("New category created");
					location.reload();
				}
			}
		});
	}
});
function addnewsliderimageabout()
{
	var addnewsliderimageabout = '<div class="modal" id="update_slider_modal" tabindex="-1">' +
		'<div class="modal-dialog">' +
		'<div class="modal-content">' +
		'<div class="modal-header">' +
		'<h5 class="modal-title">Add About Header Slider</h5>' +
		'<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
		'</div>' +
		'<div class="modal-body">' +
		'<form id="update_about_header_slider_form" enctype="multipart/form-data">' +
		'<label style="margin-top:5px;">About Slides</label>' +
		'<input type="file" class="form-control" name="files[]" accept=".jpg" id="slider_1" required multiple>' +
		'<div class="mt-2">' +
		'<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_slider_btn">Update</button>' +
		'</div>' +
		'</form>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';
	$('#dynamic_data_model').html(addnewsliderimageabout);
	$('#update_slider_modal').modal('show');	
	$('#update_about_header_slider_form').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit','#update_about_header_slider_form',function(e){
	e.preventDefault();
	if ($(this).valid()) {
        var spinner = '<div class="spinner-border text-primary" role="status">' +
			'</div>';
		$('#update_slider_btn').html(spinner);
        $('#update_slider_btn').prop('disabled', true);
        var formData = new FormData($(this)[0]);
        $.ajax({
			type: "POST",
			url: "" + url + "updateaboutheaderslide",
			data: formData,
			processData: false,
            contentType: false,
            dataType : "json",
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("Slider Updated");
					location.reload();
				}
			}
		});
	}
});
function updateslider() {
	var updateslidermodal = '<div class="modal" id="update_slider_modal" tabindex="-1">' +
		'<div class="modal-dialog">' +
		'<div class="modal-content">' +
		'<div class="modal-header">' +
		'<h5 class="modal-title">Add Header Slider Modal</h5>' +
		'<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
		'</div>' +
		'<div class="modal-body">' +
		'<form id="update_header_slider" enctype="multipart/form-data">' +
		'<label style="margin-top:5px;">Home Slider</label>' +
		'<input type="file" class="form-control" name="files[]" id="slider_1" required multiple>' +
		'<div class="mt-2">' +
		'<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_slider_btn">Update</button>' +
		'</div>' +
		'</form>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';
	$('#dynamic_data_model').html(updateslidermodal);
	$('#update_slider_modal').modal('show');
	$('#update_header_slider').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit', '#update_header_slider', function (e) {
	e.preventDefault();
	if ($(this).valid()) {
        var spinner = '<div class="spinner-border text-primary" role="status">' +
			'</div>';
		$('#update_slider_btn').html(spinner);
        $('#update_slider_btn').prop('disabled', true);
        var formData = new FormData($(this)[0]);
        $.ajax({
			type: "POST",
			url: "" + url + "updateslider",
			data: formData,
			processData: false,
            contentType: false,
            dataType : "json",
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("Slider Updated");
					location.reload();
				}
			}
		});
	}
})
$('#subtitle_form').submit(function(e){
	e.preventDefault();
	if($(this).valid())
	{
		var spinner = '<div class="spinner-border text-primary" role="status">' +
			'</div>';
		$('#update_about_us').html(spinner);
        $('#update_about_us').prop('disabled', true);
		var formData = new FormData($(this)[0]);
		$.ajax({
			type: "POST",
			url: "" + url + "aboutus",
			data: formData,
			processData: false,
            contentType: false,
            dataType : "json",
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("About us updated");
					location.reload();
				}
			}
		});
	}
});
var oldname;
var currentindex;
function updateimg(caller)
{
	var indexid = $(caller).attr('data-id');
	currentindex = indexid;
	var oldimgname = $(caller).attr('data-img-old');
	oldname = oldimgname;
	$('#home_slider'+indexid+'').click();
	$('#home_slider'+indexid+'').change(function(){
		$('#home_slider_form'+indexid+'').submit();
	});	
	$('#home_slider_form'+indexid+'').submit(function(e){
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		formData.append('oldimgname', oldname);
		$.ajax({
			type: "POST",
			url: ""+url+"updatehomeslider",
			data: formData ,
			dataType: "json",
			processData: false,
            contentType: false,
			success: function (response) {
				if (response.status == "success") {
					alert("Slider Updated!");
					location.reload();
				}
			}
		});
	});
}
function updateimgabout(caller)
{
	var indexid = $(caller).attr('data-id');
	currentindex = indexid;
	var oldimgname = $(caller).attr('data-img-old');
	oldname = oldimgname;
	$('#about_slider'+indexid+'').click();
	$('#about_slider'+indexid+'').change(function(){
		$('#about_slider_form'+indexid+'').submit();
	});	
	$('#about_slider_form'+indexid+'').submit(function(e){
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		formData.append('oldimgname', oldname);
		$.ajax({
			type: "POST",
			url: ""+url+"updateaboutslider",
			data: formData ,
			dataType: "json",
			processData: false,
            contentType: false,
			success: function (response) {
				console.log(response);
				if (response.status == "success") {
					alert("Slider Updated!");
					location.reload();
				}
			}
		});
	});
}
function deleteimg(caller)
{
	var indexid = $(caller).attr('data-id');
	currentindex = indexid;
	var oldimgname = $(caller).attr('data-img-old');
	$.ajax({
		type: "POST",
		url: ""+url+"deleteslider",
		data: {imgname:oldimgname} ,
		dataType: "json",
		success: function (response) {
			if (response.status == "success") {
				alert("Slider Deleted!");
				location.reload();
			}
		}
	});
}
function deleteimgabout(caller)
{
	var indexid = $(caller).attr('data-id');
	currentindex = indexid;
	var oldimgname = $(caller).attr('data-img-old');
	$.ajax({
		type: "POST",
		url: ""+url+"deleteaboutslider",
		data: {imgname:oldimgname} ,
		dataType: "json",
		success: function (response) {
			if (response.status == "success") {
				alert("Slider Deleted!");
				location.reload();
			}
		}
	});
}
var currentcatid;
function editcat(caller)
{
	var catid = $(caller).attr('data-id');
	currentcatid = catid;
	var addnewcatmodel = '<div class="modal" id="edit_cat_model" tabindex="-1">' +
		'<div class="modal-dialog">' +
		'<div class="modal-content">' +
		'<div class="modal-header">' +
		'<h5 class="modal-title">Edit category name</h5>' +
		'<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
		'</div>' +
		'<div class="modal-body">' +
		'<form id="edit-cat-form">' +
		'<input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter category name" style="text-transform: capitalize;" required>' +
		'<div class="mt-2">' +
		'<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="create_btn">Update</button>' +
		'</div>' +
		'</form>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';
	$('#dynamic_data_model').html(addnewcatmodel);
	$('#edit_cat_model').modal('show');
}
$(document).on('submit','#edit-cat-form',function(e){
	e.preventDefault();
	if($(this).valid())
	{
		var formData = new FormData($(this)[0]);
		formData.append('currentcatid',currentcatid);
		$.ajax({
			type: "POST",
			url: ""+url+"editcategoryname",
			data: formData,
			dataType: "json",
			processData: false,
            contentType: false,
			success: function (response) {
				if (response.status == "success") {
					alert("Category updated!");
					location.reload();
				}
			}
		});
	}
})
function deletecat(caller)
{
	var catid = $(caller).attr('data-id');
	$.ajax({
		type: "POST",
		url: ""+url+"deletecat",
		data: {catid:catid},
		dataType: "json",
		success: function (response) {
			if (response.status == "success") {
				alert("Category deleted!");
				location.reload();
			}
		}
	});
}
function changeorderup(caller)
{
	currentid = $(caller).attr('data-id');
	$.ajax({
		type: "POST",
		url: ""+url+"uporder",
		data: {currentid : currentid},
		dataType: "json",
		success: function (response) {
			console.log(response);
			if (response.status == "success") {
				alert("Category Moved!");
				location.reload();
			}
		}
	});
}
function changeorderdown(caller)
{
	currentid = $(caller).attr('data-id');
	$.ajax({
		type: "POST",
		url: ""+url+"downorder",
		data: {currentid : currentid},
		dataType: "json",
		success: function (response) {
			console.log(response);
			if (response.status == "success") {
				alert("Category Moved!");
				location.reload();
			}
		}
	});
}