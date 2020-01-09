<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Rekomendasi_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 *
 */

class Rekomendasi_Controller extends CI_Controller
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
			$level = $this->session->userdata('level');
			$data['warga'] = $this->db->query("SELECT * FROM warga INNER JOIN rekomendasi ON warga.id = rekomendasi.id_warga WHERE rt='$level'")->result();
			$x['rt'] = $this->db->get_where('rt', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/rt/rekomendasi/index', $data);
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

	public function add()
	{
		if ($this->session->userdata('role') === '4') {
			$level = $this->session->userdata('level');
			$data['warga'] = $this->db->query("SELECT * FROM warga WHERE rt='$level'")->result();
			$x['rt'] = $this->db->get_where('rt', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/rt/rekomendasi/add',$data);
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

	public function insert()
    {
		$warga                  = $this->input->post('warga');
		$ket	           		= $this->input->post('ket');
		$data= array(
			'id_warga'		=> $warga,
			'keterangan'	=> $ket
		);
		
		$this->M_Rekomendasi->insert_data($data, 'rekomendasi');
		redirect('rt/rekomendasi');
	}

	public function delete($id)
    {
		$where = array('id' => $id);
		$this->M_Rekomendasi->delete_data($where, 'rekomendasi');
		redirect('rt/rekomendasi');  
	}   

}


/* End of file Rekomendasi_Controller.php */
/* Location: ./application/controllers/Rekomendasi_Controller.php */
