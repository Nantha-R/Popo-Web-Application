<?php
include 'phpFiles/utilities.php';
include 'phpFiles/db_utilities.php';
// Check if the user is authorized or not
if(!isset_session('hub_id'))
{
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Registration</title>
  <?php include 'base_header.html' ?>
  <link rel="stylesheet" type="text/css" href="cssFiles/register_employee.css">
</head>
<body>
  <div class="row">
    <div class="col-lg-1 col-md-4 col-sm-4">
      <a href="index.php"> <img src="imageFiles/logo.png" style="width:100px;"/></a>
    </div>
    <span class="title">Hub Portal</span>
  </div>
  <?php include "base_hub_nav_bar.html"; ?>
  <script>
    document.querySelector('#register_employee_header').classList.add('active');
    document.querySelector('#register_employee_header a').removeAttribute('href');
  </script>
  <form class="form-horizontal center-block" id="register_employee_form">
    <center><h2>Employee Registration:</h2></center><br>
    <table width="100%">
      <tr>
        <td><strong>Employee Name:</strong></td>
        <td><input type="text" name="employee_name" id="employee_name"
                   class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Employee ID:</strong></td>
        <td><input type="text" name="employee_id" id="employee_id"
                   class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Password:</strong></td>
        <td><input type="password" name="employee_password" id="employee_password"
                   class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Confirm Password:</strong></td>
        <td><input type="password" name="confirm_employee_password"
                   id="confirm_employee_password" class="form-control" required/></td>
      </tr>
      <tr>
        <td></td>
        <td id="password_mismatch_error"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="Register" class="btn btn-primary" />
        </td>
      </tr>
    </table>
  </form>
</body>
<script src="jsFiles/register_employee.js"></script>
</html>
