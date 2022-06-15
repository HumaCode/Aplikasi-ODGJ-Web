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
            <h3 align=center>HALAMAN BERANDA</h3>
        </div>
        <a href="haladmin.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a><BR>
        <hr>



        <div class="row">
            <div class="col-md-10 col-md-offset-2">

                <div class="row">
                    <div class="col-xs-4 col-md-3">
                        <a href="penjelasan.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/info.png" width="70" alt="...">
                            <small>Penjelasan Aplikasi</small>
                        </a>
                    </div>
                    <div class="col-xs-4 col-md-3">
                        <a href="cara_penggunaan.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/requirement.png" width="70" alt="...">
                            <small>Cara Penggunaan</small>
                        </a>
                    </div>
                    <div class="col-xs-4 col-md-3">
                        <a href="kontakkami.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/contact.png" width="70" alt="...">
                            <small>Kontak Kami</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>