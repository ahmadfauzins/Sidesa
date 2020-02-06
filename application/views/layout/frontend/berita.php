<div style="margin-top: 100px-">
<div class="recent_trip_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<div class="section_title text-center mb_70">
					<h3>Berita Desa</h3>
				</div>
			</div>
		</div>

		<div class="carousel slide" id="myCarousel">
			<div class="carousel-inner">
				<div class="item active">
			<div class="row">		
			<?php foreach($berita as $loaddata) {?>
				
			<div class="col-lg-4 col-md-6">
				<div class="single_trip">
					<div class="thumb">
						<img src="<?php echo base_url(); ?>assets/backend/img/artikel/<?php echo $loaddata['image']; ?>" alt="">
					</div>
					<div class="info">
						<div class="date">
						<span>
								<?php
									$date 	= $loaddata['date'];
									$last	= new DateTime($date);
									$now 	= new DateTime(date('Y-m-d h:i:s', time()));
									$interval = $last->diff($now);

									$years	= (int)$interval->format('%Y');
									$months	= (int)$interval->format('%m');
									$days	= (int)$interval->format('%d');
									$hours	= (int)$interval->format('%H');
									$minutes= (int)$interval->format('%i');

									if ($years > 0) {
										echo $years.' tahun yang lalu.';
									} elseif ($months > 0) {
										echo $months.' bulan yang lalu.';
									} elseif ($days > 0) {
										echo $days.' hari yang lalu.';
									} elseif ($hours > 0) {
										echo $hours.' jam '.$minutes.' menit yang lalu.';
									} else {
										echo $minutes.' menit yang lalu.';
									}
								?>
						</span>
						</div>
						<a href="#">
						<h3><?php echo $loaddata['title']; ?></h3>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
			<!-- <nav>
				<ul class="control-box pager">
					<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
					<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
				</ul>
			</nav> -->
	</div>
	
</div>
		</div></div></div>
</div>
