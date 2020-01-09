<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Warga</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Tambah Data Warga</h2>
					<p class="section-lead">
						Desa Digital, Karangsari Weru Cirebon.
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('a/warga/insert') ?>" enctype="multipart/form-data">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="tempat" placeholder="Masukkan Tempat Lahir" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
										<div class="col-sm-12 col-md-7">
											<input type="date" class="form-control" name="tgl" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 control-label">Jenis Kelamin</label>
										<div class="custom-switches-stacked mt-4">
											<label class="custom-switch">
												<input type="radio" name="jenis_kelamin" value="L" class="custom-switch-input" checked required>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Laki - Laki</span>
											</label>
											<label class="custom-switch">
												<input type="radio" name="jenis_kelamin" value="P" class="custom-switch-input">
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Perempuan</span>
											</label>
										</div>
									</div>
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Blok</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="blok"  required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">RT</label>
										<div class="col-sm-12 col-md-3">
											<input type="number" class="form-control" name="rt" placeholder="01" required>
										</div>
											<label class="col-form-label col-md-1 col-lg-1 mt-auto">/ RW</label>
										<div class="col-sm-12 col-md-3">
											<input type="number" class="form-control" name="rw" placeholder="01" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
										<div class="col-sm-12 col-md-7">
											<select class="form-control selectric" name="agama" required>
												<option value="Islam">Islam</option>
												<option value="Kristen">Kristen</option>
												<option value="Budha">Budha</option>
												<option value="Katolik">Katolik</option>
												<option value="Hindu">Hindu</option>
											</select>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
										<div class="col-sm-12 col-md-7">
											<select class="form-control selectric" name="status_perkawinan" required>
												<option value="Belum Kawin">Belum Kawin</option>
												<option value="Kawin">Kawin</option>
												<option value="Janda">Janda</option>
												<option value="Duda">Duda</option>
											</select>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="pekerjaan">
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
										<div class="col-sm-12 col-md-7">
											<input type="file" class="form-control" name="foto" required>
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
