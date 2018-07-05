<?php
  include 'phpFiles/utilities.php';
  include 'phpFiles/db_utilities.php';
  // Check if the GET request is valid
  if(isset($_GET['product_id']) && isset_session('hub_id'))
  {
    $package_table_name = 'package';
    $product_id = $_GET['product_id'];
    $hub_id = get_session('hub_id');
    $query = sprintf("SELECT * FROM %s WHERE product_id = '%s' AND hub_id = '%s'",
                      $package_table_name,$product_id,$hub_id);
    $result = execute_query($query);
    if($result->num_rows ==1)
    {
      //If the product exists for the given hub id
      $product_details = mysqli_fetch_assoc($result);
    }
    else
    {
      //If the product does not exist for the hub id
      store_session('product_details_not_found',True);
      header('Location: hub_portal.php');
    }
  }
  else
  {
    $message = 'Invalid post request';
    store_session("error_message",$message);
    header('Location: error.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Product Details</title>
  <?php include 'base_header.html' ?>
  <link rel="stylesheet" type="text/css" href="cssFiles/product.css">
  <!-- datetime picker -->
  <link rel="stylesheet" type="text/css" href="libraryFiles/datetimepicker/build/jquery.datetimepicker.min.css"/ >
  <script src="libraryFiles/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
</head>
<body>
  <div class="row">
    <div class="col-lg-1 col-md-4 col-sm-4">
      <a href="index.php"> <img src="imageFiles/logo.png" style="width:100px;"/></a>
    </div>
    <span class="title">Product Details</span>
  </div>
  <?php include "base_hub_nav_bar.html"; ?>
  <script>
    document.querySelector('#product_header').classList.add('active');
    document.querySelector('#product_header a').removeAttribute('href');
  </script>
  <form class="form-horizontal center-block"  id = "product_details_form"
        method="post" action="update_product.php"  >
    <table>
      <tr>
        <td><strong>Product ID :</strong></td>
        <td><?php echo $product_details["product_id"];?></td>
      </tr>
      <tr>
        <td><strong>Sender Name :</strong></td>
        <td><?php echo $product_details["sender_name"];?></td>
      </tr>
      <tr>
        <td><strong>Sender Email :</strong></td>
        <td><?php echo $product_details["sender_email"];?></td>
      </tr>
      <tr>
        <td><strong>Sender Phone :</strong></td>
        <td><?php echo $product_details["sender_number"];?></td>
      </tr>
      <tr>
        <td><strong>Sender Address :</strong></td>
        <td><?php echo $product_details["sender_address"];?></td>
      </tr>
      <tr>
        <td><strong>Receiver Name :</strong></td>
        <td><?php echo $product_details["receiver_name"];?></td>
      </tr>
      <tr>
        <td><strong>Receiver Email :</strong></td>
        <td><?php echo $product_details["receiver_mail"];?></td>
      </tr>
      <tr>
        <td><strong>Receiver Phone :</strong></td>
        <td><?php echo $product_details["receiver_number"];?></td>
      </tr>
      <tr>
        <td><strong>Receiver Address :</strong></td>
        <td><?php echo $product_details['receiver_address'];?></td>
      </tr>
      <tr>
        <td><strong>Date of Arrival :</strong></td>
        <td>
           <input id="datetimepicker" type="text" >
           <script>
            $('#datetimepicker').datetimepicker();
           </script>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="Register" class="btn btn-primary"/>
        </td>
      </tr>
    </table>
   </form>
 </body>
 </html>
