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
			redirect('auth');	
		}
  	}

  	public function index()
 	{
		if ($this->session->userdata('role') === '1') {
			$this->load->view('superadmin/dashboard');
		 } else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";	
		 }
	}
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
