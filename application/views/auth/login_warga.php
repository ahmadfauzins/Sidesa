<div id="app">
	<div id="app">
		<section class="section">
			<div class="container mt-4">
				<div class="row">
				<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
					<a href="<?php echo base_url('');?>"><img src="<?php echo base_url('assets/frontend/img/logokarangsari.png');?>" width="100%" max alt=""></a>
						<div class="card card-primary mt-4">
							<div class="card-header"><h4>Login</h4></div>
							<div class="card-body">
								<form method="POST" action="<?= site_url('auth/login_warga')?>" class="needs-validation" novalidate="">
									<div class="form-group">
										<label for="nik">NIK</label>
										<input id="nik" type="text" class="form-control" name="nik" tabindex="1" required autofocus>
										<div class="invalid-feedback">
											Please fill in your email
										</div>
									</div>
									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
										</div>
										<input id="password" type="password" class="form-control" name="password" tabindex="2" required>
										<div class="invalid-feedback">
											please fill in your password
										</div>
									</div>
									<div class="form-group">
										<button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
											Login
										</button>
									</div>
									<small class="form-text text-muted">Gunakan NIK yang sudah terdaftar di desa</small>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Copyright &copy; Desa Karangsari 2020
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
	</div>
