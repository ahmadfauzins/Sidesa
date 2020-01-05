<?php

class Data_warga extends CI_Controller
{
    public function index()
    {
        $data['warga'] = $this->M_desa->get_data('population')->result();
        $this->load->view('page_admin/templates_admin/header');
        $this->load->view('page_admin/templates_admin/sidebar');
        $this->load->view('page_admin/admin/data_warga', $data);
        $this->load->view('page_admin/templates_admin/footer');
    }
    public function tambah_warga()
    {
        $this->load->view('page_admin/templates_admin/header');
        $this->load->view('page_admin/templates_admin/sidebar');
        $this->load->view('page_admin/admin/form_tambah_warga');
        $this->load->view('page_admin/templates_admin/footer');
    }
    public function tambah_warga_aksi()
    {
            $nik                    = $this->input->post('nik');
            $nama_lengkap           = $this->input->post('nama_lengkap');
            $ttl                    = $this->input->post('ttl');
            $jenis_kelamin          = $this->input->post('jenis_kelamin');
            $blok                   = $this->input->post('blok');
            $rt                     = $this->input->post('rt');
            $desa                   = $this->input->post('desa');
            $kecamatan              = $this->input->post('kecamatan');
            $kabupaten              = $this->input->post('kabupaten');
            $agama                  = $this->input->post('agama');
            $status_perkawinan      = $this->input->post('status_perkawinan');
            $pekerjaan              = $this->input->post('pekerjaan');
            $kewarganegaraan        = $this->input->post('kewarganegaraan');
            $foto_warga 				    =$_FILES['foto_warga'];
		    if ($foto_warga='') {}else{
                $config['upload_path']		='./assets/foto_warga';
			    $config['allowed_types']	='jpg|png|jpeg';

			    $this->load->library('upload',$config);
			    if(!$this->upload->do_upload('foto_warga')){
				    $foto_warga= 'default.jpg';
			    } else {
				    $foto_warga=$this->upload->data('file_name');
			    }
		    }
           
            $data= array(
                'nik      '              => $nik,
                'nama_lengkap'           => $nama_lengkap,
                'ttl'                    => $ttl,
                'jenis_kelamin'          => $jenis_kelamin,
                'blok'                   => $blok,
                'rt'                     => $rt,
                'desa'                   => $desa,
                'kecamatan'              => $kecamatan,
                'kabupaten'              => $kabupaten,
                'agama'                  => $agama,
                'status_perkawinan'      => $status_perkawinan,
                'pekerjaan'              => $pekerjaan,
                'kewarganegaraan'        => $kewarganegaraan,
                'foto_warga'             => $foto_warga
            );

            $this->M_desa->insert_data($data, 'population');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Warga</strong> Success To add.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('page_admin/admin/data_warga');
    }
    public function update_warga($id)
    {
      $where = array('id_warga' => $id);
      $data['warga'] = $this->db->query("SELECT * FROM population WHERE id_warga='$id'")->result();

      $this->load->view('page_admin/templates_admin/header');
      $this->load->view('page_admin/templates_admin/sidebar');
      $this->load->view('page_admin/admin/form_update_warga', $data);
      $this->load->view('page_admin/templates_admin/footer');     
    }
    public function update_warga_aksi()
    {
      $id_warga                = $this->input->post('id_warga');
      $nik                    = $this->input->post('nik');
      $nama_lengkap           = $this->input->post('nama_lengkap');
      $ttl                    = $this->input->post('ttl');
      $jenis_kelamin          = $this->input->post('jenis_kelamin');
      $blok                   = $this->input->post('blok');
      $rt                     = $this->input->post('rt');
      $desa                   = $this->input->post('desa');
      $kecamatan              = $this->input->post('kecamatan');
      $kabupaten              = $this->input->post('kabupaten');
      $agama                  = $this->input->post('agama');
      $status_perkawinan      = $this->input->post('status_perkawinan');
      $pekerjaan              = $this->input->post('pekerjaan');
      $kewarganegaraan        = $this->input->post('kewarganegaraan');
      $foto_warga 				    =$_FILES['foto_warga'];
  if ($foto_warga){
      $config['upload_path']		='./assets/foto_warga';
      $config['allowed_types']	='jpg|png|jpeg';

    $this->load->library('upload',$config);
    if($this->upload->do_upload('foto_warga')){
      $foto_warga=$this->upload->data('file_name');
      $this->db->set('foto_warga', $foto_warga);
    }else{
      echo $this->upload->display_errors();
    }
  }
     
      $data= array(
        'nik      '              => $nik,
        'nama_lengkap'           => $nama_lengkap,
        'ttl'                    => $ttl,
        'jenis_kelamin'          => $jenis_kelamin,
        'blok'                   => $blok,
        'rt'                     => $rt,
        'desa'                   => $desa,
        'kecamatan'              => $kecamatan,
        'kabupaten'              => $kabupaten,
        'agama'                  => $agama,
        'status_perkawinan'      => $status_perkawinan,
        'pekerjaan'              => $pekerjaan,
        'kewarganegaraan'        => $kewarganegaraan
      );

      $where = array('id_warga' => $id_warga);
      $this->M_desa->update_data('population', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Warga</strong> Success To Update.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('page_admin/admin/data_warga');     

    }
    public function detail_warga($id)
    {
      $data['detail'] = $this->M_desa->take_id_warga($id);
      $this->load->view('page_admin/templates_admin/header');
      $this->load->view('page_admin/templates_admin/sidebar');
      $this->load->view('page_admin/admin/detail_warga', $data);
      $this->load->view('page_admin/templates_admin/footer');     
    }
    public function delete_warga($id)
    {
      $where = array('id_warga' => $id);
      $this->M_desa->delete_data($where, 'population');
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Warga</strong> Success To Delete.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('page_admin/admin/data_warga');     
    }
}
