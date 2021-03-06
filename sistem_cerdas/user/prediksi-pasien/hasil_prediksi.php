<?php 

	if (isset($_POST['kirim'])) {
					
		$id = $_POST['id_kelompok'];

		$query1 = mysqli_query($koneksi, "SELECT * FROM kelompok_kriteria where id_kelompok = '$id'");
		$data1 = mysqli_fetch_assoc($query1);

		if ($data1['nama'] == "Obesitas 1") {
				
				$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '2'");
				$data = mysqli_fetch_assoc($query);

				$nama 	= $data1['nama'];
				$status = $data['status'];
				$solusi = $data['keterangan'];

			} else if($data1['nama'] == "Obesitas 2") {

				$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '4'");
				$data = mysqli_fetch_assoc($query);

				$nama 	= $data1['nama'];
				$status = $data['status'];
				$solusi = $data['keterangan'];
			} else if($data1['nama'] == "Obesitas 3") {

				$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '5'");
				$data = mysqli_fetch_assoc($query);

				$nama 	= $data1['nama'];
				$status = $data['status'];
				$solusi = $data['keterangan'];
			}
?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Hasil Pemeriksaan</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-2">
					<img src="../assets/img/<?= $data1['gambar']; ?>" class="img-thumbnail">
				</div>
				<div class="col-md-8">
					<table class="table table-bordered table-hover table-stripped">
						<thead  class="bg-secondary text-white">
							<tr>
								<th>Obesitas</th>
								<th>Status</th>
								<th>Solusi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?= $nama; ?></td>
								<td><?= $status; ?></td>
								<td><?= $solusi; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>