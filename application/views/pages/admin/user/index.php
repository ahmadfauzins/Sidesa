<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data User</h1>
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
										<th>NIK</th>
										<th>Password</th>
									</tr>
									<?php
									$no=1;
									foreach($user as $data) : ?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $data->nik?></td>
										<td><?= $data->password?></td>
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
