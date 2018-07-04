<?php
  include "db_utilities.php";
  include "utilities.php";

  if(isset($_POST['employee_id'], $_POST['employee_password'],$_POST['employee_name'], $_SESSION['hub_id']))
  {
    $employee_id = $_POST['employee_id'];
    $employee_password = $_POST['employee_password'];
    $employee_name = $_POST['employee_name'];
    $employee_table_name = 'employee';
    $hub_id = get_session('hub_id');
    $query = sprintf("INSERT INTO %s VALUES('%s','%s','%s','%s')",
                      $employee_table_name,$employee_name,$employee_id,
                      $employee_password,$hub_id);
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
