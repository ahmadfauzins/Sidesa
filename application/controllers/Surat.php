<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	}

	public function e_surat()
	{
		
			$data['isi']= 'pages/warga/surat/e_surat.php';
			$this->load->view('index.php', $data);
			
	}	

	public function request_surat()
	{
		if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$data['surat']	 	= $this->db->query("SELECT * FROM warga 
													INNER JOIN user ON warga.id=user.id_warga
													INNER JOIN surat ON user.id=surat.user_id 
													WHERE surat.user_id='$id'")->result();
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			
		} else {
		redirect('');
		}
	}


	
}
?>
