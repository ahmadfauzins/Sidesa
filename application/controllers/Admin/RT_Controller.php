<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller RT_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 *
 */

class RT_Controller extends CI_Controller
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
			$this->load->helper('text');
			
			$data['rt'] = $this->M_Rt->get_data()->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/rt/index', $data);
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
			$this->load->view('pages/admin/rt/add');
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
		$level                  = $this->input->post('rt');
		$img 				    =$_FILES['foto'];
		if ($img='') {}else{
			$config['upload_path']		= './assets/backend/img/foto_rt';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				$img= 'default.png';
			} else {
				$img=$this->upload->data('file_name');
			}
		}
		$data= array(
			'role'			=> 4,
			'name'			=> $name,
			'email'			=> $email,
			'password'		=> sha1($password),
			'img'			=> $img,
			'level'			=> $level
		);
		
		$this->M_Rt->insert_data($data, 'rt');
		redirect('a/rt');
	}
	
	public function edit($id)
	{
		if ($this->session->userdata('role') === '2') {
			$where = array('id' => $id);
			$data['rt'] = $this->db->query("SELECT * FROM rt WHERE id='$id'")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/rt/edit', $data);
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
		$id					= $this->input->post('id');
		$name				= $this->input->post('name');
		$email           	= $this->input->post('email');
		$password			= $this->input->post('password');
		$level				= $this->input->post('rt');
		$result				= $this->M_Rt->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['img'];
		} 
		
		$img 				= $_FILES['foto'];
		if ($img){
			$config['upload_path']		= './assets/backend/img/foto_rt';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$img=$this->upload->data('file_name');
				$this->db->set('img', $img);
				if($foto != NULL)
				{
					$target_file	= './assets/backend/img/foto_rt/'.$foto;
					unlink($target_file);
				}
			} else {
				echo $this->upload->display_errors();
			}
		}
	   
		$data = array(
			'email'			=> $email,
			'name'			=> $name,
			'password'		=> sha1($password),
			'img'			=> $img,
			'level'         => $level
		);
		
		$where = array('id' => $id);
		$this->M_Rt->update_data('rt', $data, $where);
		redirect('a/rt');     
	}

	public function delete($id)
    {
		$result				= $this->M_Rt->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['img'];

			if($foto != 'default.png')
			{
				$target_file	= './assets/backend/img/foto_rt/'.$foto;
				unlink($target_file);
			}
		}
		$where = array('id' => $id);
		$this->M_Rt->delete_data($where, 'rt');
		redirect('a/rt');     
    }
}


/* End of file RT_Controller.php */
/* Location: ./application/controllers/RT_Controller.php */
