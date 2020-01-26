<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Keuangan_Controller
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

class Keuangan_Controller extends CI_Controller
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
			$data['keuangan'] = $this->M_Keuangan->get_data()->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/keuangan/index', $data);
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
		if ($this->session->userdata('role') === '2') {
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/keuangan/add');
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
		$jenis_keuangan         = $this->input->post('jenis_keuangan');
		$type           		= $this->input->post('type');
		$jumlah                 = $this->input->post('jumlah');
		$date                   = $this->input->post('date');
		
		$data= array(
			'jenis_keuangan'	=> $jenis_keuangan,
			'type'				=> $type,
			'jumlah'			=> $jumlah,
			'date'				=> $date
		);
		
		$this->M_Keuangan->insert_data($data, 'keuangan');
		redirect('a/keuangan');
	}

	public function edit($id)
	{
		if ($this->session->userdata('role') === '2') {
			$where = array('id' => $id);
			$data['keuangan'] = $this->db->query("SELECT * FROM keuangan WHERE id='$id'")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/keuangan/edit', $data);
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

	public function update()
	{
		$id						= $this->input->post('id');
		$jenis_keuangan         = $this->input->post('jenis_keuangan');
		$type           		= $this->input->post('type');
		$jumlah                 = $this->input->post('jumlah');
		$date                   = $this->input->post('date');
	   
		$data= array(
			'jenis_keuangan'	=> $jenis_keuangan,
			'type'				=> $type,
			'jumlah'			=> $jumlah,
			'date'				=> $date
		);
		
		$where = array('id' => $id);
		$this->M_Keuangan->update_data('keuangan', $data, $where);
		redirect('a/keuangan');
	}

	public function delete($id)
    {
		$this->db->delete('keuangan', array('id' => $id));
		redirect('a/keuangan');     
    }
}


/* End of file Keuangan_Controller.php */
/* Location: ./application/controllers/Keuangan_Controller.php */
