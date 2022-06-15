<?php
include('cekdokter.php');
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

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">


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

  <div class="container" style="margin-top:60px">
    <hr>
    <div class="d" style="background-color: #6ae6c2; padding:10px;">
      <h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
      <h3 align=center>HALAMAN DOKTER</h3>
    </div>
    <hr>
    <a href="haldokter.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a><BR>

    <div class="panel panel-default">
      <div class="panel-body">
        <table id="dokter" class="table table-bordered">
          <thead style="background-color: #6ae6c2;">
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">NIK</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Tempat Lahir</th>
              <th class="text-center">Tgl Lahir</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">Pekerjaan</th>
              <th class="text-center">Pendidikan</th>
              <th class="text-center">Awal Sakit</th>
              <th class="text-center">Dirawat</th>
              <th class="text-center">Status Saat Ini</th>
              <th class="text-center">Lokasi Saat Ini</th>
              <th class="text-center">Obat-obatan</th>
              <th class="text-center">Wilayah Puskesmas</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $data = mysqli_query($connection, "select * from odgj");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tempat_lahir']; ?></td>
                <td><?php echo $d['tgl_lahir']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['pekerjaan']; ?></td>
                <td><?php echo $d['pendidikan']; ?></td>
                <td><?php echo $d['awal_sakit']; ?></td>
                <td><?php echo $d['rawat']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td><?php echo $d['posisi']; ?></td>
                <td><?php echo $d['obat']; ?></td>
                <td><?php echo $d['puskesmas']; ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>



  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var table = $('#dokter').DataTable({
        responsive: true,
        lengthChange: false,
      });

      new $.fn.dataTable.FixedHeader(table);
    });
  </script>
</body>

</html>