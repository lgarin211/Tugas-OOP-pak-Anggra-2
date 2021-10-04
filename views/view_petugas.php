<?php

include '../controller/controller_petugas.php';
// membuat objek dari class petugas
$petugas = new controller_petugas();
$GetPetugas = $petugas->GetData_All();

//mengecek di objek $petugas ada berapa banyak property
//echo var_dump($petugas);

?>

			<div class="mr-4 text-center">
			<a class="btn btn-primary" href="view_post_petugas.php"><i class="fa fa-plus-square"> ADD DATA</i></a>
				<table class="table table-hover table-dark">
					<tr>
						<th>NO</th>
						<th>ID PETUGAS</th>
						<th>USERNAME</th>
						<th>PASSWORD</th>
						<th>NAMA PETUGAS</th>
						<th>LEVEL</th>
						<th>TINDAKAN</th>
					</tr>
					<?php

					if (isset($GetPetugas)) {
						$no = 1;
						foreach ($GetPetugas as $Get) {
					?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $Get['id_petugas']; ?></td>
								<td><?php echo $Get['username']; ?></td>
								<td><?php echo $Get['password']; ?></td>

								<td><?php echo $Get['nama_petugas']; ?></td>
								<td><?php echo $Get['level']; ?></td>

								<!-- //untuk tindakan -->
								<td>
									<a class="btn btn-success" href="../views/view_put_petugas.php?id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>"><i class="fa fa-eye" > </i></a>
									<button class="btn btn-danger" onclick="konfirmasi()"><i class="fa fa-trash"></i></button>
								</td>

							</tr>
					<?php
						}
					}
					?>

				</table>
			</div>

	<script>
	function konfirmasi() {
		if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
			window.location.href = '../config/routes.php?function=delete_petugas&id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>';
		};
	}
</script>
