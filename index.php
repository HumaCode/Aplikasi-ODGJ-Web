<?php
session_start();
if ($_SESSION) {
	if ($_SESSION['level'] == "Administrator") {
		header("Location: haladmin.php");
	}
	if ($_SESSION['level'] == "Perawat") {
		header("Location: perawat.php");
	}
	if ($_SESSION['level'] == "Kader") {
		header("Location: kader.php");
	}
	if ($_SESSION['level'] == "Dinas") {
		header("Location: dinas.php");
	}
	if ($_SESSION['level'] == "Dokter") {
		header("Location: dokter.php");
	}
}



include('login.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/form-elements.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

	<style>
		@font-face {
			font-family: tulisan_keren;
			src: url(Anton-Regular.ttf);
		}

		.sub_judul {
			font-family: "tulisan_keren";
			font-variant: inherit;
			color: black;
		}
	</style>
</head>

<body style="background-color: #8BD9CA;">
	<!-- Top content -->
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box">

						<div class="text-center">

							<h3 style="color: black;"><strong>APLIKASI E-COACHING</strong></h3>
							<h5 style="color: black;">PEMBERDAYAAN KELUARGA DALAM PERAWATAN GANGGUAN JIWA</h5>
							<h2 class="sub_judul">Si Pandawa</h2>
						</div>
						<div class="form-bottom" style="margin-top: 10px;">
							<div class="text-center">

								<p style="color: black;">Masukkan Username dan Password :</p>
							</div>
							<form role="form" action="" method="post" class="login-form">
								<div class="form-group">
									<label class="sr-only" for="form-username">Username</label>
									<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
								</div>
								<div class="form-group">
									<label class="sr-only" for="form-password">Password</label>
									<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
								</div>
								<div class="form-group">
									<select name="level" class="form-control" required>
										<option value="">Pilih Level User</option>
										<option value="1">Administrator</option>
										<option value="2">Perawat</option>
										<option value="3">Kader</option>
										<option value="4">Dinas</option>
										<option value="5">Dokter</option>
										<option value="6">Keluarga</option>
									</select>
								</div>
								<button type="submit" name="submit" class="btn">Login!</button>
								<?php echo $error; ?>
							</form>
							<hr>
							<p align="center"><a href="daftar.php" class="btn btn-success btn-block" style="padding: 10px;">Daftar </a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Javascript -->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
</body>

</html>