<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$x = $_POST['x'];
$y = $_POST['y'];

$hasil = $x - $y;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengurangan @apriansyahrs</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="kalkulator">
    <h2 class="judul">Pengurangan</h2>
    <form method="post">
      <input type="text" name="x" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
      <input type="text" name="y" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
      <div class="center">
        <input type="submit" name="hitung" value="Hitung" class="btn hitung">
        <input type="reset" value="Reset" class="btn reset">
      </div>
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