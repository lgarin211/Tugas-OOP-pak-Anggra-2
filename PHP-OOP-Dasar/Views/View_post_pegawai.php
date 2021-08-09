<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create" method="POST">
<input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>NIP</td>
        <td><input type="text" name="nip"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <select name="jns_kel">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tgl_lahir">
    </td>
    <tr>
        <td>Status</td>
        <td>
            <select name="status">
                <option value="B">Belum Menikah</option>
                <option value="M">Menikah</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Mulai Kerja</td>
        <td><input type="date" name="mulai_kerja">
    </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>
