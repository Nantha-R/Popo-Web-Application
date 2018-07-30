
var register_sales_person_form = $('#register_sales_person_form');

register_sales_person_form.submit(function(){
  event.preventDefault();
  var password = $('#password');
  var confirm_password = $('#confirm_password');
  $('#password_mismatch_error').html("");
  if(password.val() != confirm_password.val())
  {
    var error_html = "<h4 style='color:red'>Passwords do not match</h4>"
    $('#password_mismatch_error').append(error_html);
  }
  else
  {
    register_sales_person();
  }
});

function register_sales_person()
{
  var form_data = register_sales_person_form.serialize();
  $.ajax({
    url: 'phpFiles/register_sales_person.php',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    success: function(result){
      if(result.status == 'success')
      {
        var message = 'Registration completed successfully';
        $.toast({
          heading: 'Success',
          text: message,
          showHideTransition: 'slide',
          icon: 'success',
          position: 'top-center'
        });
        register_sales_person_form.trigger('reset');
      }
      else
      {
        window.location.href = 'error.php';
      }
    }
  })
  .fail(function(result) {
    $.toast({
      heading: 'Error',
      text: 'Internal Server Error',
      showHideTransition: 'slide',
      icon: 'error',
      position: 'top-center'
    });
  })
}
