<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data RT/RW</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('a/rt/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Username</th>
										<th>Password</th>
										<th>Hak Akses</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($rt as $rw) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $rw->name?></td>
										<td><?= $rw->username?></td>
										<td><?= $rw->password?></td>
										<td><?= 'RT '.$rw->role?></td>
										<td>
											<a href="#" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i></a>
											<a href="#" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i></a>
										</td>
									</tr>
									<?php endforeach;?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; 2020 <div class="bullet"></div> Website Resmi Desa Karangsari
	</div>
</footer>
