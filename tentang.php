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
   <!-- ISI TENTANG -->
    <div class="container">
        <h2>Kecamatan Pecalungan</h2>
        <p class="lead"> Pecalungan adalah sebuah kecamatan di Kabupaten Batang, Provinsi Jawa Tengah, Indonesia. Kecamatan Pecalungan cukup strategis karena diapit oleh lima kecamatan, yaitu di sebelah utara berbatasan dengan Kecamatan Subah, sebelah timur dengan Kecamatan Limpung, sebelah selatan dengan Kecamatan Reban dan Kecamatan Blado, serta sebelah barat dengan Kecamatan Bandar.</p>
        <p class="lead">Pecalungan merupakan kecamatan baru di Kabupaten Batang karena hasil pemekaran daerah. Pecalungan terdiri atas 10 desa yang sebelumnya masuk wilayah Kecamatan Subah yang meliputi Desa Bandung, Gombong, Randu, dan Pecalungan; Kecamatan Blado meliputi Desa Selokarto dan Desa Gemuh; Kecamatan Reban meliputi Desa Gumawang dan Desa Keniten; serta Kecamatan Bandar yang meliputi Desa Siguci dan Pretek. Kesepuluh desa tersebut biasa disingkat menjadi Lumbung Peksi Madukerto yaitu merujuk Desa Pecalungan, Gombong, Bandung, Pretek, Siguci, Gumawang, Randu, Keniten, Gemuh, dan Selokarto.</p>
        <p class="lead">Pecalungan sangat potensial untuk dikembangkan menjadi sentra pertanian, penghasil beberapa komoditas pertanian strategis seperti cengkih, melinjo, kopi, dan kayu sengon. Karena terletak di antara dua pusat pertumbuhan ekonomi Kota Limpung dan Bandar, Pecalungan juga merupakan pemasok biji melinjo sebagai bahan dasar emping serta petai dan jengkol yang merupakan ciri khas kedua daerah tersebut. Di samping biji melinjo, petai, jengkol dan pohon sengon, daerah Pecalungan juga memasok pisang ke sebelah utaranya, yakni Subah yang terkenal sebagai sentranya pisang di Jalur Pantura. Ciri khas lainnya daerah Pecalungan adalah banyaknya usaha penggilingan padi dan penggergajian kayu.</p>
        <p class="lead">Meskipun relatif baru menjadi kecamatan, Kecamatan Pecalungan pernah mendapatkan prestasi. Di antaranya adalah ditunjuknya Desa Pecalungan sebagai desa model oleh Perum Perhutani KPH Kabupaten Kendal pada tahun 2009 karena kemandiriannya dalam pengelolaan Lembaga Masyarakat Desa Hutan (LMDH). Demikian juga dengan Desa Gemuh yang mendapatkan penghargaan Mandiri Pangan pada tanggal 27 Oktober 2010 dari Pemda setempat karena pelaksanaannya dinilai baik.</p>
        <div class="row">
          <div class="col">
            <h5>Letak Kantor Kecamatan :</h5>
            <p> Jl. Raya Bandar - Limpung Km. 6, Pecalungan, Kempyungan, Pecalungan, Batang, Kabupaten Batang, Jawa Tengah 51262 </p>
            <h5>Luas Wilayah:</h5>
            <p>36,19 Km²</p>
          </div>
          <div class="col">
            <h5>Batas-Batas Wilayah:</h5>
            <ul>
              <li>
                <p>Timur    : Kecamatan Limpung</p>
              </li>
              <li>
                <p>Selatan  : Kecamatan Blado, & Kecamatan Reban</p>
              </li>
              <li>
                <p>Utara    : Kecamatan Subah</p>
              </li>
              <li>
                <p>Barat    : Kecamatan Blado, & Kecamatan Bandar</p>
              </li>
            </ul>
          </div>
        </div>
        <h5>Daftar Desa:</h5>
        <div class="row">
          <div class="col">
                <p>1.&nbspDesa Bandung</p>
                <p>2.&nbspDesa Gemuh</p>
                <p>3.&nbspDesa Gombong</p>
                <p>4.&nbspDesa Gumawang</p>
                <p>5.&nbspDesa Keniten</p>
          </div>
          <div class="col">
                <p>6.&nbspDesa Pecalungan</p>
                <p>7.&nbspDesa Pretek</p>
                <p>8.&nbspDesa Randu</p>
                <p>9.&nbspDesa Selokarto</p>
                <p>10.&nbspDesa Siguci</p>
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