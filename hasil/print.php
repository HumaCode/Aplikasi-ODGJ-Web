<?php
include('../connection.php');
include('../cekadmin.php');
require_once("dompdf/autoload.inc.php");

$sesi = $_SESSION['puskesmas'];

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($connection, "SELECT hasil.username, hasil.goal, hasil.real1, hasil.option1, hasil.will, hasil.tgl, tema.nama_tema, kuis.nama_kuis, user.puskesmas, user.nama, user.level
                                    FROM `hasil` 
                                    JOIN tema ON hasil.id_tema=tema.id_tema
                                    JOIN kuis ON hasil.id_kuis=kuis.id_kuis
                                    JOIN user ON hasil.username=user.username
                                    WHERE puskesmas = '$sesi'
                                    AND user.level = 'Keluarga'
                                    ORDER BY hasil.tgl ASC");
$html = '<div style="margin-bottom: 50px;"><center><h3>Hasil Ecoaching Wilayah Puskesmas : ' . $sesi . '</h3></center><div><hr><br>';
$html .= "<strong>Tanggal Download : " . tanggal_indonesia(date('Y-m-d')) . "</strong>";
$html .= '<table border="1" width="100%" style="margin-top: 50px;" cellpadding="2" cellspacing="0">
 <tr>
 <th width="15">No</th>
 <th>Nama</th>
 <th width="70"> Tanggal</th>
 <th>Modul</th>
 <th width="50"> Tugas</th>
 <th width="100">Goal / Tujuan</th>
 <th>Reality / Kenyataan Saat Ini</th>
 <th width="100"> Option / Pilihan Tindakan</th>
 <th width="75%">Will / Pilihan yang Akan Dilakukan</th>
 </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['nama'] . "</td>
 <td>" . tanggal_indonesia($row['tgl'], false) . "</td>
 <td>" . $row['nama_tema'] . "</td>
 <td>" . $row['nama_kuis'] . "</td>
 <td>" . $row['goal'] . "</td>
 <td>" . $row['real1'] . "</td>
 <td>" . $row['option1'] . "</td>
 <td>" . $row['will'] . "</td>
 </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
// $customPaper = array(0, 0, 360, 360);
// $dompdf->setpaper($customPaper);
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('hasil_ecoaching.pdf');
