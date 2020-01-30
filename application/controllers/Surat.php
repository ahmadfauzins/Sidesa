<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	}

	public function e_surat()
	{
		// if ($this->session->userdata('role') === '5') {
			// $id = $this->session->userdata('id');
			// $x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			
			$this->load->view('layout/frontend/header');
			$this->load->view('layout/frontend/style');
			$this->load->view('pages/warga/surat/e_surat');
			$this->load->view('layout/frontend/script');
			$this->load->view('layout/frontend/footer');

		// } else {
			// echo "
			// 	<script>
			// 		alert('Access Denied');
			// 		history.go(-1);
			// 	</script>
			// ";
		}
	// }

	
}
?>
