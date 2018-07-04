<?php
  include 'utilities.php';
  include 'db_utilities.php';
  if(isset($_POST['product_id']) && isset_session('hub_id'))
  {
    $package_table_name = 'package';
    $product_id = $_POST['product_id'];
    $hub_id = get_session('hub_id');
    $query = sprintf("SELECT * FROM %s WHERE product_id = '%s' AND hub_id = '%s'",
                      $package_table_name,$product_id,$hub_id);
    $result = execute_query($query);
    if($result->num_rows ==1)
    {
      //If the product exists for the given hub id
      $product_details = mysqli_fetch_assoc($result);
      store_session('product_details', $product_details);
      header('Location: ../product.php');
    }
    else
    {
      //If the product does not exist for the hub id
      store_session('product_details_not_found',True);
      header('Location: ../hub_portal.php');
    }
  }
  else
  {
    $message = 'Invalid post request';
    store_session("error_message",$message);
    header('Location: ../error.php');
  }

?>
