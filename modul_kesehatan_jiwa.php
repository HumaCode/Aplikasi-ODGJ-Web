<?php


include('cekadmin.php');

// include "connection.php";
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

    <style>
        td {
            padding: 5px;
        }
    </style>

</head>

<body>
    <nav class=" navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <h3 align=center>Modul Kesehatan Jiwa</h3>
        </div>
        <hr>
        <a href="modul.php"><button type="button" class="btn btn-warning btn-lg btn-block">Kembali</button></a>
        <hr>

        <div class="panel">
            <div class="panel-body" style="background-color: #d9d9d9; border-radius:10px;">
                <h2 class="text-center">KESEHATAN JIWA</h2><br>
                <p>Kesehatan adalah kondisi sehat fisik, mental, sosial, dan spiritual, bukan hanya bebas dari sakit dan cacat
                </p>


                Ciri-ciri orang sehat jiwa
                <ul>
                    <li>Menyadari potensinya</li>
                    <li>Mengatasi stres dalam kehidupannya</li>
                    <li>Bekerja produktif</li>
                    <li>Berkontribusi pada masyarakat</li>
                </ul>

                <strong>Keluarga dengan Anggota Keluarga yang Gangguan Jiwa</strong>
                <p>Keluarga yang memiliki anggota keluarga yang mengalami gangguan dalam pikiran, perilaku dan perasaan yang dapat menimbulkan perubahan dan menjadi hambatan fungsi kehidupan sehari hari.
                </p>

                Tanda Gangguan Jiwa Biasanya Muncul Seperti :
                <ol>
                    <li>Marah tanpa sebab, teriak dan kasar</li>
                    <li>Mengurung diri</li>
                    <li>Tidak mengenali orang lain</li>
                    <li>Bicara kacau, bicara sendiri, tertawa sendiri</li>
                    <li>Tidak mampu merawat diri sendiri</li>
                    <li>Was was/ curiga berkepanjangan</li>
                    <li>Tidak mau makan berkepanjangan</li>
                    <li>Tidak bisa tidur berkepanjangan </li>
                    <li>Sedih berkepanjangan </li>
                    <li>Tidak semangat cenderung malas berkepanjangan </li>
                </ol>
                <strong>Tugas Kader Kesehatan Jiwa</strong>
                <ol>

                    <li> Medeteksi Kesehatan Jiwa Keluarga</li>
                    <li> Menggerakkan pasien dan keluarga gangguan Jiwa aktifitas kelompok di masyarakat</li>
                    <li> Merujuk Pasien ke Puskesmas</li>
                    <li> Melakukan Kunjungan Rumah</li>

                </ol>

                <strong>Tugas Keluarga yang Memiliki Anggota Keluarga yang Gangguan Jiwa</strong>

                <ol>
                    <li> Mengenal masalah yang dialami pasien </li>
                    <li> Mampu memutuskan pelayanan kesehatan pasien </li>
                    <li> Mampu merawat pasien : perawat diri, bersosialisasi, melakukan kegiatan rumah tangga </li>
                    <li> Menciptakan suasana keluarga yang kondusif </li>
                    <li> Menggunakan fasilitas pelayanan kesehatan jiwa </li>
                </ol>


                <strong>Tugas Perawat pada Pasien Gangguan Jiwa</strong>
                <ol>
                    <li> Melatih pasien Mengendalikan Gejala </li>
                    <li> Melatih pasien Merawat Diri </li>
                    <li> Melatih pasien Bersosialisasi </li>
                    <li> Melatih pasien Melakukan Kegiatan Rumah Tangga </li>
                    <li> Melatih pasien Bekerja </li>

                </ol>


                <br>
                <h3 class="text-center">KRITERIA MASALAH YANG DIALAMI PASIEN</h3>
                <p class="text-center">Harga Diri Rendah Kronik
                </p>

                <div class="text-center">
                    <strong>TANDA DAN GEJALA </strong>
                </div>
                <table border="1">
                    <thead>
                        <tr>
                            <td class="text-center"><strong>Subjektif</strong> </td>
                            <td class="text-center"><strong>Objektif</strong> </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1. Menilai diri negative/mengkritik diri</td>
                            <td> 1. Berjalan menunduk</td>
                        </tr>
                        <tr>
                            <td> 2. Merasa tidak berarti/ tidak berharga</td>
                            <td> 2. Postur tubuh menunduk</td>
                        </tr>
                        <tr>
                            <td> 3. Merasa malu/ minder</td>
                            <td> 3. Kontak mata kurang</td>
                        </tr>
                        <tr>
                            <td> 4. Merasa tidak mampu melakukan apapun</td>
                            <td> 4. Lesu dan tidak bergairah</td>
                        </tr>
                        <tr>
                            <td> 5. Meremehkan kemampuan yang dimiliki</td>
                            <td> 5. Berbicara pelan dan lirih</td>
                        </tr>
                        <tr>
                            <td> 6. Merasa tidak memiliki kelebihan</td>
                            <td> 6. Ekspresi muka datar</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 7. Pasif</td>
                        </tr>


                    </tbody>
                </table>


                <hr>
                <h3 class="text-center">KRITERIA MASALAH YANG DIALAMI PASIEN</h3>
                <p class="text-center">Isolasi Sosial
                </p>

                <div class="text-center">
                    <strong>TANDA DAN GEJALA </strong>
                </div>
                <table border="1">
                    <thead>
                        <tr>
                            <td class="text-center"><strong>Subjektif</strong> </td>
                            <td class="text-center"><strong>Objektif</strong> </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1. Ingin sendiri</td>
                            <td> 1. Menarik diri</td>
                        </tr>
                        <tr>
                            <td> 2. Merasa tidak nyaman ditempat umum</td>
                            <td> 2. Menolak melakukan interaksi</td>
                        </tr>
                        <tr>
                            <td> 3. Merasa berbeda dengan orang lain</td>
                            <td> 3. Afek sedih</td>
                        </tr>
                        <tr>
                            <td> 4. Menolak berinteraksi dengan orang lain</td>
                            <td> 4. Tidak ada kontak mata</td>
                        </tr>
                        <tr>
                            <td> 5. Merasa sendirian</td>
                            <td> 5. Tidak bergairah atau lesu</td>
                        </tr>
                        <tr>
                            <td> 6. Merasa tidak diterima</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> 7. Tidak mempunyai sahabat</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>


                <hr>
                <h3 class="text-center">KRITERIA MASALAH YANG DIALAMI PASIEN</h3>
                <p class="text-center">Defisit Perawatan Diri </p>

                <div class="text-center">
                    <strong>TANDA DAN GEJALA </strong>
                </div>
                <table border="1">
                    <thead>
                        <tr>
                            <td class="text-center"><strong>Data Subjektif</strong> </td>
                            <td class="text-center"><strong>Data Objektif</strong> </td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> 1. Menolak melakukan perawatan diri: kebersihan diri, berpakaian, makan dan minum, dan eliminasi</td>
                            <td> 1. Kulit, rambut, gigi, kuku kotor</td>
                        </tr>
                        <tr>
                            <td> 2. Menyampaikan ketidak inginan melakukan perawatan diri: kebersihan diri, berpakaian, makan dan minum, dan eliminasi</td>
                            <td> 2. Pakaian kotor, tidak rapi, dan tidak tepat</td>
                        </tr>
                        <tr>
                            <td> 3. Menytakan tidak tahu cara perawatan diri : kebersihan diri, berpakaian, makan dan minum, dan eliminasi</td>
                            <td> 3. Makan dan minum tidak beraturan</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 4. Eliminasi (BAK dan BAB) tidak pada tempatnya</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 5. Lingkungan tempat tinggal kotor dan tidak rapi </td>
                        </tr>
                    </tbody>
                </table>


                <hr>
                <h3 class="text-center">KRITERIA MASALAH YANG DIALAMI PASIEN</h3>
                <p class="text-center">Halusinasi</p>

                <div class="text-center">
                    <strong>TANDA DAN GEJALA </strong>
                </div>
                <table border="1">
                    <thead>
                        <tr>
                            <td class="text-center"><strong>Data Subjektif</strong> </td>
                            <td class="text-center"><strong>Data Objektif</strong> </td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> 1. Mendengar suara orang bicara tanpa ada orangnya</td>
                            <td> 1. Bicara sendiri</td>
                        </tr>
                        <tr>
                            <td> 2. Melihat benda, orang atau sinar tanpa ada objektifnya</td>
                            <td> 2. Tertawa sendiri</td>
                        </tr>
                        <tr>
                            <td> 3. Menghirup bau-bauan yang tidak sedap seperti bau badan padahall tidak</td>
                            <td> 3. Melihat kesatu arah</td>
                        </tr>
                        <tr>
                            <td> 4. Merasakan pengecapan yang tidak enak</td>
                            <td> 4. Mengarahkan telinga kearah tertentu</td>
                        </tr>
                        <tr>
                            <td> 5. Merasakan rabaan atau gerakan badan</td>
                            <td> 5. Tidak dapat memfokuskan pikiran </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 6. Diam sambil menikmati halusinasinya </td>
                        </tr>
                    </tbody>
                </table>


                <hr>
                <h3 class="text-center">KRITERIA MASALAH YANG DIALAMI PASIEN</h3>
                <p class="text-center">Risiko Perilaku Kekerasan</p>


                <div class="text-center">
                    <strong>TANDA DAN GEJALA </strong>
                </div>
                <table border="1">
                    <thead>
                        <tr>
                            <td class="text-center"><strong>Data Subjektif</strong> </td>
                            <td class="text-center"><strong>Data Objektif</strong> </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1. Mengatakan benci/kesal dengan orang lain</td>
                            <td> 1. Melotot</td>
                        </tr>
                        <tr>
                            <td> 2. Mengataka ingin memukul orang lain</td>
                            <td> 2. Pandangan tajam</td>
                        </tr>
                        <tr>
                            <td> 3. Mengatakan tidak mampu mengontrol perilaku kekerasan</td>
                            <td> 3. Tangan mengepal, rahang mengatup</td>
                        </tr>
                        <tr>
                            <td> 4. Mengungkapkan keinginan menyakiti diri sendiri, orang lain, dan merusak lingkungan</td>
                            <td> 4. Gelisah dan mondar mandir</td>
                        </tr>
                        <tr>
                            <td> 5. Merasakan rabaan atau gerakan badan</td>
                            <td> 5. Mudah tersinggung </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 6. Nada suara tinggi dan bicara kasar </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 7. Mendominasi pembicaraan </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 8. Merusak lingkungan </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> 9. Memukul orang lain </td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <hr>
                <h3 class="text-center">Tindakan Keluarga</h3>
                <p class="text-center">Harga Diri Rendah Kronik </p>

                <ol class="text-justify">
                    <li>Keluarga mengenali masalah yang dialami pasien (tanda pasien mengalami defisit perawatan diri)</li>
                    <li>Keluarga memutuskan perawatan pasien: mencari bantuan ke kader dan petugas kesehatan</li>
                    <li>Keluarga merawat pasien di rumah dengan: mengajarkan kepada pasien untuk kebersihan diri dengan benar, makan dan minum dengan benar, melakukan BAB/BAK dengan benar, melibatkan dalam kebersihan dan kerapihan lingkungan rumah, dan minum obat dengan rutin dan benar</li>
                    <li>Menciptakan suasana keluarga yang kondusif: selalu memuji pasien, menunjukkan perhatian pada pasien, dan memberikan kesempatan pada pasien untuk melakukan perawatan diri</li>
                    <li>Menggunakan fasilitas pelayanan kesehatan jiwa untuk periksa dan berobat</li>
                </ol>

                <hr>
                <h3 class="text-center">Tindakan Keluarga</h3>
                <p class="text-center">Isolasi Sosial </p>

                <ol class="text-justify">
                    <li>Keluarga mengenali masalah yang dialami pasien (tanda pasien mengalami isolasi sosial)</li>
                    <li>Keluarga memutuskan perawatan pasien: mencari bantuan ke kader dan petugas kesehatan</li>
                    <li>Keluarga merawat pasien di rumah dengan: melibatkan pasien dalam aktiftas sehari-hari dan bercakap-cakap, mengajak pasien aktiftas sosial seperti berbelanja, menghadiri kegiatan ibadah, terlibat kegiatan kelompok seperti arisan, kerja bakti, dan minum obat dengan rutin dan benar</li>
                    <li>Menciptakan suasana keluarga yang kondusif: selalu memuji pasien, menunjukkan perhatian pada pasien</li>
                    <li>Menggunakan fasilitas pelayanan kesehatan jiwa untuk periksa dan berobat</li>
                </ol>


                <hr>
                <h3 class="text-center">Tindakan Keluarga</h3>
                <p class="text-center">Harga Diri Rendah Kronik </p>

                <ol class="text-justify">
                    <li>Keluarga mengenali masalah yang dialami pasien (tanda pasien mengalami defisit perawatan diri)</li>
                    <li>Keluarga memutuskan perawatan pasien: mencari bantuan ke kader dan petugas kesehatan</li>
                    <li>Keluarga merawat pasien di rumah dengan: mengajarkan kepada pasien untuk kebersihan diri dengan benar, makan dan minum dengan benar, melakukan BAB/BAK dengan benar, melibatkan dalam kebersihan dan kerapihan lingkungan rumah, dan minum obat dengan rutin dan benar</li>
                    <li>Menciptakan suasana keluarga yang kondusif: selalu memuji pasien, menunjukkan perhatian pada pasien, dan memberikan kesempatan pada pasien untuk melakukan perawatan diri</li>
                    <li>Menggunakan fasilitas pelayanan kesehatan jiwa untuk periksa dan berobat</li>
                </ol>

                <hr>
                <h3 class="text-center">Tindakan Keluarga</h3>
                <p class="text-center">Defisit Perawatan Diri</p>

                <ol class="text-justify">
                    <li>Keluarga mengenali masalah yang dialami pasien (tanda pasien mengalami defisit perawatan diri)</li>
                    <li>Keluarga memutuskan perawatan pasien: mencari bantuan ke kader dan petugas kesehatan</li>
                    <li>Keluarga merawat pasien di rumah dengan: mengajarkan kepada pasien untuk kebersihan diri dengan benar, makan dan minum dengan benar, melakukan BAB/BAK dengan benar, melibatkan dalam kebersihan dan kerapihan lingkungan rumah, dan minum obat dengan rutin dan benar</li>
                    <li>Menciptakan suasana keluarga yang kondusif: selalu memuji pasien, menunjukkan perhatian pada pasien, dan memberikan kesempatan pada pasien untuk melakukan perawatan diri</li>
                    <li>Menggunakan fasilitas pelayanan kesehatan jiwa untuk periksa dan berobat</li>
                </ol>


                <hr>
                <h3 class="text-center">Tindakan Keluarga</h3>
                <p class="text-center">Halusinasi</p>

                <ol class="text-justify">
                    <li>Keluarga mengenali masalah yang dialami pasien (tanda pasien mengalami halusinasi)</li>
                    <li>Keluarga memutuskan perawatan pasien: mencari bantuan ke kader dan petugas kesehatan</li>
                    <li>Keluarga merawat pasien di rumah dengan: mengajarkan kepada pasien untuk menghardik halusinasi, mengabaikan halusinasi, mengajak pasien bercakap-cakap dan melakukan kegiatan rumah secara teratur, dan minum obat dengan rutin dan benar</li>
                    <li>Menciptakan suasana keluarga yang kondusif: selalu memuji pasien, menunjukkan perhatian pada pasien, membuat lingkungan rumah tidak sepi dan pasien tidak menyendiri</li>
                    <li>Menggunakan fasilitas pelayanan kesehatan jiwa untuk periksa dan berobat</li>
                </ol>


                <hr>
                <h3 class="text-center">Tindakan Keluarga</h3>
                <p class="text-center">Risiko Perilaku Kekerasan</p>

                <ol class="text-justify">
                    <li>Keluarga mengenali masalah yang dialami pasien (tanda pasien mengalami risiko perilaku kekerasan)</li>
                    <li>Keluarga memutuskan perawatan pasien: mencari bantuan ke kader dan petugas kesehatan</li>
                    <li>Keluarga merawat pasien di rumah dengan: mengajarkan kepada pasien untuk tarik nafas dalam ketika ingin marah, berbicara yang baik dan tidak marah, bercerita jika ada masalah dan membutuhkan atau menginginkan sesuatu, melakukan sholat dan dzikir, dan minum obat dengan rutin dan benar</li>
                    <li>Menciptakan suasana keluarga yang kondusif: selalu memuji pasien, menunjukkan perhatian pada pasien, tidak menunjukkan amarah keluarga kepada pasien</li>
                    <li>Menggunakan fasilitas pelayanan kesehatan jiwa untuk periksa dan berobat</li>
                </ol>
            </div>
        </div>
    </div>

</body>

</html>