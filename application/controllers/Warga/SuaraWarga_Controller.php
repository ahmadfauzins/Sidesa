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
 	}

    public function index()
  	{
    	if ($this->session->userdata('role') === '5') {
			$data['suara'] = $this->db->query("SELECT * FROM suara_warga")->result();
			$x['warga'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
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
			$x['warga'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
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
			$config['upload_path']		= './assets/backend/img/artikel';
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
}


/* End of file SuaraWarga_Controller.php */
/* Location: ./application/controllers/SuaraWarga_Controller.php */
