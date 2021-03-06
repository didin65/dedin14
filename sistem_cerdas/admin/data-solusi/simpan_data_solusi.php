<?php

require '../../koneksi/koneksi.php';

$id 		  = $_POST['id_solusi'];
$kode         = $_POST['kode'];
$status 	  = $_POST['status'];
$keterangan   = $_POST['keterangan'];


$query = mysqli_query($koneksi, "INSERT INTO solusi values('$id','$kode','$status','$keterangan')");

if ($query)
{
	echo "<script>
			alert('Simpan Data berhasil');
			window.location='../index.php?page=solusi'
		  </script>";
} else {
	echo "<script>
			alert('Simpan Data gagal');
			window.location='../index.php?page=tambah_solusi'
		  </script>";
}