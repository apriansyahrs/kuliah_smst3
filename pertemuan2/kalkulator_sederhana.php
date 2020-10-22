<?php
if (isset($_POST['hitung'])) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  $operasi = $_POST['operasi'];
  switch ($operasi) {
    case 'tambah':
      $hasil = $x + $y;
      break;
    case 'kurang':
      $hasil = $x - $y;
      break;
    case 'kali':
      $hasil = $x * $y;
      break;
    case 'bagi':
      $hasil = $x / $y;
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="kalkulator">
    <h2 class="judul">KALKULATOR</h2>
    <form method="post">
      <input type="text" name="x" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
      <input type="text" name="y" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
      <select class="opt" name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">/</option>
      </select>
      <input type="submit" name="hitung" value="Hitung" class="tombol">
    </form>
    <?php if (isset($_POST['hitung'])) { ?>
      <input type="text" value="<?php echo $hasil; ?>" class="bil">
    <?php } else { ?>
      <input type="text" value="0" class="bil">
    <?php } ?>
    <a class="brand" href="https://apriansyah.my.id/">Made by @apriansyahrs</a>
  </div>

</body>

</html>