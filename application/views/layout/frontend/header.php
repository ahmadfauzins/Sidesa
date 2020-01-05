
 <!-- start navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/assets/assets/icon/logo.png');?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#">PROFIL DESA</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#">SUARA RAKYAT</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#">LPM</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#">KONTAK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SUREL</a>
                    </li>
                </ul>
            </div>
            <div class="btn-group btn-group-toggle btn-navbar" data-toggle="buttons">
                <button class="btn btn-light rounded-0 p-2 tombol">
                    <img src="<?php echo base_url('assets/assets/assets/icon/search.png');?>" alt="" class="px-3">
                </button>
                <button type ="button" class="btn rounded-0 btn-color tombol"><a href="<?= base_url();?>auth">
                    <span>LOGIN</span></a>
                </button>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
