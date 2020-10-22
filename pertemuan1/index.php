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
          <input type="text" class="input" name="nama_depan">
       </div>  
        <div class="inputfield">
          <label>Nama Belakang</label>
          <input type="text" class="input" name="nama_belakang">
       </div>
       <div class="inputfield">
          <label>Alamat</label>
          <textarea class="textarea" name="alamat"></textarea>
       </div>
       <div class="inputfield">
          <label>Kode POS</label>
          <input type="number" class="input" name="kode_pos">
       </div> 
       <div class="inputfield">
          <label>Tempat Lahir</label>
          <input type="text" class="input" name="tempat_lahir">
       </div>
              <div class="inputfield">
          <label>Tanggal Lahir</label>
          <input type="date" class="input" name="tanggal_lahir">
       </div>
        <div class="inputfield">
          <label>Jenis Kelamin</label>
          <div class="custom_select">
            <select name="jenis_kelamin">
              <option value="">Select</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
              <option value="Rahasia">Rahasia</option>
            </select>
          </div>
       </div> 
      <div class="inputfield">
          <label>No. HP</label>
          <input type="number" class="input" name="no_hp">
       </div>
       <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" name="email">
       </div>
       <div class="inputfield">
          <label>Alamat Web</label>
          <input type="text" class="input" name="alamat_web">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Form berikut diisi dengan benar</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>
</form>
</body>
</html>