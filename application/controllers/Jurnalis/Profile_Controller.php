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
		if ($this->session->userdata('role') === '3') {
			$data['jurnalis'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $data);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/jurnalis/profile/edit', $data);
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
		$result				= $this->M_Jurnalis->check_img($id);
		if($result->num_rows() > 0)
		{
			$data		= $result->row_array();
			$password	= $data['password'];
			$foto		= $data['img'];
		} 
		
		$img 				= $_FILES['foto'];
		if ($img = '') {
			$img = 'default.png';
		} else {
			$config['upload_path']		= './assets/backend/img/avatar';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']			= 2048;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$img=$this->upload->data('file_name');
				$this->db->set('img', $img);
				if($foto != 'default.png')
				{
					$target_file	= './assets/backend/img/avatar/'.$foto;
					unlink($target_file);
				}
			} else {
				$img = $foto;
			}
		}
	   
		$data = array(
			'email'			=> $email,
			'name'			=> $name,
			'password'		=> $password,
			'img'			=> $img,
			'role'          => '3'
		);
		
		$where = array('id' => $id);
		$this->M_Jurnalis->update_data('auth', $data, $where);
		redirect('j/profile/edit');     
	}

	public function changepassword()
	{
		if ($this->session->userdata('role') === '3') {
			$data['jurnalis'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->form_validation->set_rules('lama', 'Current Password', 'trim|required');
			$this->form_validation->set_rules('baru', 'New Password', 'trim|required|min_length[3]|matches[konfirmasi]');
			$this->form_validation->set_rules('konfirmasi', 'Confirm New Password', 'trim|required|min_length[3]|matches[baru]');
			

			if ($this->form_validation->run()  == FALSE) {
				$this->load->view('layout/backend/header');
				$this->load->view('layout/backend/topbar', $data);
				$this->load->view('layout/backend/sidebar');
				$this->load->view('pages/jurnalis/profile/changepassword', $data);
				$this->load->view('layout/backend/footer');
			} else {
				$lama		= $this->input->post('lama');
				$baru		= $this->input->post('baru');
				$lama_hash 	= sha1($lama);
				if ($lama_hash == $data['jurnalis']['password']) {
					if ($lama == $baru) {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same!</div>');
						redirect('j/profile/changepassword');
					} else {
						$password_hash = sha1($baru);

						$this->db->set('password', $password_hash);
						$this->db->where('id', $this->session->userdata('id'));
						$this->db->update('auth');

						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed</div>');
						redirect('j/profile/changepassword');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
					redirect('j/profile/changepassword');
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
