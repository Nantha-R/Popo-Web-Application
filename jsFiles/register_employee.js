var register_employee_form = $('#register_employee_form');

register_employee_form.submit(function(){
  event.preventDefault();
  var password = $('#employee_password');
  var confirm_password = $('#confirm_employee_password');
  $('#password_mismatch_error').html("");
  if(password.val() != confirm_password.val())
  {
    var error_html = "<h4 style='color:red'>Passwords do not match</h4>"
    $('#password_mismatch_error').append(error_html);
  }
  else
  {
    register_employee();
  }
});

function register_employee()
{
  var form_data = register_employee_form.serialize();
  $.ajax({
    url: "phpFiles/register_employee.php",
    data: form_data,
    dataType: "json",
    type: "POST",
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
        register_employee_form.trigger('reset');
      }
      else
      {
        window.location.href = 'error.php';
      }
    },
    error : function(result){
      $.toast({
        heading: 'Error',
        text: result,
        showHideTransition: 'slide',
        icon: 'error',
        position: 'top-center'
      });
    }
  });

}
