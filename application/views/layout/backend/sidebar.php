<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand col-xl-12">
			<a href="<?= base_url('') ?>">
				<img  src="<?= base_url('assets/frontend/img/logokarangsari.png');?>" width="100%" alt="">
			</a>
			<!-- <img alt="image" class="col-md-8 rounded-circle mr-1" src="<?= base_url('assets/backend/img/avatar/').$this->session->userdata('img')?>">	 -->
		</div>
		<div class="sidebar-brand sidebar-brand-sm col-md-13">
			<a href="<?= base_url('') ?>">
				<img  src="<?= base_url('assets/frontend/img/logokarangsaricb.png');?>" width="100%" alt="">
			</a>	
		</div>		
		<?php if ($this->session->userdata('role') === '1') {  ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
					<li><a class="nav-link" href="<?= base_url('sa/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a>
				</li>	
		<?php } elseif ($this->session->userdata('role') === '2') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('a/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
				
				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="#"><i class="fas fa-envelope"></i> <span>Data Request Surat</span></a></li>
				<li><a class="nav-link" href="#"><i class="fas fa-comment-dots"></i> <span>Data Suara Warga</span></a></li>
				<li><a class="nav-link" href="#"><i class="fas fa-money-bill-wave"></i> <span>Data Keuangan</span></a></li>
				<li><a class="nav-link" href="<?= base_url('a/berita')?>"><i class="fas fa-file-signature"></i> <span>Data Berita</span></a></li>
				<li><a class="nav-link" href="<?= base_url('a/berita/pending')?>"><i class="fa fa-clock"></i> <span>Data Berita(Pending)</span></a></li>

				<li class="menu-header">Data Lainnya</li>
				<li><a class="nav-link" href="<?= base_url('a/warga')?>"><i class="fas fa-users"></i> <span>Data Warga</span></a></li>
				<li><a class="nav-link" href="<?= base_url('a/user')?>"><i class="fas fa-user-circle"></i> <span>Data User</span></a></li>
				<li><a class="nav-link" href="<?= base_url('a/rt')?>"><i class="fas fa-user-tie"></i> <span>Data RT/RW</span></a></li>
				<li><a class="nav-link" href="<?= base_url('a/jurnalis')?>"><i class="fas fa-file-signature"></i> <span>Data Jurnalis</span></a></li>

				<li class="menu-header">Setting</li>
				<li class="dropdown">
					<a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Pengaturan</span></a>
					<ul class="dropdown-menu">
						<li><a class="nav-link" href="#">Judul</a></li>
						<li><a class="nav-link" href="#">Logo dan Favicon</a></li>
						<li><a class="nav-link" href="#">Slider</a></li>
						<li><a class="nav-link" href="#">Tentang Desa</a></li>
						<li><a class="nav-link" href="#">Profil Desa</a></li>
						<li><a class="nav-link" href="#">Struktur Desa</a></li>
					</ul>
				</li>
				<li><a class="nav-link" href="<?= base_url('a/profile/edit') ?>"><i class="fas fa-user-edit"></i> <span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('a/profile/changepassword') ?>"><i class="fas fa-lock"></i> <span>Ubah Password</span></a></li>
				<li><a class="nav-link" href="<?= base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
			</ul>
		<?php } elseif ($this->session->userdata('role') === '3') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('j/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
				
				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="<?= base_url('j/berita') ?>"><i class="fas fa-file-signature"></i> <span>Data Berita</span></a></li>
				
				<li class="menu-header">Setting</li>
				<li><a class="nav-link" href="<?= base_url('j/profile/edit') ?>"><i class="fas fa-user-edit"></i> <span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('j/profile/changepassword') ?>"><i class="fas fa-lock"></i> <span>Ubah Password</span></a></li>
				<li><a class="nav-link" href="<?= base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
			</ul>
		<?php } elseif ($this->session->userdata('role') === '4') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('rt/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
				
				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="<?= base_url('rt/warga') ?>"><i class="fas fa-users"></i> <span>Data Warga</span></a></li>
				<li><a class="nav-link" href="<?= base_url('rt/rekomendasi') ?>"><i class="fas fa-user-check"></i> <span>Data Rekomendasi Warga</span></a></li>
			
				<li class="menu-header">Setting</li>
				<li><a class="nav-link" href="<?= base_url('rt/profile/edit') ?>"><i class="fas fa-user-edit"></i> <span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('rt/profile/changepassword') ?>"><i class="fas fa-lock"></i> <span>Ubah Password</span></a></li>
				<li><a class="nav-link" href="<?= base_url('auth/logout_rt')?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
			</ul>
		<?php } elseif ($this->session->userdata('role') === '5') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">Dashboard</li>
				<li><a class="nav-link" href="<?= base_url('w/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
				
				<li class="menu-header">Master Data</li>
				<li><a class="nav-link" href="<?= base_url('w/suara-warga') ?>"><i class="fas fa-file-signature"></i> <span>Suara Warga</span></a></li>
				<li><a class="nav-link" href="<?= base_url('w/surat') ?>"><i class="fas fa-envelope"></i> <span>Request Surat</span></a></li>
			
				<li class="menu-header">Setting</li>
				<li><a class="nav-link" href="<?= base_url('w/profile/edit') ?>"><i class="fas fa-user-edit"></i> <span>Edit Profil</span></a></li>
				<li><a class="nav-link" href="<?= base_url('w/profile/changepassword') ?>"><i class="fas fa-lock"></i> <span>Ubah Password</span></a></li>
				<li><a class="nav-link" href="<?= base_url('auth/logout_warga')?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
			</ul>
		<?php } ?>
	</aside>
</div>
