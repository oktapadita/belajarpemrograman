<?php
require 'functions.php';

//cek apakah tombol submit sudah dipencet
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'latihan3.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('Data gagal ditambahkan');
      document.location.href = 'latihan3.php';
    </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tanda Mahasiswa</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          Nama:
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NRP:
          <input type="text" name="nrp" required>
        </label>
      </li>
      <li>
        <label>
          Email:
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan:
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar:
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>