<?php
/**
 * Back end logic for hub login.
 */
include 'utilities.php';
include 'db_utilities.php';
if(isset($_POST['hub_id'],$_POST['hub_password']))
{
  $hub_id = $_POST['hub_id'];
  $hub_password = $_POST['hub_password'];
  $hub_table_name = "hub";
  $query = sprintf("SELECT * FROM %s WHERE hub_id = '%s' AND hub_password = '%s'",
                   $hub_table_name,$hub_id,$hub_password);
  $result = execute_query($query);
  if ($result->num_rows ==1)
  {
    // If the given hub_id and hub_password exists in Database.
    store_session('hub_id',$hub_id);
    header('Location: ../hub_portal.php');
  }
  else
  {
    // If the given hub_id and hub_password does not exists in Database.
    store_session('hub_credentials_not_found',True);
    header('Location: ../login.php');
  }
}
else
{
  // If post variables does not exists
  $message = 'Invalid post request';
  store_session("error_message",$message);
  header('Location: ../error.php');
}
?>
