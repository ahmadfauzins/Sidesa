<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Berita</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Edit Data Berita</h2>
					<p class="section-lead">
						Desa Digital, Karangsari Weru Cirebon.
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<?php foreach ($berita as $brt) : ?>
									<form method="post" action="<?php echo site_url('a/berita/update') ?>" enctype="multipart/form-data">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
										<div class="col-sm-12 col-md-7">
											<input type="hidden" class="form-control" name="id" value="<?= $brt->id?>">
											<input type="text" class="form-control" name="title" value="<?= $brt->title?>" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Berita</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="type" value="<?= $brt->type?>" required>
											<small class="form-text text-muted">Ex : Pendidikan, Ekonomi dll</small>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi Berita</label>
										<div class="col-sm-12 col-md-7">
											<textarea class="summernote" name="body" required><?= $brt->body?>"</textarea>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
										<div class="col-sm-12 col-md-7">
										<div style="margin: 5px">
												<img src="<?= base_url('assets/backend/img/artikel/').$brt->image?>" alt="$rw->name" width="100px">
											</div>
											<input type="file" class="form-control" name="foto">
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
										<div class="col-sm-12 col-md-7">
											<button type="submit" class="btn btn-primary">Edit Data</button>
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
