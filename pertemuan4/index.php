<?php
if (isset($_POST['daftar'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];

  switch ($_POST['jenis_tabungan']) {
    case 'pelajar':
      $jenis_rekening = "Pelajar";
      $min_setoran = "Rp. 100.000";
      $bunga = "2,5%";
      break;

    case 'tabungan_biasa':
      $jenis_rekening = "Tabungan Biasa";
      $min_setoran = "Rp. 200.000";
      $bunga = "5%";
      break;

    case 'umkm':
      $jenis_rekening = "UMKM";
      $min_setoran = "Rp. 500.000";
      $bunga = "10%";
      break;
  };
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form | @apriansyahrs</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <form method="POST">
              <div class="form-group">
                <label>Nomor KTP</label>
                <input type="number" class="form-control" name="nik">
              </div>
              <div class="form-group">
                <label>Nama Nasabah</label>
                <input type="text" class="form-control" name="nama">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text">Jenis Rekening</label>
                </div>
                <select class="custom-select" name="jenis_tabungan">
                  <option selected>~Pilih~</option>
                  <option value="pelajar">Pelajar</option>
                  <option value="tabungan_biasa">Tabungan Biasa</option>
                  <option value="umkm">UMKM</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" name="daftar" value="Cek" class="btn btn-primary btn-block">
              </div>
            </form>
          </div>
        </div>

        <?php
        if (isset($_POST['daftar'])) {
          $nik = $_POST['nik'];
          $nama = $_POST['nama'];

          switch ($_POST['jenis_tabungan']) {
            case 'pelajar':
              $jenis_rekening = "Pelajar";
              $min_setoran = "Rp. 100.000";
              $bunga = "2,5%";
              break;

            case 'tabungan_biasa':
              $jenis_rekening = "Tabungan Biasa";
              $min_setoran = "Rp. 200.000";
              $bunga = "5%";
              break;

            case 'umkm':
              $jenis_rekening = "UMKM";
              $min_setoran = "Rp. 500.000";
              $bunga = "10%";
              break;
          };
          echo '<div class="card mt-3">
          <div class="card-header bg-transparent mb-0"><h5 class="text-center">Details</h5></div>
                  <div class="card-body">
                      <div class="form-group">
                        <label>Nomor KTP</label>
                        <label class="form-control">' . $nik . '</label>
                      </div>
                      <div class="form-group">
                        <label>Nama Nasabah</label>
                        <label class="form-control">' . $nama . '</label>
                      </div>
                      <div class="form-group">
                        <label>Jenis Rekening</label>
                        <label class="form-control">' . $jenis_rekening . '</label>
                      </div>
                      <div class="form-group">
                        <label>Minimal Setoran</label>
                        <label class="form-control">' . $min_setoran . '</label>
                      </div>
                      <div class="form-group">
                        <label>Bunga Perbulan</label>
                        <label class="form-control">' . $bunga . '</label>
                      </div>
                  </div>
                </div>';
        }
        ?>

      </div>
    </div>
  </div>
</body>

</html>