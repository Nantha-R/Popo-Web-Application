<?php
  include 'utilities.php';
  include 'db_utilities.php';
  if(isset($_POST['sender_name'],$_POST['sender_email'],$_POST['sender_number'],$_POST['sender_address'],
           $_POST['receiver_name'],$_POST['receiver_email'],$_POST['receiver_number'],$_POST['receiver_address'],
           $_POST['source_city'],$_POST['destination_city'],$_POST['area_type']))
  {
    $sender_name = $_POST['sender_name'];
    $sender_email = $_POST['sender_email'];
    $sender_number = $_POST['sender_number'];
    $sender_address = $_POST['sender_address'];
    $receiver_name = $_POST['receiver_name'];
    $receiver_email = $_POST['receiver_email'];
    $receiver_number = $_POST['receiver_number'];
    $receiver_address = $_POST['receiver_address'];
    $source_city = $_POST['source_city'];
    $destination_city = $_POST['destination_city'];
    $area_type = $_POST['area_type'];
    $date_of_entry = get_date_of_entry();
    $date_of_arrival = get_date_of_arrival($area_type, $date_of_entry);
    $hub_id = get_session('employee_hub_id');
    $package_table = 'package';
    $status = 'Pending';
    $query = sprintf("INSERT INTO %s VALUES(0,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
                      $package_table,$hub_id,$date_of_entry,$date_of_arrival,
                      $status,$source_city,$destination_city,
                      $sender_name,$sender_email,$sender_number,$sender_address,
                      $receiver_name,$receiver_email,$receiver_number,$receiver_address);
    $response = insert_query($query);
  }
  else
  {
    $message = 'Invalid post request';
    store_session("error_message",$message);
    $response['status'] = 'error';
  }
  echo json_encode($response);
?>
