<?php
  include 'utilities.php';
  include 'db_utilities.php';
  if(isset($_POST['date_of_arrival'],$_POST['product_id']))
  {
    $date_of_arrival = $_POST['date_of_arrival'];
    $package_table = 'package';
    $product_id = $_POST['product_id'];
    $query = sprintf("UPDATE %s SET date_of_arrival = '%s' WHERE product_id = %s",
                      $package_table,$date_of_arrival,$product_id);
    $response = insert_query($query);
  }
  else
  {
    // If post variables does not exists
    $message = 'Invalid post request';
    store_session("error_message",$message);
    $response['status'] = 'error';
  }
  echo json_encode($response);
?>
