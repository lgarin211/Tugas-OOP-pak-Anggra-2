<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_spp.php';
// Membuat Object dari Class spp
$spp = new Controller_spp();
$GetSpp = $spp->GetData_Where($_GET['id_spp']);
?>



<?php
    foreach($GetSpp as $Get){
?>

<form action="../Config/Routes.php?function=put_spp" method="POST">
<input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_spp" value="<?php echo $Get['id_spp']; ?>">
    <tr>
        <td>Tahun</td>
        <td><input type="text" name="tahun" value="<?php echo $Get['tahun']; ?>"></td>
    </tr>
    <tr>
        <td>Nominal</td>
        <td><input type="text" name="nominal" value="<?php echo $Get['nominal']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>

<?php
    }
?>