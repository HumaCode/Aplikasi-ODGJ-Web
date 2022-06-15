<?php
include('cekadmin.php');
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
            <h3 align=center>Modul Perawatan Gangguan Jiwa</h3>
        </div>
        <a href="modul.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a>
        <hr>


        <div class="panel" style="background-color: #98fade;">
            <div class="panel-body">

                <?php
                $id = $_GET['id'];
                $data = mysqli_query($connection, "select * from modul where id_modul='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <h2 align="center"><?php echo $d['judul']; ?></h2>
                    <p class="text-justify"><?php echo $d['isi1']; ?></p>
                    <p class="text-justify"><?php echo $d['isi2']; ?></p>
                <?php } ?>


            </div>
        </div>



    </div>

</body>

</html>