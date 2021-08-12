<?php

// Memanggil fungsi dari CSRF
// include('../../PHP-OOP-Dasar/Config/Csrf.php');

// Property
if (!empty($_GET['t'])) {
    $tabel=$_GET['t'];
}
if (!empty($_GET['f'])) {
    $fun=$_GET['f'];
}
if (!empty($_GET['v'])) {
    $view=$_GET['v'];
}
if (!empty($_GET['c'])) {
    $c=$_GET['c'];
}
if (!empty($_GET['m'])) {
    $m=$_GET['m'];
}

// Proses Pemanggilan Controler
if (!empty($fun)) {
    include('Controller/'.$c.'.php');
    $db = new $c();
    $db->$fun();
}