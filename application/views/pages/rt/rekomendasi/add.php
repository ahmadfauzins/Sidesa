<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Warga</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Rekomendasikan Warga</h2>
					<p class="section-lead">
						Desa Digital, Karangsari Weru Cirebon.
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" action="<?php echo site_url('rt/rekomendasi/insert') ?>" enctype="multipart/form-data">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
										<div class="col-sm-12 col-md-7">
											<select class="form-control selectric" name="warga" required>
												<?php
												foreach($warga as $data)
												{
													echo '<option value="'.$data->id.'">'.$data->name.'</option>';
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
										<div class="col-sm-12 col-md-7">
											<textarea name="ket" class="form-control"></textarea>
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
