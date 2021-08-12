<?php
if (!empty($_GET['msg'])) {
    echo $_GET['msg'];
}
?>
<form action="" method="POST">
    <table>
        <?php
        foreach ($data['q'] as $key => $value) {
            foreach ($value as $key2 => $value2) {
        ?>
                <tr>
                    <td><?= $key2 ?></td>
                    <td>
                        <input type="text" name="<?= $key2 ?>" value="<?= $value2 ?>">
                    </td>
                </tr>
        <?php
            }
        } ?>
</table>
<button type="submit">kirim</button>
</form>