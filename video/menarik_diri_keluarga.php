<?php
include('../cekkeluarga.php');
include('../connection.php');

$id         = $_GET['id'];
$level      = $_SESSION['level'];
// $username   = $_SESSION['username'];

$sql = mysqli_query($connection, "SELECT * FROM kuis WHERE level = '$level' AND tema = 'menarik_diri'") or die(mysqli_error($connection));


// jumlah sesi 
// $hasil = mysqli_query($connection, "SELECT * FROM hasil WHERE username = '$username' ");
// $jml_hasil = mysqli_num_rows($hasil);

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
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <?php
                    $nama = $_SESSION['username'];
                    echo "<img style='height: 30px; margin-top: -5px;' src='../assets/img/icon/avatar.png' class='img-circle'>";
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
            <h3 align=center>Menarik Diri</h3>
        </div>
        <hr>


        <div class="panel panel-default">
            <div class="panel-heading">Pengantar (Menarik Diri)</div>
            <div class="panel-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/SzkuYAYE0Lc?playlist=SzkuYAYE0Lc&loop=1" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">

                <?php while ($data = mysqli_fetch_array($sql)) { ?>
                    <a href="<?= $data['url'] ?>?id=<?= $data['id_kuis'] ?>&id_tema=<?= $id ?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #6ae6c2; color: black;"><?= $data['nama_kuis'] ?></button></a><BR>
                <?php } ?>

                <a href="menarik_diri/penutup_keluarga.php?id=<?= $id ?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #6ae6c2; color: black;">Penutup</button></a><BR>
            </div>
            <div class="panel-footer">
                <a href="../ecoaching_keluarga.php"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>
            </div>
        </div>


    </div>

</body>

</html>