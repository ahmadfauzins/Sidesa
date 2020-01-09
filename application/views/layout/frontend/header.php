 <!-- start navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
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
  </nav>
<!-- end navbar -->
