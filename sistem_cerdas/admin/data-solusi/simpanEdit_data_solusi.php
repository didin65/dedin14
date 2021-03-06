<?php

require '../../koneksi/koneksi.php';

$id 		  = $_POST['id_solusi'];
$kode         = $_POST['kode'];
$status 	  = $_POST['status'];
$keterangan   = $_POST['keterangan'];

$query = mysqli_query($koneksi, "UPDATE solusi SET id_solusi = '$id', kode = '$kode', status = '$status', keterangan = '$keterangan' WHERE id_solusi='$id'");

if ($query)
{
	echo "<script>
			alert('Ubah Data berhasil');
			window.location='../index.php?page=solusi'
		  </script>";
} else {
	echo "<script>
			alert('Ubah Data gagal');
			window.location='../index.php?page=solusi'
		  </script>";
}