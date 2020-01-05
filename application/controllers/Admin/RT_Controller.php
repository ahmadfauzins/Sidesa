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
			$data['rt'] = $this->M_Rt->get_data('rt')->result();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar');
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
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar');
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
			$username           	= $this->input->post('username');
            $password               = $this->input->post('password');
            $role                   = $this->input->post('rt');
            $img 				    =$_FILES['foto'];
		    if ($img='') {}else{
                $config['upload_path']		='./assets/backend/img/foto_rt';
			    $config['allowed_types']	='jpg|png|jpeg';

			    $this->load->library('upload',$config);
			    if(!$this->upload->do_upload('foto')){
				    $img= 'default.png';
			    } else {
				    $img=$this->upload->data('file_name');
			    }
		    }
           
            $data= array(
				'name'			=> $name,
				'username'		=> $username,
				'password'		=> sha1($password),
				'img'			=> $img,
				'role'			=> $role
            );

			$this->M_Rt->insert_data($data, 'rt');
            redirect('a/rt');
    }
}


/* End of file RT_Controller.php */
/* Location: ./application/controllers/RT_Controller.php */
