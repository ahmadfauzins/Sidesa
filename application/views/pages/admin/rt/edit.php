<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data RT/RW</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Edit Data Warga</h2>
					<p class="section-lead">
						Desa Digital, Karangsari Weru Cirebon.
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<?php foreach ($rt as $rw) : ?>
									<form method="post" action="<?php echo site_url('a/rt/update') ?>" enctype="multipart/form-data">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
										<div class="col-sm-12 col-md-7">
											<input type="hidden" class="form-control" name="id" value="<?= $rw->id?>">
											<input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap" value="<?= $rw->name?>" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="email" placeholder="Masukkan Username" value="<?= $rw->email?>" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
										<div class="col-sm-12 col-md-7">
											<input type="password" class="form-control" name="password" placeholder="********">
											<small>Biarkan kosong jika tidak ingin dirubah</small>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RT</label>
										<div class="col-sm-12 col-md-7">
											<input type="number" class="form-control" name="rt" placeholder="01" value="<?= $rw->level?>" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
										<div class="col-sm-12 col-md-7">
											<div style="margin: 5px">
												<img src="<?= base_url('assets/backend/img/foto_rt/').$rw->img?>" alt="$rw->name" width="100px">
											</div>
											<input type="file" class="form-control" name="foto">
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
										<div class="col-sm-12 col-md-7">
											<button type="submit" class="btn btn-primary">Tambah Data</button>
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
									</div>
								</form>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
