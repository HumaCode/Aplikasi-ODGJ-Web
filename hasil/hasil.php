<?php
include('../cekuser.php');

include "../connection.php";
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
            <h3 align=center>Daftar Inputan Keluarga</h3>
        </div>
        <hr>

        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #6ae6c2; color: black;">
                <a href="tema2.php?username=admin" class="btn btn-success btn-sm">Lihat inputan admin</a>


                <div class="pull-right">
                    <a href="print.php"><button type="button" class="btn btn-warning">Download Laporan</button></a>

                    <?php if (isset($_GET['keyword1']) && isset($_GET['keyword2'])) { ?>
                        <?php if ($_GET['keyword1'] || $_GET['keyword2']) { ?>
                            <a href="hasil.php"><button type="button" class="btn btn-warning">Tampil Semua Data</button></a>
                        <?php } ?>
                    <?php } ?>
                </div>

            </div>
            <div class="panel-body">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        Pencarian Data
                    </div>
                    <div class="panel-body">

                        <form class="form-inline" method="GET">
                            <div class="form-group">
                                <select name="keyword1" id="" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Tirto 2" <?= ($_SESSION['puskesmas'] == 'Tirto 2') ? 'selected' : '' ?>>Tirto 2</option>
                                    <option value="Wiradesa" <?= ($_SESSION['puskesmas'] == 'Wiradesa') ? 'selected' : '' ?>>Wiradesa</option>
                                    <option value="Wonopringgo" <?= ($_SESSION['puskesmas'] == 'Wonopringgo') ? 'selected' : '' ?>>Wonopringgo</option>
                                    <option value="Kedungwuni 2" <?= ($_SESSION['puskesmas'] == 'Kedungwuni 2') ? 'selected' : '' ?>>Kedungwuni 2</option>
                                    <option value="Talun" <?= ($_SESSION['puskesmas'] == 'Talun') ? 'selected' : '' ?>>Talun</option>
                                    <option value="Kesesi" <?= ($_SESSION['puskesmas'] == 'Kesesi') ? 'selected' : '' ?>>Kesesi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="keyword2" placeholder="Nama">
                            </div>
                            <button type="submit" class="btn btn-default">Cari</button>
                        </form>
                    </div>

                </div>
                <hr>

                <?php
                if (isset($_GET['keyword1']) && isset($_GET['keyword2'])) {
                    $wilayah  = $_GET['keyword1'];
                    $nama     = $_GET['keyword2'];

                    $data = mysqli_query($connection, "select * from user where nama like '%" . $nama . "%' and puskesmas like '%" . $wilayah . "%' and level = 'Keluarga'");
                    $d = mysqli_num_rows($data);

                    echo "<b>Hasil pencarian : " . $d . " Data</b>";
                }
                ?>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: grey; color: white;">
                            <tr>
                                <th class="text-center" width="30">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Wilayah Puskesmas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            if (isset($_GET['keyword1']) && isset($_GET['keyword2'])) {
                                $wilayah  = $_GET['keyword1'];
                                $nama     = $_GET['keyword2'];
                                $data = mysqli_query($connection, "select * from user where nama like '%" . $nama . "%' and puskesmas like '%" . $wilayah . "%' and level = 'Keluarga'");
                            } else {
                                $data = mysqli_query($connection, "select * from user where level ='Keluarga' ");
                            }

                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td class="text-center"><?php echo $d['puskesmas']; ?></td>
                                    <td class="text-center">
                                        <a href="tema.php?username=<?= $d['username'] ?>" class="btn btn-primary btn-sm">Lihat</a>
                                        <a href="print2.php?username=<?= $d['username'] ?>"><button type="button" class="btn btn-warning">PDF</button></a>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <?php if ($_SESSION['level'] == 'Administrator') { ?>
                        <a href="../ecoaching.php"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>
                    <?php } else if ($_SESSION['level'] == 'Perawat') { ?>
                        <a href="../halperawat.php"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>
                    <?php } ?>
                </div>
            </div>


        </div>

</body>

</html>