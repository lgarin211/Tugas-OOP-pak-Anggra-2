<?php

//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_siswa.php';

//membuat objek dari class siswa
$siswa = new controller_siswa();
$nisn = base64_decode($_GET['nisn']);
$GetSiswa = $siswa->GetData_Where($nisn);

?>


<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.87.0">
  <title>Pembayaran SPP</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/5.1/examples/cover/cover.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h4 class="float-md-start mb-0">Pembayaran SPP</h4>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a href="view_siswa.php" class="nav-link">SISWA</a>
          <a href="view_kelas.php" class="nav-link">KELAS</a>
          <a href="view_petugas.php" class="nav-link">PETUGAS</a>
          <a href="view_spp.php" class="nav-link">SPP</a>
          <a href="view_pembayaran.php" class="nav-link">PEMBAYARAN</a>
        </nav>
      </div>
    </header>

    <main class="px-3">
      <div class="mr-4 text-center">
        <table class="table table-hover table-dark">

          <?php

          foreach ($GetSiswa as $Get) {

          ?>

            <form action="../config/routes.php?function=put_siswa" method="POST">
              <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
              <table border="1">
                <input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">
                <tr>
                  <td>NIS</td>
                  <td><input type="text" class="form-control" name="nis" value="<?php echo $Get['nis'] ?>"></td>
                </tr>

                <tr>
                  <td>NAMA</td>
                  <td><input type="text" class="form-control" name="nama" value="<?php echo $Get['nama'] ?>"></td>
                </tr>

                <tr>
                  <td>KELAS</td>
                  <td>

                    <select name="id_kelas">
                      <?php
                      $GetKelas = $siswa->GetData_Kelas();
                      foreach ($GetKelas as $GetK) : ?>
                        <option value="<?php echo $GetK['id_kelas'] ?>"><?php echo $GetK['nama_kelas']; ?></option>
                      <?php endforeach; ?>
                    </select>


                  </td>
                </tr>

                <tr>
                  <td>ALAMAT</td>
                  <td><input type="text" class="form-control" name="alamat" value="<?php echo $Get['alamat'] ?>"></td>
                </tr>

                <tr>
                  <td>NO TELEPON</td>
                  <td><input type="text" class="form-control" name="no_telp" value="<?php echo $Get['no_telp'] ?>"></td>
                </tr>

                <tr>
                  <td>SPP</td>
                  <td>
                    <select name="id_spp">

                      <!-- Logic combo Get database -->
                      <option value="<?php echo $Get['id_spp']; ?>" class="form-select">
                        <?php
                        if ($Get['id_spp'] == "1") {
                          echo "30000";
                        } else if ($Get['id_spp'] == "2") {
                          echo "25000";
                        } elseif ($Get['id_spp'] == "3") {
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


                  <td colspan="2" align="right"><input class="btn btn-primary type="submit" name="proses" value="create"></td>
                </tr>
              </table>
            </form>

          <?php } ?>
        </table>
      </div>
    </main>

    <footer class="mt-auto text-white-50">
      <p>@agustinus.</p>
    </footer>
  </div>



</body>

</html>