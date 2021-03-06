<?php

require '../../koneksi/koneksi.php';

$id 		  = $_POST['id'];
$id_kriteria  = $_POST['kriteria_id'];
$id_solusi    = $_POST['solusi_id'];
$md 		  = $_POST['md'];
$mb   		  = $_POST['mb'];


$query = mysqli_query($koneksi, "INSERT INTO nilai_kriteria values('$id','$id_kriteria','$id_solusi','$md','$mb')");

if ($query)
{
	echo "<script>
			alert('Simpan Data berhasil');
			window.location='../index.php?page=nilai_kriteria'
		  </script>";
} else {
	echo "<script>
			alert('Simpan Data gagal');
			window.location='../index.php?page=NkriteriaTambah'
		  </script>";
}