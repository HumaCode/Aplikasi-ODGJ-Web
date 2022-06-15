<?php
include('../../cekperawat.php');

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Your Home Page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keluarga DashBoard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <?php
                    $nama = $_SESSION['username'];
                    echo "<img style='height: 30px; margin-top: -5px;' src='../../assets/img/icon/avatar.png' class='img-circle'>";
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
            <h3 align=center>Penutup - Kurang Perawatan Diri</h3>
        </div>
        <hr>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/uDIpkiv4ZUY?playlist=uDIpkiv4ZUY&loop=1" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="panel-footer">

                <a href="../kuper_perawat.php?id=<?= $id ?>"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>
            </div>
        </div>


    </div>

</body>

</html>