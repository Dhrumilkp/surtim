

function addnewcontact()
{
    var addnewcontactmodal = '<div class="modal" id="add_new_contact" tabindex="-1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title">Add Contact Number Modal</h5>' +
    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<form id="add_new_contact_form" enctype="multipart/form-data">' +
    '<input type="number" class="form-control" name="contact" id="contact" required>' +
    '<div class="mt-2">' +
    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_contact_number">Update</button>' +
    '</div>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    $('#dynamic_data_model').html(addnewcontactmodal);
    $('#add_new_contact').modal('show');
    $('#add_new_contact_form').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit','#add_new_contact_form',function(e){
    e.preventDefault();
    if($(this).valid())
    {
        var spinner = '<div class="spinner-border text-primary" role="status">' +
		'</div>';
        $('#update_contact_number').html(spinner);
        $('#update_contact_number').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: ""+url+"updatecontact",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
            success: function (response) {
                if (response.status == "success") {
					alert("Contact Updated");
					location.reload();
				}
            }
        });
    }
});
function addaddressinformation()
{
    var addnewcontactmodal = '<div class="modal" id="add_adress" tabindex="-1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title">Add Address Modal</h5>' +
    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<form id="add_adress_from" enctype="multipart/form-data">' +
    '<input type="text" class="form-control" name="address" id="address" required>' +
    '<div class="mt-2">' +
    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_address">Update</button>' +
    '</div>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    $('#dynamic_data_model').html(addnewcontactmodal);
    $('#add_adress').modal('show');
    $('#add_adress_from').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit','#add_adress_from',function(e){
    e.preventDefault();
    if($(this).valid())
    {
        var spinner = '<div class="spinner-border text-primary" role="status">' +
		'</div>';
        $('#update_address').html(spinner);
        $('#update_address').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: ""+url+"udpateaddress",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
            success: function (response) {
                if (response.status == "success") {
					alert("Address Updated");
					location.reload();
				}
            }
        });
    }
});
function googlemapurl()
{
    var addnewcontactmodal = '<div class="modal" id="g_url_modal" tabindex="-1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title">Add Google URL Modal</h5>' +
    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<form id="g_url_form" enctype="multipart/form-data">' +
    '<input type="text" class="form-control" name="g_url" id="g_url" required>' +
    '<div class="mt-2">' +
    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_g_url">Update</button>' +
    '</div>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    $('#dynamic_data_model').html(addnewcontactmodal);
    $('#g_url_modal').modal('show');
    $('#g_url_form').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit','#g_url_form',function(e){
    e.preventDefault();
    if($(this).valid())
    {
        var spinner = '<div class="spinner-border text-primary" role="status">' +
		'</div>';
        $('#update_g_url').html(spinner);
        $('#update_g_url').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: ""+url+"updategurl",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
            success: function (response) {
                if (response.status == "success") {
					alert("Google Marker Updated");
					location.reload();
				}
            }
        });
    }
});
function addemailaddress()
{
    var addemailaddress = '<div class="modal" id="add_email_address" tabindex="-1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title">Add Email Address</h5>' +
    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<form id="add_email_address_from" enctype="multipart/form-data">' +
    '<input type="email" class="form-control" name="email" id="email" required>' +
    '<div class="mt-2">' +
    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_email">Update</button>' +
    '</div>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    $('#dynamic_data_model').html(addemailaddress);
    $('#add_email_address').modal('show');
    $('#add_email_address_from').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit','#add_email_address_from',function(e){
    e.preventDefault();
    if($(this).valid())
    {
        var spinner = '<div class="spinner-border text-primary" role="status">' +
		'</div>';
        $('#update_email').html(spinner);
        $('#update_email').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: ""+url+"updateemail",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
            success: function (response) {
                if (response.status == "success") {
					alert("Email Address updated");
					location.reload();
				}
            }
        });
    }
});
var currentnumberglobal;
function editnumber(caller)
{
    currentnumberglobal = $(caller).attr('data-current-number');
    var addnewcontactmodal = '<div class="modal" id="update_new_contact" tabindex="-1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title">Update Contact Number Modal</h5>' +
    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<form id="update_new_contact_form" enctype="multipart/form-data">' +
    '<input type="number" class="form-control" name="contact" id="contact" required>' +
    '<div class="mt-2">' +
    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_contact_number">Update</button>' +
    '</div>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    $('#dynamic_data_model').html(addnewcontactmodal);
    $('#update_new_contact').modal('show');
}
$(document).on('submit','#update_new_contact_form',function(e){
    e.preventDefault();
    var formData = new FormData($(this)[0]);
    formData.append('current', currentnumberglobal);
    $.ajax({
        type: "POST",
        url: ""+url+"updatecontactnumber",
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status == "success") {
                alert("Contact Number Updated");
                location.reload();
            }
        }
    });
});
function deletenumber(caller)
{
    var current = $(caller).attr('data-current-number');
    $.ajax({
        type: "POST",
        url: ""+url+"deletenumber",
        data: {current:current},
        dataType: "json",
        success: function (response) {
            if (response.status == "success") {
                alert("Contact Number Deleted");
                location.reload();
            }
        }
    });
}
function deleteemail(caller)
{
    var current = $(caller).attr('data-current-email');
    $.ajax({
        type: "POST",
        url: ""+url+"deleteemail",
        data: {current:current},
        dataType: "json",
        success: function (response) {
            if (response.status == "success") {
                alert("Email Deleted");
                location.reload();
            }
        }
    });
}
var currentemailglobal;
function editemail(caller)
{
    currentemailglobal = $(caller).attr('data-current-email');
    var addemailaddress = '<div class="modal" id="update_email_address" tabindex="-1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title">Add Email Address</h5>' +
    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<form id="update_email_address_from" enctype="multipart/form-data">' +
    '<input type="email" class="form-control" name="email" id="email" required>' +
    '<div class="mt-2">' +
    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_email">Update</button>' +
    '</div>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    $('#dynamic_data_model').html(addemailaddress);
    $('#update_email_address').modal('show');
}
$(document).on('submit','#update_email_address_from',function(e){
    e.preventDefault();
    var formData = new FormData($(this)[0]);
    formData.append('current', currentemailglobal);
    $.ajax({
        type: "POST",
        url: ""+url+"updateemaildata",
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status == "success") {
                alert("Email Updated");
                location.reload();
            }
        }
    });
});