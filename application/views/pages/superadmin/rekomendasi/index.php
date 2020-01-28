<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Penduduk kurang mampu</h1>
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
										<th>Nama Lengkap</th>
										<th>Alamat</th>
										<th>Keterangan</th>
									</tr>
									<?php
									$no=1;
									foreach($rekomendasi as $data) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $data->name?></td>
										<td><?= $data->blok?>, RT/RW <?= $data->rt?>/<?= $data->rw?>, Desa Karangsari, Weru, Cirebon</td>
										<td><?= $data->keterangan?></td>
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
