<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_Warga
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    	Ryan Aprianto
 * @link      	https://github.com/Ryan1604/
 *
 */

class M_Warga extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function get_data($id = NULL)
    {
		$this->db->from('warga');
		if ($id != NULL) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
    }
 	// ------------------------------------------------------------------------

  	// ------------------------------------------------------------------------
  	public function insert_data($data,$table)
    {
		$this->db->insert($table,$data);
    }
	// ------------------------------------------------------------------------
	  
	// ------------------------------------------------------------------------
	public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
	}
	// ------------------------------------------------------------------------
	  
	public function check_img($id)
	{
		$this->db->select('*');
		$this->db->from('warga');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query;
	}
	  
	public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
	}

	public function update_data_multiple($id, $nik, $name, $tempat, $tgl, $jenis_kelamin, $blok, $rt, $rw, $agama, $status_perkawinan, $pekerjaan, $img)
    {
        $this->db->set('a.nik'				, $nik);
		$this->db->set('a.name'				, $name);
		$this->db->set('a.tempat_lahir'		, $tempat);
		$this->db->set('a.tgl_lahir'		, $tgl);
		$this->db->set('a.jk'				, $jenis_kelamin);
		$this->db->set('a.blok'				, $blok);
		$this->db->set('a.rt'				, $rt);
		$this->db->set('a.rw'				, $rw);
		$this->db->set('a.agama'			, $agama);
		$this->db->set('a.status_perkawinan', $status_perkawinan);
		$this->db->set('a.pekerjaan'		, $pekerjaan);
		$this->db->set('a.img'				, $img);
		$this->db->where('a.id', $id);
		$this->db->update('warga as a');

		$this->db->set('b.role'				, 5);
		$this->db->set('b.id_warga'			, $id);
		$this->db->set('b.nik'				, $nik);
		$this->db->set('b.password'			, sha1($nik));
		$this->db->where('b.id_warga', $id);
		$this->db->update('user as b');
	}
}

/* End of file M_Rt_model.php */
/* Location: ./application/models/M_Rt_model.php */
