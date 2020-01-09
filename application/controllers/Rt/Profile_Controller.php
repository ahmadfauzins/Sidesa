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
		if ($this->session->userdata('role') === '4') {
			$data['rt'] = $this->db->get_where('rt', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $data);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/rt/profile/edit', $data);
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
		$result				= $this->M_Rt->check_img($id);
		if($result->num_rows() > 0)
		{
			$data		= $result->row_array();
			$password	= $data['password'];
			$foto		= $data['img'];
			$level		= $data['level'];
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
			'role'			=> 4,
			'email'			=> $email,
			'name'			=> $name,
			'password'		=> $password,
			'img'			=> $img,
			'level'         => $level
		);
		
		$where = array('id' => $id);
		$this->M_Rt->update_data('rt', $data, $where);
		redirect('rt/dashboard');     
	}

	public function changepassword()
	{
		if ($this->session->userdata('role') === '4') {
			$data['rt'] = $this->db->get_where('rt', ['id' => $this->session->userdata('id')])->row_array();
			
			$this->form_validation->set_rules('lama', 'Current Password', 'trim|required');
			$this->form_validation->set_rules('baru', 'New Password', 'trim|required|min_length[3]|matches[konfirmasi]');
			$this->form_validation->set_rules('konfirmasi', 'Confirm New Password', 'trim|required|min_length[3]|matches[baru]');
			

			if ($this->form_validation->run()  == FALSE) {
				$this->load->view('layout/backend/header');
				$this->load->view('layout/backend/topbar', $data);
				$this->load->view('layout/backend/sidebar');
				$this->load->view('pages/rt/profile/changepassword', $data);
				$this->load->view('layout/backend/footer');
			} else {
				$lama		= $this->input->post('lama');
				$baru		= $this->input->post('baru');
				$lama_hash 	= sha1($lama);
				if ($lama_hash == $data['rt']['password']) {
					if ($lama == $baru) {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same!</div>');
						redirect('rt/profile/changepassword');
					} else {
						$password_hash = sha1($baru);

						$this->db->set('password', $password_hash);
						$this->db->where('id', $this->session->userdata('id'));
						$this->db->update('rt');

						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed</div>');
						redirect('rt/profile/changepassword');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
					redirect('rt/profile/changepassword');
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
