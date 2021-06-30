<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kecamatan Pecalungan</title>
    <link rel = "icon" href = "ico/logo.png"type = "image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- DataBase Conn -->
    <?php
      include "koneksi.php";
      session_start();
    ?>
  </head>
  <body>
  <!-- NAVBAR -->
   <nav class="navbar sticky-top navbar-dark bg-primary navbar-expand-md">
     <div class="container-fluid">
      <a href="index.php"><img src="ico/logo.png" alt="" width="40" height="44" class="d-inline-block align-text-top"></a>
      <a class="navbar-brand mb-0 h1" href="index.php">&nbsp Kecamatan Pecalungan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Profil
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="https://pecalungan.batangkab.go.id/ppid/">PPID Pecalungan</a>
            <a class="dropdown-item" href="camat.php">Profil Camat</a>
            <a class="dropdown-item" href="struktur.php">Stuktur Pegawai</a>
            <a class="dropdown-item" href="daftarpegawai.php">Daftar pegawai</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Layanan
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="dispen_nikah.php">Dispensasi Nikah</a>
            <a class="dropdown-item" href="legalisasi.php">Legalisasi Surat</a>
            <a class="dropdown-item" href="ahli_waris.php">Surat Keterangan Ahli Waris</a>
            <a class="dropdown-item" href="perpindahan.php">Perpindahan Penduduk</a>
            <a class="dropdown-item" href="skck.php">SKCK</a>
            <a class="dropdown-item" href="sktm.php">SKTM</a>
            <a class="dropdown-item" href="proposal.php">Proposal Permohonan</a>
            <a class="dropdown-item" href="perizinan.php">Perizinan Usaha</a>
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="daftarusaha.php">Daftar Izin Pengusaha</a>
        </li>
          <?php
            if(isset($_SESSION['status']))
            {
              echo '
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Menu Admin
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="inputusaha.php">Input Daftar Usaha</a>
                <a class="dropdown-item" href="daftarusahaadmin.php">Daftar Usaha (admin)</a>
              </div>
              </li>
              <li><a class="nav-link" href="logout.php">Log Out</a></li>
              ';
            }
            else
            {
            
            }
          ?>
        </ul>
        </div>
      </div>
   </nav>
   <!-- /NAVBAR -->
   <div class="container">
            <h2 class="text-center"> Profil Camat Pecalungan <h2>
            <h2 class="text-center"><img src="ico/camat.JPG" alt="" width="150" height="220" class="d-inline-block align-text-top"></h2>
            <div class="row justify-content-md-center">
              <div class="col-md-auto text-center">
                <h3>Nama : Edy Widodo, SH., M.Si.</h3>
                <h3>NIP : 19690104 199003 1 004<</h3>
                <h3>Tempat, Tanggal lahir : Batang, 4 Januari 1969</h3>
                <h3>Agama : Islam</h3>
                <h3>Alamat Kantor : Jl. Raya Bandar - Limpung Km. 6, Pecalungan, Kempyungan, Pecalungan, Batang, Kabupaten Batang, Jawa Tengah 51262 </h3>
              </div>
            </div>
   </div>
  <!-- FOOTER -->
    <footer class="footer bg-primary text-center fixed-bottom">
    <!-- Copyright -->
      <div class="container">
        <a class="text-light" href="login.php"> © </a>
        <a class="text-light" >2021 Copyright: Kantor Kecamatan Pecalungan</a>
      </div>
    <!-- Copyright -->
    </footer>
    <!-- FOOTER -->
    <!-- Js req -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
  </body>
</html>