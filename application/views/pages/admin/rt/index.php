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
										<th>Email</th>
										<th>Password</th>
										<th>Hak Akses</th>
										<th>Foto</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($rt as $rw) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $rw->name?></td>
										<td><?= $rw->email?></td>
										<td><?= $rw->password?></td>
										<td><?= 'RT '.$rw->level?></td>
										<td><img src="<?= base_url('assets/backend/img/foto_rt/').$rw->img?>" alt="" width="50px"></td>
										<td>
											<a href="<?php echo base_url('a/rt/edit/').$rw->id ?>" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true" title="Edit"></i></a>
											<a href="<?php echo base_url('a/rt/delete/').$rw->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a>
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
