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
  <title>Register Sales Person</title>
  <?php include "base_header.html"; ?>
  <?php include 'base_hub_header.html' ?>
  <link rel='stylesheet' type='text/css' href='cssFiles/register_sales_person.css'>
</head>
<body>
  <?php include "base_hub_nav_bar.html"; ?>
  <script>
    document.querySelector('#register_sales_person_header').classList.add('active');
    document.querySelector('#register_sales_person_header a').removeAttribute('href');
  </script>
  <form class="form-horizontal center-block" id="register_sales_person_form">
    <center><h2>Salesperson Registration:</h2></center><br/>
    <table>
      <tr>
        <td><strong>Salesperson Name:</strong></td>
        <td><input type="text" name="sales_person_name" class="box form-control"/></td>
      </tr>
      <tr>
        <td><strong>Salesperson ID:</strong></td>
        <td><input type="text" name="sales_person_id" class="box form-control" /></td>
      </tr>
      <tr>
        <td><strong>Phone Number:</strong></td>
        <td><input type="text" name="phone_no" class="box form-control" /></td>
      </tr>
      <tr>
        <td><strong>Location:</strong></td>
        <td><input type="text" name="location" class="box form-control" /></td>
      </tr>
      <tr>
        <td><strong>Vehicle:</strong></td>
        <td>
          <select id="vehicle" name="vehicle" class="box form-control">
            <option value="" disabled selected>Select Vehicle</option>
            <option value="Bike">Bike</option>
            <option value="Cycle">Cycle</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><strong>Password:</strong></td>
        <td><input type="password" name="password" id="password" class="box form-control"/></td>
      </tr>
      <tr>
        <td><strong>Confirm Password:</strong></td>
        <td><input type="password" name="confirm_password" id="confirm_password" class="box form-control"/></td>
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
</html>
