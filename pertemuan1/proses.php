<?php
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $alamat = $_POST['alamat'];
    $kode_pos = $_POST['kode_pos'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat_web = $_POST['alamat_web'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 1 WPOO @apriansyahrs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="proses.php">
<div class="wrapper">
    <div class="title">
      Form Registrasi
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nama Depan</label>
          <label class="input"><?= $nama_depan ?></label>
       </div>  
        <div class="inputfield">
          <label>Nama Belakang</label>
          <label class="input"><?= $nama_belakang ?></label>
       </div>
       <div class="inputfield">
          <label>Alamat</label>
          <label class="input"><?= $alamat ?></label>
       </div>
       <div class="inputfield">
          <label>Kode POS</label>
          <label class="input"><?= $kode_pos ?></label>
       </div> 
       <div class="inputfield">
          <label>Tempat Lahir</label>
          <label class="input"><?= $tempat_lahir ?></label>
       </div>
              <div class="inputfield">
          <label>Tanggal Lahir</label>
          <label class="input"><?= $tanggal_lahir ?></label>
       </div>
        <div class="inputfield">
          <label>Jenis Kelamin</label>
          <label class="input"><?= $jenis_kelamin ?></label>
       </div> 
      <div class="inputfield">
          <label>No. HP</label>
          <label class="input"><?= $no_hp ?></label>
       </div>
       <div class="inputfield">
          <label>Email</label>
          <label class="input"><?= $email ?></label>
       </div>
       <div class="inputfield">
          <label>Alamat Web</label>
          <label class="input"><?= $alamat_web ?></label>
       </div> 
</div>
</form>
</body>
</html>