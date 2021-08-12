<?php

if (!empty($_GET['f'])) {
    include('Config/Routes.php');

}else{
    ?>
    <a href="?f=man&c=C1&t=petugas&v=all&m=read">Petugas</a><br>.
    <a href="?f=man&c=C1&t=Kelas&v=all&m=read">Kelas</a><br>.
    <a href="?f=man&c=C1&t=pembayaran&v=all&m=read">pembayaran</a><br>.
    <a href="?f=man&c=C1&t=siswa&v=all&m=read">siswa</a><br>.
    <a href="?f=man&c=C1&t=spp&v=all&m=read">spp</a><br>.

    <?
    echo 'silahkan kunjungi';
}