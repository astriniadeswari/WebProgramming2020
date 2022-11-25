<?php

function connection()
{
  return mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
}

function query($query)
{
  $conn = connection();

  $result = mysqli_query($conn, $query);

  // if the result only show 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
