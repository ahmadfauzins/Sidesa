<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Jurnalis_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 *
 */

class Jurnalis_Controller extends CI_Controller
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
			$data['jurnalis'] = $this->M_Jurnalis->get_data()->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/jurnalis/index', $data);
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
			$this->load->view('pages/admin/jurnalis/add');
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
		$name                   = $this->input->post('name');
		$email           		= $this->input->post('email');
		$password               = $this->input->post('password');
		$img 				    =$_FILES['foto'];
		if ($img = '') {
			$img = 'default.png';
		} else {
			$config['upload_path']		= './assets/backend/img/avatar';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$img=$this->upload->data('file_name');
			} else {
				$img = 'default.png';	
			}
		}
		$data= array(
			'name'			=> $name,
			'email'			=> $email,
			'password'		=> sha1($password),
			'img'			=> $img,
			'role'			=> '3'
		);
		
		$this->M_Jurnalis->insert_data($data, 'auth');
		redirect('a/jurnalis');
	}	

	public function delete($id)
    {
		$result				= $this->M_Jurnalis->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['img'];

			if($foto != 'default.png')
			{
				$target_file	= './assets/backend/img/avatar/'.$foto;
				unlink($target_file);
			}
		}
		$where = array('id' => $id);
		$this->M_Jurnalis->delete_data($where, 'auth');
		redirect('a/jurnalis');     
    }
}


/* End of file RT_Controller.php */
/* Location: ./application/controllers/RT_Controller.php */
