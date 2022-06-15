<?php
include('../../cekuser.php');
include "../../connection.php";

$username   = $_GET['username'];
$id_tema    = $_GET['id'];
$id_kuis    = $_GET['id_kuis'];
$id_hasil   = $_GET['id_hasil'];

// Tugas
if ($id_kuis == 21) {
    $tugas = "Tugas 1";
} else if ($id_kuis == 22) {
    $tugas = "Tugas 2";
} else if ($id_kuis == 23) {
    $tugas = "Tugas 3";
} else if ($id_kuis == 24) {
    $tugas = "Tugas 4";
} else if ($id_kuis == 25) {
    $tugas = "Tugas 5";
}


// menampilkan data 

$i = mysqli_query($connection, "SELECT * FROM hasil WHERE username = '$username' AND id_kuis = '$id_kuis' AND id_hasil = '$id_hasil' ");


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
            <h3 align=center>Menarik Diri - <?= $tugas ?></h3>
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
                        <tr>
                            <td><strong>Tanggal Mengisi</strong></td>
                            <td><strong>:</strong></td>
                            <td><strong><?= tanggal_indonesia($hasil['tgl']) ?></strong></td>
                        </tr>
                    </table>

                    <br>

                    <div class=" list-group" style="margin-top: 20px;">
                        <h2 class="list-group-item" style="background-color: #6ae6c2;">
                            <strong>Tujuan</strong>
                        </h2>
                        <div class="list-group-item text-justify">
                            <?= ($hasil['goal'] == 'null') ? 'User Belum Mengisi' : $hasil['goal']  ?>
                        </div>
                        <hr>

                        <h2 class="list-group-item " style="background-color: #6ae6c2;">
                            <strong>Kenyataan saat ini</strong>
                        </h2>
                        <div class="list-group-item text-justify">
                            <?= ($hasil['real1'] == 0) ? 'User Belum Mengisi' : $hasil['real1'] ?>
                        </div>
                        <hr>

                        <h2 class="list-group-item " style="background-color: #6ae6c2;">
                            <strong>Pilihan tindakan</strong>
                        </h2>
                        <div class="list-group-item text-justify">
                            <?= ($hasil['option1'] == 'null') ? 'User Belum Mengisi' : $hasil['option1'] ?>
                        </div>
                        <hr>

                        <h2 class="list-group-item " style="background-color: #6ae6c2;">
                            <strong>Pilihan yang akan dilakukan</strong>
                        </h2>
                        <div class="list-group-item text-justify">
                            <?= ($hasil['will'] == 'null') ? 'User Belum Mengisi' : $hasil['will'] ?>
                        </div>
                        <hr>

                    </div>

                <?php } ?>

            </div>
            <div class="panel-footer">

                <a href="tgl.php?id=<?= $id_tema ?>&username=<?= $username ?>&id_kuis=<?= $id_kuis ?>"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>
            </div>
        </div>


    </div>

</body>

</html>