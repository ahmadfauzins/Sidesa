<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Keuangan</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Tambah Data Keuangan</h2>
					<p class="section-lead">
						Desa Digital, Karangsari Weru Cirebon.
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('a/keuangan/insert') ?>">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Jenis Keuangan</label>
										<div class="col-sm-12 col-md-7">
											<select class="form-control selectric" name="jenis_keuangan" required>
												<option value="0">Pengeluaran</option>
												<option value="1">Pemasukan</option>
											</select>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Anggaran</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="type" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
										<div class="col-sm-12 col-md-7">
											<input type="number" class="form-control" name="jumlah" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
										<div class="col-sm-12 col-md-7">
											<input type="date" class="form-control" name="date" required>
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
