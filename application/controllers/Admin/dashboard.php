<?php 

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/backend/header');	
		$this->load->view('layout/backend/sidebar');
		$this->load->view('page/dashboard');
		$this->load->view('layout/backend/footer');
	}
}

 ?>
