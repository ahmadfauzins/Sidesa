 <!-- start navbar -->
 <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container">
            <div class="btn-group btn-group-toggle btn-navbar">
				<a class="navbar-brand col-md-10" href="<?php echo base_url('');?>">
				<img  src="<?php echo base_url('assets/frontend/img/logokarangsari.png');?>" width="100%" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="container collapse navbar-collapse" id="navbarNav">	
                <ul class="navbar-nav col-md-12">
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">PROFIL</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">SUARA</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">LPM</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">KONTAK</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">SUREL</a>
					</li>

					<button class="btn btn-light col-md-0 rounded-2"><a href="<?= base_url('/Auth');?>">
                    <img src="<?php echo base_url('assets/frontend/assets/icon/search.png');?>" alt="" class="px-3">
					</button>

					<button class="btn col-md-2 rounded-2 btn-color nav-item mr-3"><a href="<?= base_url('/Auth');?>">
                    <span>E-SURAT</span></a>
					</button>
				</ul>
			</div>
        </div>
  </nav> -->
 <!-- end navbar -->
 <header style="box-shadow: 2px 2px 2px rgba(0,0,0,0.2);">
 	<div class="header-area ">
 		<div id="sticky-header" class="main-header-area">
 			<div class="container-fluid">
 				<div class="header_bottom_border">
 					<div class="row align-items-center">
 						<div class="col-xl-3 col-lg-2">
 							<div class="logo">
 								<a href="<?php echo base_url()?>">
 									<img src="<?php echo base_url('assets/assets/img/img/logokarangsaricopyku.png');?>"
 										width="90%" alt="">
 								</a>
 							</div>
 						</div>
 						<div class="col-xl-6 col-lg-6">
 							<div class="main-menu  d-none d-lg-block">
 								<nav>
 									<ul id="navigation">
 										<li><a class="active" href="<?php echo base_url()?>">Beranda</a></li>
 										<li><a href="#">Profil Desa</a></li>
 										<li><a class="" href="#">Layanan Desa <i
 													class="ti-angle-down"></i></a>
 											<ul class="submenu">
 												<li><a href="<?= base_url('w/e_surat')?>"> E-Surat (Online) </a></li>
 												<li><a href="#">E-Profile Warga</a></li>
 											</ul>
 										</li>

 										<li><a href="#">Berita Desa<i class="ti-angle-down"></i></a>
 											<ul class="submenu">
 												<li><a href="<?= base_url('berita/all')?>">Berita Warga</a></li>
 												<li><a href="#">Suara Warga</a></li>
 											</ul>
 										</li>
 										<li><a href="#">Data Desa <i class="ti-angle-down"></i></a>
 											<ul class="submenu">
 												<li><a href="#">Data Penduduk</a></li>
												 <li><a href="#">Data Ekonomi</a></li>												 
											 </ul>											 
											 
											 <div class="d-block d-lg-none"><a href="<?= base_url('login')?>" style="color: blue;"><i class="fa fa-user"></i>Login</a></div>
										
									 </ul>
									 
 								</nav>
 							</div>
 						</div>
 						<div class="d-none d-lg-block">
 							<div class="social_wrap d-flex align-items-center justify-content-end">
 								<div class="number">
 									<p> <i class="fa fa-phone"></i> +(62) 821 2856 6201</p>
 								</div>
 								<div class="social_links d-none d-xl-block">
 									<ul>
 										<li><a href="<?= base_url('login')?>"> <i class="fa fa-user"></i> </a></li>
 										<li><a data-toggle="modal" data-target="#exampleModalCenter" href="#">
 												<i class="fa fa-search"></i></a></li>
 									</ul>
 								</div>
 							</div>
 						</div>						 
 						</div>
 						<div class="col-12 ">
 							<div style="margin-top: -15px; margin-right:-10px;" class="mobile_menu -block d-lg-none"></div>
						 </div>
						 
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </header>
 
