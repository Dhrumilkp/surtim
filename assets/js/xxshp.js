$(document).ready(function () {
	$('#add-book-form').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
});

function addbooks() {
	$('#add_book_model').modal('show');
}
$(document).on('submit', '#add-book-form', function (e) {
	e.preventDefault();
	if ($(this).valid()) {
        $('#upload-book-btn').html('Uploading...');
        $('#upload-book-btn').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
			type: "POST",
			url: "" + url + "uploadbook",
			data: formData,
			processData: false,
            contentType: false,
            dataType : "json",
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("Product Uploaded");
					location.reload();
				}
			}
		});
	}
});
$(document).on('submit', '#edit-book-form', function (e) {
	e.preventDefault();
	if ($(this).valid()) {
        $('#upload-book-btn').html('Uploading...');
        $('#upload-book-btn').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
			type: "POST",
			url: "" + url + "editbook",
			data: formData,
			processData: false,
            contentType: false,
            dataType : "json",
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("Product Edited");
					location.reload();
				}
			}
		});
	}
});
function editbook(caller,bookid)
{
	$(caller).html('Please wait...');
	$.ajax({
		type: "POST",
		url: ""+url+"getbookdata",
		data: {bookid:bookid},
		dataType: "json",
		success: function (response) {
			$('#book_title_edit').val(response.book_title);
			$('#book_cat_edit').val(response.book_cat);
			$('#book_desc_edit').val(response.book_desc);
			$('#book_cost_edit').val(response.book_cost);
			$('#book_amz_url_edit').val(response.book_amz_url);
			$('#book_weight_edit').val(response.book_weight);
			$('#book_page_count_edit').val(response.book_page_count);
			$('#bookid').val(bookid);
			$('#edit_book_model').modal('show');
		}
	});
	
}
function deletebook(bookid)
{
	$(caller).html('Please wait...');
	$.ajax({
		type: "POST",
		url: ""+url+"deletebook",
		data: {bookid:bookid},
		dataType: "json",
		success: function (response) {
			if (response.status == "success") {
				alert("Product Deleted");
				location.reload();
			}
		}
	});
}