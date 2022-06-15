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
		<div class="d" style="background-color: #6ae6c2; padding:10px;">
			<h4 align=center>Aplikasi E-Coaching Pemberdayaan Keluarga dalam Perawatan Gangguan Jiwa</h4>
			<h3 align=center>TAMBAH DATA PENGGUNA</h3>
		</div>
		<hr>

		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #6ae6c2; padding:10px;">
				Tambah
			</div>

			<div class="panel-body">
				<div class="form-bottom">
					<form role="form" action="" method="post" class="login-form">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" name="nama" placeholder="Nama Lengkap..." class="form-control">
						</div>
						<div class="form-group">
							<label>Nomor HP</label>
							<input type="text" name="nohp" placeholder="Nomor Handphone..." class="form-control">
						</div>
						<div class="form-group">
							<label for="">Wilayah Puskesmas</label>
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
						<div class="form-group">
							<select name="level" class="form-control" required>
								<option value="">Mendaftar Sebagai : </option>
								<option value="1">Administrator</option>
								<option value="2">Perawat</option>
								<option value="3">Kader</option>
								<option value="4">Dinas</option>
								<option value="5">Dokter</option>
								<option value="6">Keluarga</option>
							</select>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Tambah Pengguna!</button>
					</form>
				</div>
			</div>

			<div class="panel-footer">
				<a href="data_pengguna.php"><button type="button" class="btn btn-block btn-warning btn-lg">Kembali</button></a>
			</div>
		</div>

	</div>

	<script src="assets/sweetalert2.all.min.js"></script>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level		= $_POST['level'];
	$nama		= $_POST['nama'];
	$nohp		= $_POST['nohp'];
	$puskesmas	= $_POST['puskesmas'];

	mysqli_query($connection, "INSERT INTO `user` (`username`, `password`, `level`,  `nama`, `no_hp`, `puskesmas`) VALUES ('$username', '$password', '$level', '$nama', '$nohp', '$puskesmas')");

	echo "
	<script>
		Swal.fire(
			'Berhasil',
			'Data berhasil ditambah.',
			'success'
		).then((result) => {
			window.location='data_pengguna.php';
		})
	</script>
        ";
}

?>