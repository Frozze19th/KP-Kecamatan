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
   
    <!-- JUMBO -->
    <div class="card card-image" style="background-image: url(ico/jumbo.jpeg); background-size: cover; height: 540px;">
      <div class="container-fluid text-center text-white">
        <br>
        <br>
        <h1 class="display-4">Kecamatan Pecalungan</h1>
        <p class="lead"> Kabupaten Batang, Provinsi Jawa Tengah, Indonesia.</p>
      </div>
    </div>
    <div class="container">
    <!-- MAPS -->
      <br>
      <br>
      <p class="lead"> Letak kantor Kecamatan: </p>
      <p class="lead"> Jl. Raya Bandar - Limpung Km. 6, Pecalungan, Kempyungan, Pecalungan, Batang, Kabupaten Batang, Jawa Tengah 51262 </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1664.955295117019!2d109.8501115693502!3d-7.014767324538448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701609240d319d%3A0xe30b9f98b527451b!2sKantor%20Kecamatan%20Pecalungan!5e0!3m2!1sen!2sid!4v1616548619817!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- /MAPS -->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="https://img.icons8.com/ultraviolet/50/000000/police-badge.png" alt="Polisi" class="float-left"/>
               <a><h4>Kantor Polisi Terdekat</h4></a>
              <p>0285 666110</p>
            </div>
            <div class="col-lg">
              <img src="https://img.icons8.com/ultraviolet/40/000000/clinic.png" alt="Puskesmas" class="float-left"/>
              <a><h4>Puskesmas</h4></a>
              <p>0285 7878963</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <img src="https://img.icons8.com/ultraviolet/40/000000/fire-station.png" alt="Pemadam" class="float-left"/>
              <a><h4>Pemadam Kebakaran Terdekat</h4></a>
              <p>Limpung: 0285 4468515</p>
              <p>Bandar: 0285 689625</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <!-- FOOTER -->
    <footer class="footer bg-primary text-center">
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