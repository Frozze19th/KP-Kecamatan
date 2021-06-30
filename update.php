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
      require_once 'authentication/check.php';
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
   <!-- Form -->
    <div class="container">
    <?php
    if(count($_POST)>0) {
        mysqli_query($link,"UPDATE pengusaha set nik='" . $_POST['nik'] . "', nama='" . $_POST['nama'] . "', npwp='" . $_POST['npwp'] . "', alamat='" . $_POST['alamat'] . "' ,alamat_usaha='" . $_POST['alamat_usaha'] . "' ,tgl_lahir='" . $_POST['tgl_lahir'] . "' ,kelamin='" . $_POST['kelamin'] . "',status='" . $_POST['status'] . "',pendididkan='" . $_POST['pendidikan'] . "',pekerjaan='" . $_POST['pekerjaan'] . "',kode_pos='" . $_POST['kode_pos'] . "',kode_kabkota='" . $_POST['kode_kabkota'] . "',ijin_usaha='" . $_POST['ijin_usaha'] . "',tgl_mulai='" . $_POST['tgl_mulai'] . "',jumlah_pekerja='" . $_POST['jumlah_pekerja'] . "',modal='" . $_POST['modal'] . "',no_hp='" . $_POST['no_hp'] . "',desa='" . $_POST['desa'] . "' WHERE ijin_usaha='" . $_POST['ijin_usaha'] . "'");
        $message = "Suksess";
        header("location:daftarusahaadmin.php");
    }
    $result = mysqli_query($link,"SELECT * FROM pengusaha WHERE ijin_usaha='" . $_GET['ijin_usaha'] . "'");
    $row= mysqli_fetch_array($result);
    ?>
        <h1 class="display-4">Form Penggantian Izin Usaha</h1>
        <form method="POST" action="inputusaha.php" enctype="multipart/form-data">
            <h5>NIK</h5>
            <input class="input" type="text" name="nik" value="<?php echo $row['nik'];?>"/>
            <br>
            <h5>Nama Lengkap</h5>
            <input class="input" type="text" name="nama" value="<?php echo $row['nama'];?>"/>
            <br>
            <h5>NPWP</h5>
            <input class="input" type="text" name="npwp" value="<?php echo $row['npwp'];?>"/>
            <br>
            <h5>Alamat Pengusaha</h5>
            <input class="input" type="text" name="alamat" value="<?php echo $row['alamat'];?>"/>
            <br>
            <h5>Alamat Tempat Usaha</h5>
            <input class="input" type="text" name="alamat_usaha" value="<?php echo $row['alamat_usaha'];?>"/>
            <br>
            <h5>Tanggal Lahir</h5>
            <input class="input" type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"/>
            <br>
            <h5>Jenis Kelamin</h5>
            <select class="selectin" name="kelamin" value="<?php echo $row['kelamin'];?>">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <br>
            <h5>Status</h5>
            <select class="selectin" name="status" value="<?php echo $row['status'];?>">
                <option value="K">Kawin</option>
                <option value="BK">Belum Kawin</option>
                <option value="Janda">Janda</option>
                <option value="Duda">Duda</option>
            </select>
            <br>
            <h5>Pendidikan</h5>
            <select class="selectin" name="pendidikan" value="<?php echo $row['pendidikan'];?>">
                <option value="tidak ada">Tidak ada</option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
            <br>
            <h5>Pekerjaan</h5>
            <input class="input" type="text" name="pekerjaan" value="<?php echo $row['pekerjaan'];?>"/>
            <br>
            <h5>Kode Pos</h5>
            <input class="input" type="text" name="kode_pos" value="<?php echo $row['kode_pos'];?>"/>
            <br>
            <h5>Kode Kab/Kota</h5>
            <input class="input" type="text" name="kode_kabkota" value="<?php echo $row['kode_kabkota'];?>"/>
            <br>
            <h5>Nama Usaha</h5>
            <input class="input" type="text" name="ijin_usaha" value="<?php echo $row['ijin_usaha'];?>"/>
            <br>
            <h5>Tanggal Muali Usaha</h5>
            <input class="input" type="date" name="tgl_mulai" value="<?php echo $row['tgl_mulai'];?>"/>
            <br>
            <h5>Jumlah Pekerja</h5>
            <input class="input" type="text" name="jumlah_pekerja" value="<?php echo $row['jumlah_pekerja'];?>"/>
            <br>
            <h5>Modal Usaha</h5>
            <input class="input" type="text" name="modal" value="<?php echo $row['modal'];?>"/>
            <br>
            <h5>Nomor HP</h5>
            <input class="input" type="text" name="no_hp" value="<?php echo $row['no_hp'];?>"/>
            <br>
            <h5>Desa Asal</h5>
            <select class="selectin" type="text" value="<?php echo $row['desa'];?>">
                <option selected value="NULL">Desa</option>
                <option value="bandung">Bandung</option>
                <option value="gemuh">Gemuh</option>
                <option value="gombong">Gombong</option>
                <option value="keniten">Keniten</option>
                <option value="pecalungan">Pecalungan</option>
                <option value="pretek">Pretek</option>
                <option value="randu">Randu</option>
                <option value="selokarto">Selokarto</option>
                <option value="siguci">Siguci</option>
            </select>
            <br>
            <br>
            <input class="button" type="submit" name="submit" value="submit"><a href="#" id="submit">	
    </form>
    </div>
   <!-- /Form -->
   <!-- Form Code -->
   <!-- Text Dibawah ini Tidak Boleh di edit sama sekali -->
   
   <!-- /Form Code -->
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