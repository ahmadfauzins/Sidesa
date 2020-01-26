<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Profile </h1>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="section-body">
					<h2 class="section-title">Ubah Password</h2>
					<p class="section-lead">
						Desa Digital, Karangsari Weru Cirebon.
					</p>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<?= $this->session->flashdata('message') ?>
									<form method="post" action="<?php echo site_url('a/profile/changepassword') ?>">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password Lama</label>
										<div class="col-sm-12 col-md-7">
											<input type="password" class="form-control" name="lama">
											<?= form_error('lama', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password Baru</label>
										<div class="col-sm-12 col-md-7">
											<input type="password" class="form-control" name="baru">
											<?= form_error('baru', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Password Baru</label>
										<div class="col-sm-12 col-md-7">
											<input type="password" class="form-control" name="konfirmasi">
											<?= form_error('konfirmasi', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
										<div class="col-sm-12 col-md-7">
											<button type="submit" class="btn btn-primary">Ubah Password</button>
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
