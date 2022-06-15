<?php
include('../../cekadmin.php');
include('../../connection.php');

$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);


$id_kuis = $_GET['id'];
$id_tema = $_GET['id_tema'];

$username = $_SESSION['username'];


// tombol tambah 
if (isset($_POST['kirim'])) {
    $tgl = $date->format('Y-m-d H:i:s');


    mysqli_query($connection, "INSERT INTO hasil VALUES ('null', '$username', '$id_tema', '$id_kuis', 'null', 'null', 'null', 'null', '$tgl')");
}

$i = mysqli_query($connection, "SELECT * FROM hasil WHERE username = '$username' AND id_kuis = '$id_kuis' ORDER BY id_hasil DESC LIMIT 1");

$edit = mysqli_fetch_array($i);

$l = mysqli_query($connection, "SELECT * FROM hasil WHERE username = '$username' AND id_kuis = 37");

$hasil = mysqli_fetch_array($l);



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

    <div class="container" style="margin-top:60px">
        <hr>
        <div class="d" style="background-color: #6ae6c2; padding:10px;">
            <h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
            <h3 align=center>Harga Diri Rendah - Tugas 3</h3>
        </div>
        <hr>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/eoYzzrBitoo?playlist=eoYzzrBitoo&loop=1" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>


        <?php if (isset($hasil['id_kuis'])) { ?>
            <?php if ($hasil['will'] == 'null') { ?>

                <?php if (isset($edit)) { ?>
                    <?php if ($edit['goal'] == 'null') { ?>
                        <div class="alert alert-danger text-center">Kerjakan tugas sebelumnya</div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="alert alert-danger text-center">Kerjakan tugas sebelumnya</div>
                <?php } ?>

            <?php } else { ?>
                <form action="" method="POST">

                    <?php if (empty($edit)) { ?>
                        <button type="submit" name="kirim" class="btn btn-warning btn-lg btn-block">Kerjakan Tugas</button>
                        <small>**Klik tombol kerjakan untuk memunculkan sesi</small>
                    <?php } else { ?>

                        <?php if ($edit['goal'] != 'null' && $edit['real1'] != 'null' && $edit['option1'] != 'null' && $edit['will'] != 'null') { ?>
                            <button type="submit" name="kirim" class="btn btn-success btn-lg btn-block">Kerjakan Lagi</button>
                        <?php } ?>

                    <?php } ?>
                </form>
            <?php } ?>
        <?php } else { ?>
            <div class="alert alert-danger text-center">Kerjakan tugas sebelumnya</div>
        <?php } ?>
        <hr>




        <div class="panel panel-default">
            <div class="panel-body">

                <?php if (isset($edit)) { ?>

                    <?php if ($edit['goal'] != 'null' && $edit['real1'] != 'null' && $edit['option1'] != 'null' && $edit['will'] != 'null') { ?>
                        <div class="alert alert-success text-center">Anda sudah mengerjakan tugas 3</div>
                    <?php } else { ?>

                        <?php if ($edit['goal'] == 'null') { ?>
                            <a href="tugas3/goal.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol1"><button type="button" name="bt" class="btn btn-warning btn-lg btn-block"> Tujuan</button></a><BR>
                        <?php } else { ?>
                            <a href="tugas3/goal.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol1"><button type="button" name="bt" class="btn btn-lg btn-block" style="background-color: #6ae6c2; color: black;"> Tujuan</button></a><BR>
                        <?php } ?>


                        <?php if ($edit['goal'] != 'null') { ?>
                            <?php if ($edit['real1'] == 0) { ?>
                                <a href="tugas3/real.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol2"><button type="button" name="bt" class="btn btn-warning btn-lg btn-block"> Kenyataan saat ini</button></a><BR>
                            <?php } else { ?>
                                <a href="tugas3/real.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol2"><button type="button" name="bt" class="btn btn-lg btn-block" style="background-color: #6ae6c2; color: black;"> Kenyataan saat ini</button></a><BR>
                            <?php } ?>
                        <?php } else { ?>
                            <button class="btn btn-danger btn-lg btn-block" style="cursor: not-allowed; opacity: 0.7">Kenyataan saat ini</button> <br>
                        <?php } ?>

                        <?php if (isset($edit['real1'])) { ?>
                            <?php if ($edit['real1'] != 0) { ?>
                                <?php if ($edit['option1'] == 'null') { ?>
                                    <a href="tugas3/option.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol3"><button type="button" name="bt" class="btn btn-warning  btn-lg btn-block"> Pilihan tindakan </button></a><BR>
                                <?php } else { ?>
                                    <a href="tugas3/option.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol3"><button type="button" name="bt" class="btn  btn-lg btn-block" style="background-color: #6ae6c2; color: black;"> Pilihan tindakan </button></a><BR>
                                <?php } ?>
                            <?php } else { ?>
                                <button class="btn btn-danger btn-lg btn-block" style="cursor: not-allowed; opacity: 0.7">Pilihan tindakan</button> <br>
                            <?php } ?>
                        <?php } else {  ?>
                            <button class="btn btn-danger btn-lg btn-block" style="cursor: not-allowed; opacity: 0.7">Option</button> <br>
                        <?php } ?>


                        <?php if (isset($edit['option1'])) { ?>
                            <?php if ($edit['option1'] != 'null') { ?>
                                <?php if ($edit['will'] == 'null') { ?>
                                    <a href="tugas3/will.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol4"><button type="button" name="bt" class="btn btn-warning btn-lg btn-block"> Tindakan yang akan dilakukan</button></a><BR>
                                <?php } else { ?>

                                    <a href="tugas3/will.php?id_tema=<?= $id_tema ?>&id_kuis=<?= $id_kuis ?>" id="tombol4"><button type="button" name="bt" class="btn  btn-lg btn-block" style="background-color: #6ae6c2; color: black;"> Tindakan yang akan dilakukan</button></a><BR>
                                <?php } ?>
                            <?php } else { ?>
                                <button class="btn btn-danger btn-lg btn-block" style="cursor: not-allowed; opacity: 0.7">Tindakan yang akan dilakukan</button> <br>
                            <?php } ?>
                        <?php } else {  ?>
                            <button class="btn btn-danger btn-lg btn-block" style="cursor: not-allowed; opacity: 0.7">Tindakan yang akan dilakukan</button> <br>
                        <?php } ?>

                    <?php } ?>

                <?php } ?>


            </div>
            <div class="panel-footer">
                <a href="../hdr.php?id=<?= $id_tema ?>"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>

            </div>
        </div>


    </div>

    <script script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {


            <?php if (empty($edit)) {  ?>
                $("button[name=bt]").prop("disabled", true);
                document.getElementById("tombol1").removeAttribute("href");
                document.getElementById("tombol2").removeAttribute("href");
                document.getElementById("tombol3").removeAttribute("href");
                document.getElementById("tombol4").removeAttribute("href");
            <?php } ?>


        });
    </script>

</body>

</html>