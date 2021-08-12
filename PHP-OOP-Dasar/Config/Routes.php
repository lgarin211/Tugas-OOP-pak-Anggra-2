<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_siswa.php';
include '../Controllers/Controller_kelas.php';
include '../Controllers/Controller_spp.php';
include '../Controllers/Controller_petugas.php';
include '../Controllers/Controller_pembayaran.php';

// Membuat variabel dari Get URL
$function = $_GET['function'];


// ROUTES SISWA


// Decision variabel create
if($function == "create_siswa"){
    // Membuat objek dari class siswa
    $db = new Controller_siswa();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/View_siswa.php");

}
// Decision variabel put
elseif($function == "put_siswa"){
    // Membuat objek dari class siswa
    $db = new Controller_siswa();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );   
    }
    header("location:../Views/View_siswa.php");
}
// Decision variabel delete
elseif($function == "delete_siswa"){
    // Membuat objek dari class siswa
    $db = new Controller_siswa();
    $db->DELETEData($_GET['nisn']);
    header("location:../Views/View_siswa.php");
}



// ROUTES KELAS



// Decision variabel create
if($function == "create_kelas"){
    // Membuat objek dari class kelas
    $db = new Controller_kelas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../Views/View_kelas.php");

}
// Decision variabel put
elseif($function == "put_kelas"){
    // Membuat objek dari class kelas
    $db = new Controller_kelas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );   
    }
    header("location:../Views/View_kelas.php");
}
// Decision variabel delete
elseif($function == "delete_kelas"){
    // Membuat objek dari class kelas
    $db = new Controller_kelas();
    $db->DELETEData($_GET['id_kelas']);
    header("location:../Views/View_kelas.php");
}



// ROUTES SPP



// Decision variabel create
if($function == "create_spp"){
    // Membuat objek dari class spp
    $db = new Controller_spp();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../Views/View_spp.php");

}
// Decision variabel put
elseif($function == "put_spp"){
    // Membuat objek dari class spp
    $db = new Controller_spp();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );   
    }
    header("location:../Views/View_spp.php");
}
// Decision variabel delete
elseif($function == "delete_spp"){
    // Membuat objek dari class spp
    $db = new Controller_spp();
    $db->DELETEData($_GET['id_spp']);
    header("location:../Views/View_spp.php");
}



// ROUTES PETUGAS


// Decision variabel create
if($function == "create_petugas"){
    // Membuat objek dari class petugas
    $db = new Controller_petugas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );
    }
    header("location:../Views/View_petugas.php");

}
// Decision variabel put
elseif($function == "put_petugas"){
    // Membuat objek dari class petugas
    $db = new Controller_petugas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );   
    }
    header("location:../Views/View_petugas.php");
}
// Decision variabel delete
elseif($function == "delete_petugas"){
    // Membuat objek dari class petugas
    $db = new Controller_petugas();
    $db->DELETEData($_GET['id_petugas']);
    header("location:../Views/View_petugas.php");
}


// ROUTES PEMBAYARAN



// Decision variabel create
if($function == "create_pembayaran"){
    // Membuat objek dari class pembayaran
    $db = new Controller_pembayaran();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_bayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );
    }
    header("location:../Views/View_pembayaran.php");

}
// Decision variabel put
elseif($function == "put_pembayaran"){
    // Membuat objek dari class pembayaran
    $db = new Controller_pembayaran();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_bayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );   
    }
    header("location:../Views/View_pembayaran.php");
}
// Decision variabel delete
elseif($function == "delete_pembayaran"){
    // Membuat objek dari class pembayaran
    $db = new Controller_pembayaran();
    $db->DELETEData($_GET['id_pembayaran']);
    header("location:../Views/View_pembayaran.php");
}

?>