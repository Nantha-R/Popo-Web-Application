<?php
  include 'phpFiles/utilities.php';
  if(!isset_session('employee_id'))
  {
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>New Product</title>
  <?php include 'base_header.html' ?>
  <?php include 'base_employee_header.html' ?>
  <link rel="stylesheet" type="text/css" href="cssFiles/new_product.css">
  <!-- For toast messages -->
  <link rel="stylesheet" type="text/css" href="libraryFiles/toast_message/dist/jquery.toast.min.css">
  <script type="text/javascript" src="libraryFiles/toast_message/dist/jquery.toast.min.js"></script>
</head>
<body>
  <?php include 'base_employee_nav_bar.html'?>
  <script>
    document.querySelector('#new_product_header').classList.add('active');
    document.querySelector('#new_product_header a').removeAttribute('href');
  </script>
  <form class="form-horizontal center-block" id="new_product_registration_form">
    <center><h2>Product Registration:</h2></center>
    <table width="100%">
      <tr>
        <td><strong>Sender Name:</strong></td>
        <td><input type="text" name="sender_name" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Sender Email:</strong></td>
        <td><input type="text" name="sender_email" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Sender Phone:</strong></td>
        <td><input type="text" name="sender_number" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Sender Address:</strong></td>
        <td><textarea name="sender_address" class="form-control" style="height: 90px;" required></textarea></td>
      </tr>
      <tr>
        <td><strong>Receiver Name:</strong></td>
        <td><input type="text" name="receiver_name" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Receiver Email:</strong></td>
        <td><input type="text" name="receiver_email" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Receiver Phone:</strong></td>
        <td><input type="text" name="receiver_number" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Receiver Address:</strong></td>
        <td><input type="text" name="receiver_address" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Source city:</strong></td>
        <td><input type="text" name="source_city" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Destination city:</strong></td>
        <td><input type="text" name="destination_city" class="form-control" required/></td>
      </tr>
      <tr>
        <td><strong>Area Type:</strong></td>
        <td>
          <input type="radio" name="area_type" value="urban" required>Urban
          <input type="radio" name="area_type" value="rural" required>Rural
        </td>
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
<script src="jsFiles/new_product.js"></script>
</html>
