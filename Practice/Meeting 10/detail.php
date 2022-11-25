<?php
require 'function.php';

// get id from url
$id = $_GET['id'];

// query based on id
$mahasiswa = query("select * from tb_mahasiswa where id=$id");
//var_dump($mahasiswa['nama']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <img src="img/<?= $mahasiswa['foto']; ?>" width="100">
    <li>NIM: <?= $mahasiswa['nim']; ?></li>
    <li>Nama: <?= $mahasiswa['nama']; ?></li>
    <li>Email: <?= $mahasiswa['email']; ?></li>
    <li>Jurusan: <?= $mahasiswa['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="practice3.php">Kembali ke Halaman Daftar Mahasiswa</a></li>
  </ul>
</body>

</html>