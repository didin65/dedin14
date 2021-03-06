<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Tambah Nilai Kriteria</div>
		<div class="card-body text-dark">
			<form action="nilai-kriteria/simpan_data_Nkriteria.php" method="post">
			  <div class="form-group row">
			    <label for="nama" class="col-sm-2 col-form-label">ID Kriteria</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id">
			      <select class="form-control" name="kriteria_id">
			      	<option>~Silahkan Pilih~</option>
			      	<?php 

			      		$query = mysqli_query($koneksi, "SELECT id, keterangan FROM kriteria");
			      		while($data = mysqli_fetch_assoc($query)) { ?> 
			      	<option value="<?= $data['id']; ?>"><?= $data['id']; ?> - <?= $data['keterangan']; ?></option>
			      	<?php }  ?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">ID Solusi</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="solusi_id">
			      	<option>~Silahkan Pilih~</option>
			      	<?php 

			      		$query = mysqli_query($koneksi, "SELECT id, keterangan FROM solusi");
			      		while($data = mysqli_fetch_assoc($query)) { ?> 
			      	<option value="<?= $data['id']; ?>"><?= $data['id']; ?> <?= $data['keterangan']; ?></option>
			      	<?php }  ?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="md" class="col-sm-2 col-form-label">Nilai MD</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="md" name="md" placeholder="Masukan Niali MD">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="mb" class="col-sm-2 col-form-label">Nilai MB</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="mb" name="mb" placeholder="Masukan Niali MB">
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