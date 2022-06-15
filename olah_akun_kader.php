<?php
include('cekkader.php');
include "connection.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Your Home Page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kader DashBoard</title>

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
            <h3 align=center>EDIT DATA KADER</h3>
        </div>
        <hr>

        <div class="panel panel-default">
            <div class="panel-heading " style="background-color: #6ae6c2; padding:10px;">Edit</div>
            <div class="panel-body">
                <div class="form-bottom">

                    <form role="form" action="" method="post">
                        <?php
                        $data = mysqli_query($connection, "select * from user where username='$nama'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $d['username']; ?>" class="form-control" id="form-username" readonly>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?php echo $d['password']; ?>" class="form-control" id="form-password">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="text" name="nohp" value="<?php echo $d['no_hp']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Wilayah Puskesmas</label>
                                <select name="puskesmas" class="form-control" required>
                                    <option value="Tirto 2" <?= ($d['puskesmas'] == 'Tirto 2') ? 'selected' : '' ?>>Tirto 2</option>
                                    <option value="Wiradesa" <?= ($d['puskesmas'] == 'Wiradesa') ? 'selected' : '' ?>>Wiradesa</option>
                                    <option value="Wonopringgo" <?= ($d['puskesmas'] == 'Wonopringgo') ? 'selected' : '' ?>>Wonopringgo</option>
                                    <option value="Kedungwuni 2" <?= ($d['puskesmas'] == 'Kedungwuni 2') ? 'selected' : '' ?>>Kedungwuni 2</option>
                                    <option value="Talun" <?= ($d['puskesmas'] == 'Talun') ? 'selected' : '' ?>>Talun</option>
                                    <option value="Kesesi" <?= ($d['puskesmas'] == 'Kesesi') ? 'selected' : '' ?>>Kesesi</option>
                                </select>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Ubah Data!</button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>

            <div class="panel-footer">
                <a href="halkader.php"><button type="button" class="btn btn-block btn-warning btn-lg">Kembali</button></a>
            </div>
        </div>



        <hr>

    </div>
    <script src="assets/sweetalert2.all.min.js"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $nama        = $_POST['nama'];
    $nohp        = $_POST['nohp'];
    $puskesmas    = $_POST['puskesmas'];

    mysqli_query($connection, "UPDATE `user` SET `password` = '$password', `nama` = '$nama', `no_hp` = '$nohp', `puskesmas` = '$puskesmas' WHERE `user`.`username` = '$username'");

    echo "
    <script>
        Swal.fire(
            'Berhasil',
            'Data berhasil diubah.',
            'success'
        ).then((result) => {
            window.location='halkader.php';
        })
    </script>
        ";
}

?>