<?php require 'update_Nkriteria.php'; ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Edit Nilai Kriteria</div>
		<div class="card-body text-dark">
			<form action="nilai-kriteria/simpanEdit_data_Nkriteria.php" method="post">
			  <div class="form-group row">
			    <label for="nama" class="col-sm-2 col-form-label">ID Kriteria</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id" value="<?= $data['id']; ?>">
			      <select class="form-control" name="kriteria_id">
			      	<option value="<?= $data['kriteria_id']; ?>">~<?= $data['kriteria_id']; ?>~</option>
			      	<?php 

			      		$query = mysqli_query($koneksi, "SELECT id_kriteria, keterangan FROM kriteria");
			      		while($data1 = mysqli_fetch_assoc($query)) { ?> 
			      	<option value="<?= $data1['id_kriteria']; ?>"><?= $data1['id_kriteria']; ?> - <?= $data1['keterangan']; ?></option>
			      	<?php }  ?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">ID Solusi</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="solusi_id">
			      	<option value="<?= $data['solusi_id']; ?>">~<?= $data['solusi_id']; ?>~</option>
			      	<?php 

			      		$query = mysqli_query($koneksi, "SELECT id_solusi, keterangan FROM solusi");
			      		while($data2 = mysqli_fetch_assoc($query)) { ?> 
			      	<option value="<?= $data2['id_solusi']; ?>"><?= $data2['id_solusi']; ?> <?= $data1['keterangan']; ?></option>
			      	<?php }  ?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="md" class="col-sm-2 col-form-label">Nilai MD</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="md" name="md" value="<?= $data['md']; ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="mb" class="col-sm-2 col-form-label">Nilai MB</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="mb" name="mb" value="<?= $data['mb']; ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Simpan</button>
			    </div>
			  </div>
			</form>
			<hr>
		</div>
	</div>
</div>