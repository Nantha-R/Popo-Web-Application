<?php
  include 'utilities.php';
  include 'db_utilities.php';
  if(isset($_POST['sales_person_name'],$_POST['sales_person_id'],$_POST['phone_no'],$_POST['location'],
           $_POST['vehicle'],$_POST['password'],$_POST['confirm_password']))
  {
    $sales_person_name = $_POST['sales_person_name'];
    $sales_person_id = $_POST['sales_person_id'];
    $phone_no = $_POST['phone_no'];
    $location = $_POST['location'];
    $vehicle = $_POST['vehicle'];
    $password = $_POST['password'];
    $hub_id = get_session('hub_id');
    $sales_table = 'sales_person';
    $query = sprintf("INSERT INTO %s VALUES('%s','%s','%s','%s','%s','%s','%s')",
                      $sales_table,$sales_person_name,$sales_person_id,$phone_no,
                      $location,$vehicle,$password,$hub_id);
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
