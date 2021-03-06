<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Tambah Solusi</div>
		<div class="card-body text-dark">
			<form action="data-solusi/simpan_data_solusi.php" method="post">
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id_solusi">
			      <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="status" class="col-sm-2 col-form-label">Status</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="status" name="status" placeholder="Masukan Status">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" placeholder="Masukan Keterangan..." name="keterangan" id="keterangan" rows="4"></textarea>
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