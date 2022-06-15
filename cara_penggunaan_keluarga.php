<?php
include('cekkeluarga.php');
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
            <h3 align=center>CARA PENGGUNAAN APLIKASI SI PANDAWA</h3>
        </div>
        <a href="beranda_keluarga.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a>
        <hr>
        <div class="panel" style="background-color: #98fade;">
            <div class="panel-body">


                <p><strong>A. &nbsp;Admin&nbsp;</strong></p>
                <ol>
                    <li>Admin login ke aplikasi untuk menambahkan akun untuk petugas, kader, orang tua ODGJ, dokter serta Dinas, selain itu, admin dapat merubah akun pribadi admin</li>
                    <li>Admin mengupload informasi terkait tata cara penggunaan aplikasi, informasi mengenai modul perawatan gangguan jiwa, materi video E-Coaching, serta 5 tugas keluarga</li>
                    <li>&nbsp;Admin menambahkan data puskesmas dan meregistrasikan kader sesuai desa pada area cakupan puskesmas</li>
                    <li>&nbsp;Admin melihat rekap laporan data terpadu</li>
                </ol>
                <p><strong>B. &nbsp;Petugas Puskesmas&nbsp;</strong></p>
                <ol>
                    <li>Petugas puskesmas berinteraksi dengan dokter Jiwa mengenai keluhan pasien</li>
                    <li>Petugas login ke aplikasi untuk merubah data petugas serta menambahkan akun kader</li>
                    <li>Petugas menambahkan atau merubah data pasien ODGJ dan mengeplot kader sesuai dengan lokasi desa dalam cakupan kerja</li>
                    <li>Petugas dapat berinteraksi dengan pasien lewat WA dan video call/call di wilayah kerjanya.</li>
                    <li>Petugas melihat rekap laporan data terpadu</li>
                </ol>
                <p><strong>C. Kader</strong></p>
                <ol>
                    <li>Kader dapat mengunjungi keluarga pasien dan mengarahkan untuk menggunakan aplikasi sesuai dengan data pasien yang didapatkan dari petugas puskesmas sesuai dengan lokasi desa dalam cakupan kerjanya.</li>
                    <li>Kader dapat berinteraksi dengan keluarga pasien dan petugas serta melihat rekap laporan data terpadu yang menjadi tanggungjawabnya</li>
                </ol>
                <p><strong>D. Keluarga pasien ODGJ</strong></p>
                <ol>
                    <li>Keluarga pasien login ke aplikasi dengan username dan password yang diberikan oleh petugas melalui kader</li>
                    <li>Keluarga pasien melengkapi data pribadi dan kondisi pasien termasuk lokasi perawatan, waktu periksa, dan status obat yang diberikan</li>
                    <li>Keluarga pasien dapat berinteraksi dengan petugas dan kader lewat WA dan video call/call.</li>
                    <li>Dokter dan Dinas&nbsp;</li>
                </ol>
                <p><strong>E. Dokter dan Dinas</strong></p>
                <ol>
                    <li>Dokter dan dinas dapat login ke aplikasi dan merubah data login pribadi seperti username dan password</li>
                    <li>Dokter dan dinas dapat melihat rekap laporan data terpadu.</li>
                </ol>
                </p>
            </div>
        </div>

</body>

</html>