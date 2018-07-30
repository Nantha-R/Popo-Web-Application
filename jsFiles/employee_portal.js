
var product_information_table = $('#product_information_table').DataTable();;

$(document).ready(function(){
  get_product_details()
});

function get_product_details()
{
  $.busyLoadFull("show");
  $.ajax({
    url: "phpFiles/get_product_information.php",
    dataType: "json",
    success: function(result){
      // Display the record in the datatable created
      product_information_table.rows.add(result).draw();
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
  }).always(function()
  {
    $.busyLoadFull("hide");
  });
}
