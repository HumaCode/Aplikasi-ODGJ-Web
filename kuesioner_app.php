<?php
include('cekadmin.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Your Home Page</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin DashBoard</title>

  <!-- CSS -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

  <style>
    .container2 {
      position: relative;
      width: 100%;
      overflow: hidden;
      padding-top: 200.25%;
      /* 16:9 Aspect Ratio */
    }

    .responsive-iframe {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <?php
          $nama = $_SESSION['username'];
          echo "<img style='height: 30px; margin-top: -5px;' src='assets/img/icon/avatar.png' class='img-circle'>";
          ?>
          <div class="pull-left">
            <p style="margin: -25px 40px 10px;">Halo, <?php echo $_SESSION['nama']; ?></p>
          </div>
        </a>
      </div>

    </div>
  </nav>

  <div class="container">
    <hr>
    <br>
    <div class="container2">
      <iframe class="responsive-iframe" src="https://docs.google.com/forms/d/e/1FAIpQLScHU0cjpsMwBiSNPhmWivJLAIPZYrwc8HwTNBGSdHMFugg_iA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
    <hr>

    <a href="haladmin.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a>

  </div>

</body>

</html>