<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Warga_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 *
 */

class Warga_Controller extends CI_Controller
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
			$data['warga'] = $this->M_Warga->get_data()->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/warga/index', $data);
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
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/warga/add');
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
		$this->load->model('M_Multiple');
		$warga_data							= array();
		$user_data							= array();
		$warga_data['nik']					= $this->input->post('nik');
		$warga_data['name']					= $this->input->post('name');
		$warga_data['tempat_lahir']			= $this->input->post('tempat');
		$warga_data['tgl_lahir']			= $this->input->post('tgl');
		$warga_data['jk']					= $this->input->post('jenis_kelamin');
		$warga_data['blok']					= $this->input->post('blok');
		$warga_data['rt']					= $this->input->post('rt');
		$warga_data['rw']					= $this->input->post('rw');
		$warga_data['agama']				= $this->input->post('agama');
		$warga_data['status_perkawinan']    = $this->input->post('status_perkawinan');
		$warga_data['pekerjaan']        	= $this->input->post('pekerjaan');
		$warga_data['img']			    	=$_FILES['foto'];

		$user_data['role']    				= 5;
		$user_data['nik']    				= $this->input->post('nik');
		$user_data['password']        		= sha1($this->input->post("nik"));
		$user_data['foto']    				= 'default.png';

		if ($warga_data['img'] ='') {}else{
			$config['upload_path']		= './assets/backend/img/foto_warga';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				$warga_data['img'] = 'default.png';
			} else {
				$warga_data['img'] =$this->upload->data('file_name');
			}
		}

		$checking	=$this->M_Multiple->multiple($warga_data, $user_data);
		if ($checking) {
			redirect('a/warga');	
		} else {
			echo "Error";
		}
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '2') {
			$where = array('id' => $id);
			$data['warga'] = $this->db->query("SELECT * FROM warga WHERE id='$id'")->result();
			$x['admin'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/admin/warga/edit', $data);
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
		$nik           		= $this->input->post('nik');
		$name               = $this->input->post('name');
		$tempat          	= $this->input->post('tempat');
		$tgl                = $this->input->post('tgl');
		$jenis_kelamin      = $this->input->post('jenis_kelamin');
		$blok               = $this->input->post('blok');
		$rt             	= $this->input->post('rt');
		$rw              	= $this->input->post('rw');
		$agama              = $this->input->post('agama');
		$status_perkawinan  = $this->input->post('status_perkawinan');
		$pekerjaan          = $this->input->post('pekerjaan');
		$result				= $this->M_Warga->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['img'];
		} 
		
		$img 				= $_FILES['foto'];
		if ($img){
			$config['upload_path']		= './assets/backend/img/foto_warga';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$img=$this->upload->data('file_name');
				$this->db->set('img', $img);
				if($foto != 'default.png')
				{
					$target_file	= './assets/backend/img/foto_warga/'.$foto;
					unlink($target_file);
				}
			} else {
				echo $this->upload->display_errors();
			}
		}
	   
		$data = array(
			'nik'				=> $nik,
			'name'				=> $name,
			'tempat_lahir'		=> $tempat,
			'tgl_lahir'			=> $tgl,
			'jk'				=> $jenis_kelamin,
			'blok'				=> $blok,
			'rt'				=> $rt,
			'rw'				=> $rw,
			'agama'				=> $agama,
			'status_perkawinan'	=> $status_perkawinan,
			'pekerjaan'			=> $pekerjaan,
			'img'				=> $img
		);
		
		$where = array('id' => $id);
		$this->M_Warga->update_data('warga', $data, $where);
		redirect('a/warga');     
	}

	public function delete($id)
    {
		$result				= $this->M_Warga->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['img'];

			if($foto != 'default.png')
			{
				$target_file	= './assets/backend/img/foto_warga/'.$foto;
				unlink($target_file);
			}
		}
		$where = array('id' => $id);
		$this->M_Warga->delete_data($where, 'warga');
		redirect('a/warga');     
    }
}


/* End of file Warga_Controller.php */
/* Location: ./application/controllers/Warga_Controller.php */
