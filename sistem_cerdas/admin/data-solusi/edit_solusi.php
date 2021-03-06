<?php require 'update_solusi.php'; ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Edit Solusi</div>
		<div class="card-body text-dark">
			<form action="data-solusi/simpanEdit_data_solusi.php" method="post">
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id_solusi" value="<?= $data['id_solusi'] ?>">
			      <input type="text" class="form-control" id="kode" name="kode" value="<?= $data['kode'] ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="status" class="col-sm-2 col-form-label">Status</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="status" name="status" value="<?= $data['status'] ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="keterangan" id="keterangan" rows="4"><?= $data['keterangan']; ?></textarea>
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