<?php

require '../../koneksi/koneksi.php';

$id 		  = $_POST['id'];
$id_kriteria  = $_POST['kriteria_id'];
$id_solusi    = $_POST['solusi_id'];
$md 		  = $_POST['md'];
$mb   		  = $_POST['mb'];

$query = mysqli_query($koneksi, "UPDATE nilai_kriteria SET id = '$id', kriteria_id = '$id_kriteria', solusi_id = '$id_solusi', md = '$md', mb = '$mb' WHERE id='$id'");

if ($query)
{
	echo "<script>
			alert('Ubah Data berhasil');
			window.location='../index.php?page=nilai_kriteria'
		  </script>";
} else {
	echo "<script>
			alert('Ubah Data gagal');
			window.location='../index.php?page=nilai_kriteria'
		  </script>";
}