<?php 

include '../Controllers/Controller_kelas.php';
 // Membuat Object dari Class kelas
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3><a href="View_siswa.php">Siswa</a> | <a href="View_spp.php">SPP</a> | <a href="View_petugas.php">Petugas</a> | <a href="View_pembayaran.php">Pembayaran</a></h3>
        <h3>Table Kelas</h3> <h3><a href="View_post_kelas.php">Add Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th>Tools</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetKelas))
                {
                        $no = 1;
                        foreach($GetKelas as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nama_kelas']; ?></td>
                            <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                            <td>
                                <a href="../Views/View_put_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>">view</a>
                                <a href="../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>