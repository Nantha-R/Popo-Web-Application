<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="cssFiles/index.css">
  <?php include "base_header.html"; ?>
</head>
<body>
  <?php include "base_navbar.html"; ?>
  <script>
    document.getElementById('index-header').classList.add('active');
    document.getElementById('index-header').childNodes[0].removeAttribute('href');
  </script>
  <div class="container">
    <CENTER><span id="features">POPO provides you the following features</span></CENTER>
    <div class ="row">
      <div class="service-cards col-md-4 col-sm-4 col-lg-4">
        <div class="card time zero-padding">
          <div class="overlay">
            <span>Select Time Of Delivery</span>
          </div>
        </div>
      </div>
      <div class="service-cards col-md-4 col-sm-4 col-lg-4">
        <div class="card gps zero-padding">
          <div class="overlay">
            <span>Real Time Gps Monitoring</span>
          </div>
        </div>
      </div>
      <div class="service-cards col-md-4 col-sm-4 col-lg-4">
        <div class="card bar zero-padding">
          <div class="overlay">
            <span>Uniquely Identify Packages Through Barcode</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
