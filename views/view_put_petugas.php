<?php

//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_petugas.php';

//membuat objek dari class petugas
$petugas = new controller_petugas();
$id_petugas = base64_decode($_GET['id_petugas']);
$GetPetugas = $petugas->GetData_Where($id_petugas);
?>


<!doctype html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.87.0">
	<title>Pembayaran SPP</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<!-- Favicons -->
	<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="https://getbootstrap.com/docs/5.1/examples/cover/cover.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	<header class="mb-auto">
			<div>
				<h4 class="float-md-start mb-0">Pembayaran SPP</h4>
				<nav class="nav nav-masthead justify-content-center float-md-end">
					<a href="main.php?menu=<?php echo base64_encode(2) ?>" class="nav-link">SISWA</a>
					<a href="main.php?menu=<?php echo base64_encode(1) ?>" class="nav-link">KELAS</a>
					<a href="main.php?menu=<?php echo base64_encode(3) ?>" class="nav-link">PETUGAS</a>
					<a href="main.php?menu=<?php echo base64_encode(4) ?>" class="nav-link">SPP</a>
					<a href="main.php?menu=<?php echo base64_encode(5) ?>" class="nav-link">PEMBAYARAN</a>
				</nav>
			</div>
		</header>
		<main class="px-3">
			<div class="mr-4 text-center">
				<table class="table table-hover table-dark">
					<?php

					foreach ($GetPetugas as $Get) {

					?>

						<form action="../config/routes.php?function=put_petugas" method="POST">
							<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
								<input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">
								<tr>
									<td>USERNAME</td>
									<td><input type="text" class="form-control" name="username" value="<?php echo $Get['username'] ?>"></td>
								</tr>

								<tr>
									<td>PASSWORD</td>
									<td><input type="text" class="form-control" name="password" value="<?php echo $Get['password'] ?>"></td>
								</tr>

								<tr>
									<td>NAMA PETUGAS</td>
									<td><input type="text" class="form-control" name="nama_petugas" value="<?php echo $Get['nama_petugas'] ?>"></td>
								</tr>

								<tr>
									<td>LEVEL</td>
									<td>
										<select name="level">
											<!-- logic combo get database-->

											<option class="form-select" value="<?php echo $Get['level']; ?>">
												<?php
												if ($Get['level'] == "1") {
													echo "ADMINISTRATOR";
												} elseif ($Get['level'] == "2") {
													echo "PETUGAS";
												}
												?>
											</option>
											<!--logic combo get database-->


											<option value=1>ADMINISTRASI</option>
											<option value=2>PETUGAS</option>
										</select>
									</td>
								</tr>

								<tr>
									<td><a class="btn btn-danger" href="...views/view_petugas.php">back</a></td>
									<td colspan="2" align="right"><input class="btn btn-primary" type="submit" name="proses" value="create"></td>
								</tr>
						</form>

					<?php } ?>
				</table>
			</div>
		</main>

		<footer class="mt-auto text-white-50">
			<p>@agustinus.</p>
		</footer>
	</div>



</body>

</html>