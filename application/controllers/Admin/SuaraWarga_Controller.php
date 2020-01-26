<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller SuaraWarga_Controller
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

class SuaraWarga_Controller extends CI_Controller
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
			$id = $this->session->userdata('id');
			$x['suara']	 	= $this->db->query("SELECT * FROM warga 
													INNER JOIN user ON warga.id=user.id_warga
													INNER JOIN suara_warga ON user.id=suara_warga.user_id ")->result();
			$data['admin'] = $this->db->get_where('auth', ['id' => $id])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $data);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/suara-warga/index',$x);
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


/* End of file SuaraWarga_Controller.php */
/* Location: ./application/controllers/SuaraWarga_Controller.php */
