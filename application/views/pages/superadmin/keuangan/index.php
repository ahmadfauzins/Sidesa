<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Keuangan</h1>
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
										<th>Jenis Keuangan (I/O)</th>
										<th>Jenis Anggaran</th>
										<th>Jumlah</th>
										<th>Tanggal</th>
									</tr>
									<?php
									$no=1;
									foreach($keuangan as $data) : ?>
									<tr>
										<td><?= $no++?></td>
										<td>
											<?php if ($data->jenis_keuangan === '0') { ?>
												<div class="badges">
													<span class="badge badge-success">Pengeluaran</span>
												</div>
											<?php } else { ?>
												<div class="badges">
													<span class="badge badge-primary">Pemasukan</span>
												</div>
											<?php } ?>
										</td>
										<td><?= $data->type?></td>
										<td>Rp. <?= rupiah($data->jumlah);?></td>
										<td><?= $data->date?></td>
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
