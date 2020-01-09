	<!-- start carousel -->
	
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="welcome position-absolute text-center">
                        <h1 class="judul font-weight-bold">Selamat Datang </h1>
                        <h3 class="teks font-weight-lighter">Di Website Resmi Desa A </h3>
                        <button type="button" class="btn mt-5 btn-color">
                            <span class="mx-2 teks font-weight-lighter">Learn More</span>
                        </button>
                    </div>
                </div>
                <img src="<?php echo base_url('assets/frontend/assets/img/Mask Group 1.png');?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="welcome position-absolute text-center">
                        <h1 class="judul font-weight-bold">Selamat Datang </h1>
                        <h3 class="teks font-weight-lighter">Di Website Resmi Desa A </h3>
                        <button type="button" class="btn mt-5 btn-color">
                            <span class="mx-2 teks font-weight-lighter">Learn More</span>
                        </button>
                    </div>
                </div>
                <img src="<?php echo base_url('assets/frontend/assets/img/Mask Group 1.png');?>" class="d-block w-100" alt="...">
            </div>
		</div>
		
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <img src="<?php echo base_url('assets/frontend/assets/icon/ic_arrow_left.png');?>" alt="">
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <img src="<?php echo base_url('assets/frontend/assets/icon/ic_arrow_right.png');?>" alt="">
            <span class="sr-only">Next</span>
        </a>
    </div>
	<!-- end carousel -->
	

	
		<!-- start info keuangan -->
		<?php $this->load->view('layout/frontend/berita');?>
		<!-- end info keuangan -->

		<!-- start content -->
	
		<?php $this->load->view('layout/frontend/content');?>
	    <!-- end content -->
