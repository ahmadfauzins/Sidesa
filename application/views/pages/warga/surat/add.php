<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Request Surat</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Tambah Data Request Surat</h2>
					<p class="section-lead">
						Desa Digital, Karangsari Weru Cirebon.
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('w/surat/insert') ?>">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Jenis Surat</label>
										<div class="col-sm-12 col-md-7">
											<select class="form-control selectric" name="type" required>
												<option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
												<option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
												<option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
												<option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah Menikah</option>
												<option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
												<option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
												<option value="Surat Keterangan Beda Nama">Surat Keterangan Beda Nama</option>
												<option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
												<option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
											</select>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pesan</label>
										<div class="col-sm-12 col-md-7">
											<textarea class="summernote" name="message" required></textarea>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
