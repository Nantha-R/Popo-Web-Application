var product_details_form = $('#product_details_form');

function get_product_details()
{
  var form_data = product_details_form.serialize();
  var product_id = $('#product_id').text();
  var post_data = form_data + '&product_id=' + product_id;
  return post_data;
}

product_details_form.submit(function(){
  event.preventDefault();
  $.ajax({
    url: 'phpFiles/update_date_of_arrival.php',
    type: 'POST',
    dataType: "json",
    data: get_product_details(),
    success: function(result){
      if(result.status == 'success')
      {
        $.toast({
          heading: 'Success',
          text: "Package's Date of Arrival updated successfully",
          showHideTransition: 'slide',
          icon: 'success',
          position: 'top-center'
        });
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
      text: "Internal Server Error",
      showHideTransition: 'slide',
      icon: 'error',
      position: 'top-center'
    });
  });
});
