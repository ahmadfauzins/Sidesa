<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Request Surat</h1>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-md">
									<tr>
										<th>#</th>
										<th>Nama</th>
										<th>NIK</th>
										<th>Jenis Surat</th>
										<th>Pesan</th>
										<th>Tanggal Request</th>
										<th>Action</th>
									</tr>
									<?php
									$no=1;
									foreach($surat as $data) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $data->name?></td>
										<td><?= $data->nik?></td>
										<td><?= $data->type?></td>
										<td><?= $data->message?></td>
										<td><?= $data->date?></td>
										<td>
											<a href="<?php echo base_url('w/surat/edit/').$data->id ?>" title="Edit" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i></a>
											<a href="<?php echo base_url('w/surat/delete/').$data->id ?>" title="Hapus" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash" aria-hidden="true"></i></a>
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
