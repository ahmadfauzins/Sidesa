<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Auth
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604/
 *
 */

class Dashboard_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in' !== TRUE)) 
		{
			redirect('login');	
		}
  	}

  	public function index()
 	{
		if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/dashboard');
			$this->load->view('layout/backend/footer');
		 } else {
			redirect('');
		 }
	}
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
