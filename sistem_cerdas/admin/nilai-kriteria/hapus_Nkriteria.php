<?php

require '../../koneksi/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM nilai_kriteria where id = '$id'");
if ($query)
{
	echo "<script>
			alert('Hapus Data berhasil');
			window.location='../index.php?page=nilai_kriteria'
		  </script>";
} else {
	echo "<script>
			alert('Hapus Data gagal');
			window.location='../index.php?page=nilai_kriteria'
		  </script>";
}