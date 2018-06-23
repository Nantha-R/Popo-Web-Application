<?php
$servername = "localhost";
$username = "popo";
$password = "popo";
$dbname = "popo2";
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
  $level = "ERROR";
  $message = sprintf("Database connection failed with credentials. ".
                     "Server Name : %s, User name : %s, ".
                     "Password : %s, Database name : %s."
                     ,$servername,$username,$password,$dbname);
  include "utilities.php";
  log_message($message,$level);
  store_session("error_message",$message);
  header("Location: ../error.php");
}
?>
