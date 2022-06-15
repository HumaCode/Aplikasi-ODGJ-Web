<?php
include('../../../cekkeluarga.php');
include('../../../connection.php');


$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);
$tgl = $date->format('Y-m-d H:i:s');

$id_tema        = $_GET['id_tema'];
$id_kuis        = $_GET['id_kuis'];
$username       = $_SESSION['username'];


// tombol tambah 
if (isset($_POST['kirim'])) {
    $id_tema    = $_POST['id_tema'];
    $id_kuis    = $_POST['id_kuis'];
    $username   = $_POST['username'];
    $id_hasil   = $_POST['id_hasil'];
    $goal       = $_POST['goal'];
    $real       = $_POST['real'];



    mysqli_query($connection, "UPDATE  hasil SET username = '$username', id_tema = '$id_tema', id_kuis = '$id_kuis', goal = '$goal', real1 = '$real', option1 = 'null', will = 'null', tgl = '$tgl' WHERE id_hasil = '$id_hasil'");

    header('location:../tugas2_keluarga.php?id=' . $id_kuis . '&id_tema=' . $id_tema . '');
}

// menampilkan data 

$i = mysqli_query($connection, "SELECT * FROM hasil WHERE username = '$username' AND id_kuis = '$id_kuis' ORDER BY id_hasil DESC LIMIT 1");

$hasil = mysqli_fetch_array($i);


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
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/font-awesome/css/font-awesome.min.css">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <?php
                    $nama = $_SESSION['username'];
                    echo "<img style='height: 30px; margin-top: -5px;' src='../../../assets/img/icon/avatar.png' class='img-circle'>";
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
            <h3 align=center>Tugas 2 - Kenyataan Saat Ini</h3>
        </div>
        <hr>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/TK3IOvrNV7M?playlist=TK3IOvrNV7M&loop=1" allowfullscreen>
                    </iframe>
                </div>

                <hr>

                <form action="" method="POST">

                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                    <input type="hidden" name="id_tema" value="<?= $id_tema ?>">
                    <input type="hidden" name="id_kuis" value="<?= $id_kuis ?>">
                    <input type="hidden" name="id_hasil" value="<?= $hasil['id_hasil'] ?>">
                    <input type="hidden" name="goal" value="<?= $hasil['goal'] ?>">

                    <div class="form-group">

                        <small class="text-danger"> Pertanyaan *</small>
                        <p>Pilih rentang 1-10 </p>

                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="1">
                                    1
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="2">
                                    2
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="3">
                                    3
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="5">
                                    4
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="5">
                                    5
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="6">
                                    6
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="7">
                                    7
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="8">
                                    8
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="9">
                                    9
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="real" id="real1" value="10">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <button type="submit" name="kirim" class="btn btn-primary" onclick="return radioValidation();">Kirim</button>

                </form>
            </div>
            <div class="panel-footer">

                <a href="../tugas2_keluarga.php?id=<?= $id_kuis ?>&id_tema=<?= $id_tema ?>"><button type="button" class="btn btn-warning btn-lg btn-block ">Kembali</button></a><BR>
            </div>
        </div>


    </div>
    <script src="../../../assets/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        function radioValidation() {

            var real = document.getElementsByName('real');
            var realValue = false;

            for (var i = 0; i < real.length; i++) {
                if (real[i].checked == true) {
                    realValue = true;
                }
            }
            if (!realValue) {
                Swal.fire(
                    'Upssz.',
                    'Pilih salah satu poin.',
                    'warning'
                )
                return false;
            }

        }
    </script>

</body>

</html>