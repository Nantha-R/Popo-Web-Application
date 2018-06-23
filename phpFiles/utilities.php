<?php
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
  session_start();
  $_SESSION[$key] = $value;
}

?>
