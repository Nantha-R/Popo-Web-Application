var hub_information_table = $('#hub_information_table').DataTable();;

$(document).ready(function(){
  get_hub_details()
});

function get_hub_details()
{
  $.busyLoadFull("show");
  $.ajax({
    url: "phpFiles/get_hub_information.php",
    dataType: "json",
    success: function(result){
      // Display the record in the datatable created
      hub_information_table.rows.add(result).draw();
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
  }).always(function()
  {
    $.busyLoadFull("hide");
  });
}
