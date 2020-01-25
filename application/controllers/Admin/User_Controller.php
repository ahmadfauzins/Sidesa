<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller User_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan16404/
 *
 */

class User_Controller extends CI_Controller
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
		if ($this->session->userdata('role') === '2') {
			$data['user'] = $this->M_User->get_data()->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/user/index', $data);
			$this->load->view('layout/backend/footer');
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


/* End of file User_Controller.php */
/* Location: ./application/controllers/User_Controller.php */
