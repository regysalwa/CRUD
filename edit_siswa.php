<?php
  require 'koneksi.php';
  include 'proses_siswa.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Siswa</title>
  </head>
  <body>
    <div class="container-sm">

      <?php
        //mendapatkan nilai dari url:
        if (isset($_GET['add'])){
          if ($_GET['add']=='berhasil'){
            echo "<div class='alert alert-success'>Tambah Data Berhasil</div>";
          }else if ($_GET['add']=='gagal'){
            echo "<div class='alert alert-danger'>Tambah Data Gagal</div>";
          }
        }
      ?>
      <h1>Form Edit Siswa:</h1>
      <form method="post">
        <h6> Nama : </h6>
        <input type="text" name="nama" required>

        <h6> Kelas : </h6>
        <input type="text" name="kelas" required>

        <h6> Alamat : </h6>
        <input type="text" name="alamat" required>

        <br><br>
        <button type="submit" name="add-siswa">Edit Siswa</button>        
      </form>
       <a href="index.php">
          <button class="btn btn-danger">Kembali</button>
        </a>

    </div>
  </body>
</html>
