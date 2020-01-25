<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Berita</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('j/berita/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Judul</th>
										<th>Isi Berita</th>
										<th>Jenis Berita</th>
										<th>Foto</th>
										<th>Status</th>
										<th>Persetujuan</th>
										<th>Tanggal</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($jurnalis as $jurnal) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $jurnal->title?></td>
										<td><?= 
											$body = $jurnal->body;
											?>
										</td>
										<td><?= $jurnal->type?></td>
										<td><img src="<?= base_url('assets/backend/img/artikel/').$jurnal->img?>" alt="" width="50px"></td>
										<td>
										<?php if ($jurnal->status === '0') { ?>
											<div class="badges">
												<span class="badge badge-danger">Pending</span>
											</div>
										<?php } else { ?>
											<div class="badges">
												<span class="badge badge-primary">Publish</span>
											</div>
										<?php } ?>	
										</td>
										<td>
										<?php if ($jurnal->is_approved === '0') { ?>
											<div class="badges">
												<span class="badge badge-danger">Belum disetujui</span>
											</div>
										<?php } else { ?>
											<div class="badges">
												<span class="badge badge-primary">Sudah disetujui</span>
											</div>
										<?php } ?>	
										</td>
										<td><?= $jurnal->date?></td>
										<td>
											<a href="<?php echo base_url('j/berita/delete/').$jurnal->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true" title="Hapus"></i></a>
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
