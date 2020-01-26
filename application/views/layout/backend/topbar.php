<div id="app">
	<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<ul class="navbar-nav mr-3">
					<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
				</ul>
				<ul class="navbar-nav navbar-right ml-auto mr-1">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
						<?php if ($this->session->userdata('role') === '1') {  ?>	
							<img alt="image" src="<?= base_url('assets/backend/img/avatar/').$this->session->userdata('img')?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '2') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/avatar/').$admin['img']?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '3') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/avatar/').$jurnalis['img']?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '4') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/foto_rt/').$rt['img']?>" class="rounded-circle mr-1">
						<?php } elseif ($this->session->userdata('role') === '5') { ?>
							<img alt="image" src="<?= base_url('assets/backend/img/avatar/').$warga['img']?>" class="rounded-circle mr-1">
						<?php } ?>

						<div class="d-sm-none d-lg-inline-block">
							<?php if ($this->session->userdata('role') === '1') {  ?>	
								<?= $this->session->userdata('name') ?>
							<?php } elseif ($this->session->userdata('role') === '2') { ?>
								<?= $admin['name'] ?>
							<?php } elseif ($this->session->userdata('role') === '3') { ?>
								<?= $jurnalis['name'] ?>
							<?php } elseif ($this->session->userdata('role') === '4') { ?>
								<?= $rt['name'] ?>
							<?php } elseif ($this->session->userdata('role') === '5') { ?>
								<?= $warga['id_warga'] ?>
							<?php } ?>
						</div>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger" style="margin-top: -30px">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
