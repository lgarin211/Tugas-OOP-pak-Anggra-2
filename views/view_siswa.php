<?php

include '../controller/controller_siswa.php';
// membuat objek dari class siswa
$siswa = new controller_siswa();
$GetSiswa = $siswa->GetData_All();

//mengecek di objek $siswa ada berapa banyak property
//echo var_dump($siswa);

?>
			<div class="mr-4 text-center">
				<a class="btn btn-primary" href="view_post_siswa.php"><i class="fa fa-plus-square"> ADD DATA</i></a>
				<table class="table table-hover table-dark">
					<tr>
						<th>NO</th>
						<th>NISN</th>
						<th>NIS</th>
						<th>NAMA</th>
						<th>KELAS</th>
						<th>ALAMAT</th>
						<th>NO TELEPON</th>
						<th>NOMINAL</th>
						<th>TINDAKAN</th>
					</tr>
					<?php

					//decision validasi variabel
					if (isset($GetSiswa)) {
						$no = 1;
						foreach ($GetSiswa as $Get) {
					?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $Get['nisn']; ?></td>
								<td><?php echo $Get['nis']; ?></td>
								<td><?php echo $Get['nama']; ?></td>
								<td><?php echo $Get['nama_kelas']; ?></td>
								<td><?php echo $Get['alamat']; ?></td>
								<td><?php echo $Get['no_telp']; ?></td>
								<td><?php echo $Get['nominal']; ?></td>
								<td>
									<a class="btn btn-success" href="../views/view_put_siswa.php?nisn=<?php echo base64_encode($Get['nisn']) ?>"><i class="fa fa-eye"></i></a>
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
				window.location.href = '../config/routes.php?function=delete_siswa&nisn=<?php echo base64_encode($Get['nisn']) ?>';
			};
		}
	</script>

