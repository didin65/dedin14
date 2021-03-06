<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post">
		<table>
			<?php
				require 'koneksi/koneksi.php';

				$query = mysqli_query($koneksi, "SELECT * FROM kriteria");

				while ($data  = mysqli_fetch_assoc($query)) { ?>
			<tr>
				<td><input type="checkbox" value="<?= $data['id_kelompok']; ?>" name="id_kelompok"><?= $data['keterangan']; ?></td>
			</tr>
			
		<?php } ?>
		<tr>
				<td><button type="submit" name="kirim">Cek</button></td>
			</tr>
		</table>
	</form>

	<?php

		if (isset($_POST['kirim'])) {
			
			$id = $_POST['id_kelompok'];

			$query = mysqli_query($koneksi, "SELECT * FROM kelompok_kriteria where id_kelompok = '$id'");
			$data = mysqli_fetch_assoc($query);

			echo "Hasil Periksa : ".$data['nama']. "<br>";

			if ($data['nama'] == "Obesitas 1") {
				
				$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '2'");
				$data = mysqli_fetch_assoc($query);

				echo "Status : ". $data['status']. "<br>";
				echo "Solusi : ". $data['keterangan']. "<br>";
				
			} else if($data['nama'] == "Obesitas 2") {

				$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '4'");
				$data = mysqli_fetch_assoc($query);

				echo "Status : ". $data['status']. "<br>";
				echo "Solusi : ". $data['keterangan']. "<br>";
			} else if($data['nama'] == "Obesitas 3") {

				$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '5'");
				$data = mysqli_fetch_assoc($query);

				echo "Status : ". $data['status']. "<br>";
				echo "Solusi : ". $data['keterangan']. "<br>";
			}
		}

	?>
	
</body>
</html>