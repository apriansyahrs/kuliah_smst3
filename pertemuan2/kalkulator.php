<?php
if (isset($_POST['hitung'])) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  $operasi = $_POST['operasi'];
  $phi = 22 / 7;


  if ($operasi == 'tambah') {
    $hasil = $x + $y;
  } else if ($operasi == 'kurang') {
    $hasil = $x - $y;
  } else if ($operasi == 'kali') {
    $hasil = $x * $y;
  } else if ($operasi == 'bagi') {
    $hasil = $x / $y;
  } else if ($operasi == 'mod') {
    $hasil = $x % $y;
  } else if ($operasi == 'kuadrat') {
    $hasil = $x ** $y;
  } else if ($operasi == 'luas_segitiga') {
    $hasil = 1 / 2 * ($x * $y);
  } else if ($operasi == 'k_persegipanjang') {
    $hasil = 2 * ($x + $y);
  } else if ($operasi == 'v_tabung') {
    $hasil = $phi * $x * $y;
  } else {
    $hasil = 0;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="kalkulator">
    <h2 class="judul">KALKULATOR</h2>
    <form method="post">
      <input type="text" name="x" class="bil" autocomplete="off" placeholder="Masukkan Bilangan X">
      <input type="text" name="y" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Y">
      <select class="opt" name="operasi">
        <option value="">~Pilih Operasi~</option>
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">/</option>
        <option value="mod">%</option>
        <option value="kuadra">Kuadrat</option>
        <option value="luas_segitiga">L. Segitiga</option>
        <option value="k_persegipanjang">K. Persegi Panjang</option>
        <option value="v_tabung">V. Tabung</option>

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