<?php

require '../koneksi/koneksi.php';
$id    = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM nilai_kriteria where id = '$id'");
$data  = mysqli_fetch_assoc($query);

?> 