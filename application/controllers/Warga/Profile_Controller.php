<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Profile_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604/
 */

class Profile_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in' !== TRUE)) 
		{
			redirect('auth');	
		}
  	}

	public function edit()
	{
		if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$data['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $data);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/warga/profile/edit', $data);
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
		$nik 	          	= $this->input->post('nik');
		$result				= $this->M_User->check_img($id);
		if($result->num_rows() > 0)
		{
			$data		= $result->row_array();
			$password	= $data['password'];
			$foto		= $data['foto'];
		}

		$img 				= $_FILES['foto'];
		if ($img){
			$config['upload_path']		= './assets/backend/img/foto_user';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$img=$this->upload->data('file_name');
				$this->db->set('foto', $img);
				if($foto != 'default.png')
				{
					$target_file	= './assets/backend/img/foto_user/'.$foto;
					unlink($target_file);
				}
			} else {
				$img = $foto;
			}
		}
	   
		$data = array(
			'role'			=> 5,
			'id_warga'		=> $this->session->userdata('id_warga'),
			'nik'			=> $nik,
			'password'		=> $password,
			'foto'			=> $img
		);
		
		$where = array('id' => $this->session->userdata('id'));
		$this->M_User->update_data('user', $data, $where);
		redirect('w/profile/edit');     
	}

	public function changepassword()
	{
		if ($this->session->userdata('role') === '5') {
			$id = $this->session->userdata('id');
			$data['warga']	 		= $this->db->query("SELECT * FROM user INNER JOIN warga ON user.id_warga=warga.id WHERE user.id='$id'")->row_array();

			$this->form_validation->set_rules('lama', 'Current Password', 'trim|required');
			$this->form_validation->set_rules('baru', 'New Password', 'trim|required|min_length[3]|matches[konfirmasi]');
			$this->form_validation->set_rules('konfirmasi', 'Confirm New Password', 'trim|required|min_length[3]|matches[baru]');
			

			if ($this->form_validation->run()  == FALSE) {
				$this->load->view('layout/backend/header');
				$this->load->view('layout/backend/topbar', $data);
				$this->load->view('layout/backend/sidebar');
				$this->load->view('pages/warga/profile/changepassword', $data);
				$this->load->view('layout/backend/footer');
			} else {
				$lama		= $this->input->post('lama');
				$baru		= $this->input->post('baru');
				$lama_hash 	= sha1($lama);
				if ($lama_hash == $data['warga']['password']) {
					if ($lama == $baru) {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same!</div>');
						redirect('w/profile/changepassword');
					} else {
						$password_hash = sha1($baru);

						$this->db->set('password', $password_hash);
						$this->db->where('id', $this->session->userdata('id'));
						$this->db->update('user');

						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed</div>');
						redirect('w/profile/changepassword');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
					redirect('w/profile/changepassword');
				}
			}
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


/* End of file Profile_Controller.php */
/* Location: ./application/controllers/Profile_Controller.php */
