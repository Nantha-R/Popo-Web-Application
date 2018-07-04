<?php
/**
 * Used for getting mysql db connection.
 * @param void
 * @return conn
 * conn : Connection object of MYSQL Database.
 */
function get_db_connection()
{
  $servername = "localhost";
  $username = "popo";
  $password = "popo";
  $dbname = "popo";
  $conn =  mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn)
  {
    // If connecting to a mysql database fails.
    $level = "ERROR";
    $message = sprintf("Database connection failed with credentials. ".
                       "Server Name : %s, User name : %s, ".
                       "Password : %s, Database name : %s."
                       ,$servername,$username,$password,$dbname);
    log_message($message,$level);
    // Redirect to error.php file.
    store_session("error_message",$message);
    header("Location: ../error.php");
  }
  else
  {
    return $conn;
  }
}

/**
 * Used for executing SQL queries(SELECT query).
 * @param string query
 * query : Sql query to be executed.
 * @return results
 * results : Result of the executes sql query.
 */
function execute_query($query)
{
  $conn = get_db_connection();
  $result = mysqli_query($conn, $query);
  return $result;
}

/**
 * Used for executing SQL queries(INSERT query).
 * @param string query
 * query : Sql query to be executed.
 * @return results
 * results : Result of the executes sql query.
 */
function insert_query($query)
{
  $conn = get_db_connection();
  $result = mysqli_query($conn, $query);
  if($result)
  {
    $response['status'] = 'success';
  }
  else
  {
    $level = "ERROR";
    $message = sprintf("Internal server error when executing the given sql query : %s",
                        $query);
    log_message($message, $level);
    // Redirect to error.php file.
    store_session("error_message",$message);
    $response['status'] = 'error';
  }
  return $response;
}
?>
