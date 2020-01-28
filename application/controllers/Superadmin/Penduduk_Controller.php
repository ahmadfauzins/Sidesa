<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Penduduk_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 * @param     ...
 * @return    ...
 *
 */

class Penduduk_Controller extends CI_Controller
{
    
 	public function __construct()
  	{
    	parent::__construct();
  	}

  	public function index()
  	{
    	if ($this->session->userdata('role') === '1') {
			$data['penduduk'] = $this->M_Warga->get_data()->result();
			$x['superadmin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/superadmin/penduduk/index', $data);
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


/* End of file Penduduk_Controller.php */
/* Location: ./application/controllers/Penduduk_Controller.php */
