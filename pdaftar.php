<?php

$error = '';

include "connection.php";
if (isset($_POST['submit'])) {
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level		= $_POST['level'];
	$puskesmas	= $_POST['puskesmas'];
	$nama		= $_POST['nama'];
	$nohp		= $_POST['nohp'];

	mysqli_query($connection, "INSERT INTO `user` (`username`, `password`, `level`, `nama`, `no_hp`, `puskesmas`) VALUES ('$username', '$password', '$level', '$nama', '$nohp', '$puskesmas')");
	$query = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");
	if (mysqli_num_rows($query) == 0) {
		$error = "Username or Password is invalid";
	} else {
		$row = mysqli_fetch_assoc($query);
		$_SESSION['nama'] 		= $row['nama'];
		$_SESSION['no_hp'] 		= $row['no_hp'];
		$_SESSION['username'] 	= $row['username'];
		$_SESSION['level'] 		= $row['level'];
		$_SESSION['puskesmas'] 	= $row['puskesmas'];

		if ($row['level'] == "Administrator" && $level == "1") {

			header("Location: haladmin.php");
		} else if ($row['level'] == "Perawat" && $level == "2") {
			header("Location: halperawat.php");
		} else if ($row['level'] == "Kader" && $level == "3") {

			header("Location: halkader.php");
		} else if ($row['level'] == "Dinas" && $level == "4") {

			header("Location: haldinas.php");
		} else if ($row['level'] == "Dokter" && $level == "5") {

			header("Location: haldokter.php");
		} else if ($row['level'] == "Keluarga" && $level == "6") {

			header("Location: halkeluarga.php");
		} else {
			$error = "Failed Login";
		}
	}
}
