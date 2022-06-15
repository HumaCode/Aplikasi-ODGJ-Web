<?php
include('cekperawat.php');
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

  <div class="container" style="margin-top:60px">
    <hr>
    <div style="background-color: #6ae6c2; padding:10px; margin-bottom:15px;">
      <h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
      <h3 align=center>DATA ODGJ</h3>
    </div>
    <a href="halperawat.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a>
    <hr>




    <div class="panel panel-default">
      <div class="panel-heading">
        <a href="tambahodgj_perawat.php"><button type="button" class="btn btn-primary">Tambah ODGJ</button></a>

        <?php if (isset($_GET['keyword1']) && isset($_GET['keyword2'])) { ?>
          <?php if ($_GET['keyword1'] && $_GET['keyword2']) { ?>
            <div class="pull-right">
              <a href="data_odjg_perawat.php"><button type="button" class="btn btn-warning">Tampil Semua Data</button></a>
            </div>
          <?php } ?>
        <?php } ?>
      </div>

      <div class="panel-body">

        <div class="panel panel-default">
          <div class="panel-heading">
            Pencarian Data
          </div>
          <div class="panel-body">

            <form class="form-inline" method="GET">
              <div class="form-group">
                <select name="keyword1" id="" class="form-control" required>
                  <option value="Tirto 2" <?= ($_SESSION['puskesmas'] == 'Tirto') ? 'selected' : '' ?>>Tirto 2</option>
                  <option value="Wiradesa" <?= ($_SESSION['puskesmas'] == 'Wiradesa') ? 'selected' : '' ?>>Wiradesa</option>
                  <option value="Wonopringgo" <?= ($_SESSION['puskesmas'] == 'Wonopringgo') ? 'selected' : '' ?>>Wonopringgo</option>
                  <option value="Kedungwuni 2" <?= ($_SESSION['puskesmas'] == 'Kedungwuni 2') ? 'selected' : '' ?>>Kedungwuni 2</option>
                  <option value="Talun" <?= ($_SESSION['puskesmas'] == 'Talun') ? 'selected' : '' ?>>Talun</option>
                  <option value="Kesesi" <?= ($_SESSION['puskesmas'] == 'Kesesi') ? 'selected' : '' ?>>Kesesi</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="keyword2" placeholder="Nama" required>
              </div>
              <button type="submit" class="btn btn-default">Cari</button>
            </form>
          </div>

        </div>
        <hr>

        <?php
        if (isset($_GET['keyword1']) && isset($_GET['keyword2'])) {
          $wilayah  = $_GET['keyword1'];
          $nama     = $_GET['keyword2'];

          $data = mysqli_query($connection, "select * from odgj where nama like '%" . $nama . "%' and puskesmas like '%" . $wilayah . "%'");
          $d = mysqli_num_rows($data);

          echo "<b>Hasil pencarian : " . $d . " Data</b>";
        }
        ?>


        <div class="table-responsive">
          <table class="table table-bordered">
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
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $sesi = $_SESSION['puskesmas'];

              if (isset($_GET['keyword1']) && isset($_GET['keyword2'])) {
                $wilayah  = $_GET['keyword1'];
                $nama     = $_GET['keyword2'];
                $data = mysqli_query($connection, "select * from odgj where nama like '%" . $nama . "%' and puskesmas like '%" . $wilayah . "%'");
              } else {
                $data = mysqli_query($connection, "select * from odgj where puskesmas = '$sesi'");
              }
              while ($d = mysqli_fetch_array($data)) {

              ?>
                <tr>
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td><?php echo $d['nik']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['tempat_lahir']; ?></td>
                  <td><?php echo tanggal_indonesia($d['tgl_lahir'], false) ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                  <td><?php echo $d['pekerjaan']; ?></td>
                  <td><?php echo $d['pendidikan']; ?></td>
                  <td><?php echo $d['awal_sakit']; ?></td>
                  <td><?php echo $d['rawat']; ?> Kali</td>
                  <td><?php echo $d['status']; ?></td>
                  <td><?php echo $d['posisi']; ?></td>
                  <td><?php echo $d['obat']; ?></td>
                  <td><?php echo $d['puskesmas']; ?></td>
                  <td><a href="editodgj_perawat.php?id=<?php echo $d['nik']; ?>"><button type="button" class="btn btn-warning">EDIT</button></a>
                    <a href="hapusodgj_perawat.php?id=<?php echo $d['nik']; ?>"><button type="button" class="btn btn-danger">HAPUS</button></a>
                  </td>
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
</body>

</html>