<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_pembayaran.php';
// Membuat Object dari Class pembayaran
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_Where($_GET['id_pembayaran']);
?>



<?php
    foreach($GetPembayaran as $Get){
?>

<form action="../Config/Routes.php?function=put_pembayaran" method="POST">
<input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">
    <tr>
        <td>Nama Petugas</td>
        <td> 
            <select name="id_petugas">
                <?php 
                $GetPetugas = $pembayaran->GetData_Petugas();
                foreach ($GetPetugas as $GetP) : ?>
                <option value="<?php echo $GetP['id_petugas']; ?>"><?php echo $GetP['nama_petugas']; ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>

    <tr>
        <td>Nama Siswa</td>
        <td><input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>" readonly><input type="text" value="<?php echo $Get['nama']; ?>" readonly></td>
    </tr>

    <tr>
        <td>Tanggal Bayar</td>
        <td><input type="text" name="tgl_bayar" value="<?php echo $Get['tgl_bayar']; ?>"></td>
    </tr>

    <tr>
        <td>Bulan dibayar</td>
        <td><input type="text" name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar']; ?>"></td>
    </tr>

    <tr>
        <td>Tahun Bayar</td>
        <td><input type="text" name="tahun_bayar" value="<?php echo $Get['tahun_bayar']; ?>"></td>
    </tr>

    <tr>
        <td>Nominal</td>
        <td>
            <select name="id_spp">
                <<!-- Logic combo Get database -->
                <option value="<?php echo $Get['id_spp']; ?>">
                <?php
                    if($Get['id_spp']=="1"){
                        echo "30000";
                    } else if ($Get['id_spp']=="2") {
                        echo "25000";
                    } elseif ($Get['id_spp']=="3") {
                        echo "20000";
                    } else {
                        echo "15000";
                    }
                ?>
                </option>
                <!-- Logic combo Get database -->
            
                <option value="1">30000</option>
                <option value="2">25000</option>
                <option value="3">20000</option>
                <option value="4">15000</option>
            </select>
          
            
        </td>
    </tr>

    <tr>
        <td>Jumlah Bayar</td>
        <td><input type="text" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar'] ?>"></td>
    </tr>

    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>

<?php
    }
?>