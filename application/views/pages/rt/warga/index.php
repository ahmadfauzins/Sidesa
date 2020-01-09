<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Warga RT <?= $this->session->userdata('level') ?></h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('rt/warga/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>NIK</th>
										<th>Nama Lengkap</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Foto</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($warga as $wrg) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $wrg->nik?></td>
										<td><?= $wrg->name?></td>
										<td><?= $wrg->jk?></td>
										<td><?=$wrg->blok?>, RT/RW <?= $wrg->rt?>/<?= $wrg->rw?>, Desa Karangsari, Weru, Cirebon</td>
										<td><img src="<?= base_url('assets/backend/img/foto_warga/').$wrg->img?>" alt="" width="50px"></td>
										<td>
											<a href="<?php echo base_url('rt/warga/edit/').$wrg->id ?>" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true" title="Edit"></i></a>
											<a href="<?php echo base_url('rt/warga/delete/').$wrg->id ?>" class="btn btn-danger" data-confirm="Anda Yakin?|Menghapus Data <?= $wrg->name?> ?" data-confirm-yes="<?php echo base_url('rt/warga/delete/').$wrg->id ?>"><i class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a>
											<!-- <button class="btn btn-danger" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="alert('Deleted :)');">Delete</button> -->
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
