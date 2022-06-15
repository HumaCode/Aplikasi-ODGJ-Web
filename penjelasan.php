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
            <h3 align=center>PENJELASAN APLIKASI SI PANDAWA</h3>
        </div>
        <a href="beranda.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a>
        <hr>

        <div class="panel" style="background-color: #98fade;">
            <div class="panel-body">
                <p class="text-justify">Bahwa gangguan jiwa dapat menyebabkan munculnya stress dan depresi dalam keluarga. Persepsi stress dan depresi dalam keluarga dapat dipengaruhi oleh beban keluarga, tekanan dalam kehidupan, dukungan sosial, peran sosial, dan karakteristik keluarga. Agar keluarga dapat mengontrol stressnya maka perlu pemberdayaan keluarga yang mempunyai 3 dimensi (capacity building, empowering dan protecting).Secara teknis pemberdayaan keluarga dapat dilakukan dengane-coaching model GROW (Goal, Reality, Option, Will). Dengan e-coaching ini diharapkan keluarga dapat mencapai kemandirian dalam aspek emotional, behavioral dan value. Kemandirian keluarga berorientasi pada lima fungsi keluarga dalam mengatasi masalah kesehatannya yaitu: kemampuan dalam mengenal gejala gangguan jiwa, kemampuan mengambil keputusan, kemampuan merawat anggota keluarga yang mengalami gangguan jiwa, kemampuan menciptakan suasana rumah yang sehat jiwa, dan kemampuan memanfaatkan fasilitas kesehatan</p>
            </div>
        </div>

</body>

</html>