<?php
include('cekkeluarga.php');
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
        @font-face {
            font-family: tulisan_keren;
            src: url(Anton-Regular.ttf);
        }

        .sub_judul {
            font-family: "tulisan_keren";
            font-variant: inherit;
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
    <div class="container" style="margin-top:60px">
        <hr>
        <div class="d" style="background-color: #6ae6c2; padding:10px;">
            <h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
            <h3 align=center class="sub_judul">SI PANDAWA</h3>
        </div>
        <hr>


        <div class="row">
            <div class="col-md-10 col-md-offset-2">

                <div class="row">
                    <div class="col-xs-4 col-md-3">
                        <a href="beranda_keluarga.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/home.png" width="70" alt="...">
                            <small>BERANDA</small>
                        </a>
                    </div>
                    <div class="col-xs-4 col-md-3">
                        <a href="modul_keluarga.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/modul.png" width="70" alt="...">
                            <small>MODUL</small>
                        </a>
                    </div>
                    <div class="col-xs-4 col-md-3">
                        <a href="ecoaching_keluarga.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/video.png" width="70" alt="...">
                            <small>E-COACHING</small>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 col-md-3">
                        <a href="data_odjg_keluarga.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/odgj.png" width="70" alt="...">
                            <small>DATA ODGJ</small>
                        </a>
                    </div>


                    <div class="col-xs-4 col-md-3">
                        <a href="kuesioner_tugas_keluarga2.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/list.png" width="70" alt="...">
                            <small>KUESIONER TUGAS KELUARGA</small>
                        </a>
                    </div>
                    <div class="col-xs-4 col-md-3">
                        <a href="kuesioner_app2.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/list.png" width="70" alt="...">
                            <small>KUESIONER APP</small>
                        </a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-4 col-md-3">
                        <a href="interaktif_keluarga.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/speak.png" width="70" alt="...">
                            <small>INTERAKTIF</small>
                        </a>
                    </div>

                    <div class="col-xs-4 col-md-3">
                        <a href="logout.php" class="thumbnail text-center" style="border: 0px;">
                            <img src="assets/img/icon/shutdown.png" width="70" alt="...">
                            <small>LOGOUT</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</body>

</html>