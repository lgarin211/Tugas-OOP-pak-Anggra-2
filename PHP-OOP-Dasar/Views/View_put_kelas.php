<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class kelas
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_Where($_GET['id_kelas']);
?>



<?php
    foreach($GetKelas as $Get){
?>

<form action="../Config/Routes.php?function=put_kelas" method="POST">
<input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
    <tr>
        <td>Nama Kelas</td>
        <td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas']; ?>"></td>
    </tr>
    <tr>
        <td>Kompetensi Keahlian</td>
        <td><input type="text" name="kompetensi_keahlian" value="<?php echo $Get['kompetensi_keahlian']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>

<?php
    }
?>