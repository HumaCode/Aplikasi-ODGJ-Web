<?php
include('cekkeluarga.php');
include "connection.php";
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

  <div class="container" style="margin-top:40px">
    <hr>
    <div class="d" style="background-color: #6ae6c2; padding:10px;">
      <h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
      <h3 align=center>INTERAKTIF COACH/PETUGAS</h3>
    </div>
    <a href="halkeluarga.php"><button type="button" class="btn btn-warning btn-lg btn-block" style="margin-top: 20px;">Kembali</button></a>
    <hr>


    <div class="panel panel-default">
      <div class="panel-body">

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead style="background-color: #6ae6c2;">
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Nomor Hp</th>
                <th class="text-center">Sebagai</th>
                <th class="text-center">Wilayah Puskesmas</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>


              <?php
              $no = 1;
              // $sesi = $_SESSION['puskesmas'];
              if (isset($_SESSION['puskesmas'])) {
                $sesi = $_SESSION['puskesmas'];
              }

              $data = mysqli_query($connection, "select * from user where level != 'Keluarga' and puskesmas = '$sesi'");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['no_hp']; ?></td>
                  <td><?php echo $d['level']; ?></td>
                  <td><?php echo $d['puskesmas']; ?></td>
                  <td class="text-center"><a href="https://api.whatsapp.com/send?phone=<?php echo $d['no_hp']; ?>" target="_blank"><button type="button" class="btn btn-warning">HUBUNGI</button></a></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>


  </div>

</body>

</html>