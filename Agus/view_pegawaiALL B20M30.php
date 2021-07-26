<?php 
include 'controller_pegawai.php';
 // Membuat Object dari Class pegawai
$pegawai = new pegawai();
$GetPegawai = $pegawai->GetData_All_DP1();

// untuk mengecek di object $pegawai ada berapa banyak Property
echo var_dump($pegawai);
?>


        <h1>OOP - Class, Object, Property, Method</h1>
        <h2>Read/Get Data Keseluruhan</h2>
        <h3>Table Pegawai</h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Mulai Kerja</th>
            </tr>
            <?php
            $no = 1;
            foreach($GetPegawai as $Get){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['nis']; ?></td>
                <td><?php echo $Get['nama']; ?></td>
                <td><?php echo $Get['jns_kel']; ?></td>
                <td><?php echo $Get['tgl_lahir']; ?></td>
                <td><?php echo $Get['status']; ?></td>
                <td><?php echo $Get['mulai_kerja']; ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>