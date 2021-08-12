<?php
if (!empty($_GET['msg'])) {
    echo $_GET['msg'];
}
?>
<form action="" method="POST">
    <table>
        <?php
        foreach ($data['p'] as $key => $value) {
        ?>
            <tr>
                <td><?= $value ?></td>
                <td>
                    <input type="text" name="<?= $value ?>" value="">
                </td>
            </tr>
        <?php
        } ?>
    </table>
    <button type="submit">kirim</button>
</form>