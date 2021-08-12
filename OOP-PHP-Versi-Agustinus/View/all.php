<?php
?>
<h1>
    <a href="index.php">
        OOP - Class, Object, Property, Method With <u>MVC</u>
    </a>
</h1>
<h2>CRUD and CSRF</h2>
<h3>Table Pegawai</h3>
<h3>
    <a href="?f=add&c=C1&t=<?= $_GET['t'] ?>&m=add&v=add">Add Data</a>
</h3>

<table border="1">
    <tr>
        <?php
        foreach ($data['p'] as $key => $value) {
        ?>
            <td><?= $value ?></td>
        <?php
        }
        ?>
        <td>Action</td>
    </tr>
    <?php
    foreach ($data['q'] as $key => $value) { ?>
        <tr>
            <?
            foreach ($value as $key2 => $v2) {
            ?>
                <td><?= $v2 ?></td>
            <?
            }
            ?>
            <td>
                <?php
                $i = 0;
                foreach ($value as $key2 => $v2) {
                    if ($i == 0) { ?>
                        <a href="?f=ben&c=C1&t=<?= $_GET['t'] ?>&m=by1&v=detail&id=<?= $v2 ?>&nas=<?= $key2 ?>">view</a>
                        <a href="?f=del&c=C1&t=petugas&m=remove&v=del&id=<?= $v2 ?>">delete</a>
                <?php
                    }
                    $i++;
                }
                ?>
            </td>
        </tr>
    <?
    }
    ?>
</table>