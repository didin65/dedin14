<div class="container-fluid">
	<div class="card">
		<div class="card-header">Data Nilai Kriteria</div>
		<div class="card-body text-dark">
			<div class="row">
				<div class="col-md-9">
					<a href="index.php?page=NkriteriaTambah" class="btn btn-success btn-sm"><i  class="fas fa-plus"></i> Tambah Data</a>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<form action="" method="post">
						<input type="text" name="cari" placeholder="Masukan Pencarian..." class="form-control">
						</form>
					</div>
				</div>
			</div>
			<table class="table table-bordered table-hover table-stripped">
				<thead  class="bg-secondary text-white">
					<tr>
						<th>No.</th>
						<th>Id Kriteria</th>
						<th>Id Solusi</th>
						<th>MD</th>
						<th>MB</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<?php 

					$no   = 1;

					if(isset($_POST['cari'])) {
						$cari = $_POST['cari'];
						$query = mysqli_query($koneksi, "SELECT * FROM nilai_kriteria where kriteria_id LIKE '%".$cari."%'");
					} else {

						$query = mysqli_query($koneksi, "SELECT * FROM nilai_kriteria");
					}  

					$cek  = mysqli_num_rows($query);
					if($cek > 0) {

						while ($data = mysqli_fetch_assoc($query)) { ?>

						
				<tbody>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $data['kriteria_id']; ?></td>
						<td><?= $data['solusi_id']; ?></td>
						<td><?= $data['md']; ?></td>
						<td><?= $data['mb']; ?></td>
						<td>
							<a href="index.php?page=edit_Nkriteria&id=<?= $data['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
							<a href="nilai-kriteria/hapus_Nkriteria.php?id=<?= $data['id']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				</tbody>

				<?php } } else { ?>
					<div class="alert alert-primary" role="alert">
					  Maaf data anda yang cari tidak ditemukan
					</div>
				<?php } ?>

			</table>
			<hr>
		</div>
	</div>
</div>