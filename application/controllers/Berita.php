<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Berita
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

class Berita extends CI_Controller
{
    
  	public function __construct()
  	{
    	parent::__construct();
  	}

 	public function index()
  	{

		$data['isi']= 'pages/berita/berita_desa.php';

		$this->load->view('index.php',$data);
	}

	public function berita()
	{
		$this->load->view('pages/berita');
	}

	public function all()
	{
		
		$data['isi']= 'pages/berita/info_berita.php';

		$this->load->view('index_berita.php',$data);
	}

}


/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
