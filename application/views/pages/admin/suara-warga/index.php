<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Suara Warga</h1>
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
										<th>Judul</th>
										<th>Isi Suara Warga</th>
										<th>Pengirim</th>
										<th>Tanggal</th>
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
										<td><?= $data->name?></td>
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
