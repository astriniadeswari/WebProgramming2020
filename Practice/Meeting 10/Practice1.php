<?php
// choose and connect database
$conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');

// tb_mahasiswa query
$result = mysqli_query($conn, "select * from tb_mahasiswa");

// turn data into array
//  $row = mysqli_fetch_row($result); //numeric array
//  $row = mysqli_fetch_assoc($result); //associative array
//  $row = mysqli_fetch_array($result); //both

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// var_dump($rows); //showing result on HTML page

// accommodate to variable mahasiswa
$mahasiswa = $rows;

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
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $no = 1;
    foreach ($mahasiswa as $mahasiswa) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><img src="img/<?= $mahasiswa['foto']; ?>" width="100"></td>
        <td><?= $mahasiswa['nim']; ?></td>
        <td><?= $mahasiswa['nama']; ?></td>
        <td><?= $mahasiswa['email']; ?></td>
        <td><?= $mahasiswa['jurusan']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>