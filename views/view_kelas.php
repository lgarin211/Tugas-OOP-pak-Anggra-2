<?php

include '../controller/controller_kelas.php';
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_All();

?>
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

	<script>
		function konfirmasi() {
			if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
				window.location.href = '../config/routes.php?function=delete_kelas&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>';
			};
		}
	</script>
