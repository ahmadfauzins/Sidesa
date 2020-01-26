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
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
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
    	if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$data['suara']	 	= $this->db->query("SELECT * FROM suara_warga WHERE user_id='$id'")->result();
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/suara_warga/index', $data);
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
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/suara_warga/add');
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
		$title                  = $this->input->post('title');
		$slug					= slug($this->input->post('title',TRUE));
		$body           		= $this->input->post('body');
		$img 				    = $_FILES['foto'];
		if ($img = '') {
			$img = 'default.png';
		} else {
			$config['upload_path']		= './assets/backend/img/suara-warga';
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
			'user_id'		=> $this->session->userdata('id'),
			'title'			=> $title,
			'slug'			=> $slug,
			'image'			=> $img,
			'body'			=> $body
		);
		
		$this->M_SuaraWarga->insert_data($data, 'suara_warga');
		redirect('w/suara-warga');
	}

	public function edit($id)
	{	
		if ($this->session->userdata('role') === '5') {
			$where = array('id' => $id);
			$data['suara'] = $this->db->query("SELECT * FROM suara_warga WHERE id='$id'")->result();
			$id = $this->session->userdata('id');
			$x['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/suara_warga/edit', $data);
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
		$title              = $this->input->post('title');
		$slug				= slug($this->input->post('title',TRUE));
		$body          		= $this->input->post('body');
		$result				= $this->M_SuaraWarga->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['image'];
			$date	= $data['date'];
		} 
		
		$img 				= $_FILES['foto'];
		if ($img){
			$config['upload_path']		= './assets/backend/img/suara-warga';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$img=$this->upload->data('file_name');
				$this->db->set('image', $img);
				if($foto != 'default.png')
				{
					$target_file	= './assets/backend/img/suara-warga/'.$foto;
					unlink($target_file);
				}
			} else {
				$img = $foto;
			}
		}
	   
		$data = array(
			'title'				=> $title,
			'slug'				=> $slug,
			'image'				=> $img,
			'body'				=> $body,
			'date'				=> $date
		);
		
		$where = array('id' => $id);
		$this->M_SuaraWarga->update_data('suara_warga', $data, $where);
		redirect('w/suara-warga');     
	}

	public function delete($id)
    {
		$result				= $this->M_SuaraWarga->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['image'];

			if($foto != 'default.png')
			{
				$target_file	= './assets/backend/img/suara-warga/'.$foto;
				unlink($target_file);
			}
		}
		$where = array('id' => $id);
		$this->M_SuaraWarga->delete_data($where, 'suara_warga');
		redirect('w/suara-warga');     
    }
}


/* End of file SuaraWarga_Controller.php */
/* Location: ./application/controllers/SuaraWarga_Controller.php */
