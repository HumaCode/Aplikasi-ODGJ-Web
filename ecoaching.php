<?php
include('cekadmin.php');
include('connection.php');

$level = $_SESSION['level'];

$sql = mysqli_query($connection, "SELECT * FROM tema WHERE level = '$level' ") or die(mysqli_error($connection));

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
        <div class="d" style="background-color: #6ae6c2; padding:10px;">
            <h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
            <h3 align=center>Video E-Coaching Pandawa</h3>
        </div>
        <hr>
        <a href="haladmin.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a><BR>

        <a href="hasil/hasil.php"><button type="button" class="btn btn-primary btn-lg btn-block">Lihat Inputan Hasil</button></a><BR>


        <a href="video/pengantar_admin.php"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #6ae6c2; color: black;">Pengantar</button></a><BR>

        <?php while ($data = mysqli_fetch_array($sql)) { ?>
            <a href="<?= $data['url'] ?>?id=<?= $data['id_tema'] ?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #6ae6c2; color: black;"><?= $data['nama_tema'] ?></button></a><BR>
        <?php } ?>


    </div>

</body>

</html>