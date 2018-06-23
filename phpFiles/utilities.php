<?php
function log_message($message,$level)
{
  $file = basename($_SERVER['PHP_SELF']);
  $log_message = "[{$file}] [{$level}] [{$message}]";
  error_log($log_message);
}
function store_session($key,$value)
{
  session_start();
  $_SESSION[$key] = $value;
}
?>
