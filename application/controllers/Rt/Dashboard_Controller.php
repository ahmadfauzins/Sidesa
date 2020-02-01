<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Dashboard_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 *
 */

class Dashboard_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in' !== TRUE))
		{
			redirect('auth');	
		}
	}
	
	public function index()
	{
		if ($this->session->userdata('role') === '4') {
			$data['rt'] = $this->db->get_where('rt', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$data);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/rt/dashboard');
			$this->load->view('layout/backend/footer');
		} else {
			redirect('');
		}
	}
}


/* End of file Dashboard_Controller.php */
/* Location: ./application/controllers/Dashboard_Controller.php */
