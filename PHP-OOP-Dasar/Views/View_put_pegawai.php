<?php

// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');

include '../Controllers/Controller_Petugas.php';
// Membuat Object dari Class pegawai
$pegawai = new Controller_Petugas();
$GetPegawai = $pegawai->GetData_Where($_GET['id_petugas']);
?>



<?php
foreach ($GetPegawai as $Get) {
?>

    <form action="../Config/Routes.php?function=put" method="POST">
        <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
        <table border="1">
            <input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama_Petugas" value="<?php echo $Get['nama_petugas']; ?>">
                </td>
            </tr>
            <tr>
                <td>username</td>
                <td>
                    <input type="text" name="username" value="<?php echo $Get['username']; ?>">
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td>
                    <input type="text" name="password" value="<?php echo $Get['password']; ?>">
                </td>
            </tr>
            <tr>
                <td>level</td>
                <td>
                    <select name="level">
                        <!-- Logic combo Get database -->
                        <option value="<?php echo $Get['level']; ?>">
                            <?php
                            if ($Get['level'] == "admin") {
                                echo "admin";
                            } else {
                                echo "petugas";
                            }
                            ?>
                        </option>
                        <!-- Logic combo Get database -->

                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" name="proses" value="Create">
                </td>
            </tr>
        </table </form>

    <?php
}
    ?>