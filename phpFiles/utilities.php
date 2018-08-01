<?php
session_start();
/**
 * Used for logging messages
 * @param string message, string $level
 * message : Message to be logged.
 * level : Type of message to be logged.(INFO,WARNING,ERROR)
 * @return void
 */
function log_message($message,$level)
{
  $file = basename($_SERVER['PHP_SELF']);
  $log_message = "[{$file}] [{$level}] [{$message}]";
  error_log($log_message);
}

/**
 * Used for storing values onto the session
 * @param string key, string value
 * key : Key of the session variable.
 * value : Value of the session variable.
 * @return void
 */
function store_session($key,$value)
{
  $_SESSION[$key] = $value;
}

/**
 * Used to check if a session variable is present or not
 * @param string key
 * key : Key of the session variable.
 * @return Boolean
 * Returns a Boolean value based on session variables present
 */
function isset_session($key)
{
  if(isset($_SESSION[$key]))
    return True;
  else
    return False;
}

/**
 * Used to retrieve the session variable
 * @param string key
 * key : Key of the session variable.
 * @return string
 * Returns the value of the session variable
 */
function get_session($key)
{
  if(isset($_SESSION[$key]))
    return $_SESSION[$key];
  else
    return NULL;
}

/**
 * Used to remove the session variable
 * @param string key
 * key : Key of the session variable.
 * @return NULL
 */
function remove_session($key)
{
  unset($_SESSION[$key]);
}

function logout_session()
{
  session_unset();
  session_destroy();
}

function get_date_of_entry()
{
  date_default_timezone_set("Asia/Kolkata");
  return date("Y-m-d H:i:s");
}

function get_date_of_arrival($area_type, $current_time)
{
  $number_of_days = 1;
  if($area_type=='rural')
  {
    $number_of_days = 2;
  }
  $current_time = new DateTime($current_time);
  while($number_of_days!=0)
  {
      $current_time->modify('+1 day');
      if($current_time->format('l')!='Sunday')
      {
        $number_of_days --;
      }
  }
  return $current_time->format('Y-m-d H:i:s');;
}
?>
