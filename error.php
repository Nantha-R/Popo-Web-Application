<!-- Handles the errors that are produced on the server side. -->
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include "base_header.html"; ?>
</head>
<body>
  <?php include "base_navbar.html"; ?>
  <h3 id="features" style="color:red;padding-left : 5%">
    <?php
      session_start();
      if(isset($_SESSION['error_message']))
        echo $_SESSION['error_message'];
      else
        header("Location: index.php");
    ?>
  </h3>
</body>
</html>
