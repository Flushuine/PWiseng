<?php
require 'functions.php';

//get id from url
$id = $_GET['id'];

//query mahasiswa by id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>" alt=""></li>
    <li>NRP: <?= $mhs['nrp'] ?></li>
    <li>Nama: <?= $mhs['nama'] ?></li>
    <li>Email: <?= $mhs['email'] ?></li>
    <li>Jurusan: <?= $mhs['jurusan'] ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>