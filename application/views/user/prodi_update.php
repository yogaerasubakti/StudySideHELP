<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="au-card">
				<div class="alert alert-success" role="alert">
					<i class="fas fa-university"></i> Form Update Prodi
				</div>

				<?php foreach($prodi as $prd): ?>
				<form action="<?= base_url('prodi/update_aksi') ?>" method="post">

					<div class="row">
						<div class="col-md-6">

							<div class="form-group">
								<label for="">Kode Prodi</label>
								<input type="hidden" name="id_prodi" value="<?= $prd->id_prodi; ?>">
								<input type="text" name="kode_prodi" class="form-control" value="<?= $prd->kode_prodi; ?>">
							</div>
							<div class="form-group">
								<label for="">Nama Prodi</label>
								<input type="text" name="nama_prodi" class="form-control" value="<?= $prd->nama_prodi; ?>">
							</div>

							<button type="submit" class="btn btn-primary">Simpan</button>

						</div>
					</div>

				</form>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>