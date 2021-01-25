$(document).ready(function(){
    $('#login-form').validate(
        {
            errorClass: "is-invalid",
            validClass: "is-valid",
            errorElement: "em"
        }
    );
});
$('#login-form').submit(function(e){
    e.preventDefault();
    if($(this).valid())
    {
        $('#sign_in_btn').html('Authenticating..');
        $('#sign_in_btn').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: ""+url+"xxauth",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (response) {
                if(response.status == "err")
                {
                    alert("Wrong email or pass");
                    $('#sign_in_btn').html('Sign in');
                    $('#sign_in_btn').prop('disabled',false);
                }
                else
                {
                    window.location.href=""+response.redirect_to+"";
                }
            }
        });
    }
});