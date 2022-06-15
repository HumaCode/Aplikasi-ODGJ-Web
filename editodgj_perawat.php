<?php
include('cekperawat.php');
include "connection.php";
// include "pupdateodgj_perawat.php";
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

	<div class="container" style="margin-top:40px">
		<hr>
		<div style="background-color: #6ae6c2; padding:10px; margin-bottom:15px;">
			<h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
			<h3 align=center>EDIT DATA ODGJ</h3>
		</div>
		<hr>

		<div class="panel panel-default">
			<div class="panel-heading" style="background-color:  #6ae6c2;">
				<h3 class="panel-title">Edit Data</h3>
			</div>
			<div class="panel-body">
				<div class="form-bottom">
					<form role="form" action="" method="post" class="login-form">

						<?php
						$id = $_GET['id'];
						$data = mysqli_query($connection, "select * from odgj where nik='$id'");

						$d = mysqli_fetch_array($data) ?>
						<div class="form-group">
							<label>NIK</label>
							<input type="text" name="nik" value="<?php echo $d['nik']; ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="tempat" value="<?php echo $d['tempat_lahir']; ?>" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tgl" value="<?php echo $d['tgl_lahir']; ?>" class="form-date form-control" required>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Pekerjaan</label>
							<select name="pekerjaan" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Pelajar/Mahasiswa" <?= ($d['pekerjaan'] == 'Pelajar/Mahasiswa') ? 'selected' : '' ?>>Pelajar/Mahasiswa</option>
								<option value="PNS" <?= ($d['pekerjaan'] == 'PNS') ? 'selected' : '' ?>>PNS</option>
								<option value="TNI/POLRI" <?= ($d['pekerjaan'] == 'TNI/POLRI') ? 'selected' : '' ?>>TNI/POLRI</option>
								<option value="Pegawai Swasta" <?= ($d['pekerjaan'] == 'Pegawai Swasta') ? 'selected' : '' ?>>Pegawai Swasta</option>
								<option value="Wirausaha" <?= ($d['pekerjaan'] == 'Wirausaha') ? 'selected' : '' ?>>Wirausaha</option>
								<option value="Tidak Bekerja" <?= ($d['pekerjaan'] == 'Tidak Bekerja') ? 'selected' : '' ?>>Tidak Bekerja</option>
							</select>
						</div>
						<div class="form-group">
							<label>Pendidikan</label>
							<select name="pendidikan" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Lulus SD" <?= ($d['pendidikan'] == 'Lulus SD') ? 'selected' : '' ?>>Lulus SD</option>
								<option value="Lulus SMP" <?= ($d['pendidikan'] == 'Lulus SMP') ? 'selected' : '' ?>>Lulus SMP</option>
								<option value="Lulus SMA/SMK" <?= ($d['pendidikan'] == 'Lulus SMA/SMK') ? 'selected' : '' ?>>Lulus SMA/SMK</option>
								<option value="Lulus D3" <?= ($d['pendidikan'] == 'Lulus D3') ? 'selected' : '' ?>>Lulus D3</option>
								<option value="Lulus S1" <?= ($d['pendidikan'] == 'Lulus S1') ? 'selected' : '' ?>>Lulus S1</option>
								<option value="Lulus S2" <?= ($d['pendidikan'] == 'Lulus S2') ? 'selected' : '' ?>>Lulus S2</option>
								<option value="Tidak Bersekolah" <?= ($d['pendidikan'] == 'Tidak Bersekolah') ? 'selected' : '' ?>>Tidak Bersekolah</option>
							</select>
						</div>
						<div class="form-group">
							<label>Awal Sakit</label>
							<select name="awal" id="" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php for ($i = 1998; $i <= date('Y'); $i++) { ?>
									<?php if ($i == $d['awal_sakit']) { ?>
										<option value="<?= $i ?>" selected><?= $i ?></option>
									<?php } else { ?>
										<option value="<?= $i ?>"><?= $i ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Dirawat Berapa Kali</label>
							<select name="rawat" id="" class="form-control" required>
								<option value="">-- Pilih --</option>
								<?php for ($i = 1; $i <= 10; $i++) { ?>
									<?php if ($i  == $d['rawat']) { ?>
										<option value="<?= $i ?> " selected><?= $i ?> Kali</option>
									<?php } else { ?>
										<option value="<?= $i ?>"><?= $i ?> Kali</option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Status Saat Ini</label>
							<textarea rows="3" name="status" class="form-control"><?php echo $d['status']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Lokasi Saat Ini</label>
							<select name="lokasi" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Di Rumah" <?= ($d['posisi'] == 'Di Rumah') ? 'selected' : '' ?>>Di Rumah</option>
								<option value="Di Rumah Sakit" <?= ($d['posisi'] == 'Di Rumah Sakit') ? 'selected' : '' ?>>Di Rumah Sakit</option>
								<option value="Lainnya" <?= ($d['posisi'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
							</select>
						</div>
						<div class="form-group">
							<label>Obat-Obatan</label>
							<select name="obat" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Selalu Diberikan" <?= ($d['obat'] == 'Selalu Diberikan') ? 'selected' : '' ?>>Selalu Diberikan</option>
								<option value="Sering Diberikan" <?= ($d['obat'] == 'Sering Diberikan') ? 'selected' : '' ?>>Sering Diberikan</option>
								<option value="Jarang Diberikan" <?= ($d['obat'] == 'Jarang Diberikan') ? 'selected' : '' ?>>Jarang Diberikan</option>
								<option value="Tidak Pernah Diberikan" <?= ($d['obat'] == 'Tidak Pernah Diberikan') ? 'selected' : '' ?>>Tidak Pernah Diberikan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Wilayah Puskesmas</label>
							<select name="puskesmas" class="form-control" required>
								<option value="">-- Pilih --</option>
								<option value="Tirto 2" <?= ($d['puskesmas'] == 'Tirto 2') ? 'selected' : '' ?>>Tirto 2</option>
								<option value="Wiradesa" <?= ($d['puskesmas'] == 'Wiradesa') ? 'selected' : '' ?>>Wiradesa</option>
								<option value="Wonopringgo" <?= ($d['puskesmas'] == 'Wonopringgo') ? 'selected' : '' ?>>Wonopringgo</option>
								<option value="Kedungwuni 2" <?= ($d['puskesmas'] == 'Kedungwuni 2') ? 'selected' : '' ?>>Kedungwuni 2</option>
								<option value="Talun" <?= ($d['puskesmas'] == 'Talun') ? 'selected' : '' ?>>Talun</option>
								<option value="Kesesi" <?= ($d['puskesmas'] == 'Kesesi') ? 'selected' : '' ?>>Kesesi</option>
							</select>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>

					</form>
				</div>
			</div>
			<div class="panel-footer">
				<a href="data_odjg_perawat.php"><button type="button" class="btn btn-block btn-warning btn-lg">Kembali</button></a>
			</div>
		</div>



		<hr>

	</div>

	<script src="assets/sweetalert2.all.min.js"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
	$nik            = $_POST['nik'];
	$nama           = $_POST['nama'];
	$tmpt           = $_POST['tempat'];
	$tgl            = $_POST['tgl'];
	$alamat         = $_POST['alamat'];
	$pekerjaan      = $_POST['pekerjaan'];
	$pendidikan     = $_POST['pendidikan'];
	$awal           = $_POST['awal'];
	$rawat          = $_POST['rawat'];
	$status         = $_POST['status'];
	$lokasi         = $_POST['lokasi'];
	$obat           = $_POST['obat'];
	$puskesmas      = $_POST['puskesmas'];

	mysqli_query($connection, "UPDATE `odgj` SET `nama` = '$nama', `tempat_lahir` = '$tmpt', `tgl_lahir` = '$tgl', `alamat` = '$alamat', `pekerjaan` = '$pekerjaan', `pendidikan` = '$pendidikan', `awal_sakit` = '$awal', `rawat` = '$rawat', `status` = '$status', `posisi` = '$lokasi', `obat` = '$obat', `puskesmas` = '$puskesmas' WHERE `odgj`.`nik` = '$nik'");


	echo "
	<script>
		Swal.fire(
			'Berhasil',
			'Data berhasil diubah.',
			'success'
		).then((result) => {
			window.location='data_odjg_perawat.php';
		})
	</script>
	";
}

?>