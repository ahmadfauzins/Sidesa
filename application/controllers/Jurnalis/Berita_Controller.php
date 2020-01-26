<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Berita_Controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Ryan Aprianto
 * @link      https://github.com/Ryan1604
 *
 */

class Berita_Controller extends CI_Controller
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
		if ($this->session->userdata('role') === '3') {
			$this->load->helper('text');

			$id = $this->session->userdata('id');
			$data['jurnalis'] = $this->db->query("SELECT * FROM artikel WHERE user_id='$id'")->result();
			$x['jurnalis'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar',$x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/jurnalis/berita/index', $data);
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
		if ($this->session->userdata('role') === '3') {
			$x['jurnalis'] = $this->db->get_where('auth', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('layout/backend/header');
			$this->load->view('layout/backend/topbar', $x);
			$this->load->view('layout/backend/sidebar');
			$this->load->view('pages/jurnalis/berita/add');
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
		$type           		= $this->input->post('type');
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
			'type'			=> $type,
			'image'			=> $img,
			'body'			=> $body
		);
		
		$this->M_Artikel->insert_data($data, 'artikel');
		redirect('j/berita');
	}

	public function delete($id)
    {
		$result				= $this->M_Artikel->check_img($id);
		if($result->num_rows() > 0)
		{
			$data	= $result->row_array();
			$foto	= $data['image'];

			if($foto != 'default.png')
			{
				$target_file	= './assets/backend/img/artikel/'.$foto;
				unlink($target_file);
			}
		}
		$where = array('id' => $id);
		$this->M_Artikel->delete_data($where, 'artikel');
		redirect('j/berita');     
    }
}


/* End of file Berita_Controller.php */
/* Location: ./application/controllers/Berita_Controller.php */
