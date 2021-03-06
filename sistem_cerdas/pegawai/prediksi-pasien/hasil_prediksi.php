<?php 

	if (isset($_POST['kirim'])) {
					
		$id = $_POST['id_kelompok'];

		$query = mysqli_query($koneksi, "SELECT * FROM kelompok_kriteria where id_kelompok = '$id'");
		$data = mysqli_fetch_assoc($query);
?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Hasil Pemeriksaan</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<img src="../assets/img/<?= $data['gambar']; ?>" class="img-thumbnail">
				</div>
				<div class="col-md-4">
					<p class="font-weight-bolder align-middle h6"><?= $data['nama']; ?></p>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>