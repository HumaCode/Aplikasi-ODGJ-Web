<?php
include('../../cekadmin.php');
include "../../connection.php";

$username   = $_GET['username'];
$id_tema    = $_GET['id'];
$id_kuis    = $_GET['id_kuis'];


// Tugas
if ($id_kuis == 6) {
    $tugas = "Tugas 1";
} else if ($id_kuis == 7) {
    $tugas = "Tugas 2";
} else if ($id_kuis == 8) {
    $tugas = "Tugas 3";
} else if ($id_kuis == 9) {
    $tugas = "Tugas 4";
} else if ($id_kuis == 10) {
    $tugas = "Tugas 5";
}


// menampilkan data 

$i = mysqli_query($connection, "SELECT * FROM hasil WHERE username = '$username' AND id_kuis = '$id_kuis' ");

$tes = mysqli_query($connection, "SELECT * FROM hasil WHERE username = '$username' AND id_kuis = '$id_kuis' ");


$hasil = mysqli_fetch_array($i);


// data user
$u = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");
$user = mysqli_fetch_array($u);



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

    <div class="container" style="margin-top:60px">
        <hr>
        <div class="d" style="background-color: #6ae6c2; padding:10px;">
            <h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
            <h3 align=center>Amuk/Perilaku Kekerasan - <?= $tugas ?>

            </h3>
        </div>
        <hr>


        <div class="panel panel-default">
            <div class="panel-body">

                <?php if (empty($hasil)) { ?>

                    <div class="alert alert-danger text-center">
                        User Belum Mengerjakan <?= $tugas ?>
                    </div>

                <?php } else { ?>

                    <table>
                        <tr>
                            <td width="130"><strong>Nama</strong></td>
                            <td width="20"><strong>:</strong></td>
                            <td><strong><?= $user['nama'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Username</strong></td>
                            <td><strong>:</strong></td>
                            <td><strong><?= $hasil['username'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>No. Hp</strong></td>
                            <td><strong>:</strong></td>
                            <td><strong><a href="https://api.whatsapp.com/send?phone=<?= $user['no_hp']; ?>" target="_blank"><?= $user['no_hp']; ?></strong></a></td>
                        </tr>
                    </table>

                    <br>


                    <ul class="list-group">
                        <?php $i = 1;
                        while ($data = mysqli_fetch_array($tes)) { ?>
                            <li class="list-group-item" style="background-color: #6ae6c2;">
                                <strong><?= $i . '. ' . tanggal_indonesia($data['tgl']) ?></strong>
                                <div class="pull-right">
                                    <a href="hapus2.php?id=<?= $id_tema ?>&username=<?= $username ?>&id_kuis=<?= $id_kuis ?>&id_hasil=<?= $data['id_hasil'] ?>" class="label label-danger">Hapus</a>
                                    <a href="kuis2.php?id=<?= $id_tema ?>&username=<?= $username ?>&id_kuis=<?= $id_kuis ?>&id_hasil=<?= $data['id_hasil'] ?>" class="label label-success">Lihat</a>
                                </div>
                            </li>
                            <br>
                        <?php $i++;
                        } ?>
                    </ul>


                <?php } ?>

            </div>
            <div class="panel-footer">

                <a href="../amuk2.php?id=<?= $id_tema ?>&username=<?= $username ?>"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>
            </div>
        </div>


    </div>

</body>

</html>