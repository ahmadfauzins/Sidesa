<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Jurnalis</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('a/jurnalis/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Nama Lengkap</th>
										<th>Email</th>
										<th>Password</th>
										<th>Foto</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($jurnalis as $jurnal) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $jurnal->name?></td>
										<td><?= $jurnal->email?></td>
										<td><?= $jurnal->password?></td>
										<td><img src="<?= base_url('assets/backend/img/avatar/').$jurnal->img?>" alt="" width="50px"></td>
										<td>
											<a href="<?php echo base_url('a/jurnalis/delete/').$jurnal->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a>
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
