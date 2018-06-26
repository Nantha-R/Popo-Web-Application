<?php
  include "db_utilities.php";
  include "utilities.php";
  // Fetch records from the database for the given hub_id
  $hub_id = get_session('hub_id');
  $query = sprintf("SELECT * FROM package WHERE hub_id = '%s'",$hub_id);
  $result = execute_query($query);
  // Convert the records obtained into an array
  $result_set = array();
  $header_list = array('product_id','date_of_entry','date_of_arrival',
                       'status','source_city','destination_city');
  foreach ($result as $row) {
    $temp_array = array();
    foreach ($header_list as $header)
      array_push($temp_array,$row[$header]);
    array_push($result_set,$temp_array);
  }
  echo json_encode($result_set);
?>
