
var new_product_registration_form = $('#new_product_registration_form');

new_product_registration_form.submit(function()
{
  event.preventDefault();
  var form_data = new_product_registration_form.serialize();
  $.ajax({
    url: "phpFiles/register_new_product.php",
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
        new_product_registration_form.trigger('reset');
      }
      else
      {
        window.location.href = 'error.php';
      }
    },
    error : function(result){
      $.toast({
        heading: 'Error',
        text: 'Internal Server Error',
        showHideTransition: 'slide',
        icon: 'error',
        position: 'top-center'
      });
    }
  });
})
