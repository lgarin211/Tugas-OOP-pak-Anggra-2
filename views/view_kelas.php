<?php

include '../controller/controller_kelas.php';
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_All();

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
	<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
					<a href="view_siswa.php" class="nav-link">SISWA</a>
					<a href="view_kelas.php" class="nav-link">KELAS</a>
					<a href="view_petugas.php" class="nav-link">PETUGAS</a>
					<a href="view_spp.php" class="nav-link">SPP</a>
					<a href="view_pembayaran.php" class="nav-link">PEMBAYARAN</a>
				</nav>
			</div>
		</header>

		<main class="px-3">
			<div class="mr-4 text-center">
				<div class="text-center">
					<a href="view_post_kelas.php" class="btn btn-primary"><i class="fa fa-plus-square">ADD DATA</i></a>
				</div>
				<table class="table table-hover table-dark">
					<tr>
						<th>NO</th>
						<th>ID KELAS</th>
						<th>NAMA KELAS</th>
						<th>KOMPETENSI KEAHLIAN</th>
						<th>TINDAKAN</th>
					</tr>
					<?php

					//decision validasi variabel
					if (isset($GetKelas)) {
						$no = 1;
						foreach ($GetKelas as $Get) {
					?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $Get['id_kelas']; ?></td>
								<td><?php echo $Get['nama_kelas']; ?></td>
								<td><?php echo $Get['kompetensi_keahlian']; ?></td>
								<!-- //untuk tindakan -->
								<td>
									<a class="btn btn-success" href="../views/view_put_kelas.php?id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>"><i class="fa fa-eye" ></i></a>
									<button class="btn btn-danger" onclick="konfirmasi()"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
					<?php
						}
					}
					?>

				</table>

			</div>
		</main>

		<footer class="mt-auto text-white-50">
			<p>@agustinus.</p>
		</footer>
	</div>

	<script>
		function konfirmasi() {
			if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
				window.location.href = '../config/routes.php?function=delete_kelas&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>';
			};
		}
	</script>

</body>

</html>