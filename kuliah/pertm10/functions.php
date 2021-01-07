<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'PW');
}

function query($query)
{
  $conn = koneksi();

  $res = mysqli_query($conn, $query);

  //if the result is just 1 data
  if (mysqli_num_rows($res) == 1) {
    return mysqli_fetch_assoc($res);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($res)) {
    $rows[] = $row;
  }

  return $rows;
}
