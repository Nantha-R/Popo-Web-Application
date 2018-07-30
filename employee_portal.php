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
  <title>Employee portal</title>
  <?php include 'base_header.html' ?>
  <?php include 'base_employee_header.html' ?>
  <link rel="stylesheet" type="text/css" href="cssFiles/employee_portal.css">
  <!-- For loading animation -->
  <link href="libraryFiles/loading_bar/dist/app.css" rel="stylesheet">
  <script src="libraryFiles/loading_bar/dist/app.min.js"></script>
  <!-- For datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<body>
  <?php include 'base_employee_nav_bar.html'?>
  <script>
    document.querySelector('#employee_portal_header').classList.add('active');
    document.querySelector('#employee_portal_header a').removeAttribute('href');
  </script>
  <div class="row center-block">
    <div class="col-lg-8 col-md-8 col-sm-12" style="padding:4%">
      <table class="table-striped table-bordered" id="product_information_table">
        <thead>
          <tr>
            <th>Product ID</th>
            <th>Date Of Entry</th>
            <th>Time Of Delivery</th>
            <th>Delivery Status</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12" style="padding:3%">
      <center>
        <span class="product-id-text">Enter Product ID</span>
        <form action="product.php" method="get">
          <input type="text" name="product_id" style="width:250px" required/>
          <br><br>
          <?php
            if(isset_session('product_details_not_found'))
              if(get_session('product_details_not_found'))
                echo "<h4 style='color:red'>Product id does not exists</h4>";
            store_session('product_details_not_found',False);
           ?>
          <input type="submit" value="Enter" class="btn btn-success "/>
        </form>
      </center>
    </div>
  </div>
</body>
<script src="jsFiles/employee_portal.js"></script>
</html>
