<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Berita(Pending)</h1>
		</div>
		<div class="section-body">
			<?php foreach ($berita as $brt) : ?>
			<div class="row">
				<div class="col-12">
					<article class="article article-style-c">
						<div class="container">
							<div class="article-header">
								<div class="article-image" data-background="<?= base_url('assets/backend/img/artikel/').$brt->image?>">
							</div>
						</div>
					</div>
					<div class="article-details">
						<div class="article-category"><a href="#"><?= $brt->type ?></a> <div class="bullet"></div> 
							<a href="#">
								<?php
									$date 	= $brt->date;
									$last	= new DateTime($date);
									$now 	= new DateTime(date('Y-m-d h:i:s', time()));
									$interval = $last->diff($now);

									$years	= (int)$interval->format('%Y');
									$months	= (int)$interval->format('%m');
									$days	= (int)$interval->format('%d');
									$hours	= (int)$interval->format('%H');
									$minutes= (int)$interval->format('%i');

									if ($years > 0) {
										echo $years.' tahun '.$months.' bulan '.$days.' hari '.$hours.' jam '.$minutes.' menit yang lalu.';
									} elseif ($months > 0) {
										echo $months.' bulan '.$days.' hari '.$hours.' jam '.$minutes.' menit yang lalu.';
									} elseif ($days > 0) {
										echo $days.' hari '.$hours.' jam '.$minutes.' menit yang lalu.';
									} elseif ($hours > 0) {
										echo $hours.' jam '.$minutes.' menit yang lalu.';
									} else {
										echo $minutes.' menit yang lalu.';
									}
								?>
							</a>
							</div>
						<div class="article-title">
							<h5><?= $brt->title ?></h5>
						</div>
						<p><?= $brt->body ?></p>
							<div class="article-user ml-5">
								<div class="article-user-details">
									<div class="user-detail-name">
										<a href="#"><?= $brt->name ?></a>
									</div>
									<div class="text-job">Jurnalis</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</section>
</div>
<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; 2020 <div class="bullet"></div> Website Resmi Desa Karangsari
	</div>
</footer>
