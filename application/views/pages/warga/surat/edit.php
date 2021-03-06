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
									<?php foreach ($surat as $data) : ?>
									<form method="post" action="<?php echo site_url('w/surat/update') ?>">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
										<div class="col-sm-12 col-md-7">
											<input type="hidden" name="id" value="<?= $data->id ?>">
											<input type="text" class="form-control" name="name" value="<?= $data->name ?>" readonly>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="nik" value="<?= $data->nik ?>" readonly>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Jenis Surat</label>
										<div class="col-sm-12 col-md-7">
											<select class="form-control selectric" name="type" required>
												<option 
												<?php if($data->type == 'Surat Keterangan Usaha') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
												<option 
												<?php if($data->type == 'Surat Keterangan Tidak Mampu') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
												<option 
												<?php if($data->type == 'Surat Keterangan Miskin') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
												<option 
												<?php if($data->type == 'Surat Keterangan Belum Pernah Menikah') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah Menikah</option>

												<option 
												<?php if($data->type == 'Surat Keterangan Kelahiran') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
												<option 
												<?php if($data->type == 'Surat Keterangan Kematian') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
												<option 
												<?php if($data->type == 'Surat Keterangan Beda Nama') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Beda Nama">Surat Keterangan Beda Nama</option>
												<option 
												<?php if($data->type == 'Surat Keterangan Penghasilan') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
												<option 
												<?php if($data->type == 'Surat Keterangan Harga Tanah') : echo 'selected'; ?><?php endif; ?> 
												value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
											</select>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pesan</label>
										<div class="col-sm-12 col-md-7">
											<textarea class="summernote" name="message" required><?= $data->message ?></textarea>
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
