<?php
  include 'utilities.php';
  include 'db_utilities.php';
  if(isset($_POST['employee_id'],$_POST['employee_password']))
  {
    $employee_id = $_POST['employee_id'];
    $employee_password = $_POST['employee_password'];
    $employee_table = 'employee';
    $query = sprintf("SELECT * FROM %s WHERE employee_id = '%s' AND employee_password = '%s'",
                      $employee_table,$employee_id,$employee_password);
    $result = execute_query($query);
    if($result->num_rows == 1)
    {
      $result = mysqli_fetch_assoc($result);
      store_session('employee_id',$employee_id);
      store_session('employee_hub_id', $result['hub_id']);
      remove_session('hub_id');
      header('Location: ../employee_portal.php');
    }
    else
    {
      store_session('employee_credentials_not_found',True);
      header('Location: ../login.php');
    }
  }
  else
  {
    $message = 'Invalid post request';
    store_session("error_message",$message);
    header('Location: ../error.php');
  }
?>
