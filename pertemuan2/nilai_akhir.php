<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$a = $_POST['a'];
$tgs = $_POST['tgs'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$hasil = ($a + $tgs + $uts + $uas) / 4;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Akhir @apriansyahrs</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="kalkulator">
    <h2 class="judul">Nilai Akhir</h2>
    <form method="post">
      <input type="text" name="a" class="bil" autocomplete="off" placeholder="Masukkan Point Absen">
      <input type="text" name="tgs" class="bil" autocomplete="off" placeholder="Masukkan Nilai Tugas">
      <input type="text" name="uts" class="bil" autocomplete="off" placeholder="Masukkan Nilai UTS">
      <input type="text" name="uas" class="bil" autocomplete="off" placeholder="Masukkan Nilai UAS">
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