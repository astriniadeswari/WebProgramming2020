<?php
require 'function.php';
$mahasiswa = query("select * from tb_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
</head>

<body>

  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $no = 1;
    foreach ($mahasiswa as $mahasiswa) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><img src="img/<?= $mahasiswa['foto']; ?>" width="100"></td>
        <td><?= $mahasiswa['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $mahasiswa['id']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>