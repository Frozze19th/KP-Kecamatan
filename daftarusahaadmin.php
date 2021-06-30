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
   <nav class="navbar fixed-top navbar-dark bg-primary navbar-expand-md">
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
   
   <!-- TABEL -->
<div class="container-fluid">
    <br>
    <br>
    <br>
    <br>
   <h1 class="display-4">Daftar Perizinan Usaha Kecamatan Pecalungan</h1>
        <form method="POST" action="daftarusahaadmin.php" enctype="multipart/form-data">
        <input class="search" type="text" name="kata" placeholder="Nama"/>
        <select class="select" type="text" name="desa">
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
        <input class="button" type="submit" name="cari" value="Cari"/>		
        </form>
        <table class="table align-middle table-bordered table-striped ">
            <thead class="thead-light">
            <tr>
                <th>&nbspNo&nbsp</th>
                <th>&nbsp NIK &nbsp</th>
                <th>&nbsp NAMA &nbsp</th>
                <th>&nbsp NPWP &nbsp</th>
                <th>&nbsp ALAMAT &nbsp</th>
                <th>&nbsp ALAMAT USAHA &nbsp</th>
                <th>&nbsp Tanggal Lahir&nbsp</th>
                <th>&nbsp L/P &nbsp</th>
                <th>&nbsp Status &nbsp</th>
                <th>&nbsp Pendidikan &nbsp</th>
                <th>&nbsp PEKERJAAN &nbsp</th>
                <th>&nbsp Kode Pos&nbsp</th>
                <th>&nbsp Kode Kab/Kota&nbsp</th>
                <th>&nbsp IZIN USAHA &nbsp</th>
                <th>&nbsp Tanggal Mulai &nbsp</th>
                <th>&nbsp Jumlah Pekerja&nbsp</th>
                <th>&nbsp Modal &nbsp</th>
                <th>&nbsp NO HP &nbsp</th>
                <th>&nbsp Menu &nbsp</th>
            </tr>
            </thead>
            <tbody>
        <?php
        include "koneksi.php";
        $batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
        
        if(isset($_POST['cari'])){
	        $kata=$_POST['kata'];
            $desa=$_POST['desa'];
            if($desa=="NULL"){
                $perintah=mysqli_query($link,"select * from pengusaha");         
                $jumlah_data = mysqli_num_rows($perintah);
				$total_halaman = ceil($jumlah_data / $batas);
				$data_pegawai = mysqli_query($link,"select * from pengusaha where nama like '%$kata%' limit $halaman_awal, $batas");
				    $nomor = $halaman_awal+1;
            }
            else{
	            $perintah=mysqli_query($link,"select * from pengusaha");         
                $jumlah_data = mysqli_num_rows($perintah);
				$total_halaman = ceil($jumlah_data / $batas);
				$data_pegawai = mysqli_query($link,"select * from pengusaha where desa='$desa' and nama like '%$kata%' limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
            }
        }
        else{
            $perintah=mysqli_query($link,"select*from pengusaha");
            $jumlah_data = mysqli_num_rows($perintah);
				    $total_halaman = ceil($jumlah_data / $batas);
				    $data_pegawai = mysqli_query($link,"select * from pengusaha limit $halaman_awal, $batas");
				    $nomor = $halaman_awal+1;
        }
        while ($d = mysqli_fetch_array($data_pegawai))
        { 
        ?>
            <tr>
			          <td><?php echo $nomor; ?></td>
                <td><?php echo $d["nik"]; ?></td>
                <td><?php echo $d["nama"]; ?></td>
                <td><?php echo $d["npwp"]; ?></td>
                <td><?php echo $d["alamat"]; ?></td>
                <td><?php echo $d["alamat_usaha"]; ?></td>
                <td><?php echo $d["tgl_lahir"]; ?></td>
                <td><?php echo $d["kelamin"]; ?></td>
                <td><?php echo $d["status"]; ?></td>
                <td><?php echo $d["pendidikan"]; ?></td>
                <td><?php echo $d["pekerjaan"]; ?></td>
                <td><?php echo $d["kode_pos"]; ?></td>
                <td><?php echo $d["kode_kabkota"]; ?></td>
                <td><?php echo $d["ijin_usaha"]; ?></td>
                <td><?php echo $d["tgl_mulai"]; ?></td>
                <td><?php echo $d["jumlah_pekerja"]; ?></td>
                <td>Rp. &nbsp <?php echo $d["modal"]; ?></td>
                <td><?php echo $d["no_hp"]; ?></td>
                <td><a href="update.php?ijin_usaha=<?php echo $d["ijin_usaha"]; ?>">Update</a> | <a href="hapususaha.php?ijin_usaha=<?php echo $d["ijin_usaha"]; ?>">Delete</a></td>
		    </tr>
        <?php
	    $nomor++;
        }
        ?>
        </tbody>
    </table>
    <nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
    </div>
    <br>
    <br>
    <br>
   <!-- TABEL -->
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