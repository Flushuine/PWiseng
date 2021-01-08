<?php
require 'functions.php';

//isset button clicked
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "Data gagal ditambahkan!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Tambah Data Mahasiswa</h3>

  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama:
          <input type="text" name="nama" autofocus>
        </label>
      </li>
      <li>
        <label>
          NRP:
          <input type="text" name="nrp">
        </label>
      </li>
      <li>
        <label>
          Email:
          <input type="text" name="email">
        </label>
      </li>
      <li>
        <label>
          Jurusan:
          <select name="jurusan">
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Industri">Teknik Industri</option>
          </select>
        </label>
      </li>
      <li>
        <label>
          Gambar:
          <input type="text" name="gambar">
        </label>
      </li>
      <button type="submit" name="tambah">Tambah Data</button>
    </ul>
  </form>
</body>

</html>