	<!doctype html>
<html lang="en">
	<head>
	<title>WEB DESA KARANGSARI</title>
	<?php $this->load->view('layout/frontend/style'); ?>  
	</head>
<body>
	<?php $this->load->view('layout/frontend/header');




	//	  ISI KONTEN DINAMIS

	//   $this->load->view($isi);
	  $this->load->view('layout/frontend/slider');
	  $this->load->view('layout/frontend/berita');
	  $this->load->view('layout/frontend/content');
	  
	//	  ISI KONTEN DINAMIS
	



	  $this->load->view('layout/frontend/footer');
      $this->load->view('layout/frontend/script');?>
	</body>
</html>
