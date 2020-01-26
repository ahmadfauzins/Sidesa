<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Surat_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Surat_Controller extends CI_Controller
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
		if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$data['surat']	 	= $this->db->query("SELECT * FROM warga 
													INNER JOIN user ON warga.id=user.id_warga
													INNER JOIN surat ON user.id=surat.user_id 
													WHERE surat.user_id='$id'")->result();
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/surat/index', $data);
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
		if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$data['surat']	 	= $this->db->query("SELECT * FROM warga 
													INNER JOIN user ON warga.id=user.id_warga
													INNER JOIN surat ON user.id=surat.user_id 
													WHERE surat.user_id='$id'")->result();
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/surat/add', $data);
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
		$type              	 	= $this->input->post('type');
		$message                = $this->input->post('message');

		$data= array(
			'user_id'		=> $this->session->userdata('id'),
			'type'			=> $type,
			'message'		=> $message
		);
		
		$this->M_Surat->insert_data($data, 'surat');
		redirect('w/surat');
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$data['surat']	 	= $this->db->query("SELECT * FROM warga 
													INNER JOIN user ON warga.id=user.id_warga
													INNER JOIN surat ON user.id=surat.user_id 
													WHERE surat.user_id='$id'")->result();
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/surat/edit', $data);
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
		$id              	 	= $this->input->post('id');
		$type              	 	= $this->input->post('type');
		$message                = $this->input->post('message');

		$data= array(
			'user_id'		=> $this->session->userdata('id'),
			'type'			=> $type,
			'message'		=> $message
		);
		
		$where = array('id' => $id);
		$this->M_Surat->update_data('surat', $data, $where);
		redirect('w/surat');
	}

	public function delete($id)
    {
		$this->db->delete('surat', array('id' => $id));
		redirect('w/surat');     
    }
}


/* End of file Surat_Controller.php */
/* Location: ./application/controllers/Surat_Controller.php */
