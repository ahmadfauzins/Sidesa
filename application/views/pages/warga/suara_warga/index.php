<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Suara Warga</h1>
		</div>
		<div class="section-body">
			<a href="<?= base_url('w/suara-warga/add') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a><br><br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Judul</th>
										<th>Isi Suara Warga</th>
										<th>Tanggal</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($suara as $data) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $data->title?></td>
										<td>
											<?php
												$body = word_limiter($data->body, 20);
												echo $body;
											?>
										</td>
										<td><?= $data->date?></td>
										<td>
											<a href="<?php echo base_url('w/suara-warga/edit/').$data->id ?>" title="Edit" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i></a>
											<a href="<?php echo base_url('w/suara-warga/delete/').$data->id ?>" title="Hapus" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true"></i></a>
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
