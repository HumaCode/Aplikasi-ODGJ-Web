<?php
include('cekadmin.php');
include "connection.php";
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
			<h3 align=center>TAMBAH DATA ODGJ</h3>
		</div>
		<hr>

		<div class="panel panel-default">
			<div class="panel-heading" style="background-color:  #6ae6c2;">
				<h3 class="panel-title">Tambah</h3>
			</div>

			<div class="panel-body">
				<div class="form-bottom">
					<form role="form" action="" method="post" class="login-form">
						<div class="form-group">
							<label>NIK</label>
							<input type="text" name="nik" placeholder="NIK..." class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" placeholder="Nama..." class="form-control" required>
						</div>
						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="tempat" placeholder="Tempat Lahir..." class="form-control" required>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tgl" class="form-date form-control" required>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" placeholder="Alamat..." class="form-control" required>
						</div>
						<div class="form-group">
							<label>Pekerjaan</label>
							<select name="pekerjaan" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
								<option value="PNS">PNS</option>
								<option value="TNI/POLRI">TNI/POLRI</option>
								<option value="Pegawai Swasta">Pegawai Swasta</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="Tidak Bekerja">Tidak Bekerja</option>
							</select>
						</div>
						<div class="form-group">
							<label>Pendidikan</label>
							<select name="pendidikan" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Lulus SD">Lulus SD</option>
								<option value="Lulus SMP">Lulus SMP</option>
								<option value="Lulus SMA/SMK">Lulus SMA/SMK</option>
								<option value="Lulus D3">Lulus D3</option>
								<option value="Lulus S1">Lulus S1</option>
								<option value="Lulus S2">Lulus S2</option>
								<option value="Tidak Bersekolah">Tidak Bersekolah</option>
							</select>
						</div>
						<div class="form-group">
							<label>Awal Sakit</label>
							<select name="awal" id="" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php for ($i = 1998; $i <= date('Y'); $i++) { ?>
									<option value="<?= $i ?>"><?= $i ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Dirawat Berapa Kali</label>
							<select name="rawat" id="" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php for ($i = 1; $i <= 10; $i++) { ?>
									<option value="<?= $i ?> "><?= $i ?> Kali</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Status Saat Ini</label>
							<textarea rows="3" name="status" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Lokasi Saat Ini</label>
							<select name="lokasi" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Di Rumah">Di Rumah</option>
								<option value="Di Rumah Sakit">Di Rumah Sakit</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>
						<div class="form-group">
							<label>Obat-Obatan</label>
							<select name="obat" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Selalu Diberikan">Selalu Diberikan</option>
								<option value="Sering Diberikan">Sering Diberikan</option>
								<option value="Jarang Diberikan">Jarang Diberikan</option>
								<option value="Tidak Pernah Diberikan">Tidak Pernah Diberikan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Wilayah Puskesmas</label>
							<select name="puskesmas" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Tirto 2">Tirto 2</option>
								<option value="Wiradesa">Wiradesa</option>
								<option value="Wonopringgo">Wonopringgo</option>
								<option value="Kedungwuni 2">Kedungwuni 2</option>
								<option value="Talun">Talun</option>
								<option value="Kesesi">Kesesi</option>
							</select>
						</div>

						<button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
					</form>
				</div>
			</div>

			<div class="panel-footer">
				<a href="data_odjg.php"><button type="button" class="btn btn-warning btn-block btn-lg">Kembali</button></a>
			</div>
		</div>




		<hr>

	</div>

	<script src="assets/sweetalert2.all.min.js"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
	$nik        = $_POST['nik'];
	$nama       = $_POST['nama'];
	$tmpt       = $_POST['tempat'];
	$tgl        = $_POST['tgl'];
	$alamat     = $_POST['alamat'];
	$pekerjaan  = $_POST['pekerjaan'];
	$pendidikan = $_POST['pendidikan'];
	$awal       = $_POST['awal'];
	$rawat      = $_POST['rawat'];
	$status     = $_POST['status'];
	$lokasi     = $_POST['lokasi'];
	$obat       = $_POST['obat'];
	$puskesmas  = $_POST['puskesmas'];



	mysqli_query($connection, "INSERT INTO `odgj` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `pekerjaan`, `pendidikan`, `awal_sakit`, `rawat`, `status`, `posisi`, `obat`, `puskesmas`) VALUES 
        ('$nik', '$nama', '$tmpt', '$tgl', '$alamat', '$pekerjaan', '$pendidikan', '$awal', '$rawat', '$status', '$lokasi', '$obat', '$puskesmas')");


	echo "
            <script>
				Swal.fire(
					'Berhasil',
					'Data berhasil ditambahkan.',
					'success'
				).then((result) => {
					window.location='data_odjg.php';
				})
            </script>
        ";
}

?>