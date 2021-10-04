<?php

include '../controller/controller_spp.php';
// membuat objek dari class spp
$spp = new controller_spp();
$GetSpp = $spp->GetData_All();

//mengecek di objek $spp ada berapa banyak property
//echo var_dump($spp);

?>
			<div class="mr-4 text-center">
			<a href="view_post_spp.php" class="btn btn-primary"><i class="fa fa-plus-square">ADD DATA</i></a>
				<table class="table table-hover table-dark">
					<tr>
						<th>NO</th>
						<th>ID SPP</th>
						<th>TAHUN</th>
						<th>NOMINAL</th>
						<th>TINDAKAN</th>
					</tr>
					<?php

					//decision validasi variabel
					if (isset($GetSpp)) {
						$no = 1;
						foreach ($GetSpp as $Get) {
					?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $Get['id_spp']; ?></td>
								<td><?php echo $Get['tahun']; ?></td>
								<td><?php echo $Get['nominal']; ?></td>
								<td>
									<a class="btn btn-success" href="../views/view_put_spp.php?id_spp=<?php echo base64_encode($Get['id_spp']) ?>"><i class="fa fa-eye"></i></a>
									<button class="btn btn-danger" onclick="konfirmasi()"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
					<?php
						}
					}
					?>
				</table>

				<script>
					function konfirmasi() {
						if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
							window.location.href = '../config/routes.php?function=delete_spp&id_spp=<?php echo base64_encode($Get['id_spp']) ?>';
						};
					}
				</script>
