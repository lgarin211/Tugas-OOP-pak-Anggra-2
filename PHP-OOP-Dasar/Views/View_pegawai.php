<?php
include '../Controllers/Controller_Petugas.php';
// Membuat Object dari Class pegawai
$pegawai = new Controller_Petugas();
$GetPegawai = $pegawai->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Pegawai</h3>
<h3><a href="View_post_pegawai.php">Add Data</a></h3>


<table border="1">
    <tr>
        <th>No</th>
        <th>ID Petugas</th>
        <th>Nama Petugas</th>
        <th>Username</th>
        <th>Password</th>
        <th>level</th>
        <th>Tools</th>
    </tr>
    <?php
    // Decision validation variabel
    if (isset($GetPegawai)) {
        $no = 1;
        foreach ($GetPegawai as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['id_petugas']; ?></td>
                <td><?php echo $Get['nama_petugas']; ?></td>
                <td><?php echo $Get['username']; ?></td>
                <td><?php echo $Get['password']; ?></td>
                <td><?php echo $Get['level']; ?></td>
                </td>
                <td>
                    <a href="../Views/View_put_pegawai.php?id_petugas=<?php echo $Get['id_petugas'] ?>">view</a>
                    <a href="../Config/Routes.php?function=delete&id_petugas=<?php echo $Get['id_petugas'] ?>">Delete</a>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>